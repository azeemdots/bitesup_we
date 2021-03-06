<?php
echo $top;
echo $header_top;
?>
<!--Sub Header-->
<section class="sub-header">
    <!--    <div class="search-bar horizontal collapse" id="redefine-search-form"></div>-->
    <!-- /.search-bar -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i></a></li>
                <li><a href="<?= site_url('main/register'); ?>">Register</a></li>
            </ol>
            <!-- /.breadcrumb-->
        </div>
        <!-- /.container-->
    </div>
    <!-- /.breadcrumb-wrapper-->
</section>
<!--end Sub Header-->
<!--Page Content-->
<div id="page-content">
    <section class="container">
        <div class="block">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <header>
                        <h1 class="page-title">Register</h1>
                    </header>
                    <hr>
                    <form  id="register_user" name="register_user" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="form-register-first-name">First Name:</label>
                            <input type="text" class="form-control" id="form-register-first-name" name="first_name" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-register-last-name">Last Name:</label>
                            <input type="text" class="form-control" id="form-register-last-name" name="last_name" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-register-full-name">Username:</label>
                            <input type="text" class="form-control" id="form-register-full-name" name="username" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-register-email">Email:</label>
                            <input type="email" class="form-control" id="form-register-email" name="email" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-register-password">Password:</label>
                            <input type="password" class="form-control" id="form-register-password" name="password" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-register-confirm-password">Confirm Password:</label>
                            <input type="password" class="form-control" id="form-register-confirm-password" name="form-register-confirm-password" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-register-date">Date of Birth:</label>
                            <div class="input-group input-append date">
                                <input type="text" class="form-control" name="dob" />
                                <span class=" add-on"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-register-gender">Gender:</label>
                            <div class="radio">
                                <label><input type="radio" name="gender" class="radio"  value="male">Male</label><br>
                                <label><input type="radio" name="gender" class="radio"  value="female">Female</label>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="model">Country:</label>
                            <select name="country" id="model" multiple title="Select Country" data-live-search="true">
                                <option value="1">Pakistan</option>
                                <option value="2">UK</option>
                                <option value="3">Turkey</option>
                                <option value="4">America</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="form-register-confirm-password">Phone:</label>
                            <input type="text" class="form-control" id="form-register-confirm-password" name="phone" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-register-user_tags">User Tags</label>
                            <input type="text" class="form-control" data-role="tagsinput" name="tags">
                        </div>
                        <!--/.form-group--> 
                        <div class="form-group">
                            <label for="form-register-date">User Image:</label>
                            <div class="input-group input-append">
                                <input type="file" class="form-control" name="user_image" />
                                <span class=" add-on"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-register-date">Cover Image:</label>
                            <div class="input-group input-append">
                                <input type="file" class="form-control" name="cover_image" />
                                <span class=" add-on"></span>
                            </div>
                        </div>
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox" class="checkbox" name="newsletter">Receive Newsletter
                            </label>
                        </div>
                        <div class="form-group clearfix">
                            <input type="submit" name="register_user" class="btn pull-right btn-default" id="register_user" value="Create Account">
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class="center">
                        <figure class="note">By clicking the “Create an Account” button you agree with our <a href="terms-conditions.html" class="link">Terms and conditions</a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.block-->
</div>
<!-- end Page Content-->
<?php
echo $footer;
?>