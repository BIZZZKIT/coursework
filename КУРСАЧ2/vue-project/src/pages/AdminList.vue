<script>
  import Header from "@/components/Header.vue";
  import axios from "axios";
  export default {
    components: {Header},
    data(){
      return{
        dataClients:[]
      }
    },
    mounted() {
      this.getClients();
    },
    methods:{
      async getClients(){
        let response = await axios.get('http://127.0.0.1:8000/api/clients/get', this.dataClients)
        if(response.status === 200){
          this.dataClients = response.data.client.map( client => ({
            clientId: client.id,
            clientName: client.nameClient,
            phoneClient: client.phone,
            emailClient: client.email,
            whatuneedClient: client.whatuneed,
            finalPriceClient: client.final_price,
            created_atClient: client.created_at
          }))
        }else{
          console.log('Ошибка получения клиентов')
        }
        console.log(this.dataClients)
      },
      updateClientData(client, field, event){
        client[field] =event.target.innerText;
        console.log(client)
      }
    }
  }
</script>

<template>
  <Header></Header>
  <section class="list">
    <div class="list_content">
      <router-link to="/createElement"><button>Создать элемент портфолио</button></router-link>
      <table class="client-table">
        <thead>
        <tr>
          <th>ID</th>
          <th>Имя</th>
          <th>Телефон</th>
          <th>Email</th>
          <th>Что нужно</th>
          <th>Цена</th>
          <th>Дата создания</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="client in dataClients" :key="client.clientId">
          <td contenteditable="true" @blur="updateClientData(client, 'id', $event)">{{ client.clientId }}</td>
          <td contenteditable="true" @blur="updateClientData(client, 'nameClient', $event)">{{ client.clientName }}</td>
          <td contenteditable="true" @blur="updateClientData(client, 'phone', $event)">{{ client.phoneClient }}</td>
          <td contenteditable="true" @blur="updateClientData(client, 'email', $event)">{{ client.emailClient }}</td>
          <td contenteditable="true" @blur="updateClientData(client, 'whatuneed', $event)">{{ client.whatuneedClient }}</td>
          <td contenteditable="true" @blur="updateClientData(client, 'final_price', $event)">{{ client.finalPriceClient }}</td>
          <td contenteditable="true" @blur="updateClientData(client, 'created_at', $event)">{{ client.created_atClient }}</td>
        </tr>
        </tbody>
      </table>
    </div>
  </section>
</template>

<style scoped>
.list {
  padding: 20px;
}
button{
  padding: 19px 123px;
  background-color: #e04040;
  border: none;
  font-family: Montserrat;
  font-size: 16px;
  font-weight: normal;
  margin-bottom: 20px;
}
.list_content {
  text-align: center;
  background-color: #fff;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.client-table {
  width: 100%;
  border-collapse: collapse;
  font-family: sans-serif;
}

.client-table th,
.client-table td {
  padding: 12px 15px;
  text-align: left;
}

.client-table th {
  background-color: #4d4d4d;
  font-weight: bold;
}

.client-table tbody tr:nth-child(even) {
  background-color: #f8f8f8;
}

.client-table tbody tr:hover {
  background-color: #e0e0e0;
}
.client-table td {
  color: black;
}
</style>