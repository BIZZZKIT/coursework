<script>
import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";
import axios from "axios";
import submitForm from "@/submitForm.js";

export default {
  components: {Header, Footer},

  data() {
    return {
      formData: {
        nameClient: '',
        phone: '',
        email: '',
        whatuneed: '',
      },
      portfolios: []
    };
  },

  mounted() {
    this.getElementsPortfolio();
  },

  methods: {
    scrollToContactUS() {
      let sectionScroll = document.getElementById('form-project');
      if (sectionScroll) {
        sectionScroll.scrollIntoView({behavior: 'smooth'})
      }
    },
    submitForm() {
      submitForm(this.formData);
    },
    async getElementsPortfolio() {
      try {
        let response = await axios.get('http://127.0.0.1:8000/api/getElements');
        if (response.status === 200) {
          this.portfolios = response.data.elements;
          console.log(this.portfolios)
        }
      } catch (error) {
        console.error('Ошибка при получении данных:', error);
      }
    }
  }
}
</script>

<template>
  <div>
    <Header :on-click-contacts="scrollToContactUS"></Header>
    <section class="mainBlock">
      <div class="site-development-container">
        <h1 class="title">Разработка <span>Сайтов</span><br>для бизнеса</h1>
        <p class="description">
          Проектирование, разработка, тестирование и поддержка<br>
          интернет-магазинов, веб-сервисов, приложений, продающих<br>
          и корпоративных сайтов
        </p>
        <router-link to="TestPage"><button>РАССЧИТАТЬ СТОИМОСТЬ</button></router-link>
      </div>
      <img src="@/assets/images/MaskGroup.png" alt="" height="825px">
    </section>
    <section class="tabs-block">
      <div class="tabs-content">
        <div class="tab">
          <div class="tab-text">
            <h1>Интернет<br>магазины</h1>
            <p>Позволяют увеличить число <br> покупателей, предложив <br> им возможность дистанционного <br> заказа
              и доставки товаров <br> по месту назначения.</p>
            <router-link to="OnlineStore"><button>ПОДРОБНЕЕ</button></router-link>
          </div>
        </div>
        <div class="tab">
          <div class="tab-text">
            <h1>Сайты<br>компаний</h1>
            <p>Представляют компанию в сети <br> интернет, формируют имидж <br> среди потенциальных партнеров, <br>
              знакомят с услугами и товарами <br> компании.</p>
            <router-link to="SitesOfCompanies"><button>ПОДРОБНЕЕ</button></router-link>
          </div>
        </div>
        <div class="tab">
          <div class="tab-text">
            <h1>Landing<br>Page</h1>
            <p>Разарабатывается для продажи <br> какой-либо одной услуги или <br> небольшого количества товаров <br>
              для целевой аудитории.</p>
            <br>
            <router-link to="LandingPage"><button>ПОДРОБНЕЕ</button></router-link>
          </div>
        </div>
      </div>
    </section>
    <section class="description">
      <div class="description-content">
        <div class="description-header">
          <h1>Грамотно разработанный <span>сайт</span></h1>
        </div>
        <div class="description-blocks">
          <div class="description-block">
            <div class="header-description-block">
              <div class="header-description-block-text">
                <p>Увеличит</p>
                <p>Продажи</p>
              </div>
              <img src="@/assets/images/001-variable.png" alt="" width="80px" height="80px">
            </div>
            <div class="description-block-content">
              В интернет-магазине количество <br> потенциальных клиентов намного <br> больше, чем в оффлайне
            </div>
          </div>
          <div class="description-block">
            <div class="header-description-block">
              <div class="header-description-block-text">
                <p>Поднимит</p>
                <p>Имидж</p>
              </div>
              <img src="@/assets/images/002-wheel.png" alt="" width="80px" height="80px">
            </div>
            <div class="description-block-content">
              Сайт формирует лицо компании, <br> узнаваемость бренда, создает <br> положительное восприятие <br>
              продуктов компании у потребителя
            </div>
          </div>
          <div class="description-block">
            <div class="header-description-block">
              <div class="header-description-block-text">
                <p>Повысит</p>
                <p>Лояльность</p>
              </div>
              <img src="@/assets/images/003-data-analytics.png" alt="" width="80px" height="80px">
            </div>
            <div class="description-block-content">
              Сайт упрощает коммуникацию <br> склиентами. Позволяет понять, <br> что им интересно и важно.
            </div>
          </div>
        </div>
        <div class="guarantees-block">
          <div class="guarantees-content">
            <div class="guarantees-blocks">
              <div class="guarantees-header">
                <h1>Мы гарантируем</h1>
              </div>
              <div class="guarantee-block">
                <h1>01</h1>
                <p>Фиксированную цену</p>
                <span>Цена за проект не изменится в процессе разработки.</span>
              </div>
              <div class="guarantee-block">
                <h1>02</h1>
                <p>Соблюдение сроков</p>
                <span>Проект всегда будет реализован в оговоренные сроки.</span>
              </div>
              <div class="guarantee-block">
                <h1>03</h1>
                <p>Высокое качество</p>
                <span>Мы гарантируем, что Ваш сайт будет уникальным и <br> будет соответствовать всем требованиям качественной разработки.</span>
              </div>
            </div>
            <button>УЗНАТЬ СТОИМОСТЬ РАЗРАБОТКИ САЙТА</button>
          </div>
        </div>
      </div>
    </section>
    <section class="cost_calculation">
      <div class="cost_calculation_content">
        <div class="cost_calculation_block">
          <h1>Узнайте предварительную <span>цену</span> <br> на разработку сайта</h1>
          <p>Ответьте на 3 коротких вопроса за 20 секунд и получите <br> предварительный расчет стоимости разработки
            сайта.
            <br>
            А также скидку 10% на будущую разработку.
          </p>
          <button>Расчет стоимости</button>
        </div>
        <img src="@/assets/images/image53.png" alt="">
      </div>
    </section>
    <section class="portfolio">
      <div class="portfolio-content">
        <h1>Портфолио <span>проектов</span></h1>
        <div class="portfolio-hover-blocks">
          <div class="portfolio-hover-row">
            <div v-for="(portfolio, index) in portfolios" :style="{ backgroundImage: 'url(' + 'http://127.0.0.1:8000/storage/' + portfolio.image + ')' }" :key="index" class="portfolio-hover-block">
              <div class="portfolio-hover-text">
                <h2>{{ portfolio.title_text }}</h2>
                {{ portfolio.description }} <br>
                <a href="">{{ portfolio.link }}</a>
              </div>
            </div>
          </div>
          <div class="portfolio-button">
            <router-link to="Portfolio"><button>ПОСМОТРЕТЬ ЕЩЁ</button></router-link>
          </div>
        </div>
      </div>
    </section>

    <section class="progress-of-work">
      <div class="progress-of-work-content">
        <h1><span>Ход работ</span> по проекту</h1>
        <div class="progress-of-work-blocks">
          <div class="progress-of-word-block">
            <div class="num-block-progress">
              <img src="@/assets/images/01.png" alt="">
              <h2>Анализируем будущий проект</h2>
            </div>
            <img src="@/assets/images/MaskGroup(2).png" alt="">
          </div>
          <div class="progress-of-word-block">
            <div class="num-block-progress">
              <img src="@/assets/images/02.png" alt="">
              <h2>Пишем <br> техническое <br> задание</h2>
            </div>
            <img src="@/assets/images/MaskGroup(1).png" alt="">
          </div>
          <div class="progress-of-word-block">
            <div class="num-block-progress">
              <img src="@/assets/images/03.png" alt="">
              <h2>Создаем <br> прототип</h2>
            </div>
            <img src="@/assets/images/MaskGroup(3).png" alt="">
          </div>
          <div class="progress-of-word-block">
            <div class="num-block-progress">
              <img src="@/assets/images/04.png" alt="">
              <h2>Разрабатываем <br> дизайн</h2>
            </div>
            <img src="@/assets/images/MaskGroup(4).png" alt="">
          </div>
          <div class="progress-of-word-block">
            <div class="num-block-progress">
              <img src="@/assets/images/05.png" alt="">
              <h2>Адаптивная <br> верстка</h2>
            </div>
            <img src="@/assets/images/MaskGroup(5).png" alt="">
          </div>
          <div class="progress-of-word-block">
            <div class="num-block-progress">
              <img src="@/assets/images/06.png" alt="">
              <h2>Программная <br> настройка</h2>
            </div>
            <img src="@/assets/images/MaskGroup(6).png" alt="">
          </div>
          <div class="progress-of-word-block">
            <div class="num-block-progress">
              <img src="@/assets/images/07.png" alt="">
              <h2>Наполнение <br> контентом</h2>
            </div>
            <img src="@/assets/images/MaskGroup(7).png" alt="">
          </div>
          <div class="progress-of-word-block">
            <div class="num-block-progress">
              <img src="@/assets/images/08.png" alt="">
              <h2>Тестирование <br> и запуск</h2>
            </div>
            <img src="@/assets/images/MaskGroup(9).png" alt="">
          </div>
        </div>
        <div class="progress-of-work-content-button">
          <button>ЗАКАЗАТЬ ПРОЕКТ</button>
        </div>
      </div>
    </section>
    <section id="form-project" class="form-project">
      <div class="form-project-content">
        <h1>Давайте обсудим ваш <span>проект</span></h1>
        <p>Объясните нам свой проект, и мы свяжемся с Вами <br> сразу же как сделаем расчет.</p>
        <form @submit.prevent="submitForm" method="post">
          <div class="inputs-block">
            <input v-model="formData.nameClient" type="text" id="name" name="name" required placeholder="Имя"><br>

            <input v-model="formData.phone" type="tel" id="phone" name="phone" required placeholder="Телефон"><br>

            <input v-model="formData.email" type="email" id="email" name="email" required placeholder="E-mail"><br>
          </div>

          <div class="input-button-block">
          <textarea v-model="formData.whatuneed" placeholder="Опишите кратко что вам нужно" id="project_description" name="project_description"
                    rows="4" cols="50" required></textarea><br>

            <input type="submit" value="ОТПРАВИТЬ СООБЩЕНИЕ">
          </div>
        </form>
      </div>
    </section>
    <section class="add-services">
      <div class="add-service-content">
        <h1>Дополнительные <span>услуги</span></h1>

        <div class="block-add-service-content">
          <div class="row-block-add-service-content">
            <img src="@/assets/images/Rectangle68.png" alt="" width="540px" height="540px">
            <div class="info-row-block-add-service-content">
              <h2>Маркетинг <br>
                и продвижение</h2>
              <div class="row-text-info-row-block-add-SC">
                <img src="@/assets/images/ТочкаКрасная.png" alt="" width="16px" height="16px">
                <p>Поисковая оптимизация</p>
              </div>
              <div class="row-text-info-row-block-add-SC">
                <img src="@/assets/images/ТочкаКрасная.png" alt="" width="16px" height="16px">
                <p>Уникальный контент</p>
              </div>
              <div class="row-text-info-row-block-add-SC">
                <img src="@/assets/images/ТочкаКрасная.png" alt="" width="16px" height="16px">
                <p>Контекстная и банерная реклама</p>
              </div>
              <div class="row-text-info-row-block-add-SC">
                <img src="@/assets/images/ТочкаКрасная.png" alt="" width="16px" height="16px">
                <p>Продвижение в соцсетях</p>
              </div>
              <button>Заказать продвижение</button>
            </div>
          </div>
          <div class="row-block-add-service-content">
            <div class="info-row-block-add-service-content">
              <h2>Дизайн</h2>
              <div class="row-text-info-row-block-add-SC">
                <img src="@/assets/images/ТочкаКрасная.png" alt="" width="16px" height="16px">
                <p>Разработка корпоративного <br>
                  стиля</p>
              </div>
              <div class="row-text-info-row-block-add-SC">
                <img src="@/assets/images/ТочкаКрасная.png" alt="" width="16px" height="16px">
                <p>Разработка логотипа</p>
              </div>
              <div class="row-text-info-row-block-add-SC">
                <img src="@/assets/images/ТочкаКрасная.png" alt="" width="16px" height="16px">
                <p>Уникальный дизайн <br>
                  для Вашего сайта</p>
              </div>
              <button>Заказать разработку</button>
            </div>
            <img class="img-row-block-add-service-content" src="@/assets/images/Rectangle66.png" alt="" width="540px">
          </div>
        </div>
      </div>
    </section>
    <Footer></Footer>
  </div>
</template>