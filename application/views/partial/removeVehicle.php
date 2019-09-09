<div class="content-wrapper"><!-- Content wrapper -->
    <!-- Content area -->
    <div class="content">
        <div class="row">
         <div class="col-lg-12">
            <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <?php if($this->session->flashdata('addFromValErr')){ ?>
                        <div class="alert bg-danger alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold"> Opps! </span><?php echo $this->session->flashdata('addFromValErr'); ?>
<!--                            Name of the Vehicle and Vehicle Description should not be empty.-->
                        </div>
                    <?php }?>
                        <?php if($this->session->flashdata('addFromSucc')){ ?>
                            <div class="alert bg-success alert-styled-left">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                <span class="text-semibold">Well done!</span> You successfully added a vehicle in the record.
                            </div>
                        <?php } ?>
                    </div>
            </div>
                <!-- Display -->
         <form action="<?php echo base_url()?>Dashboard/editVehicle" method="post" enctype="multipart/form-data">
            <div class="panel panel-flat border-top-lg border-top-blue-600 border-bottom-blue-600">
                <div class="panel-heading">
                    <h5 class="panel-title">Remove Vehicle</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>
            <?php
            foreach ($product_data->result() as $row) 
            {?>

            <div class="panel-body">
                <div class="row">
                    <table class="table datatable table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Status</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#"><?php echo $row->Pr_name;?></a></td>
                                <td>

                                        <?php if($row->Status==1){
                                                echo "<span class=\"label label-success\">Active </span>";}
                                                else { echo "<span class=\"label label-default\">Inactive </span>";}
                                        ?>
                                </td>
                                <td><a href="<?php echo base_url()?>Dashboard/removeStatus/<?php echo $row->Id; ?>/<?php echo $row->Status; ?>">Change</a></td>
                            </tr>                 
                        </tbody>
                    </table>
                </div>  
            </div> <!--********************End of panel-body*********************-->
            <?php }
            ?>       
                <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-3 pull-right">
                                <input type="text" hidden="hidden" name="id" value="<?php echo $row->Id?>">
                                <button type="reset" class="btn bg-danger"><i class="icon-reload-alt position-left"></i> Reset</button>
                                <button type="submit" class="btn bg-violet-700"><i class="icon-floppy-disk position-left"></i> Save</button>
                            </div>
                        </div>
                    </div>                
            </div>
             <!--<div class="panel panel-flat border-top-lg border-top-pink-300 border-bottom-pink-300">
                    <div class="panel-heading">
                        <h5 class="panel-title">Uploaded Media</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                        <p class="text-semibold">Uploaded Image</p>
                        <div class="form-group">
                        <?php // foreach ($image_data->result() as $row) {?>
                            
                            <img src=" <?php // echo $row['Path'] ?>">
                              <?php // } ?>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-3 pull-right">
                                <button type="reset" class="btn bg-danger"><i class="icon-reload-alt position-left"></i> Reset</button>
                                <button type="submit" class="btn bg-violet-700"><i class="icon-floppy-disk position-left"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>-->
            </form>
        </div>
      </div>
    </div>
</div>
