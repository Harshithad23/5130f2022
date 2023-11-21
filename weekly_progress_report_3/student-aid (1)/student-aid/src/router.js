import { createRouter, createWebHashHistory } from 'vue-router';

import MyCalendar from './components/MyCalendar.vue';
import StudentDeals from './components/StudentDeals.vue';
import ExpenseManagement from './components/ExpenseManagement.vue';
import HomePage from './components/HomePage.vue';
import LoginComponent from './components/LoginComponent.vue';
import SignUp from './components/SignUp.vue';

const routes = [
  { path: '/', component: LoginComponent },
  { path: '/MyCalendar', component: MyCalendar },
  { path: '/StudentDeals', component: StudentDeals },
  { path: '/ExpenseManagement', component: ExpenseManagement },  
  { path: '/HomePage', component: HomePage },  
  { path: '/SignUp', component: SignUp },  
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
