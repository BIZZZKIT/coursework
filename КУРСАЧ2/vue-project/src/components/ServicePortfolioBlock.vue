<template>
  <div class="block-BRS" :style="{ backgroundImage: 'url(' + image + ')' }">
    <div class="hover-block-BRS">
      <h2>{{ titleBlock }}</h2>
      <p>{{ descriptionBlock }}</p>
      <br>
      <h3><a :href="link">{{ link }}</a></h3>
      <router-link v-if="showButtonMore" :to="linkRouter"><button>ПОДРОБНЕЕ</button></router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ServiceBlock',
  props: {
    titleBlock: {
      type: String,
      required: true
    },
    descriptionBlock: {
      type: String,
      required: true
    },
    image: {
      type: String,
      required: true
    },
    link:{
      type: String,
      required: true
    },
    linkRouter:{
      type: String,
      required: true
    },
    showButtonMore:{
      type: Boolean,
      default: false
    }
  }
}
</script>

<style scoped>
button{
  font-family: Montserrat;
  margin-left: 56px;
  padding: 15px 50px;
  background-color: rgba(255,0,0,0);
  border: 2px solid white;
  border-radius: 10px;
}
.block-BRS {
  position: relative;
  width: 569px;
  height: 468px;
  background-repeat: no-repeat;
  background-size: cover;
}

.hover-block-BRS {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.75);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.hover-block-BRS h2 {
  padding-top: 26px;
  padding-left: 56px;
}
.hover-block-BRS h3 {
  padding-left: 56px;
}
.hover-block-BRS p {
  padding-top: 26px;
  padding-left: 56px;
  width: 400px;
}

.block-BRS:hover .hover-block-BRS {
  opacity: 1;
}
</style>
