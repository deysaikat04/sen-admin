<div class="content-wrapper"><!-- Content wrapper -->
    <!-- Content area -->
    <div class="content">
        <div class="row">
         <div class="col-lg-12">
            <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    
                    </div>
            </div>
                <!-- Display -->
            
         <form action="<?php echo base_url()?>Dashboard/saveNotice" method="post" enctype="multipart/form-data">
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
                if($notice_data){
                    foreach ($notice_data as $row) 
                {?>
                <div class="panel-body">
                    <div class="row">    
                        <div class="col-md-12">
                            <div class="form-group form-group-material">
                                <label class="control-label">Notice to be Displayed</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="noticeData" >
                                <?php echo "$row->description"; ?> </textarea>                         
                            </div>

                        </div>

                    </div>
                </div> <!--********************End of panel-body*********************-->
                 
                <div class="panel-footer">
                  <div class="row">
                      <div class="col-md-3 pull-right">
                          <input type="text" hidden="hidden" name="id" value="<?php echo $row->id?>">
                          <button type="reset" class="btn bg-danger"><i class="icon-reload-alt position-left"></i> Reset</button>
                          <button type="submit" class="btn bg-green-600"><i class="icon-floppy-disk position-left"></i> Save</button>
                      </div>
                  </div>
                 </div>   
                 <?php }
               }
            ?>              
            </div>
            
            </form>
            
            
        </div>
      </div>
    </div>
</div>

