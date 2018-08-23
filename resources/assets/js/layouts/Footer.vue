<template>
  <footer id="site-footer">
    <div class="container">
      <div class="row site-footer__content">
        <p>2016 Copyright All Rights Reserved.</p>
        <ul>
          <li><i class="fa fa-facebook"></i></li>
          <li><i class="fa fa-twitter"></i></li>
          <li><i class="fa fa-google-plus"></i></li>
        </ul>
        <a class="btn btn-yellow" id="scroll-top" @click="scrollTop"><i class="fa fa-angle-double-up"></i></a>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  methods: {
    scrollTop: function () {
      let el = document.getElementById('site-header')
      el.scrollIntoView({behavior: "smooth", block: "start",})
    }
  }
}
</script>
