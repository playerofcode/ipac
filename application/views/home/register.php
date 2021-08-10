<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?php echo base_url();?>assets/img/banner/12.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Register</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url();?>"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="#" >
                        <div class="col-md-12 ">
                            <h4>Register a new account</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" placeholder="Enter Your Name" name="name" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input class="form-control" placeholder="Enter Your Mobile Number" name="mobno"  type="tel">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" placeholder="Enter Your Email" name="email"  type="email">
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="row ">
                                    <div class="form-group">
                                        <label>Gender</label>
                                       <select name="gender" class="form-control">
                                           <option value="Male">Male</option>
                                           <option value="Female">Female</option>
                                       </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input class="form-control" placeholder="Enter Your Age" name="age"  type="numer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Higher Qualification</label>
                                        <select name="education" class="form-control">
                                            <option value="High School">High School</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Graduate">Graduate</option>
                                            <option value="Post Graduate">Post Graduate</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <input class="form-control" placeholder="Enter Your Occupation" name="occupation" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Cost</label>
                                        <input class="form-control" placeholder="Enter Your Cost" name="cost" type="text">
                                    </div>
                                </div>
                            </div>
                           
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select name="country_id" id="country_id" class="form-control" >
                                            <option selected="" disabled="">Select Country</option>
                                            <?php foreach ($country as $key): ?>
                                                <option value="<?php echo $key->country_id;?>"><?php echo $key->country_name; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                     <div class="form-group">
                                        <label>State</label>
                                        <select name="state_id" id="state_id" class="form-control">
                                            <option >Select State</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>District</label>
                                        <select name="state_id" id="district_id" class="form-control">
                                            <option selected="" disabled="">Select District</option>
                                        </select>
                                    </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>