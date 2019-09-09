<!-- Main navbar -->
<div class="navbar navbar-default header-highlight">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">JIAUTO ADMIN PANEL</a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>


        </ul>

        <div class="navbar-right">
            <p class="navbar-text"><span class="label bg-success">Online</span></p>

            <ul class="nav navbar-nav">
                <li class="">
                    <a href="<?php echo base_url();?>Auth/logout">
                        <i class="icon-switch2"></i>
                        <span class="visible-xs-inline-block position-right">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /main navbar -->