<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$examid = $_GET['id'];
    if($examid==''){
  redirect("index.php");
}
  $exam = New Exams();
  $res = $exam->single_exam($examid);

?> 

 <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">

      <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Question</h1>
          </div>
          <!-- /.col-lg-12  `schedID`, `sched_time`, `sched_day`, `sched_subject`, `sched_semester`, `sched_sy`, `empid`, `crs_yr`, `sched_room`-->
       </div> 
                   
                    <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label> -->

                      <!-- <div class="col-md-8"> -->
                        
                         <input class="form-control input-sm" id="EXAMID" name="EXAMID" placeholder=
                            "Account Id" type="Hidden" value="<?php echo $res->EXAMID; ?>">
                   <!--    </div>
                    </div>
                  </div>      -->      
                   

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CLASSCODE">Class Code:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CLASSCODE" id="CLASSCODE">
                         <option value="" >Select</option>
                            <?php 
                            $sql = "SELECT * FROM `tblclass` WHERE ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME']."' AND CLASSCODE='".$res->CLASSCODE."' GROUP BY CLASSCODE";
                            $mydb->setQuery($sql);
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option SELECTED value="'.$result->CLASSCODE.'" >'.$result->CLASSCODE.' </option>';
                             }

                             $sql="SELECT * FROM `tblclass` WHERE ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME']."' AND CLASSCODE!='".$res->CLASSCODE."' GROUP BY CLASSCODE";
                            $mydb->setQuery($sql);
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                                  echo '<option SELECTED value="'.$result->CLASSCODE.'" >'.$result->CLASSCODE.' </option>';
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
                            "Question Name" type="text"><?php echo $res->EXAM_QUESTION;?></textarea>
                        
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CHOICE_A">A:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="CHOICE_A" name="CHOICE_A" placeholder=
                            "" type="text" value="<?php echo $res->CHOICE_A;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CHOICE_B">B:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="CHOICE_B" name="CHOICE_B" placeholder=
                            "" type="text" value="<?php echo $res->CHOICE_B;?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CHOICE_C">C:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="CHOICE_C" name="CHOICE_C" placeholder=
                            "" type="text" value="<?php echo $res->CHOICE_C;?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CHOICE_D">D:</label>

                      <div class="col-md-8">
                          <input class="form-control input-sm" id="CHOICE_D" name="CHOICE_D" placeholder=
                            "" type="text" value="<?php echo $res->CHOICE_D;?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "EXAM_ANSWER">Answer:</label>

                      <div class="col-md-8">
                        
                         <input class="form-control input-sm" id="EXAM_ANSWER" name="EXAM_ANSWER" placeholder=
                            "Answer" type="text" value="<?php echo $res->EXAM_ANSWER;?>" required>
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
                         <option value="Prelim" <?php echo ($res->TERM_EXAM=='Prelim') ? "SELECTED" : "" ; ?>>Prelim</option>
                         <option value="Midterm" <?php echo ($res->TERM_EXAM=='Midterm') ? "SELECTED" : "" ; ?>>Midterm</option>
                         <option value="Final" <?php echo ($res->TERM_EXAM=='Final') ? "SELECTED" : "" ; ?>>Final</option>
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