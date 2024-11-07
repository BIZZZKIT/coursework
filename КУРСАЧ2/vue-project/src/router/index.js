import { createWebHistory, createRouter } from 'vue-router'

import MainPage from '@/pages/MainPage.vue'
import OnlineStore from "@/pages/OnlineStore.vue";
import Design from "@/pages/Design.vue";
import LandingPage from "@/pages/LandingPage.vue";
import Marketing from "@/pages/Marketing.vue";
import Portfolio from "@/pages/Portfolio.vue";
import Services from "@/pages/Services.vue";
import SitesOfCompanies from "@/pages/SitesOfCompanies.vue";
import TestPage from "@/pages/TestPage.vue";
import AuthorisationManager from "@/pages/AuthorisationManager.vue"
import AdminList from "@/pages/AdminList.vue"
import createElement from "@/pages/createElement.vue";


const routes = [
    { path: '/', component: MainPage },
    { path: '/OnlineStore', component: OnlineStore },
    { path: '/Design', component: Design },
    { path: '/LandingPage', component: LandingPage },
    { path: '/Marketing', component: Marketing },
    { path: '/Portfolio', component: Portfolio },
    { path: '/Services', component: Services },
    { path: '/SitesOfCompanies', component: SitesOfCompanies },
    { path: '/TestPage', component: TestPage},
    { path: '/AdminAuth', component: AuthorisationManager},
    {
        path: '/AdminList',
        component: AdminList,
        meta: { requiresAuth: true }
    },
    { path: '/createElement', component: createElement}
]

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(){
        return { top: 0 }
    }
})
router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !localStorage.getItem('Вход')) {
        next('/AdminAuth');
    } else {
        next();
    }
});

export default router