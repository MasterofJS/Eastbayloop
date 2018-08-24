<template>
  <div class="adventure-page">
    <Header/>
    <div class="banner-section">
      <CategorySlider />
    </div>
    <div class="page-section adventures-section">
      <div class="container">
        <div class="row adventures-section__header">
          <h2 class="page-section__title">Adventure</h2>
          <div class="adventures-section__filter">
            <select class="custom-select custom-select-lg">
              <option selected>Location Filter</option>
              <option value="1">Location1</option>
              <option value="2">Location2</option>
              <option value="3">Location3</option>
            </select>
            <button type="button" class="btn btn-black">Find Filter</button>
          </div>
        </div>
        <div class="row adventures__gv">
          <div v-for="(adventure, index) in adventures" :key="index" class="col-lg-4 col-md-6">
            <div class="adventure-thumbnail">
              <div class="adventure-thumbnail__content" :style="'background-image: url(' + adventure.image + ')'">
                <div class="adventure-thumbnail__content__overlay">
                  <h3>Adventure {{ adventure.id }}</h3>
                  <button class="btn btn-yellow">(Sell Tickets)</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="page-section events-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="page-section__title">Events</h2>
            <p class="page-section__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius nulla ac ipsum pharetra, sodales euismod est rhoncus.</p>
          </div>
        </div>
        <div class="row events">
          <Event :id="1"/>
          <Event :id="2"/>
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import Header from '../layouts/Header.vue';
import Footer from '../layouts/Footer.vue';
import Event from '../components/Event.vue';
import CategorySlider from '../components/CategorySlider.vue';

export default {
  name: 'adventure-page',
  components: {
    Header,
    Footer,
    Event,
    CategorySlider
  },
  data: function () {
    return {
      adventures: []
    }
  },
  mounted: function () {
    for(let i = 1; i <= 9; i++) {
      this.adventures.push({image: require('../../images/adventure1.jpg')})
    }
  }
};
</script>
