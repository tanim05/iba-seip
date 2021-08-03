<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$intakeid = $_GET['id'];
    if($intakeid==''){
  redirect("index.php");
}
  $intake = New Intake();
  $res = $intake->single_intake($intakeid);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Intake</h1>
          </div>
      
       </div> 
                  
                        
                         <input class="form-control input-sm" id="intake_id" name="intake_id" placeholder=
                            "Intake Id" type="Hidden" value="<?php echo $res->intake_id; ?>">
     
                  
                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SUBJ_CODE">Intake Code:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="intake_id" name="intake_id" placeholder=
                            "Intake Code" type="text" value="<?php echo $res->intake_id; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "intake_name">Intake Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="intake_name" name="intake_name" placeholder=
                            "Description" type="text" value="<?php echo $res->intake_name; ?>">
                      </div>
                    </div>
                  </div>

                 <!--  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "UNIT">Unit:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="UNIT" name="UNIT" placeholder=
                            "Unit" type="text" value="<?php echo $res->UNIT; ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PRE_REQUISITE">Pre-Requisite:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="PRE_REQUISITE" name="PRE_REQUISITE" placeholder=
                            "Pre-Requisite" type="text" value="<?php echo $res->PRE_REQUISITE; ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE_ID">Course:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="COURSE_ID" id="COURSE_ID"> 
                          <?php 

                            // $mydb->setQuery("SELECT * FROM `course` WHERE COURSE_ID=".$res->COURSE_ID );
                            // $cur = $mydb->loadResultList();

                            // foreach ($cur as $result) {
                            //   echo '<option value='.$result->COURSE_ID.' >'.$result->COURSE_NAME.'-'.$result->COURSE_LEVEL.'</option>';

                            // }
                          ?>

                          <?php 

                            // $mydb->setQuery("SELECT * FROM `course` WHERE COURSE_ID!=".$res->COURSE_ID );
                            // $cur = $mydb->loadResultList();

                            // foreach ($cur as $result) {
                            //   echo '<option value='.$result->COURSE_ID.' >'.$result->COURSE_NAME.'-'.$result->COURSE_LEVEL.'</option>';

                            // }
                          ?>

                         
                        </select> 
                      </div>
                    </div>
                  </div> -->
                 <!--  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "AY">Academic Year:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="AY" name="AY" placeholder=
                            "Academic Year" type="text" value="<?php echo $res->AY; ?>" required>
                      </div>
                    </div>
                  </div> -->
              <!--      <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SEMESTER">Semester:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="SEMESTER" id="SEMESTER"> 
                        <option value="First"  <?php echo ($res->SEMESTER=='First') ? 'selected="true"': '' ; ?>>First</option>
                         <option value="Second" <?php echo ($res->SEMESTER=='Second') ? 'selected="true"': '' ; ?> >Second</option> 
                         <option value="Summer" <?php echo ($res->SEMESTER=='Summer') ? 'selected="true"': '' ; ?> >Summer</option> 
                        </select> 
                      </div>
                    </div>
                  </div> -->


            
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
      

        </div><!--End of container-->