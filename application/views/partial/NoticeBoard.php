<div class="content-wrapper"><!-- Content wrapper -->
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Horizontal borders -->
            <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <!-- add notice flash data -->
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
                                <span class="text-semibold">Well done!</span> You successfully added a Notice in the record.
                            </div>
                        <?php } ?>                    
                   <?php if($this->session->flashdata('editnoticeErr')){ ?>
                        <div class="alert bg-danger alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold"> Opps! </span><?php echo $this->session->flashdata('editnoticeErr'); ?>
<!--                            Name of the Vehicle and Vehicle Description should not be empty.-->
                        </div>
                    <?php }?>
                        <?php if($this->session->flashdata('editnoticeSucc')){ ?>
                            <div class="alert bg-success alert-styled-left">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                <span class="text-semibold">Well done!</span> You successfully updated a notice in the record.
                            </div>
                        <?php } ?>
                    <!-- delete notice flash data -->
                    <?php if($this->session->flashdata('deletesuccess')){ ?>
                        <div class="alert bg-success alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">  </span><?php echo $this->session->flashdata('deletesuccess'); ?>
<!--                            Name of the Vehicle and Vehicle Description should not be empty.-->
                        </div>
                    <?php }?>
                    </div>
                </div>
					<div class="panel panel-flat border-top-lg border-top-blue-600 border-bottom-blue-600">
						<div class="panel-heading">
							<h5 class="panel-title">What's New</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
				        </div>
						<div class="panel-body">
							<span>You can only add <code>Six</code>Notices.</span>
							<table class="table table-hover table-responsive">
								<thead>
									<tr>
										<th class="text-center">Description</th>
                                        <th class="text-center">Date & Time</th>
                                        <th class="text-center">Modify</th>
									</tr>
								</thead>
								<tbody>
								<?php
                                    if($noticeData){
                                        foreach ($noticeData as $row)
                                {?>
                                <tr>
									<td style="width: 70%;"><a href="#"><?php echo $row->description;?></a></td>
                                    <td class="text-center"><?php   echo $row->TOC;  ?></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="<?php echo base_url()?>Dashboard/editNotice/<?php echo $row->id; ?>"><i class="icon-database-edit2"></i> Edit</a></li>
                                                    <li><a href="<?php echo base_url()?>Dashboard/removeNotice/<?php echo $row->id; ?>"><i class="icon-trash"></i> Remove</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                <tr>
								<?php }
                                    }?>	
								</tbody>
							</table>
						</div> <!-- panel-body ends -->
						<div class="panel-footer">
                            <div class="row">  
                               <div class="col-md-1"></div>
                                <div class="col-md-3 pull-left">                                  
                                   <?php   if($count < 6){  ?>
                                        <a href="<?php echo base_url()?>Dashboard/viewNotice/1" class="btn bg-blue-400">Add More</a>
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
							<h5 class="panel-title">Add New Notice </h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
                          </div>
		                  <form action="<?php echo base_url()?>Dashboard/addNotice" method="post" enctype="multipart/form-data">
                          <div class="panel-body">
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Maximum character length is 250.</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="250" name="noticeData"></textarea>
                              </div>
                              <p id="message"></p>
                               <input type="reset" class="btn bg-danger" value="Reset" />
                               <input type="submit" class="btn bg-success" id="buttonSave"value="Save" />                           
						 </div>
                        </form>
                        </div>  
                    <?php } ?>  
					<!-- /horizontal borders -->
        </div>
    </div>
</div>
