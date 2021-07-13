                      <?php 
                       if (!isset($_SESSION['ACCOUNT_ID'])){
                          redirect(web_root."admin/index.php");
                         }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Add Student Result</h1>
          </div> 
       </div> 
                      <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SUBJ_CODE">Batch:</label>
                      <div class="col-md-8">
                         <select class="form-control input-sm" name="COURSE" id="COURSE" style="width: 100%;">
                          <option selected="selected">Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `tblcourse`" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->COURSE.'" >'.$result->COURSE.' </option>';
                             }
                          ?>
                        </select>
                        <!--   <input class="form-control input-sm" id="COURSE" name="COURSE" placeholder=
                            "Course" type="text" value="" required> -->
                      </div>
                    </div>
                  </div>                      
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SUBJ_CODE">Subject Code:</label>
                      <div class="col-md-8">
                         <select class="form-control input-sm" name="SUBJ_CODE" id="SUBJ_CODE" style="width: 100%;">
                          <option selected="selected">Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `tblsubject`" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->SUBJ_CODE.'" >'.$result->SUBJ_CODE.' </option>';
                             }
                          ?>
                        </select>
                        <!--   <input class="form-control input-sm" id="COURSE" name="COURSE" placeholder=
                            "Course" type="text" value="" required> -->
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SUBJ_CODE">Student ID:</label>
                      <div class="col-md-8">
                         <select class="form-control input-sm" name="idno" id="idno" style="width: 100%;">
                          <option selected="selected">Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `tblstudent` where Course='$SUBJ_CODE'" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->IDNO.'" >'.$result->IDNO.' </option>';
                             }
                          ?>
                        </select>
                        <!--   <input class="form-control input-sm" id="COURSE" name="COURSE" placeholder=
                            "Course" type="text" value="" required> -->
                      </div>
                    </div>
                  </div>

                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Attendance">Attendance:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Attendance" name="Attendance" placeholder=
                            "Attendance" type="number" value=""required>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Quiz">Quiz:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Quiz" name="Quiz" placeholder=
                            "Quiz" type="number" value=""required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Lecture">Lecture:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Lecture" name="Lecture" placeholder=
                            "Lecture" type="number" value=""required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Laboratory">Laboratory:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Laboratory" name="Laboratory" placeholder=
                            "Laboratory" type="number" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Activity">Activity:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Activity" name="Activity" placeholder=
                            "Activity" type="number" value="" required>
                      </div>
                    </div>
                  </div>
                   

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Assignment">Assignment:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Assignment" name="Assignments" placeholder=
                            "Assignment" type="number" value="" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LongTest">Test:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="LongTest" name="LongTest" placeholder=
                            "Long Test" type="number" value="" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Exam">Exam:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Exam" name="Exam" placeholder=
                            "Exam" type="number" value="" required>
                      </div>
                    </div>
                  </div>

<!--                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Prelim">Prelim:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Prelim" name="Prelim" placeholder=
                            "Prelim" type="number" value="" required>
                      </div>
                    </div>
                  </div> -->

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Midterm">Total:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Total" name="Total" placeholder=
                            "Total" type="number" value="" required>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Grading   ">Grading  :</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="Grading" name="Grading" placeholder=
                            "Grading   " type="number" value="" required>
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
       