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
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Add Job</h5>
                                                        <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
                                                    </div>
                                                    <div class="card-block">
                                                        <form method="post" action="<?php echo base_url('admin/postJob');?>" enctype="multipart/form-data">
                                                        	<div class="form-group">
                                                                <label>Choose Job Category</label>
                                                                <select name="cat_id" id="cat_id" class="form-control">
                                                                    <option disabled="" selected="">Choose Job Category</option>
                                                                <?php foreach ($join_category as $key): ?>
                                                                     <option value="<?php echo $key->id;?>"><?php echo $key->cat_name; ?></option>
                                                                 <?php endforeach ?> 
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Choose Sub Category</label>
                                                                <select name="sub_cat_id" id="sub_cat_id" class="form-control">
                                                                    
                                                                </select>
                                                            </div>  
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Responsibility</label>
                                                                <div class="col-sm-10">
                                                                    <textarea name="responsibilies" id="responsibilies"  cols="30" rows="5" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Minimum Qualification</label>
                                                                <div class="col-sm-10">
                                                                    <textarea name="min_qualification" id="min_qualification"  cols="30" rows="5" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Preferred Qualifications</label>
                                                                <div class="col-sm-10">
                                                                    <textarea name="preferred_qualification" id="responsibilies"  cols="30" rows="5" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Location</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="location" class="form-control"
                                                                    placeholder="Enter Location">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Designation</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="designation" class="form-control"
                                                                    placeholder="Enter Designation">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Short Notes</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="short_note" class="form-control"
                                                                    placeholder="Enter Short Note">
                                                                </div>
                                                            </div>
                                                            <div class="form-group text-center">
                                                            	<input type="submit" class="btn btn-success" value="Post Job"/>
                                                            </div>
                                                            </div>      
                                                                    </form>
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
