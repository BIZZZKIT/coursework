<script>
  import Header from "@/components/Header.vue";
  import Footer from  "@/components/Footer.vue";
  import template_service_tab from "@/components/template_service_tab.vue";

  export default {
    components:{Header, Footer, template_service_tab}
  }
</script>

<template>
  <div>
    <Header></Header>
    <template_service_tab
        title="Интернет-магазин"
        title_text="Разработка эффективных и удобных интернет-магазинов, которые помогают увеличить продажи и улучшить пользовательский опыт. Мы предлагаем:
<br><br>
<li>Простой и интуитивный интерфейс: Создаем удобную навигацию и понятный интерфейс, чтобы ваши клиенты легко находили нужные товары.</li><br>
<li>Интеграция с платежными системами: Обеспечиваем безопасные и удобные способы оплаты для ваших клиентов.</li><br>
<li>Управление товарами: Внедряем системы управления товарами, которые позволяют легко добавлять, редактировать и удалять позиции.</li><br>
<li>Аналитика и отчеты: Настраиваем системы аналитики, чтобы вы могли отслеживать поведение пользователей и эффективность продаж.</li><br>
<li>Мобильная адаптация: Обеспечиваем корректную работу вашего интернет-магазина на всех мобильных устройствах.</li>"
        description_text="разработку интернет-магазина"
        URL="https://sevres.ru/images/news/78/internet-magazin-put-evolyucii-sovremennoj-torgovli.jpg">
    </template_service_tab>
    <Footer></Footer>
  </div>
</template>
