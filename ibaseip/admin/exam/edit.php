  <?php 
   if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  // $autonum = New Autonumber();
  // $res = $autonum->single_autonumber(2);

$id = isset($_GET['id']) ? $_GET['id'] :'';
$sql ="SELECT * FROM `tblquiz` WHERE `QUIZID`={$id}" ;
$mydb->setQuery($sql);
$res = $mydb->loadSingleResult();

   ?> 
        <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Quiz </h1>
          </div> 
       </div> 
        <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
 
        <div class="form-group">
                    <div class="col-md-8">
                       <input type="hidden" name="QUIZID" value="<?php echo $res->QUIZID; ?>">
                      <label class="col-md-4 control-label" for=
                      "CLASSCODE">Class Code:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CLASSCODE" id="CLASSCODE">
                         <option value="" >Select</option>
                            <?php 

                            $mydb->setQuery("SELECT * FROM `tblclass` WHERE ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME']."' AND CLASSCODE='".$res->SUBJ_CODE."' GROUP BY CLASSCODE" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option SELECTED value="'.$result->CLASSCODE.'" >'.$result->CLASSCODE.' </option>';
                             }

                            $mydb->setQuery("SELECT * FROM `tblclass` WHERE ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME']."' AND CLASSCODE!='".$res->SUBJ_CODE."' GROUP BY CLASSCODE" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->CLASSCODE.'" >'.$result->CLASSCODE.' </option>';
                             }
                          ?>
                        </select> 
                      </div>
                    </div>
                  </div>

                  
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "QUIZNAME">Quiz Name:</label>

                      <div class="col-md-8">
                        <textarea  class="form-control input-sm" id="QUIZNAME" name="QUIZNAME" placeholder=
                            "Quiz Name" type="text"><?php echo $res->QUIZNAME;?></textarea>
                        
                      </div>
                     </div>
                    </div>

                      <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "NOOFQUESTION">No. of Question:</label>

                      <div class="col-md-8">
                         <input type="number" name="NOOFQUESTION"  class="form-control input-sm"  value="<?php echo $res->NOOFQUESTION;?>">
                        
                      </div>
                     </div>
                    </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "QUIZTERM">Term:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="QUIZTERM" id="QUIZTERM">
                         <option value="" >Select</option>
                         <option value="Prelim" <?php echo ($res->QUIZTERM=='Prelim') ? "SELECTED" :"" ;?> >Prelim</option>
                         <option value="Midterm" <?php echo ($res->QUIZTERM=='Midterm') ? "SELECTED" :"" ;?> >Midterm</option>
                         <option value="Final" <?php echo ($res->QUIZTERM=='Final') ? "SELECTED" :"" ;?> >Final</option>
                        </select> 
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "QUIZDATETIME">Set Time in Minutes:</label>

                      <div class="col-md-8">
                         <input type="number" name="QUIZDATETIME"  class="form-control input-sm" placeholder="set time in munute" value="<?php echo $res->QUIZDATETIME; ?>" >
                        
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
       
       