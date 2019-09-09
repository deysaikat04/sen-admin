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
                <!-- Text inputs -->
                <form action="<?php echo base_url()?>Dashboard/addVehicle" method="post" enctype="multipart/form-data">
                <div class="panel panel-flat border-top-lg border-top-violet-800 border-bottom-violet-800">
                    <div class="panel-heading">
                        <h5 class="panel-title">Add New Vehicle</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Name of the Vehicle</label>
                                    <input type="text" class="form-control" name="vehicleName" placeholder="Name of the Vehicle" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Vehicle Description</label>
                                    <input type="text" class="form-control" name="vehicleDescr" placeholder="Vehicle Description" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Maker</label>
                                    <input type="text" class="form-control" name="maker" placeholder="Maker">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Displacement</label>
                                    <input type="text" class="form-control" name="displace" placeholder="Displacement">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Fuel</label>
                                    <input type="text" class="form-control" name="fuel" placeholder="Fuel">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Capacity</label>
                                    <input type="text" class="form-control" name="capacity" placeholder="Capacity">
                                </div>
                            </div>
                        </div><div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Vehicle inspection crack</label>
                                    <input type="text" class="form-control" name="inspection" placeholder="Vehicle inspection crack">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Inspection record</label>
                                    <input type="text" class="form-control" name="inspecRecord" placeholder="Inspection record">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Speed ​​control device</label>
                                    <input type="text" class="form-control" name="spdCon" placeholder="Speed ​​control device">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Exhaust gas regulation</label>
                                    <input type="text" class="form-control" name="exhust" placeholder="Exhaust gas regulation">
                                </div>
                            </div>
                        </div><div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Vehicle total weight</label>
                                    <input type="text" class="form-control" name="totalWeig" placeholder="Vehicle total weight">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material mt-20">
                                    <select name="category" class="selectbox" required>
                                        <option value="0">Select a Category </option>
                                        <?php foreach (unserialize(VCATEGORY) as $cats) { ?>
                                            <option value="<?php echo $cats['id'];?>"><?php echo $cats['name'];?></option>
                                        <?php  }?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Model year</label>
                                    <input type="text" class="form-control" name="modelYear" placeholder="Model year">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Model</label>
                                    <input type="text" class="form-control" name="model" placeholder="Model">
                                </div>
                            </div>
                        </div><div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Shape</label>
                                    <input type="text" class="form-control" name="shape" placeholder="Shape">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Body color</label>
                                    <input type="text" class="form-control" name="color" placeholder="Body color">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Body dimensions</label>
                                    <input type="text" class="form-control" name="dimension" placeholder="Body dimensions">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Vehicle weight</label>
                                    <input type="text" class="form-control" name="vehicleWeight" placeholder="Vehicle weight">
                                </div>
                            </div>
                        </div><div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Mileage</label>
                                    <input type="text" class="form-control" name="mileage" placeholder="Mileage">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Elephant manufacturer</label>
                                    <input type="text" class="form-control" name="elephantManufacturer" placeholder="Elephant manufacturer">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Package dimensions (cm)</label>
                                    <input type="text" class="form-control" name="packageDimen" placeholder="Package dimensions (cm)">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Maximum loading capacity</label>
                                    <input type="text" class="form-control" name="maxLoadCap" placeholder="Maximum loading capacity">
                                </div>
                            </div>
                        </div><div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Prime mover</label>
                                    <input type="text" class="form-control" name="primeMover" placeholder="Prime mover">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <label class="control-label">Mission</label>
                                    <input type="text" class="form-control" name="mission" placeholder="Mission">
                                </div>
                            </div>
                            <!--<div class="col-md-3">
                                <div class="form-group mt-20">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="recom" class="control-info">
                                            Mark as Recomended ?
                                        </label>
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-md-3">
                                <div class="form-group form-group-material">
                                    <input type="file" class="form-control" name="leadImg" placeholder="Lead Image" required>
                                    <span class="help-block">Add an Image as a Display Image. May be a vehicle's front view</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- Panel End-->
                <!-- /text inputs -->
                <!-- Multiple file upload -->
                <div class="panel panel-flat border-top-lg border-top-pink-300 border-bottom-pink-300">
                    <div class="panel-heading">
                        <h5 class="panel-title">Upload Media</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                        <p class="text-semibold">Select Files to Upload:</p>
                        <div class="form-group">
                            <input type="file" class="file-input" name="userFiles[]" data-main-class="input-group" multiple="multiple" required>
                            <span class="help-block">Default file input</span>
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
                </div>
                <!-- /multiple file upload -->
                    </form>
            </div>
        </div>
    </div>
</div>