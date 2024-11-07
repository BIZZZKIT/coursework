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
        title="Маркетинг и продвижение"
        title_text="Комплексные маркетинговые услуги для увеличения видимости вашего бизнеса и привлечения новых клиентов. Мы предлагаем:
<br><br>
<li>SEO-продвижение: Оптимизация вашего сайта для поисковых систем для улучшения его позиций в выдаче.</li><br>
<li>Контекстная реклама: Настраиваем эффективные рекламные кампании в Google Ads и Яндекс.Директ для привлечения целевого трафика.</li><br>
<li>SMM: Управление вашими аккаунтами в социальных сетях, создание контента и проведение рекламных кампаний.</li><br>
<li>E-mail маркетинг: Разработка стратегий и реализация рассылок, которые помогут поддерживать контакт с клиентами и стимулировать повторные покупки.</li><br>
<li>Аналитика и отчеты: Предоставляем подробные отчеты о результатах нашей работы и рекомендации по дальнейшим действиям.</li>"
        description_text="продвижения в соц.сетях"
        URL="https://chezasite.com/wp-content/uploads/2021/10/mar.jpg">
    </template_service_tab>
    <Footer></Footer>
  </div>
</template>
