<template>
  <section class="service" :style="{ fontFamily: 'Montserrat', display: 'flex', justifyContent: 'center' }">
    <div class="service-content" :style="{ paddingTop: '81px', paddingBottom: '81px' }">
      <h1 :style="{ color: '#151515', fontSize: '50px', paddingBottom: '37px' }">{{ title }}</h1>
      <div class="blocks-services">
        <template v-if="services.length">
          <div v-for="(row, rowIndex) in services" :key="rowIndex" class="blocks-row-services" :style="{ display: 'grid', gridTemplateColumns: 'repeat(2, 585px)', marginBottom: rowIndex < services.length - 1 ? '43px' : '0' }">
            <ServiceBlock
                v-for="(service, serviceIndex) in row"
                :key="serviceIndex"
                :titleBlock="service.titleBlock"
                :descriptionBlock="service.descriptionBlock"
                :image="service.image"
                :link="service.link"
                :link-router="service.linkRouter"
                :show-button-more="service.showButtonMore"
                :style="{ marginLeft: serviceIndex % 2 === 1 ? '16px' : '0px' }"
            />
          </div>
        </template>
        <template v-if="portfolios.length">
          <div class="blocks-row-services" :style="{ display: 'grid', gridTemplateColumns: 'repeat(2, 585px)'}">
            <ServiceBlock
                v-for="(portfolio, index) in portfolios"
                :key="index"
                :titleBlock="portfolio.title_text"
                :descriptionBlock="portfolio.description"
                :image="'http://127.0.0.1:8000/storage/' + portfolio.image"
                :link="portfolio.link"
                :style="{ marginLeft: index % 2 === 1 ? '16px' : '0px', marginBottom: '20px' }"
            />
          </div>
        </template>
      </div>
    </div>
  </section>
</template>

<script>
import ServiceBlock from './ServicePortfolioBlock.vue';

export default {
  components: {
    ServiceBlock
  },
  props: {
    title: {
      type: String,
      required: true
    },
    services: {
      type: Array,
      default: () => []
    },
    portfolios: {
      type: Array,
      default: () => []
    }
  }
}
</script>
