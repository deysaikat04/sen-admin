<?php $this->load->view('common/Header'); ?>
<?php $this->load->view('common/Navbar'); ?>
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

<?php $this->load->view('common/Sidebar'); ?>
<?php $this->load->view($page); ?>

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
<?php $this->load->view('common/Footer'); ?>