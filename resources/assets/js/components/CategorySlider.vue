<template>
  <div id="carouselAdventureIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselAdventureIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselAdventureIndicators" data-slide-to="1"></li>
      <li data-target="#carouselAdventureIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-item-content" :style="'background-image:url(' + require('../../images/adventure1.jpg')+')'">
          <h1>Adventure</h1>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-item-content" :style="'background-image:url(' + require('../../images/adventure2.jpg')+')'">
          <h1>Adventure</h1>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-item-content" :style="'background-image:url(' + require('../../images/adventure1.jpg')+')'">
          <h1>Adventure</h1>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
