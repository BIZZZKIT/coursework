<script>
import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";
import template_service_tab from "@/components/template_service_tab.vue";

export default {
  components: {Header, Footer, template_service_tab}
}
</script>

<template>
  <div>
    <Header></Header>
    <template_service_tab
        title="Дизайн"
        title_text="Профессиональный дизайн для вашего бизнеса, который выделяет вас среди конкурентов и привлекает внимание клиентов. Мы предлагаем:
<br><br>
<li>Графический дизайн: Создаем логотипы, фирменный стиль, рекламные материалы и другие графические элементы, которые подчеркивают уникальность вашего бренда.</li><br>
<li>Веб-дизайн: Разрабатываем стильные и функциональные макеты для вашего сайта или приложения.</li><br>
<li>UX/UI дизайн: Обеспечиваем удобный и интуитивно понятный интерфейс для ваших пользователей.</li><br>
<li>Редизайн: Обновляем существующие сайты, улучшая их внешний вид и функциональность.</li><br>
<li>Прототипирование: Создаем интерактивные прототипы, чтобы вы могли увидеть и протестировать будущий дизайн до его реализации.</li>"
        description_text="разработку корпоративного стиля"
        URL="https://static.tildacdn.com/tild3036-3830-4461-a230-623862363536/brochamillerscn.jpg">
    </template_service_tab>
    <Footer></Footer>
  </div>
</template>
