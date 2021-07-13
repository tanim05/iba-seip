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
  $studclass = New Student();
  $res = $studclass->single_classtudent($id);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Student</h1>
          </div>
          <!-- /.col-lg-12  `schedID`, `sched_time`, `sched_day`, `sched_subject`, `sched_semester`, `sched_sy`, `empid`, `crs_yr`, `sched_room`-->
       </div> 
                   
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label> -->

                      <!-- <div class="col-md-8"> -->
                        
                         <input class="form-control input-sm" id="IDNO" name="IDNO" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $res->S_ID; ?>">

                         <!--    <input class="form-control input-sm" id="CLASSID" name="CLASSID" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $res->CLASSID; ?>"> -->
                   <!--    </div>
                    </div>
                  </div>      -->      
                  
                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "FNAME">First Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "First Name" type="text" value="<?php echo $res->FNAME; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "MNAME">Middle Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                            "Middle Name" type="text" value="<?php echo $res->MNAME; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Last Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value="<?php echo $res->LNAME; ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CONTACTNO">Contact Number:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="CONTACTNO" name="CONTACTNO" placeholder=
                            "Contact #" type="text" value="<?php echo $res->CONTACT_NO; ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE">Course:</label>

                      <div class="col-md-8">
                         <select class="form-control input-sm" name="COURSE" id="COURSE" style="width: 100%;">
                          <option selected="selected">Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `tblcourse` WHERE COURSE='".$res->COURSE."'" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->COURSE.'" SELECTED >'.$result->COURSE.' </option>';
                             }
                              $mydb->setQuery("SELECT * FROM `tblcourse` WHERE COURSE!='".$res->COURSE."'" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->COURSE.'" >'.$result->COURSE.' </option>';
                             }
                          ?>
                        </select>
                         <!--  <input class="form-control input-sm" id="COURSE" name="COURSE" placeholder=
                            "Course" type="text" value="<?php echo $res->COURSE; ?>" required> -->
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
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SECTION">Section :</label>

                      <div class="col-md-8">
                        
                        <select class="form-control input-sm" name="SECTION" id="SECTION" style="width: 100%;">
                          <option  >Select</option>
                          <?php
                           $mydb->setQuery("SELECT * FROM `tblclass`  WHERE SECTION !='' GROUP BY SECTION" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option SELECTED value="'.$result->SECTION.'" >'.$result->SECTION.' </option>';
                             }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>


                 <!--   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CLASSCODE">Class Code:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CLASSCODE" id="CLASSCODE">
                         <option value="" >Select</option>
                            <?php 

                            $mydb->setQuery("SELECT * FROM `tblsubject` WHERE SUBJ_CODE='".$res->CLASSCODE."'" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option SELECTED value="'.$result->SUBJ_CODE.'" >'.$result->SUBJ_CODE.' </option>';
                             }


                            $mydb->setQuery("SELECT * FROM `tblsubject` WHERE SUBJ_CODE!='".$res->CLASSCODE."'" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->SUBJ_CODE.'" >'.$result->SUBJ_CODE.' </option>';
                             }
                          ?>
                        </select> 
                      </div>
                    </div>
                  </div>
 -->

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CLASSCODE">Class Code:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CLASSCODE" id="CLASSCODE">
                         <option value="" >Select</option>
                            <?php 


                            $mydb->setQuery("SELECT `CLASSID`,CONCAT(`CLASSCODE`,' | ',`COURSE`,`YEARLEVEL`, `SECTION`,' | ',`ACCOUNT_USERNAME`) as 'CLASS' FROM `tblclass` WHERE CLASSID=".$res->CLASSID
                             );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->CLASSID.'" SELECTED>'.$result->CLASS.' </option>';
                             }
                             $mydb->setQuery("SELECT `CLASSID`,CONCAT(`CLASSCODE`,' | ',`COURSE`,`YEARLEVEL`, `SECTION`,' | ',`ACCOUNT_USERNAME`) as 'CLASS' FROM `tblclass` WHERE CLASSID !=".$res->CLASSID
                             );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->CLASSID.'" >'.$result->CLASS.' </option>';
                             }

                            // $mydb->setQuery("SELECT * FROM `tblclass` WHERE CLASSCODE='".$res->CLASSCODE."' GROUP BY CLASSCODE" );
                            // $cur = $mydb->loadResultList();

                            // foreach ($cur as $result) {
                            //    echo '<option SELECTED value="'.$result->CLASSCODE.'" >'.$result->CLASSCODE.' </option>';
                            //  }


                            // $mydb->setQuery("SELECT * FROM `tblclass` WHERE CLASSCODE !='".$res->CLASSCODE."' GROUP BY CLASSCODE" );
                            // $cur = $mydb->loadResultList();

                            // foreach ($cur as $result) {
                            //    echo '<option value="'.$result->CLASSCODE.'" >'.$result->CLASSCODE.' </option>';
                            //  }
                          ?>
                        </select> 
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