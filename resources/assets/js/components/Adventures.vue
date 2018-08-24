<template>
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
</template>

<script>
export default {
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
}
</script>

<style>

</style>
