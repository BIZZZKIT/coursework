<script>
import TestBlock from "@/components/TestBlock.vue";

export default {
  components:{
    TestBlock
  },
  data(){
    return{
      questionIndex: 0,
      selectedAnswersFromChild: [null, [], null],
      prices: {},
    calculatedPrices: [],
      totalCost: 0
    }
  },
  methods: {
    nextQuestion(){
      this.questionIndex++
      if (this.questionIndex === 3) {
        this.computeTotalCost();
      }
    },
    computeTotalCost(){
      this.calculatedPrices = []
      this.totalCost = 0

      const answers = this.selectedAnswersFromChild

      answers.forEach( answer => {
        if(Array.isArray(answer)){
          answer.forEach(a => {
            this.calculatedPrices.push({
              item: a.answerText,
              price: parseFloat(a.price)
            })
            this.totalCost += parseFloat(a.price)
          })
        } else if (answer){
          this.calculatedPrices.push({
            item: answer.answerText,
            price: parseFloat(answer.price)
          })
          this.totalCost += parseFloat(answer.price)
        }
      })

    }
  }
}
</script>

<template>
    <section class="testSection">
      <div class="testSectionContent">
        <h1>Расчёт стоимости <span>сайта</span></h1>
        <p v-if="questionIndex === 0">Ответьте на 3 коротких вопроса за <i>20 секунд</i> и получите предварительный расчет <br> стоимости разработки сайта.
          <br> <br> А также <i>скидку 10%</i> на будущую разработку.</p>
        <div v-if="questionIndex === 3" class="results">
          <h2>Ваш <span>предварительный</span> расчет:</h2>
          <h3>Стоимость сайта:</h3>
          <ul>
            <li v-for="(item, index) in calculatedPrices" :key="index">
              {{ item.item }} - {{ item.price }} руб.
            </li>
          </ul>
          <h4>Итого: {{ totalCost }} руб.</h4>
        </div>
      </div>
      <TestBlock ref="testBlock" :question-index="questionIndex" @nextQuestion="nextQuestion" @update:selectedAnswers="selectedAnswersFromChild = $event"></TestBlock>
    </section>
</template>
