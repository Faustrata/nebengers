
    <div class="text-center">
        <h2>Welcome to Nebengers</h2>
    </div>
    <div class="tab-content">

    <?php if($this->session->flashdata('captcha_error')) {?>
        <div class="alert alert-danger col-md-3" role="alert">
            <h4>Warning..!</h4>
            <?php echo $this->session->flashdata('captcha_error'); ?>
        </div>
    <?php }else if($this->session->flashdata('upload_error')){ ?>
        <div class="alert alert-danger col-md-3">
            <div class="text-center">
               <h1>Warning .. !!</h1>
                Upload Type / Format Image must be jpeg/jpg/png/bmp <br>
                Upload Size Image Less Then 1500 kb <br>
                Upload height Image Less Then 1400 kb <br>
                Upload width Image Less Then 1300 kb <br>
            </div>
        </div>
    <?php }else if($this->session->flashdata('register_success')){ ?>
        <div class="alert alert-success col-md-3">
            <div class="text-center">
               <h4>CONGRATULATION..!</h4>
                You have been already member now,
                Please Check Your E-mail to Confirmation and Sign In for the first time<br>
            </div>
        </div>
    <?php } ?>
        <div id="login" class="tab-pane active">
            <form action="<?php echo base_url()."member/signin" ?>" method="post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your e-mail and password
                </p>
                <input type="email" name="email" placeholder="E-mail" class="form-control" />
                <input type="password" name="password" placeholder="Password" class="form-control" />
                <button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>

        <div id="signup" class="tab-pane">

            <div class="tooltip-demo">
            <form id="popup-validation" action="<?php echo base_url()."member/signup" ?>" method="post" enctype="multipart/form-data" class="form-signin" >
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>

                <input type="text" name="fullname" data-toggle="tooltip" data-placement="left" title="Enter Alphabet a-zA-Z" required placeholder="Full Name" class="form-control huruf " />
                <input type="email" data-toggle="tooltip" data-placement="left" title="Include @ and . " name="email"  placeholder="Your E-mail" class="form-control" /><br>
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo base_url() ?>assets/img/demoUpload.jpg" alt="" /></div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="photo" /></span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>

                <input type="text" data-toggle="tooltip" data-placement="left" title="Enter Numeric 0-9 or + " name="phone"  required placeholder="Phone" class="form-control angka" /><br>
                <select class="form-control" name="gender" required>
                    <option value="" >Choose gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
                <input type="password" id="pass1" name="pass1" data-toggle="tooltip" data-placement="left" title="Enter Strong Password "  required placeholder="password" class="validate[required] form-control" />
                <input type="password" id="pass2" name="pass2" data-toggle="tooltip" data-placement="left" title="Must same with password" required placeholder="Re type password" class="validate[required,equals[pass1] form-control" />
                <p><?php echo $image;?></p>
                <input type="text" class="form-control" data-toggle="tooltip" data-placement="left" title="Enter Random Code" required" placeholder="enter captcha" name="captcha"><br>
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
            </form>
            </div>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>

