<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$classid = $_GET['id'];
    if($classid==''){
  redirect("index.php");
}
  $studclass = New StudentClass();
  $res = $studclass->single_StudentClass($classid);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Schedule</h1>
          </div>
          <!-- /.col-lg-12  `schedID`, `sched_time`, `sched_day`, `sched_subject`, `sched_semester`, `sched_sy`, `empid`, `crs_yr`, `sched_room`-->
       </div> 
                   
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label> -->

                      <!-- <div class="col-md-8"> -->
                        
                         <input class="form-control input-sm" id="CLASSID" name=" CLASSID" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $res->CLASSID; ?>">
                   <!--    </div>
                    </div>
                  </div>      -->  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CLASSCODE">Class Code:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="CLASSCODE" name="CLASSCODE" placeholder=
                            "Time" type="text" value="<?php echo $res->CLASSCODE; ?>" readonly>
                      </div> 
                    </div>
                  </div>    
                  
                   
                  <div class="form-group">
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SCHEDTIME">Time:</label>

                      <div class="col-md-4">
                        
                         <input class="form-control input-sm" id="SCHEDTIME" name="SCHEDTIME" placeholder=
                            "Time" type="text" value="<?php echo $res->SCHEDTIME; ?>">
                      </div>
                      <div class="col-md-4">
                        
                         <input class="form-control input-sm" id="SCHEDTIMEto" name="SCHEDTIMEto" placeholder=
                            "hh:mm" type="text" value="<?php echo $res->SCHEDTIMEto; ?>">
                      </div>
                    </div>
                  </div>

                      

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SCHEDDAY">Day:</label>

                      <div class="col-md-8"> 
                         <input class="form-control input-sm" id="SCHEDDAY" name="SCHEDDAY" placeholder=
                            "Day" type="text" value="<?php echo $res->SCHEDDAY; ?>">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE">Course:</label>

                      <div class="col-md-8">
                         <select class="form-control input-sm" name="COURSE" id="COURSE" style="width: 100%;">
                          <option >Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `tblcourse` WHERE COURSE='".$res->COURSE."' GROUP BY COURSE" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->COURSE.'" selected="selected" >'.$result->COURSE.' </option>';
                             }

                            $mydb->setQuery("SELECT * FROM `tblcourse` WHERE COURSE !='".$res->COURSE."' GROUP BY COURSE" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->COURSE.'" >'.$result->COURSE.' </option>';
                             }
                          ?>
                        </select>
                      <!--    <input class="form-control input-sm" id="COURSE" name="COURSE" placeholder=
                            "Course" type="text" value="<?php echo $res->COURSE; ?>"> -->
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "YEARLEVEL">Year Level:</label>

                      <div class="col-md-8">
                          <select class="form-control input-sm" name="YEARLEVEL" id="YEARLEVEL" style="width: 100%;">
                          <option  >Select</option>
                          <option value="1" <?php echo ($res->YEARLEVEL=="1") ? "SELECTED" : ""; ?> >1</option>
                          <option value="2" <?php echo ($res->YEARLEVEL=="2") ? "SELECTED" : ""; ?> >2</option>
                          <option value="3" <?php echo ($res->YEARLEVEL=="3") ? "SELECTED" : ""; ?> >3</option>
                          <option value="4" <?php echo ($res->YEARLEVEL=="4") ? "SELECTED" : ""; ?> >4</option> 
                        </select>
                         <!-- <input class="form-control input-sm" id="YEARLEVEL" name="YEARLEVEL" placeholder=
                            "Year Level" type="text" value="<?php echo $res->YEARLEVEL; ?>"> -->
                      </div>
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SECTION">Section :</label>

                      <div class="col-md-8">
                         
                         <input class="form-control input-sm" id="SECTION" name="SECTION" placeholder=
                            "Section " type="text" value="<?php echo $res->SECTION; ?>">
                      </div>
                    </div>
                  </div>
 
 
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SY">Academic Year:</label> 
                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="SY" name="SY" placeholder=
                            "Academic Year" type="text" value="<?php echo $res->SY; ?>" required>
                      </div>
                    </div>
                  </div> 
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SEMESTER">Semester:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="SEMESTER" id="SEMESTER"> 
                        <option value="First"  <?php echo ($res->SEMESTER=='First') ? 'selected="true"': '' ; ?>>First</option>
                         <option value="Second" <?php echo ($res->SEMESTER=='Second') ? 'selected="true"': '' ; ?> >Second</option> 
                          <option value="Third" <?php echo ($res->SEMESTER=='Third') ? 'selected="true"': '' ; ?> >Third</option> 
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ROOM">Room:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="ROOM" name="ROOM" placeholder=
                            "Room" type="text" value="<?php echo $res->ROOM; ?>">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "TEACHER">Teacher:</label>

                      <div class="col-md-8">
                          <select class="form-control input-sm" name="TEACHER" id="TEACHER" style="width: 100%;">
                          <option >Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `useraccounts` WHERE ACCOUNT_NAME='".$res->ACCOUNT_USERNAME."'" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->ACCOUNT_NAME.'" SELECTED>'.$result->ACCOUNT_NAME.' </option>';
                             }

                            $mydb->setQuery("SELECT * FROM `useraccounts` WHERE ACCOUNT_NAME !='".$res->ACCOUNT_USERNAME."'" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->ACCOUNT_NAME.'" >'.$result->ACCOUNT_NAME.' </option>';
                             }
                          ?>
                        </select>
                         <!-- <input class="form-control input-sm" id="YEARLEVEL" name="YEARLEVEL" placeholder=
                            "Year Level" type="text" value="<?php echo $res->YEARLEVEL; ?>"> -->
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
      

        </div><!--End of container-->