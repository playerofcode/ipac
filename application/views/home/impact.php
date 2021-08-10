     <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
      }

      .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
        -webkit-box-reflect: below -1px linear-gradient(transparent,transparent,#000000);
      }

      .swiper-slide img {
        display: block;
        width: 100%;
      }
    </style>
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url();?>assets/img/banner/12.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Impact</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url();?>"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Impact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio" class="portfolio-area default-padding">
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <?php foreach ($impact as $key): ?>
        <div class="swiper-slide">
          <img src="<?php echo base_url($key->image);?>" height="100%"/>
        </div> 
        <?php endforeach ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
