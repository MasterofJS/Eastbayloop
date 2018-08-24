<template>
  <div class="row events">
    <div class="event" v-for="(event , index) in [{id: 1}, {id: 2}]" :key="index">
      <div class="event__img" :style="'background-image: url(' + require('../../images/event'+ event.id +'.jpg') + ')'">
      </div>
      <div class="event__content">
        <div class="event__content__head">
          <h4>FOLRENCE + THE MACHINE <span>8PM</span></h4>
          <h6>Cold War Kids <span>7PM</span></h6>
        </div>
        <div class="event__content__body">
          <div class="event__date">
            <sup>OCT</sup><span>23</span>
          </div>
          <div class="event__description">
            <p>This event is 21 and over</p>
            <a href="#">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>  More Info
            </a>
          </div>
        </div>
      </div>
      <div class="event__more">
        <button class="btn btn-black">Read More</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    id: {
      type: Number,
      required: false
    }
  }
}
</script>
