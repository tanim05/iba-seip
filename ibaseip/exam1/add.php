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
            <h1 class="page-header">Add New Question for the Quiz</h1>
          </div> 
       </div> 
        
       <!--  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CLASSCODE">Class Code:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CLASSCODE" id="CLASSCODE">
                         <option value="" >Select</option>
                            <?php 

                            // $mydb->setQuery("SELECT * FROM `tblclass` WHERE ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_NAME']."' GROUP BY CLASSCODE" );
                            // $cur = $mydb->loadResultList();

                            // foreach ($cur as $result) {
                            //    echo '<option value="'.$result->CLASSCODE.'" >'.$result->CLASSCODE.' </option>';
                            //  }
                          ?>
                        </select> 
                      </div>
                    </div>
                  </div> -->

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
                              $mydb->setQuery("SELECT `CLASSID`,CONCAT(`CLASSCODE`,' | ',`COURSE`,`YEARLEVEL`, `SECTION`,' | ',`ACCOUNT_USERNAME`) as 'CLASS' FROM `tblclass`" );
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
                      "EXAM_QUESTION">Question:</label>

                      <div class="col-md-8">
                        <textarea  class="form-control input-sm" id="EXAM_QUESTION" name="EXAM_QUESTION" placeholder=
                            "Question Name" type="text"></textarea>
                        
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CHOICE_A">A:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="CHOICE_A" name="CHOICE_A" placeholder=
                            "" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CHOICE_B">B:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="CHOICE_B" name="CHOICE_B" placeholder=
                            "" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CHOICE_C">C:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="CHOICE_C" name="CHOICE_C" placeholder=
                            "" type="text" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CHOICE_D">D:</label>

                      <div class="col-md-8">
                          <input class="form-control input-sm" id="CHOICE_D" name="CHOICE_D" placeholder=
                            "" type="text" value="" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "EXAM_ANSWER">Answer:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="EXAM_ANSWER" name="EXAM_ANSWER" placeholder=
                            "Answer" type="text" value="" required>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "TERM_EXAM">Term:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="TERM_EXAM" id="TERM_EXAM">
                         <option value="" >Select</option>
                         <option value="Prelim">Prelim</option>
                         <option value="Midterm">Midterm</option>
                         <option value="Final">Final</option>
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
       