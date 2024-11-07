<script>
import axios from "axios";

export default {
  data() {
    return {
      formData: {
        title_text: '',
        description: '',
        link: '',
        image: null
      }
    }
  },
  methods: {
    upload(){
      this.formData.image = event.target.files[0];
    },
    async createElement() {
      const formData = new FormData;
      formData.append('title_text', this.formData.title_text)
      formData.append('description', this.formData.description)
      formData.append('link', this.formData.link)
      formData.append('image', this.formData.image)

      const response = await axios.post('http://127.0.0.1:8000/api/createElementPortfolio', formData)
      if (response.status === 200) {
        this.$router.push('/AdminList');
      }else {
        console.log(response)
      }
    }
  }
}
</script>

<template>
  <div class="createElem">
    <form class="createElem_content" @submit.prevent="createElement">
      <label><h1>Создать элемент портфолио</h1></label>
      <div class="input-group">
        <input class="inputAuth" required v-model="formData.title_text" type="text" placeholder="Текст заголовка">
        <input class="inputAuth" required v-model="formData.description" type="text" placeholder="Текст описания">
        <input class="inputAuth" required v-model="formData.link" type="text" placeholder="Ссылка">
        <input type="file" @change="upload">
        <input type="submit" value="Создать">
      </div>
    </form>
  </div>
</template>

<style scoped>
body, html {
  height: 100%;
  margin: 0;
}

.createElem {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.createElem_content {
  background-color: #FFF8F8;
  padding: 100px;
  text-align: center;
  border-radius: 20px;
  border: 1px solid #645D5D;
  h1{
    font-family: Montserrat;
    color: #4d4d4d;
  }
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

.input-group input[type="text"]:focus {
  color: #151515;
}
.input-group input[type="text"]{
  color: #151515;
}
.input-group input[type="submit"] {
  border-radius: 20px;
}
</style>