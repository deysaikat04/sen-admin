<?php $this->load->view('common/auth_header'); ?>

    <!-- Page container -->
    <div class="page-container darkbg">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">
                    <div class="text-center">
                        <div id="infoMessage">
                            <div id="infoMessage" class="text-danger-400"><?php echo $message;?></div>
                        </div>
                    </div>
                    <!-- Simple login form -->
                    <?php echo form_open("auth/login");?>
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5><strong>JIAUTO</strong></h4>
                                <h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <?php echo form_input($identity);?>
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <?php echo form_input($password);?>
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn bg-pink-400 btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
                            </div>

                            <div class="text-center">
                                <a href="create_user" class="btn bg-blue-800 btn-block">Register<i class="icon-circle-right2 position-right"></i></a>
                            </div>

                            <div class="text-center">
                                <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
                            </div>
                        </div>
                    <?php echo form_close();?>
                    <!-- /simple login form -->


                    <!-- Footer -->
                    <div class="footer text-muted text-center">
                        &copy; 2018. <a href="#"></a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

<?php $this->load->view('common/auth_footer'); ?>