<template>
  <div class="container">
    <MessageComponent ref="messageComponent" />
    <form @submit.prevent="login">
      <h2>Login</h2>
      <label for="email">Email:</label>
      <input v-model="email" type="email" id="email" required>
      <label for="password">Password:</label>
      <input v-model="password" type="password" id="password" required>
      <button type="submit">Login</button>
      <p>Don't have an account? <router-link to="/signup">Sign Up</router-link></p>
    </form>
  </div>
</template>
  
<script>
import MessageComponent from './MessageComponent.vue';
import { getAuth, signInWithEmailAndPassword } from 'firebase/auth';

export default {
  components: {
    MessageComponent,
  },
  data() {
    return {
      email: '',
      password: '',
    };
  },
  methods: {
    async login() {
      try {
        const auth = getAuth();
        const userCredential = await signInWithEmailAndPassword(auth, this.email, this.password);
        const user = userCredential.user;

        if (user.emailVerified) {
          console.log('Login successful');
          this.$router.push('/HomePage');
        } else {
          this.$refs.messageComponent.openMessageBox("Email not verified. Please check your email for the verification link.");          
        }
      } catch (error) {
        console.error(error);
        this.$refs.messageComponent.openMessageBox("Wrong Id Password or account does not exist");        
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
  