<template>
    <div class="header">
        <span class="username">Hi {{ username }}!</span>
    </div>
    <div class="home-page">
        <h1>Welcome to your Student Aid Portal</h1>
        <h1>Unified Learning Hub</h1>
        <p class="sub-title">One app for all your student needs</p>
        <div class="quick-access">
            <ul class="quick-access-list">
                <li class="quick-access-item">
                    <strong>Upcoming Deadlines:</strong>
                    <ul>
                        <li>Assignment due on 11/11/2023</li>
                        <li>Exam on 11/15/2023</li>
                    </ul>
                </li>
                <li class="quick-access-item">
                    <strong>New Student Deals:</strong>
                    <ul>
                        <li>15% off on groceries in Apna Bazar</li>
                        <li>Valid till 12/01/2023</li>
                    </ul>
                </li>
                <li class="quick-access-item">
                    <strong>Last Month's Expenses:</strong>
                    <ul>
                        <li>$2360 spent in the previous month</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="card-container">
            <div class="card" @click="redirectToCalendar">
                <h2>Calendar</h2>
                <p>View your academic calendar</p>
            </div>

            <div class="card" @click="redirectToStudentDeals">
                <h2>Student Deals</h2>
                <p>Explore exclusive student discounts</p>
            </div>

            <div class="card" @click="redirectToExpenseManagement">
                <h2>Expense Management</h2>
                <p>Manage your expenses and budgets</p>
            </div>
        </div>
    </div>
</template>
  
<script>
export default {
    data() {
        return {
            username: " Jayson Tatum",
        };
    },
    methods: {
        redirectToCalendar() {            
            this.$router.push('/MyCalendar');
        },
        redirectToStudentDeals() {            
            this.$router.push('/StudentDeals');
        },
        redirectToExpenseManagement() {            
            this.$router.push('/ExpenseManagement');
        },
    },
};
</script>
  
<style scoped>
.home-page {
    text-align: center;
    max-width: 1300px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.header {
    float: right;
    margin-bottom: 20px;
    margin-right: 50px;
    padding: 10px 0;
}

.username {
    font-weight: bold;
}

.card-container {
    display: flex;
    justify-content: space-around;
}

.card {
    width: 250px;
    padding: 20px;
    margin: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
}

.card:hover {
    background-color: #f0f0f0;
}

.quick-access {
    border-radius: 10px;
    margin: 20px 0;
}

.quick-access-list {
    list-style-type: none;
    padding: 0;
    text-align: left;
}

.quick-access-item {
    font-size: 18px;
    color: blue;
    list-style: none;
    padding: 10px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

ul li:before {
    content: '\2022';
    margin-right: 0.5em;
}
</style>
