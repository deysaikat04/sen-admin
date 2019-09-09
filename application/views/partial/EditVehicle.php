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
                    <h5 class="panel-title">Edit Vehicle</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>
            <?php
            if($product_data){
                foreach ($product_data as $row) 
            {?>

            <div class="panel-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group form-group-material">
                            <label class="control-label">Name of the Vehicle</label>
                            <input type="text" class="form-control" name="vehicleName" placeholder="Name of the Vehicle" value="<?php echo $row->Pr_name;?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-material">
                            <label class="control-label">Vehicle Description</label>
                            <input type="text" class="form-control" name="vehicleDescr" placeholder="Vehicle Description" value="<?php echo $row->Description;?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Maker</label>
                            <input type="text" class="form-control" name="maker" placeholder="Maker" value="<?php echo $row->Maker;?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Displacement</label>
                            <input type="text" class="form-control" name="displace" placeholder="Displacement" value="<?php echo $row->Displacement?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Fuel</label>
                            <input type="text" class="form-control" name="fuel" placeholder="Fuel" value="<?php echo $row->Fuel?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Capacity</label>
                            <input type="text" class="form-control" name="capacity" placeholder="Capacity" value="<?php echo $row->Capacity?>">
                        </div>
                    </div>
                </div><div class="row">
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Vehicle inspection crack</label>
                            <input type="text" class="form-control" name="inspection" placeholder="Vehicle inspection crack" value="<?php echo $row->VIC?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Inspection record</label>
                            <input type="text" class="form-control" name="inspecRecord" placeholder="Inspection record" value="<?php echo $row->InsRecord?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Speed ​​control device</label>
                            <input type="text" class="form-control" name="spdCon" placeholder="Speed ​​control device" value="<?php echo $row->SCD?>" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Exhaust gas regulation</label>
                            <input type="text" class="form-control" name="exhust" placeholder="Exhaust gas regulation" value="<?php echo $row->EGR?>">
                        </div>
                    </div>
                </div><div class="row">
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Vehicle total weight</label>
                            <input type="text" class="form-control" name="totalWeig" placeholder="Vehicle total weight" value="<?php echo $row->VWeightTot?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material mt-20">
                            <select name="category" class="selectbox">
                                <?php foreach (unserialize(VCATEGORY) as $cats) { 
                                    if($cats['id']==$row->CatId) {?>
                                    <option value="<?php echo $cats['id'];?>"><?php echo $cats['name'];?></option>
                               <?php  }}?>
                                    <option value="">Select a Category</option>
                                        <?php foreach (unserialize(VCATEGORY) as $cats) { ?>
                                    <option value="<?php echo $cats['id'];?>"><?php echo $cats['name'];?></option>
                                        <?php  }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Model year</label>
                            <input type="text" class="form-control" name="modelYear" placeholder="Model year" value="<?php echo $row->ModelYear?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Model</label>
                            <input type="text" class="form-control" name="model" placeholder="Model" value="<?php echo $row->Model2?>">
                        </div>
                    </div>
                </div><div class="row">
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Shape</label>
                            <input type="text" class="form-control" name="shape" placeholder="Shape" value="<?php echo $row->Shape?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Body color</label>
                            <input type="text" class="form-control" name="color" placeholder="Body color" value="<?php echo $row->BColor?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Body dimensions</label>
                             <input type="text" class="form-control" name="dimension" placeholder="Body dimensions" value="<?php echo $row->BDimension?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Vehicle weight</label>
                            <input type="text" class="form-control" name="vehicleWeight" placeholder="Vehicle weight" value="<?php echo $row->VWeight?>">
                        </div>
                    </div>
                </div><div class="row">
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Mileage</label>
                            <input type="text" class="form-control" name="mileage" placeholder="Mileage" value="<?php echo $row->Mileage?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Elephant manufacturer</label>
                            <input type="text" class="form-control" name="elephantManufacturer" placeholder="Elephant manufacturer" value="<?php echo $row->EManf?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Package dimensions (cm)</label>
                            <input type="text" class="form-control" name="packageDimen" placeholder="Package dimensions (cm)" value="<?php echo $row->PackDim?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Maximum loading capacity</label>
                            <input type="text" class="form-control" name="maxLoadCap" placeholder="Maximum loading capacity" value="<?php echo $row->MaxLCapacity?>">
                        </div>
                    </div>
                </div><div class="row">
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Prime mover</label>
                            <input type="text" class="form-control" name="primeMover" placeholder="Prime mover" value="<?php echo $row->PMover?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <label class="control-label">Mission</label>
                            <input type="text" class="form-control" name="mission" placeholder="Mission" value="<?php echo $row->Mission?>">
                        </div>
                    </div>
                   <!-- <div class="col-md-3">
                        <div class="form-group mt-20">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="recom" class="control-info">
                                    Mark as Recomended ?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-material">
                            <input type="file" class="form-control" name="leadImg" placeholder="Lead Image">
                            <span class="help-block">Add an Image as a Display Image. May be a vehicle's front view</span>
                        </div>
                    </div>-->
                </div>
            </div> <!--********************End of panel-body*********************-->
            <?php }
               }
            ?>       
                <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-3 pull-right">
                                <input type="text" hidden="hidden" name="id" value="<?php echo $row->Id?>">
                                <button type="reset" class="btn bg-danger"><i class="icon-reload-alt position-left"></i> Reset</button>
                                <button type="submit" class="btn bg-green-600"><i class="icon-floppy-disk position-left"></i> Save</button>
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
                                <button type="submit" class="btn bg-violet-700"><i class="icon-floppy-disk position-left"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>-->
            </form>
            <!-- lEAD IMAGE -->
            <?php
            if($product_data){
                foreach ($product_data as $row) 
            {?>
            <form action="<?php echo base_url()?>Dashboard/updateLeadImg/<?php echo $row->Id?>" method="post" enctype="multipart/form-data">
            <div class="panel panel-flat border-top-lg border-top-blue-600 border-bottom-blue-600">
                <div class="panel-heading">
                    <h5 class="panel-title">Edit Vehicle Display Image</h5>
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
               <?php 
                if($count==1) {
                  if($product_Limage) { ?>
                    
                        <?php
                        foreach ($product_Limage as $img_row) {?>
                                <div class="col-lg-3 col-md-6">
                        <div class="thumbnail no-padding">
                        <div class="thumb">
                        <img src="<?php echo $img_row->Path; ?>" alt="img">
                        <div class="caption-overflow">
                        <span>
                            <a href="<?php echo base_url();?>Dashboard/deleteImage/<?php echo $img_row->id?>/<?php echo $img_row->Prod_Id;?>" class="btn bg-danger-400 btn-icon btn-xs"><i class="icon-trash"></i></a>
                        </span>
                        </div>
                        </div>
                        </div>
                        </div>
                        <?php } ?>
                    
                <?php } 
                    } else{?>
                    <div class="form-group form-group-material">
                       <input type="file" class="form-control" name="leadImg" placeholder="Lead Image" required>
                       <span class="help-block">Add an Image as a Display Image. May be a vehicle's front view</span>
                    </div>
                    
                    <div class="col-md-3 pull-right">                      
                       <button type="reset" class="btn bg-danger"><i class="icon-reload-alt position-left"></i> Reset</button>
                       <button type="submit" class="btn bg-green-600"><i class="icon-floppy-disk position-left"></i> Save</button>
                    </div>
                    
                <?php } ?>
                </div>
            </div>
            </div>
            </form>
            <?php } } ?>
            <!-- OTHER IMAGES-->
            <div class="panel panel-flat border-top-lg border-top-blue-600 border-bottom-blue-600">
                <div class="panel-heading">
                    <h5 class="panel-title">Edit Vehicle Images</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

            <div class="panel-body">
                <?php if($product_Oimage) { ?>
                <div class="row">
                <?php
            foreach ($product_Oimage as $img_row) {?>
                    <div class="col-lg-3 col-md-6">
			<div class="thumbnail no-padding">
			<div class="thumb">
			<img src="<?php echo $img_row->Path; ?>" alt="img">
			<div class="caption-overflow">
			<span>
				<a href="<?php echo base_url();?>Dashboard/deleteImage/<?php echo $img_row->id?>/<?php echo $img_row->Prod_Id;?>" class="btn bg-danger-400 btn-icon btn-xs"><i class="icon-trash"></i></a>
			</span>
			</div>
			</div>
			</div>
			</div>
		<?php } ?>
		
                </div>
                <?php } ?>
            </div>
            </div>
            
            <!-- Multiple file upload -->
                <div class="panel panel-flat border-top-lg border-top-pink-300 border-bottom-pink-300">
                    <div class="panel-heading">
                        <h5 class="panel-title">Upload More Vehicle Images</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
            <?php
            if($product_data){
                foreach ($product_data as $row) 
            {?>
                <form action="<?php echo base_url()?>Dashboard/uploadImages/<?php echo $row->Id?>" method="post" enctype="multipart/form-data">
                    <div class="panel-body">			
                        <p class="text-semibold">Select Files to Upload:</p>
                        <div class="form-group">
                            <input type="file" class="file-input" name="userFiles[]" data-main-class="input-group" multiple="multiple">
                            <span class="help-block">Default file input</span>
                        </div>
                    </div>
	                    <div class="panel-footer">
	                    <!--<input type="hidden" name="pr_id" hidden="hidden" value="<?php //echo $lead_img_data[0]->Prod_Id; ?>">-->
	                        <div class="row">
	                            <div class="col-md-2 text-center pull-right">
	                                <button type="submit" class="btn bg-green-700"><i class="icon-floppy-disk position-left"></i> Save</button>
	                            </div>
	                        </div>
	                    </div>
                    </form>
                    <?php   } } ?>
                </div>
                <!-- /multiple file upload -->
            
        </div>
      </div>
    </div>
</div>

