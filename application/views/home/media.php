    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url();?>assets/img/banner/17.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Media</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url();?>"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Media</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="col-md-1"></div>
                    <div class="blog-content col-md-10">
                        <!-- Single Item -->
                        <?php foreach ($media as $key): ?>
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="<?php echo $key->link; ?>" target="_blank"><img src="<?php echo base_url($key->poster);?>" style="height:450px;width:100%;"></a>
                                    <div class="date">
                                        <h4><span><?php echo date('d',strtotime($key->created_at)); ?></span> <?php echo date('M, Y',strtotime($key->created_at)); ?></h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="<?php echo $key->link; ?>" target="_blank"><?php echo $key->title ?></a>
                                    </h3>
                                    <p class="text-justify">
                                        <?php echo $key->short_description; ?>
                                    </p>
                                    <a href="<?php echo $key->link; ?>" target="_blank">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                         <?php endforeach ?>
                        <!-- Single Item -->
                        <!-- Pagination -->
                       <center><?php echo $this->pagination->create_links(); ?></center>    
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->