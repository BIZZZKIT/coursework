<script>
export default {
  props:{
    onClickContacts:{
      type: Function,
      required: true
    }
  }
}
</script>

<template>
  <header>
    <div class="content">
      <div class="logo">
        <router-link to="/">
          <div class="mainLogo">
          <p>An</p><span>Design</span>
          </div>
        </router-link>
        Web Studio
      </div>
      <div class="tabs">
        <router-link to="Services">УСЛУГИ</router-link>
        <a href="">ЦЕНЫ</a>
        <router-link to="Portfolio">ПОРТФОЛИО</router-link>
        <a href="" @click.prevent="onClickContacts">КОНТАКТЫ</a>
      </div>
      <div class="phone">
        <img src="@//assets/images/phone-icon.png" alt="">
        <p>+373-69910767</p>
      </div>
      <div class="order">
        <a href="#">ЗАКАЗАТЬ ЗВОНОК</a>
      </div>
    </div>
  </header>
</template>
