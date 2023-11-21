<template>
    <body>
        <header>
            <h1>Expense Management</h1>
        </header>
        <main>
            <h2>Expense List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Expense Type</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Taco Bell</td>
                        <td>$25</td>
                        <td>2023-11-10</td>
                    </tr>
                    <tr>
                        <td>Shoes</td>
                        <td>70$</td>
                        <td>2023-10-30</td>
                    </tr>
                    <tr>
                        <td>Groceries</td>
                        <td>183.83$</td>
                        <td>2023-11-05</td>
                    </tr>
                </tbody>
            </table>

            <h2>Add Expense</h2>
            <form>
                <label for="expenseType">Expense Type</label>
                <input class="expense-input" type="text" id="expenseType" name="expenseType" required>

                <label for="expenseAmount">Expense Amount</label>
                <input class="expense-input" type="number" id="expenseAmount" name="expenseAmount" required>

                <label for="expenseDate">Date Added</label>
                <input class="expense-input" type="date" id="expenseDate" name="expenseDate" required>

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

.expense-button{
    border-radius: 5px;
    width: 100%;
}
</style>