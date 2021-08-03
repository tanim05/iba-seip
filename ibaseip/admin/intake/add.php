                      <?php 
                       if (!isset($_SESSION['ACCOUNT_ID'])){
                          redirect(web_root."admin/index.php");
                         }

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Add New Intake</h1>
          </div>
         
       </div> 
                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "intake_id">Intake Code:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="intake_id" name="intake_id" placeholder=
                            "Please give Intake Code" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "intake_name">Intake Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="intake_name" name="intake_name" placeholder=
                            "Please give Intake name" type="text" value="">
                      </div>
                    </div>
                  </div>

                

            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div>

    
          
        </form>
       