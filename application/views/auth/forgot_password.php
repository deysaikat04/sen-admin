<?php $this->load->view('common/auth_header'); ?>
<!--<p>--><?php //echo sprintf(lang('forgot_password_subheading'), $identity_label);?><!--</p>-->
<!---->
<!--<div id="infoMessage">--><?php //echo $message;?><!--</div>-->
<!---->
<?php //echo form_open("auth/forgot_password");?>
<!---->
<!--      <p>-->
<!--      	<label for="identity">--><?php //echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?><!--</label> <br />-->
<!--      	--><?php //echo form_input($identity);?>
<!--      </p>-->
<!---->
<!--      <p>--><?php //echo form_submit('submit', lang('forgot_password_submit_btn'));?><!--</p>-->





    <!-- Page container -->
    <div class="page-container">

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
                    <!-- Password recovery -->
                    <?php echo form_open("auth/forgot_password");?>
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
                                <h5 class="content-group">Password recovery <small class="display-block">We'll send you instructions in email</small></h5>
                            </div>

                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" placeholder="Your email">
                                <div class="form-control-feedback">
                                    <i class="icon-mail5 text-muted"></i>
                                </div>
                            </div>

                            <button type="submit" class="btn bg-pink-400 btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                        <?php echo form_close();?>
                    <!-- /password recovery -->


                    <!-- Footer -->
                    <div class="footer text-muted text-center">
                        Copyright &copy; 2014.
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