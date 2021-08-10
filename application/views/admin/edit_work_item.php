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
                                                        <h5>Update Work Item</h5>
                                                    </div>
                                                    <div class="card-block">
                                                       <?php foreach ($work_item as $key): ?>
                                                        <form method="post" action="<?php echo base_url('admin/updateWorkItem/'.$key->id);?>" enctype="multipart/form-data">
                                                        	<div class="form-group">
												                <label>Select Work Category</label>
												                <select name="cat_id" class="form-control">
												                    <option>Select Work Category</option>
												                    <?php foreach ($work_category as $res): ?>
												                    <option value="<?php echo $res->id; ?>" <?php if($res->id=$key->cat_id):echo 'selected';endif; ?>> <?php echo $res->name; ?></option>
												                    <?php endforeach ?>
												                </select>
												            </div>
                                                        	<center><img src="<?php echo base_url($key->image);?>" style="height: 120px;width:160px;border-radius: 20px;margin:20px;box-shadow: 0px 5px 5px rgba(0,0,0,0.2);border:1px dashed orange;"></center>
                                                        	<div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Image</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="image" class="form-control">
                                                            </div>
                                                        </div>
                                                            
                                                            <div class="form-group text-center">
                                                            	<input type="submit" class="btn btn-success" value="Update Work Item"/>
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