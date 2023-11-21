<template>
    <div v-if="showMessage">
        <div class="overlay"></div>
        <div class="message-container">
            <div class="message-box">
                <p>{{ message }}</p>
                <button @click="closeMessageBox">OK</button>
            </div>
        </div>
    </div>
</template>
  
<script>
export default {
    data() {
        return {
            showMessage: false,
            message: "",
        };
    },
    methods: {
        openMessageBox(message) {
            this.message = message;
            this.showMessage = true;
        },
        closeMessageBox() {
            this.showMessage = false;
        },
    },
};
</script>
  
<style scoped>
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

.message-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

.message-box {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
  