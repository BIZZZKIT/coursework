<script>
import Header from  '@/components/Header.vue';
import Footer from '@/components/Footer.vue'
import ServicePortolioSection from "@/components/ServicePortolioSection.vue";
import axios from "axios";


export default {
  components: {
    ServicePortolioSection, Footer, Header
  },
  data() {
    return {
      portfolios: []
    };
  },
  mounted(){
    this.getElementsPortfolio();
  },
  methods:{
    async getElementsPortfolio(){
      let response = await axios.get('http://127.0.0.1:8000/api/getElements')
      if(response.status === 200){
        this.portfolios = response.data;
        console.log(this.portfolios)
      }
    }
  }
}
</script>
<template>
  <div>
    <Header></Header>
    <ServicePortolioSection
        title="Портфолио"
        :portfolios="portfolios.elements"
    />
    <Footer></Footer>
  </div>
</template>

