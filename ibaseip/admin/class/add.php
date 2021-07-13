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
            <h1 class="page-header">Add New Student in the Class</h1>
          </div>
          <!-- /.col-lg-12 `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`-->
       </div> 
                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "IDNO">Id Number:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="IDNO" name="IDNO" placeholder=
                            "Id Number" type="text" value="">
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "FNAME">First Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "First Name" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "MNAME">Middle Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                            "Middle Name" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Last Name:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CONTACTNO">Contact Number:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="CONTACTNO" name="CONTACTNO" placeholder=
                            "Contact Number" type="text" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COURSE">Batch :</label>

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
                      "YEARLEVEL">Year Level:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="YEARLEVEL" id="YEARLEVEL" style="width: 100%;">
                        <option selected="selected">Select</option>
                         <option >1</option>
                          <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SECTION">Section:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="SECTION" name="SECTION" placeholder=
                            "Section" type="text" value="" required>
                      </div>
                    </div>
                  </div>


                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CLASSCODE">Class:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CLASSCODE" id="CLASSCODE">
                         <option value="" >Select</option>
                            <?php 

                            // $mydb->setQuery("SELECT * FROM `tblclass` GROUP BY CLASSCODE" );
                            // $cur = $mydb->loadResultList();

                            // foreach ($cur as $result) {
                            //    echo '<option value="'.$result->CLASSCODE.'" >'.$result->CLASSCODE.' </option>';
                            //  }
                              $mydb->setQuery("SELECT `CLASSID`,CONCAT(`CLASSCODE`,' | ',`COURSE`,`YEARLEVEL`, `SECTION`,' | ',`ACCOUNT_USERNAME`) as 'CLASS' FROM `tblclass` WHERE ACCOUNT_USERNAME LIKE '%".$_SESSION['ACCOUNT_NAME'] ."%'" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->CLASSID.'" >'.$result->CLASS.' </option>';
                             }
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
       