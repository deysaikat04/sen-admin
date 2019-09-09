<div class="content-wrapper"><!-- Content wrapper -->
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Horizontal borders -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Recommended Vehicles</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							You can only add <code>Six</code>Vehicles as Recommended.
						</div>

						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center">Product Name</th>
                                        <th class="text-center">Maker</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Modify</th>
									</tr>
								</thead>
								<tbody>
								<?php
                                    if($recomm_product){
                                        foreach ($recomm_product as $row)
                                {?>
                                <tr>
									<td><a href="#"><?php echo $row->Pr_name;?></a></td>
                                    <td><?php   echo $row->Maker;  ?></td>
                                    <td class="text-center">
                                        <?php if($row->Status==1){ ?>
                                        <span class="label label-success">
                                            <?php echo "Active"; ?>
                                        </span>
                                       <?php } ?>
                                        <?php if($row->Status==0) { ?>
                                        <span class="label label-default">
                                           <?php  echo "Inactive"; ?>
                                        </span>
                                    <?php } ?>
                                    </td>
                                    <td class="text-center"><a href="<?php echo base_url()?>Dashboard/removeRecomm/<?php echo $row->Id; ?>/<?php echo $row->Recommended; ?>" class="change">Remove</a></td>
                                <tr>
								<?php }
                                    }?>	
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
                            <div class="row">  
                               <div class="col-md-1"></div>
                                <div class="col-md-3 pull-left">                                  
                                   <?php   if($count < 6){  ?>
                                        <a href="<?php echo base_url()?>Dashboard/editRecommended/1"><input type="submit" class="btn bg-blue-400" value="Add More" /></a>
                                    <?php }  else{  ?>
                                        <input type="submit" class="btn bg-blue-400" value="Add More" disabled/>
                                    <?php } ?>	                                    
                                </div>
                            </div> 
                        </div> 
                                         
					</div> 
                    <?php if($showtable == 1)
                      {?>
                      <div class="panel panel-flat">
                       <div class="panel-heading">
							<h5 class="panel-title">Add Vehicles as Recommended </h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
                        <table class="table datatable-basic table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Maker</th>
                                <th>Fuel</th>
                                <th>Body Dimension</th>                        
                                <th>Recommended</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($vehicleData->result() as $row)
                            {?>
                            <tr>
                                <td><a href="#"><?php echo $row->Pr_name;?></a></td>
                                <td><?php echo $row->Maker;?></td>
                                <td><?php echo $row->Fuel;?></td>
                                <td><?php echo $row->BDimension;?></td>
                                <td class="text-center">
                                    <?php if($row->Recommended==1){ ?>
                                    <span class="label bg-blue">
                                        <?php echo "Yes"; ?>
                                    </span>
                                   <?php } ?>
                                    <?php if($row->Recommended==0) { ?>
                                    <span class="label bg-danger">
                                       <?php  echo "No"; ?>
                                    </span>
                                <?php } ?>
                                </td>
                                <td>
                                    <?php if($row->Status==1){ ?>
                                    <span class="label label-success">
                                        <?php echo "Active"; ?>
                                    </span>
                                   <?php } ?>
                                    <?php if($row->Status==0) { ?>
                                    <span class="label label-default">
                                       <?php  echo "Inactive"; ?>
                                    </span>
                                <?php } ?>
                                </td>
                                <td class="text-center"><a href="<?php echo base_url()?>Dashboard/addRecomm/<?php echo $row->Id; ?>/<?php echo $row->Recommended; ?>" class="change">Add</a></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table> 
                        </div>  
                    <?php } ?>  
					<!-- /horizontal borders -->
        </div>
    </div>
</div>

