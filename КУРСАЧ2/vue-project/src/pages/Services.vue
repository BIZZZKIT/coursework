<template>
  <div>
    <Header></Header>
    <ServiceSection
        title="Услуги"
        :services="services"
    />
    <Footer></Footer>
  </div>
</template>

<script>
import ServiceSection from '@/components/ServicePortolioSection.vue';
import Header from  '@/components/Header.vue';
import Footer from '@/components/Footer.vue'

const images = import.meta.glob('@/assets/images/*.{png,jpg,jpeg}', { eager: true });

export default {
  name: 'ServicePage',
  components: {
    ServiceSection, Footer, Header
  },
  data() {
    return {
      services: [
        [
          {
            titleBlock: "Интернет-магазин",
            descriptionBlock: "Позволяет увеличить чило покупателей, предложив им возможность дистанционного заказа и доставки товаров по месту назначения.",
            image: images['/src/assets/images/iStock-1150415896.png'].default,
            linkRouter: "OnlineStore",
            showButtonMore: true
          },
          {
            titleBlock: "Сайты компаний",
            descriptionBlock: "Представляют компанию в сети интернет, формируют имидж среди потенциальных партнеров, знакомят с услугами и товарами компании.",
            image: images['/src/assets/images/ecogorod.png'].default,
            linkRouter: "SitesOfCompanies",
            showButtonMore: true
          }
        ],
        [
          {
            titleBlock: "Landing Page",
            descriptionBlock: "Позволяют увеличить чило покупателей, предложив им возможность дистанционного заказа и доставки товаров по месту назначения.",
            image: images['/src/assets/images/image641.png'].default,
            linkRouter: "LandingPage",
            showButtonMore: true
          },
          {
            titleBlock: "Маркетинг и продвижение",
            descriptionBlock: "SMM (social media marketing) — один из инструментов интернет-маркетинга. Суть SMM — привлечение клиентов из социальных сетей.",
            image: images['/src/assets/images/digital-laptop-working-global-business-concept_53876-23438.png'].default,
            linkRouter: "Marketing",
            showButtonMore: true
          }
        ],
        [
          {
            titleBlock: "Дизайн",
            descriptionBlock: "Превратите свои идеи в визуальные шедевры с нашими услугами дизайна! Наша команда творческих профессионалов готова воплотить в жизнь любые задумки, делая ваш бренд неповторимым и запоминающимся. От логотипов и упаковки до веб-дизайна и маркетинговых материалов - мы создаем эстетику, которая выделяет вас из толпы.",
            image: images['/src/assets/images/999495a009b78dec4c102ed351cb827c.jpg'].default,
            linkRouter: "Design",
            showButtonMore: true
          }
        ]
      ]
    };
  }
}
</script>
