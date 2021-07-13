<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$idno = $_GET['id'];
    if($idno==''){
  redirect("index.php");
}
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $percent = New Percent();
  $res = $percent->single_percent($id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

       <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Percent</h1>
          </div> 
       </div> 
                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Attendance">Attendance:</label>

                      <div class="col-md-8">
                        <input  type="hidden" id="PercentID" name="PercentID"  value="<?php echo $res->PercentID;?>">
                         <input class="form-control input-sm" id="Attendance" name="Attendance" placeholder=
                            "Attendance" type="number" value="<?php echo $res->Attendance;?>">
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Quiz">Quiz:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Quiz" name="Quiz" placeholder=
                            "Quiz" type="number" value="<?php echo $res->Quiz;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Lecture">Lecture:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Lecture" name="Lecture" placeholder=
                            "Lecture" type="number" value="<?php echo $res->Lecture;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Laboratory">Laboratory:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Laboratory" name="Laboratory" placeholder=
                            "Laboratory" type="number" value="<?php echo $res->Laboratory;?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Activity">Activity:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Activity" name="Activity" placeholder=
                            "Activity" type="number" value="<?php echo $res->Activity;?>" required>
                      </div>
                    </div>
                  </div>
                   

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Assignment">Assignment:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Assignment" name="Assignments" placeholder=
                            "Assignment" type="number" value="<?php echo $res->Assignments;?>" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LongTest">Long Test:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="LongTest" name="LongTest" placeholder=
                            "Long Test" type="number" value="<?php echo $res->LongTest;?>" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Exam">Exam:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Exam" name="Exam" placeholder=
                            "Exam" type="number" value="<?php echo $res->Exam;?>" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Prelim">Prelim:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Prelim" name="Prelim" placeholder=
                            "Prelim" type="number" value="<?php echo $res->Prelim;?>" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Midterm">Midterm:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Midterm" name="Midterm" placeholder=
                            "Midterm" type="number" value="<?php echo $res->Midterm;?>" required>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Final">Final:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Final" name="Final" placeholder=
                            "Final" type="number" value="<?php echo $res->Final;?>" required>
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
       