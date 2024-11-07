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
        title="Сайты компаний"
        title_text="Создаем профессиональные и современные корпоративные сайты, которые подчеркивают уникальность вашего бизнеса и привлекают клиентов. Мы предлагаем:
<br><br>
<li>Индивидуальный подход: Разрабатываем сайты, которые соответствуют вашему бренду и корпоративной идентичности.</li><br>
<li>Адаптивный дизайн: Обеспечиваем безупречное отображение вашего сайта на любых устройствах, будь то компьютер, планшет или смартфон.</li><br>
<li>Функциональность: Внедряем все необходимые функции, такие как контактные формы, интеграция с CRM и многое другое.</li><br>
<li>SEO-оптимизация: Оптимизируем ваш сайт для поисковых систем, чтобы повысить его видимость и привлечь больше органического трафика.</li><br>
<li>Поддержка и обслуживание: Обеспечиваем постоянную техническую поддержку и обновления, чтобы ваш сайт всегда был в актуальном состоянии.</li>"
        description_text="разработку корпоративного сайта"
        URL="https://mediapanda.ru/wp-content/uploads/2021/04/sozdanie-i-razrabotka-sajtov-2.jpg">
    </template_service_tab>
    <Footer></Footer>
  </div>
</template>
