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
            <h1 class="page-header">Add New Class Schedule</h1>
          </div>
          <!-- `CLASS_CODE`, `SUBJ_ID`, `INST_ID`, `SYID`, `AY`, `DAY`, `C_TIME`, `IDNO`, `ROOM`, `SECTION` -->
       </div>    
                <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CLASSCODE">Class Code:</label>

                      <div class="col-md-8">
                      <!-- <select class="form-control select2" name="CLASSCODE" id="CLASSCODE" style="width: 100%;"> -->

                      <select class="form-control input-sm" name="CLASSCODE" id="CLASSCODE" style="width: 100%;">
                          <option selected="selected">Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `tblsubject`" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->SUBJ_CODE.'" >'.$result->SUBJ_CODE.' </option>';
                             }
                          ?>
                        </select>
                          
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SCHEDTIME">Time:</label>

                      <div class="col-md-4">
                        
                         <input class="form-control input-sm" id="SCHEDTIMEto" name="SCHEDTIME" placeholder=
                            "hh:mm" type="text" value="">
                      </div>
                      <div class="col-md-4">
                        
                         <input class="form-control input-sm" id="SCHEDTIMEto" name="SCHEDTIMEto" placeholder=
                            "hh:mm" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SCHEDDAY">Day:</label>

                      <div class="col-md-8"> 
                         <input class="form-control input-sm" id="SCHEDDAY" name="SCHEDDAY" placeholder=
                            "Monday" type="text" value="">
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

                            $mydb->setQuery("SELECT * FROM `tblcourse`" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->COURSE.'" >'.$result->COURSE.' </option>';
                             }
                          ?>
                        </select>
                      <!--    <input class="form-control input-sm" id="COURSE" name="COURSE" placeholder=
                            "Course" type="text" value=""> -->
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "YEARLEVEL">Year Level:</label>

                      <div class="col-md-8">
                         <select class="form-control input-sm" name="YEARLEVEL" id="YEARLEVEL" style="width: 100%;">
                        <option selected="selected">Select</option>
                         <option >1</option>
                          <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           
                        </select>
                        <!--  <input class="form-control input-sm" id="YEARLEVEL" name="YEARLEVEL" placeholder=
                            "Year Level" type="text" value=""> -->
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SECTION">Section :</label>

                      <div class="col-md-8">
                         
                         <input class="form-control input-sm" id="SECTION" name="SECTION" placeholder=
                            "Section " type="text" value="">
                      </div>
                    </div>
                  </div>
 
 
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SY">Academic Year:</label> 
                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="SY" name="SY" placeholder=
                            "Academic Year" type="text" value="" required>
                      </div>
                    </div>
                  </div> 
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SEMESTER">Semester:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="SEMESTER" id="SEMESTER"> 
                        <option value="First" >First</option>
                         <option value="Second">Second</option> 
                         <option value="Third">Third</option> 
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
                            "Room" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "TEACHER">Teacher:</label>

                      <div class="col-md-8">

                      <select class="form-control input-sm" name="TEACHER" id="TEACHER" style="width: 100%;">
                          <option selected="selected">Select</option>
                          <?php 

                            $mydb->setQuery("SELECT * FROM `useraccounts` " );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->ACCOUNT_NAME.'" >'.$result->ACCOUNT_NAME.' </option>';
                             }
                          ?>
                        </select>
                      <!--    <input class="form-control input-sm" id="TEACHER" name="TEACHER" placeholder=
                            "Course" type="text" value=""> -->
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
       