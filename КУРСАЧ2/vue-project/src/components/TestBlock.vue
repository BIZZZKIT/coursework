<script>
  import submitForm from "@/submitForm.js";

  export default {
    props:{
      questionIndex: Number,
      required: true
    },
    data() {
      return{
        questions: [],
        selectedAnswers: [null, [], null],
        formData: {
          nameClient: '',
          phone: '',
          email: '',
          whatuneed: '',
        }
      }
    },
    methods:{
      async getQuestion(){
        let response = await fetch('http://127.0.0.1:8000/api/questions', {
          method: 'GET',
          headers: {
            'Content-type': 'application/json'
          }
        })

        if (response.ok) {
          let data = await response.json();
          this.questions = data.questions;
          console.log(this.questions);
        } else {
          console.error('Ошибка получения вопросов:', response.status);
        }
      },
      submitForm() {
        submitForm(this.formData);
      },
      nextQuestion(){
        this.$emit("nextQuestion")
        this.$emit("update:selectedAnswers", this.selectedAnswers);

        if(this.questionIndex < this.questions.length){
          const question = this.questions[this.questionIndex]
          const answer = this.selectedAnswers[this.questionIndex]

          let answerText = ""

          if(Array.isArray(answer)){
            answerText = answer.map(a => a.answerText).join(', ')
          } else if(answer){
            answerText = answer.answerText;
          }

          this.formData.whatuneed += `${question.questionText} : ${answerText}`;
        }
      },
      saveAnswers(answer) {

        if (this.questionIndex === 1) {
          if (!this.selectedAnswers[this.questionIndex].includes(answer)) {
            this.selectedAnswers[this.questionIndex].push(answer);
          } else {
            this.selectedAnswers[this.questionIndex] = this.selectedAnswers[this.questionIndex].filter(i => i !== answer);
          }
        } else {
          this.selectedAnswers[this.questionIndex] = answer;
        }

        this.$emit("update:selectedAnswers", this.selectedAnswers);
      }

    },
    mounted() {
      this.getQuestion()
    }
  }
</script>

<template>
  <div class="wrapper">
    <div class="test-block_content">
      <div v-if="questionIndex < questions.length" class="header_row_TBC">
        <p class="counter">{{questionIndex + 1}}/{{questions.length}}</p>
      </div>
      <div class="question_and_answers">
        <form class="question_and_answers_content" @submit.prevent="nextQuestion" v-if="questionIndex < questions.length">
          <h2>{{ questions[questionIndex].questionText }}</h2>
          <div class="answers">
            <label v-for="(answer, answerIndex) in questions[questionIndex].answers" :key="answer.id" class="answer">
              <input
                  v-if="questionIndex !== 1"
              type="radio"
              :name="`question-${questionIndex}`"
              @change="saveAnswers(answer)"
              :checked="selectedAnswers[questionIndex] === answer"
              >
              <input
                  v-else
                  type="checkbox"
                  :name="`question-${questionIndex}-${answerIndex}`"
                  @change="saveAnswers(answer)"
                  :checked="selectedAnswers[questionIndex].includes(answer)"
              >
              <span class="custom-radio"></span>{{ answer.answerText }}
            </label>
          </div>
          <input class="next" type="submit" VALUE="ДАЛЕЕ">
        </form>
        <form @submit.prevent="submitForm" v-if="questionIndex === questions.length" method="post" class="formTest">
          <h2> Впишите свой телефон, на который можно <br> отправить информацию по whatsapp/viber/смс <br> и нажмите на красную кнопку</h2>
          <input v-model="formData.phone" type="tel" placeholder="+7 999 999 99 99">
          <input type="submit" value="ПОЛУЧИТЬ РАСЧЕТ">
        </form>
      </div>
    </div>
  </div>
</template>
