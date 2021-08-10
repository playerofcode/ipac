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
                                    <div class="col-md-4">
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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Update Job Sub Category</h5>
                                                    </div>
                                                    <div class="card-block">
                                                       <?php foreach ($job_sub_category as $key): ?>
                                                        <form method="post" action="<?php echo base_url('admin/updateJobSubCategory/'.$key->id);?>" enctype="multipart/form-data">
                                                        	<div class="form-group">
												                <label>Select Job Category</label>
												                <select name="cat_id" class="form-control">
												                    <option>Select Job Category</option>
												                    <?php foreach ($join_category as $res): ?>
												                    <option value="<?php echo $res->id; ?>" <?php if($res->id=$key->cat_id):echo 'selected';endif; ?>> <?php echo $res->cat_name; ?></option>
												                    <?php endforeach ?>
												                </select>
												            </div>
                                                        	<div class="form-group">
                                                                <label>Sub Category Name</label>
                                                                <input type="text" name="sub_cat_name" value="<?php echo $key->sub_cat_name;?>" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group text-center">
                                                            	<input type="submit" class="btn btn-success" value="Update Job Sub Category"/>
                                                            </div>
                                                            </div>      
                                                                    </form>
                                                                    <?php endforeach ?>
                                                                </div>
                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>