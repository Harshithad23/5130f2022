<template>
    <div class="container">
        <MessageComponent ref="messageComponent" />
        <form @submit.prevent="signup">
            <h2>Sign Up</h2>
            <label for="signupEmail">Email:</label>
            <input v-model="signupEmail" type="email" id="signupEmail" required />
            <label for="signupPassword">Password:</label>
            <input v-model="signupPassword" type="password" id="signupPassword" required />
            <button type="submit">Sign Up</button>
            <p>Already have an account? <router-link to="/">Login</router-link></p>
        </form>
    </div>
</template>
  
<script>
import MessageComponent from './MessageComponent.vue';
import { getAuth, createUserWithEmailAndPassword, sendEmailVerification } from 'firebase/auth';

export default {
    components: {
        MessageComponent,
    },
    data() {
        return {
            signupEmail: '',
            signupPassword: '',
        };
    },
    methods: {
        async signup() {
            try {
                const emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;
                if (!emailRegex.test(this.signupEmail)) {
                    this.$refs.messageComponent.openMessageBox("Invalid email address");
                    return;
                }
                const auth = getAuth();
                const userCredential = await createUserWithEmailAndPassword(auth, this.signupEmail, this.signupPassword);
                const user = userCredential.user;
                await sendEmailVerification(user);
                this.$refs.messageComponent.openMessageBox("Signup successful. Please check your email for verification.");
            } catch (error) {
                console.error(error.message);
                this.$refs.messageComponent.openMessageBox(error.message);
            }
        },
    },
};
</script>

<style scoped>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 300px;
    margin: 80px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}

a {
    text-decoration: none;
    color: #3498db;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}
</style>
  