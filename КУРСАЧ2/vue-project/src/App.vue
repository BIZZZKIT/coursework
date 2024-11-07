<script>
import MainPage from "@/pages/MainPage.vue";
import Services from "@/pages/Services.vue";
import OnlineStore from "@/pages/OnlineStore.vue";
import SitesOfCompanies from "@/pages/SitesOfCompanies.vue";
import template_service_tab from "@/components/template_service_tab.vue"
import LandingPage from "@/pages/LandingPage.vue";
import Marketing from "@/pages/Marketing.vue";
import Design from "@/pages/Design.vue";
import Portfolio from "@/pages/Portfolio.vue";


export default {
  components: {Portfolio, Design, Marketing,SitesOfCompanies, MainPage, Services, OnlineStore, template_service_tab, LandingPage}
}
</script>

<template>
  <router-view v-slot="{Component}">
    <transition name="fade">
      <component :is="Component" :key="$route"/>
    </transition>
  </router-view>
</template>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.4s ease-in-out;
}

.fade-leave-to {
  opacity: 0;
}
</style>

