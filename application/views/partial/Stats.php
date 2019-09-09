<div class="content-wrapper"><!-- Content wrapper -->
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-lg-7">
                <!-- Traffic sources -->
               <!--  <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Traffic sources</h6>
                        <div class="heading-elements">
                            <form class="heading-form" action="#">
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                        <input type="checkbox" class="switch" checked="checked">
                                        Live update:
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list-inline text-center">
                                    <li>
                                        <a href="#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-plus3"></i></a>
                                    </li>
                                    <li class="text-left">
                                        <div class="text-semibold">New visitors</div>
                                        <div class="text-muted">2,349 avg</div>
                                    </li>
                                </ul>

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="content-group" id="new-visitors"></div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <ul class="list-inline text-center">
                                    <li>
                                        <a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-watch2"></i></a>
                                    </li>
                                    <li class="text-left">
                                        <div class="text-semibold">New sessions</div>
                                        <div class="text-muted">08:20 avg</div>
                                    </li>
                                </ul>

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="content-group" id="new-sessions"></div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <ul class="list-inline text-center">
                                    <li>
                                        <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-people"></i></a>
                                    </li>
                                    <li class="text-left">
                                        <div class="text-semibold">Total online</div>
                                        <div class="text-muted"><span class="status-mark border-success position-left"></span> 5,378 avg</div>
                                    </li>
                                </ul>

                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="content-group" id="total-online"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative" id="traffic-sources"></div>
                </div>
                /traffic sources -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div id="card" class="text-center">
                    <h4>Welcome in JIAUTO Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- simple statistics -->        
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-body  bg-success-400 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            <h3 class="no-margin"><?php echo $countAll['allCategory']; ?></h3>
                            <span class="text-uppercase text-size-mini">total categories</span>
                        </div>

                        <div class="media-right media-middle">
                           <i class="fa fa-tags fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="panel panel-body bg-blue-600 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body">
                            <h3 class="no-margin"><?php echo $countAll['allProd']; ?></h3>
                            <span class="text-uppercase text-size-mini">Total Vehicles</span>
                        </div>

                        <div class="media-right media-middle">
                            <i class="fa fa-car fa-3x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="panel panel-body bg-danger-600 has-bg-image">
                    <div class="media no-margin">

                        <div class="media-body">
                            <h3 class="no-margin"><?php echo $countAll['allinactive']; ?></h3>
                            <span class="text-uppercase text-size-mini">No of Inactive Vehicles</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-window-close-o fa-3x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-body bg-indigo-400 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body text-left">
                            <h3 class="no-margin"><?php echo $countAll['allRecomm']; ?></h3>
                            <span class="text-uppercase text-size-mini">No of Recommended Vehicles</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-check fa-3x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-body bg-orange-400 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body text-left">
                            <h3 class="no-margin"><?php echo $countAll['allImg']; ?></h3>
                            <span class="text-uppercase text-size-mini">Vehicles images</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-picture-o fa-3x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-body bg-green-800 has-bg-image">
                    <div class="media no-margin">
                        <div class="media-body text-left">
                            <h3 class="no-margin"><?php echo $countAll['allNotice']; ?></h3>
                            <span class="text-uppercase text-size-mini">Notices</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-sticky-note-o fa-3x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- /simple statistics -->
    </div><!-- Content area -->
</div><!-- Content wrapper -->