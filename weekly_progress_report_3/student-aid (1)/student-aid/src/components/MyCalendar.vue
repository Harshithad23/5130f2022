<template>
    <body>
        <header>
            <h1>Calendar</h1>
        </header>
        <main>
            <h2>Upcoming Events</h2>
            <table class="event-table">
                <tr class="event-item">
                    <td class="event-date">11/15/2023</td>
                    <td class="event-type">Meeting with Professor</td>
                    <td>
                        <button class="delete-event-button">Delete</button>
                    </td>
                </tr>
                <tr class="event-item">
                    <td class="event-date">12/06/2023</td>
                    <td class="event-type">Presentation</td>
                    <td>
                        <button class="delete-event-button">Delete</button>
                    </td>
                </tr>
                <tr class="event-item">
                    <td class="event-date">12/13/2023</td>
                    <td class="event-type">Exam</td>
                    <td>
                        <button class="delete-event-button">Delete</button>
                    </td>
                </tr>
            </table>
            <h2>Add Event</h2>
            <form>
                <label for="description">Description</label>
                <input class="expense-input" type="text" id="description" name="description" required>

                <label for="eventDate">Date</label>
                <input class="expense-input" type="date" dateid="eventDate" name="eventDate" required>

                <button class="expense-button" type="submit">Add Expense</button>
            </form>
        </main>
    </body>
</template>
<style scoped>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th,
td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input,
button {
    padding: 8px;
    margin-bottom: 10px;
    display: block;
    width: 100%;
}

button {
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}

.expense-input {
    border-radius: 5px;
    width: 98%;
}

.expense-button {
    border-radius: 5px;
    width: 100%;
}

.delete-event-button {
    background-color: #ff6961;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 8px;
    border-radius: 5px;
}

.event-table {
    width: 100%;
    border-collapse: collapse;
}

.event-table td {
    border: none;    
    padding: 8px;
    text-align: left;
}

.event-table tr {
    margin-bottom: 5px;    
}

.event-date {
    white-space: nowrap;    
}
</style>