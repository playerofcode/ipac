    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url();?>assets/img/banner/25.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Downloads</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url();?>"><i class="fas fa-home"></i> Home</a></li>
                        <!-- <li><a href="#">Page</a></li> -->
                        <li class="active">Downloads</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section id="advisor" class="advisor-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="advisor-items text-center text-light">
                    
                    <!-- Single Item -->
                    <?php foreach ($campaign as $key): ?>
                    <div class="col-md-3 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <a href="<?php echo base_url('home/campaigns/'.$key->id);?>"><img src="<?php echo base_url($key->poster);?>" alt="Poster" style="height: 200px;"></a>
                                <div class="info-title">
                                    <h4><?php echo $key->title; ?></h4>
                                    <span><?php echo $key->sub_title; ?></span>
                                </div>
                            </div>    
                        </div>
                    </div> 
                     <?php endforeach ?>
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </section>
    <!--End Advisor Area -->