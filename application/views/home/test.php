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

                 <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select name="country_id" id="country_id" class="form-control">
                                            <option selected="" disabled="">Select Country</option>
                                            <?php foreach ($country as $key): ?>
                                                <option value="<?php echo $key->country_id;?>"><?php echo $key->country_name; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </section>