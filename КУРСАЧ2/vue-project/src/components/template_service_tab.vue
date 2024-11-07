<script>
  export default {
    props: {
      title: String,
      title_text: String,
      description_text: String,
      URL: String
    }
  }
</script>

<template>
  <section class="template_service_tab">
    <div class="template_service_tab_content">
      <h1>{{title}}</h1>
      <p v-html="title_text"></p>
      <img :src= URL alt="" WIDTH="1000PX">
      <h3>Заказать {{description_text}}</h3>
      <form class="phone_mail">
        <input type="tel" placeholder="Телефон*">
        <input type="email" placeholder="E-mail">
        <input type="submit" value="ЗАКАЗАТЬ">
      </form>
    </div>
  </section>
</template>
