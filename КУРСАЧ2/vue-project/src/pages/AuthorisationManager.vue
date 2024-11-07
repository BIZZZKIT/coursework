<script>
import axios from "axios";

export default {
  data() {
    return {
      formData: {
        login: '',
        password: ''
      },
      error: false
    }
  },
  methods: {
    async getAuthManager() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/admins/login', this.formData);
        if (response.status === 200) {
          localStorage.setItem('Вход', true);
          this.$router.push('/AdminList');
          this.error = false;
        } else {
          this.error = true;
        }
      } catch (error) {
        this.error = true;
      }
    }
  }
}
</script>

<template>
  <div class="auth">
    <form class="auth_content"  @submit.prevent="getAuthManager()">
      <label><h1>Авторизация</h1></label>
      <div class="input-group">
        <input v-model="formData.login" class="inputAuth" type="text" placeholder="Логин" :style="{ borderColor: error ? 'red' : '' }">
        <input v-model="formData.password" class="inputAuth" type="text" placeholder="Пароль" :style="{ borderColor: error ? 'red' : '' }">
        <div v-if="error" class="error-message">Неправильный логин или пароль</div>
        <input type="submit" value="Войти">
      </div>
    </form>
  </div>
</template>

<style>
body, html {
  height: 100%;
  margin: 0;
}

.auth {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.auth_content {
  background-color: #FFF8F8;
  padding: 100px;
  text-align: center;
  border-radius: 20px;
  border: 1px solid #645D5D;
}

.auth_content h1 {
  color: #645D5D;
  font-family: Montserrat;
  font-size: 40px;
  margin-bottom: 20px;
}

.input-group {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.input-group input[type="text"] {
  background-color: white;
  border: 1px solid black;
  border-radius: 20px;
}
.input-group input[type="text"]{
  color: #151515;
}
.input-group input[type="text"]:focus {
  color: #151515;
}

.input-group input[type="submit"] {
  border-radius: 20px;
}
.error-message {
  font-family: Montserrat;
  color: red;
  font-size: 14px;
  margin-top: 5px;
}
</style>