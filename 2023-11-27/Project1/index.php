<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="manifest" href="manifest.php">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    /* Added styles for layout */
    .content {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    label {
      display: inline-block;
      width: 150px; /* Adjust the width as needed */
    }

    input {
      width: 200px; /* Adjust the width as needed */
    }
  </style>
  <script>
    $(document).ready(function () {
      $("#answersForm").submit(function (event) {
        // Prevent the default form submission
        event.preventDefault();

        // Get form data
        var formData = $(this).serialize();

        // AJAX request to submit the form data
        $.ajax({
          type: "POST",
          url: "process_answers.php", // Replace with your actual processing script
          data: formData,
          success: function (response) {
            // Handle the success response (if needed)
            console.log("Form submitted successfully");
            
            // You can display a success message here if needed
            $("#formMessage").html("<p>Answers submitted successfully.</p>");
          },
          error: function (error) {
            // Handle the error (if needed)
            console.error("Error submitting form:", error);
          }
        });
      });
    });
  </script>
</head>
<body>

<div class="header">
  <h2>Home Page</h2>
</div>

<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

        <!-- Form for user to fill in answers -->
        <form id="answersForm" method="post">
            <label for="local_language">Local Language:</label>
            <input type="text" name="local_language" required><br>

            <label for="currency">Currency:</label>
            <input type="text" name="currency" required><br>

            <label for="favorite_food">Favorite Food:</label>
            <input type="text" name="favorite_food" required><br>

            <label for="city">City:</label>
            <input type="text" name="city" required><br>

            <label for="weather">Weather of the City:</label>
            <input type="text" name="weather" required><br>

            <input type="submit" value="Submit Answers">
        </form>

        <!-- Display success message -->
        <div id="formMessage"></div>

        <p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>
