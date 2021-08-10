                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Bootstrap Basic Tables</h5>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index-2.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Bootstrap Tables</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Basic Tables</a>
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
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        
                                        <!-- Hover table card start -->
                                        <div class="card">
                                             <?php if($responce = $this->session->flashdata('msg')): ?>
                     <div class="alert alert-danger"><?php echo $responce;?></div>
            <?php endif;?>
                                            <div class="card-header">
                                                <h5>All Added Job Category</h5>
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">+ Add Job Sub Category</button>
                                                <span>Click + Button to <code>add new job sub category </code> </span>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>S.No.</th>
                                                                <th>Category ID</th>
                                                                <th>Sub Category Name</th>
                                                                <th>Edit</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i=1;foreach ($job_sub_category as $key): ?>
                                                                <tr>
                                                                    <td><?php echo $i; ?></td>
                                                                    <td><?php echo $key->cat_id; ?></td>
                                                                    <td><?php echo $key->sub_cat_name; ?></td>
                                                                    <td><a  href="<?php echo base_url('admin/editJobSubCategory/'.$key->id); ?>">edit</a></td>
                                                                    <td><a onclick="return confirm('Are you sure?');" href="<?php echo base_url('admin/deleteJobSubCategory/'.$key->id); ?>">Delete</a></td>
                                                                </tr>
                                                            <?php $i++;endforeach ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hover table card end -->
                                    </div>
                                    <!-- Page-body end -->
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

   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Job Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/addJobSubCategory');?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Job Category Name</label>
                <select name="cat_id" class="form-control">
                    <option disabled="" selected="">Select Job Category</option>
                    <?php foreach ($join_category as $key): ?>
                        <option value="<?php echo $key->id; ?>"><?php echo $key->cat_name; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Job Sub Category</label>
                <input type="text" name="sub_cat_name" class="form-control" placeholder="Enter Job Sub Category" required="" />
            </div>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Job Sub Category</button>
      </div>
       </form>
    </div>
  </div>
</div>