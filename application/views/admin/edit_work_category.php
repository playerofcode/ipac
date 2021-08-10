 <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Basic Form Inputs</h5>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">s
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index-2.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                  
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Update Campaign</h5>
                                                        <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
                                                    </div>
                                                    <div class="card-block">
                                                       <!--  <h4 class="sub-title">Basic Inputs</h4> -->
                                                       <?php foreach ($work_categorys as $key): ?>
                                                        <form method="post" action="<?php echo base_url('admin/updateWorkCategory/'.$key->id);?>" enctype="multipart/form-data">
                                                        	<center><img src="<?php echo base_url($key->poster);?>" style="height: 120px;width:160px;border-radius: 20px;margin:20px;box-shadow: 0px 5px 5px rgba(0,0,0,0.2);border:1px dashed orange;"></center>
                                                        	<div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Poster</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="poster" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">State Name</label>
                                                                <div class="col-sm-10">
                                                                    <select name="state_name" class="form-control">
                                                                        <?php foreach ($state as $res): ?>
                                                                              <option value="<?php echo $res->state_name;?>" <?php if($res->state_name==$key->state_name):echo 'selected';endif; ?>><?php echo $res->state_name; ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Year</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="year" class="form-control"
                                                                    placeholder="Enter  Year" value="<?php echo $key->year;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="name" class="form-control"
                                                                    placeholder="Enter  Name" value="<?php echo $key->name;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Short Description</label>
                                                                <div class="col-sm-10">
                                                                    <textarea class="form-control" rows="6" placeholder="Enter Short Description" name="short_description"><?php echo $key->short_description;?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group text-center">
                                                            	<input type="submit" class="btn btn-success"  value="Update Work Category"/>
                                                            </div>
                                                            </div>      
                                                                    </form>
                                                                    <?php endforeach ?>
                                                                </div>
                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Page body end -->
                                                        </div>
                                                    </div>
                                                    <!-- Main-body end -->
                                                    <div id="styleSelector">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
