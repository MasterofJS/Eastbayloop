<template>
  <div class="adventure-page">
    <Header/>
    <div class="banner-section">
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
                <div class="col-lg-4 col-md-6">
                    <div class="adventure-thumbnail">
                        <div class="adventure-thumbnail__content" :style="'background-image: url(' + require('../../images/adventure1.jpg') + ')'">
                            <div class="adventure-thumbnail__content__overlay">
                                <h3>Adventure 1</h3>
                                <button class="btn btn-yellow">(Sell Tickets)</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="adventure-thumbnail">
                        <div class="adventure-thumbnail__content" :style="'background-image: url(' + require('../../images/adventure1.jpg') + ')'">
                            <div class="adventure-thumbnail__content__overlay">
                                <h3>Adventure 2</h3>
                                <button class="btn btn-yellow">(Sell Tickets)</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="adventure-thumbnail">
                        <div class="adventure-thumbnail__content" :style="'background-image: url(' + require('../../images/adventure1.jpg') + ')'">
                            <div class="adventure-thumbnail__content__overlay">
                                <h3>Adventure 3</h3>
                                <button class="btn btn-yellow">(Sell Tickets)</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="adventure-thumbnail">
                        <div class="adventure-thumbnail__content" :style="'background-image: url(' + require('../../images/adventure1.jpg') + ')'">
                            <div class="adventure-thumbnail__content__overlay">
                                <h3>Adventure 4</h3>
                                <button class="btn btn-yellow">(Sell Tickets)</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="adventure-thumbnail">
                        <div class="adventure-thumbnail__content" :style="'background-image: url(' + require('../../images/adventure1.jpg') + ')'">
                            <div class="adventure-thumbnail__content__overlay">
                                <h3>Adventure 5</h3>
                                <button class="btn btn-yellow">(Sell Tickets)</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="adventure-thumbnail">
                        <div class="adventure-thumbnail__content" :style="'background-image: url(' + require('../../images/adventure1.jpg') + ')'">
                            <div class="adventure-thumbnail__content__overlay">
                                <h3>Adventure 6</h3>
                                <button class="btn btn-yellow">(Sell Tickets)</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="adventure-thumbnail">
                        <div class="adventure-thumbnail__content" :style="'background-image: url(' + require('../../images/adventure1.jpg') + ')'">
                            <div class="adventure-thumbnail__content__overlay">
                                <h3>Adventure 7</h3>
                                <button class="btn btn-yellow">(Sell Tickets)</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="adventure-thumbnail">
                        <div class="adventure-thumbnail__content" :style="'background-image: url(' + require('../../images/adventure1.jpg') + ')'">
                            <div class="adventure-thumbnail__content__overlay">
                                <h3>Adventure 8</h3>
                                <button class="btn btn-yellow">(Sell Tickets)</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="adventure-thumbnail">
                        <div class="adventure-thumbnail__content" :style="'background-image: url(' + require('../../images/adventure1.jpg') + ')'">
                            <div class="adventure-thumbnail__content__overlay">
                                <h3>Adventure 9</h3>
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
                <div class="event">
                    <div class="event__img" :style="'background-image: url(' + require('../../images/event1.jpg') + ')'">
                    </div>
                    <div class="event__content">
                        <div class="event__content__head">
                            <h4>FOLRENCE + THE MACHINE <span>8PM</span></h4>
                            <h6>Cold War Kids <span>7pm</span></h6>
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
                <div class="event">
                    <div class="event__img" :style="'background-image: url(' + require('../../images/event2.jpg') + ')'">
                    </div>
                    <div class="event__content">
                        <div class="event__content__head">
                            <h4>FOLRENCE + THE MACHINE <span>8PM</span></h4>
                            <h6>Cold War Kids <span>7pm</span></h6>
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
        </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import Header from '../layouts/Header.vue';
import Footer from '../layouts/Footer.vue';

export default {
  name: 'adventure-page',
  components: {
    Header,
    Footer,
  },
};
</script>
