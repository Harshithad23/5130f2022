import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import { initializeApp } from 'firebase/app';
import { getAuth } from 'firebase/auth';
import { getFirestore } from 'firebase/firestore';
import { getDatabase } from 'firebase/database';
import { getAnalytics } from 'firebase/analytics';

const firebaseConfig = {
    apiKey: "AIzaSyASCUWhzcJPdv21_PQ6AmGk1_oDOt3FsTs",
    authDomain: "student-d2a71.firebaseapp.com",
    projectId: "student-d2a71",
    storageBucket: "student-d2a71.appspot.com",
    messagingSenderId: "414633648825",
    appId: "1:414633648825:web:d77190dfcb4a95b1fd7168"
};

const firebaseApp = initializeApp(firebaseConfig);

const auth = getAuth(firebaseApp);
const firestore = getFirestore(firebaseApp);
const database = getDatabase(firebaseApp);
const analytics = getAnalytics(firebaseApp);


const app = createApp(App);

app.config.globalProperties.$firebase = {
    auth,
    firestore,
    database,
    analytics,
};

app.use(router);
app.mount('#app');
