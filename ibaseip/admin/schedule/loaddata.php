 <?php 
    require_once ("../../include/initialize.php");
    global $mydb;

      $idno = $_POST['IDNO'];
      $classcode = $_GET['CLASSCODE']; 
      // $GRADEID = $_GET['GRADEID'];

      // $sql = "SELECT * FROM `tblgrades` WHERE IDNO='{$idno}' AND CLASSCODE='".$classcode."' AND ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME'] ."'";
       $sql = "SELECT * FROM `tblgrades` WHERE IDNO='{$idno}' AND CLASSID=".$classcode;
      $mydb->setQuery($sql);
      $cur = $mydb->executeQuery();
      if($cur==false){
        die(mysql_error());
      }
      $row_count = $mydb->num_rows($cur);//get the number of count

      if ($row_count > 0) {
        # code...
         $res = $mydb->loadSingleResult();
         $gradeid = $res->GRADEID;

            if (isset($_POST['quizINPUT_PRE'])) {
           # code...
            $grades = new Grade(); 
            $grades->QUIZZES_PRE =        isset($_POST['quizINPUT_PRE']) ? $_POST['quizINPUT_PRE']: 0;
            $grades->update($gradeid);
          }

          if (isset($_POST['activityINPUT_PRE'])) {
           # code...
            $grades = new Grade(); 
            $grades->ACTIVITIES_PRE =        isset($_POST['activityINPUT_PRE']) ? $_POST['activityINPUT_PRE']: 0;
            $grades->update($gradeid);
          }
          if (isset($_POST['handsonINPUT_PRE'])) {
           # code...
            $grades = new Grade(); 
            $grades->HANDSON_PRE =        isset($_POST['handsonINPUT_PRE']) ? $_POST['handsonINPUT_PRE']: 0;
            $grades->update($gradeid);
          }

          if (isset($_POST['assignmentINPUT_PRE'])) {
           # code...
            $grades = new Grade(); 
            $grades->ASSIGNMENT_PRE =        isset($_POST['assignmentINPUT_PRE']) ? $_POST['assignmentINPUT_PRE']: 0;
            $grades->update($gradeid);
          }
           if (isset($_POST['attendanceINPUT_PRE'])) {
           # code...
            $grades = new Grade(); 
            $grades->ATTENDANCE_PRE =        isset($_POST['attendanceINPUT_PRE']) ? $_POST['attendanceINPUT_PRE']: 0;
            $grades->update($gradeid);
          }
           if (isset($_POST['examINPUT_PRE'])) {
           # code...
            $grades = new Grade(); 
            $grades->TERMEXAM_PRE =        isset($_POST['examINPUT_PRE']) ? $_POST['examINPUT_PRE']: 0;
            $grades->update($gradeid);
          }
          if (isset($_GET['TOTALPRE'])) {
           # code...
            $grades = new Grade(); 
            $grades->TOTALGRADES_PRE =        isset($_GET['TOTALPRE']) ? $_GET['TOTALPRE']: 0;
            $grades->update($gradeid);
          }





// `QUIZZES_MID`, `ACTIVITIES_MID`, `HANDSON_MID`, `ASSIGNMENT_MID`, `ATTENDANCE_MID`, `TERMEXAM_MID`, `TOTALGRADES_MID`
         if (isset($_POST['quizINPUT_MID'])) {
           # code...
            $grades = new Grade(); 
            $grades->QUIZZES_MID =        isset($_POST['quizINPUT_MID']) ? $_POST['quizINPUT_MID']: 0;
            $grades->update($gradeid);
          }

          if (isset($_POST['activityINPUT_MID'])) {
           # code...
            $grades = new Grade(); 
            $grades->ACTIVITIES_MID =        isset($_POST['activityINPUT_MID']) ? $_POST['activityINPUT_MID']: 0;
            $grades->update($gradeid);
          }
          if (isset($_POST['handsonINPUT_MID'])) {
           # code...
            $grades = new Grade(); 
            $grades->HANDSON_MID =        isset($_POST['handsonINPUT_MID']) ? $_POST['handsonINPUT_MID']: 0;
            $grades->update($gradeid);
          }

          if (isset($_POST['assignmentINPUT_MID'])) {
           # code...
            $grades = new Grade(); 
            $grades->ASSIGNMENT_MID =        isset($_POST['assignmentINPUT_MID']) ? $_POST['assignmentINPUT_MID']: 0;
            $grades->update($gradeid);
          }
           if (isset($_POST['attendanceINPUT_MID'])) {
           # code...
            $grades = new Grade(); 
            $grades->ATTENDANCE_MID =        isset($_POST['attendanceINPUT_MID']) ? $_POST['attendanceINPUT_MID']: 0;
            $grades->update($gradeid);
          }
           if (isset($_POST['examINPUT_MID'])) {
           # code...
            $grades = new Grade(); 
            $grades->TERMEXAM_MID =        isset($_POST['examINPUT_MID']) ? $_POST['examINPUT_MID']: 0;
            $grades->update($gradeid);
          }
          if (isset($_GET['TOTALMID'])) {
           # code...
            $grades = new Grade(); 
            $grades->TOTALGRADES_MID =        isset($_GET['TOTALMID']) ? $_GET['TOTALMID']: 0;
            $grades->update($gradeid);
          }

           // `QUIZZES_FINAL`, `HANDSON_FINAL`, `ACTIVITIES_FINAL`, `ASSIGNMENT_FINAL`, `ATTENDANCE_FINAL`, `TERMEXAM_FINAL`, `TOTALGRADES_FINAL`
          if (isset($_POST['quizINPUT_FINAL'])) {
           # code...
            $grades = new Grade(); 
            $grades->QUIZZES_FINAL =        isset($_POST['quizINPUT_FINAL']) ? $_POST['quizINPUT_FINAL']: 0;
            $grades->update($gradeid);
          }

          if (isset($_POST['activityINPUT_FINAL'])) {
           # code...
            $grades = new Grade(); 
            $grades->ACTIVITIES_FINAL =        isset($_POST['activityINPUT_FINAL']) ? $_POST['activityINPUT_FINAL']: 0;
            $grades->update($gradeid);
          }
          if (isset($_POST['handsonINPUT_FINAL'])) {
           # code...
            $grades = new Grade(); 
            $grades->HANDSON_FINAL =        isset($_POST['handsonINPUT_FINAL']) ? $_POST['handsonINPUT_FINAL']: 0;
            $grades->update($gradeid);
          }

          if (isset($_POST['assignmentINPUT_FINAL'])) {
           # code...
            $grades = new Grade(); 
            $grades->ASSIGNMENT_FINAL =        isset($_POST['assignmentINPUT_FINAL']) ? $_POST['assignmentINPUT_FINAL']: 0;
            $grades->update($gradeid);
          }
           if (isset($_POST['attendanceINPUT_FINAL'])) {
           # code...
            $grades = new Grade(); 
            $grades->ATTENDANCE_FINAL =        isset($_POST['attendanceINPUT_FINAL']) ? $_POST['attendanceINPUT_FINAL']: 0;
            $grades->update($gradeid);
          }
           if (isset($_POST['examINPUT_FINAL'])) {
           # code...
            $grades = new Grade(); 
            $grades->TERMEXAM_FINAL =        isset($_POST['examINPUT_FINAL']) ? $_POST['examINPUT_FINAL']: 0;
            $grades->update($gradeid);
          }


         if (isset($_GET['TOTALFINAL'])) {
           # code...
            $grades = new Grade(); 
            $grades->TOTALGRADES_FINAL =        isset($_GET['TOTALFINAL']) ? $_GET['TOTALFINAL']: 0;
            $grades->update($gradeid);
          }          


         

        // $grades = new Grade(); 
        // $grades->QUIZZES_MID =        isset($_POST['quizINPUT_MID']) ? $_POST['quizINPUT_MID']: 0;
        // $grades->ACTIVITIES_MID =     isset($_POST['activityINPUT_MID']) ? $_POST['activityINPUT_MID'] : 0;
        // $grades->HANDSON_MID =        isset($_POST['handsonINPUT_MID']) ? $_POST['handsonINPUT_MID'] : 0;
        // $grades->ASSIGNMENT_MID =     isset($_POST['assignmentINPUT_MID']) ? $_POST['assignmentINPUT_MID'] : 0;
        // $grades->ATTENDANCE_MID =     isset($_POST['attendanceINPUT_MID']) ? $_POST['attendanceINPUT_MID'] : 0;
        // $grades->TERMEXAM_MID =       isset($_POST['examINPUT_MID']) ? $_POST['examINPUT_MID'] : 0;
        // $grades->TOTALGRADES_MID =    isset($_POST['totalMID']) ? $_POST['totalMID'] : 0;

        // $grades->QUIZZES_FINAL =      isset($_POST['quizINPUT_FINAL'])  ? $_POST['quizINPUT_FINAL'] : 0;
        // $grades->ACTIVITIES_FINAL =   isset($_POST['activityINPUT_FINAL']) ? $_POST['activityINPUT_FINAL'] : 0;
        // $grades->HANDSON_FINAL =      isset($_POST['handsonINPUT_FINAL']) ? $_POST['handsonINPUT_FINAL'] : 0;
        // $grades->ASSIGNMENT_FINAL =   isset($_POST['assignmentINPUT_FINAL']) ? $_POST['assignmentINPUT_FINAL'] : 0;
        // $grades->ATTENDANCE_FINAL =   isset($_POST['attendanceINPUT_FINAL']) ? $_POST['attendanceINPUT_FINAL'] : 0;
        // $grades->TERMEXAM_FINAL =     isset($_POST['examINPUT_FINAL']) ? $_POST['examINPUT_FINAL'] : 0;
        // $grades->TOTALGRADES_FINAL =  isset($_POST['totalFINAL']) ? $_POST['totalFINAL'] : 0;

        // // $grades->TOTALMIDTERM =       $_POST['MIDTERMTOTAL'];
        // // $grades->TOTALFINALE =        $_POST['FINALETOTAL']; 

        // $grades->update($gradeid);
      }

          ?>


<?php
  if (isset($_POST['SHOWPRE'])) {
    # code...
     $classcode = isset($_GET['CLASSCODE']) ? $_GET['CLASSCODE'] :"";
?>
 <table  class="  table-striped table-bordered table-hover  " style="width: 100%"   cellspacing="0"> 
                <thead>
                  <tr> 
                    <th width="400">Name</th>
                     <td width="75">Quiz 10%</td>
                     <td width="75">Hands On 10%</td>
                     <td width="75">Activity 20%</td>
                     <td width="75">Attendance 10%</td>  
                     <td width="75">Assignment 10%</td>
                     <td width="75">Exam 40%</td>
                     <td width="75">Total 100%</td> 
               
                  </tr> 
                </thead> 
                <tbody>
                  <?php  
                  // `QUIZZES_MID`, `ACTIVITIES_MID`, `HANDSON_MID`, `ASSIGNMENT_MID`, `ATTENDANCE_MID`, `TERMEXAM_MID`, `TOTALGRADES_MID`
                    // $mydb->setQuery("SELECT * FROM `tblstudent` s,tblgrades g WHERE s.`IDNO`=g.`IDNO` AND s.`CLASSCODE`='".$classcode."' AND s.ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME'] ."'");
                 $mydb->setQuery("SELECT * 
                          FROM  `tblstudent` s, tblgrades g
                          WHERE s.`IDNO` = g.`IDNO`  AND s.`CLASSID`=g.`CLASSID`
                          AND g.`CLASSID` =".$classcode);


                    $cur = $mydb->loadResultList(); 
                  foreach ($cur as $result) { 
                    echo '<tr>'; 
                    echo '<td>'. $result->LNAME.','. $result->FNAME.' '. $result->MNAME.'</td>';  
                    echo '<td><input class="quizPRE loadpre" name="" id="quizPRE'.$result->IDNO.'" type="text" style="width: 75px;" READONLY   value="'.$result->QUIZZES_PRE.'" data-id="'.$result->IDNO.'" /><input   id="classcode" type="hidden"   value="'.$result->CLASSID.'"/></td>';


                    echo '<td><input type="number" class="handsonPRE loadpre" name="" id="handsonPRE'.$result->IDNO.'"   style="width: 75px;"    value="'.$result->HANDSON_PRE.'" data-id="'.$result->IDNO.'"  min="0" max="10"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="activityPRE loadpre" id="activityPRE'.$result->IDNO.'"  value="'.$result->ACTIVITIES_PRE.'"  data-id="'.$result->IDNO.'" min="0" max="20"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="attendancePRE loadpre" id="attendancePRE'.$result->IDNO.'"  value="'.$result->ATTENDANCE_PRE.'"  data-id="'.$result->IDNO.'" min="0" max="10"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="assignmentPRE loadpre" id="assignmentPRE'.$result->IDNO.'"  value="'.$result->ASSIGNMENT_PRE.'" data-id="'.$result->IDNO.'"  min="0" max="10"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="exampre loadpre" id="exampre'.$result->IDNO.'"  value="'.$result->TERMEXAM_PRE.'"  data-id="'.$result->IDNO.'" min="0" max="40"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="totalgradespre loadpre" id="totalgradespre'.$result->IDNO.'"  value="'.$result->TOTALGRADES_PRE.'"   data-id="'.$result->IDNO.'" min="0" max="100"  READONLY="true"/></td>';   
                    echo '</tr>';
                  } 
                  ?>
                </tbody> 
              </table>
<?php
 }
?>
<?php
  if (isset($_POST['SHOWMID'])) {
    # code...
     $classcode = isset($_GET['CLASSCODE']) ? $_GET['CLASSCODE'] :"";
?>

          <table  class="  table-striped table-bordered table-hover  " style="width: 100%"   cellspacing="0"> 
                <thead>
                  <tr> 
                    <th width="400">Name</th>
                     <td width="75">Quiz 10%</td>
                     <td width="75">Hands On 10%</td>
                     <td width="75">Activity 20%</td>
                     <td width="75">Attendance 10%</td>  
                     <td width="75">Assignment 10%</td>
                     <td width="75">Exam 40%</td>
                     <td width="75">Total 100%</td> 
               
                  </tr> 
                </thead> 
                <tbody>
                  <?php  
                  // `QUIZZES_MID`, `ACTIVITIES_MID`, `HANDSON_MID`, `ASSIGNMENT_MID`, `ATTENDANCE_MID`, `TERMEXAM_MID`, `TOTALGRADES_MID`
                    /*$mydb->setQuery("SELECT * FROM `tblstudent` s,tblgrades g WHERE s.`IDNO`=g.`IDNO` AND s.`CLASSCODE`='".$classcode."' AND s.ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME'] ."'");*/

                  $mydb->setQuery("SELECT * 
                          FROM  `tblstudent` s, tblgrades g
                          WHERE s.`IDNO` = g.`IDNO`  AND s.`CLASSID`=g.`CLASSID`
                          AND g.`CLASSID` =".$classcode);
                  
            
                    

                    $cur = $mydb->loadResultList(); 
                  foreach ($cur as $result) { 
                    echo '<tr>'; 
                    echo '<td>'. $result->LNAME.','. $result->FNAME.' '. $result->MNAME.'</td>';  
                    echo '<td><input class="quiz loadmid" name="" id="quiz'.$result->IDNO.'" type="text" style="width: 75px;" READONLY   value="'.$result->QUIZZES_MID.'" data-id="'.$result->IDNO.'" /><input   id="classcode" type="hidden"   value="'.$result->CLASSID.'"/></td>';


                    echo '<td><input type="number" class="handson loadmid" name="" id="handson'.$result->IDNO.'"   style="width: 75px;"    value="'.$result->HANDSON_MID.'" data-id="'.$result->IDNO.'"  min="0" max="10"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="activity loadmid" id="activity'.$result->IDNO.'"  value="'.$result->ACTIVITIES_MID.'"  data-id="'.$result->IDNO.'" min="0" max="20"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="attendance loadmid" id="attendance'.$result->IDNO.'"  value="'.$result->ATTENDANCE_MID.'"  data-id="'.$result->IDNO.'" min="0" max="10"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="assignment loadmid" id="assignment'.$result->IDNO.'"  value="'.$result->ASSIGNMENT_MID.'" data-id="'.$result->IDNO.'"  min="0" max="10"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="exammid loadmid" id="exammid'.$result->IDNO.'"  value="'.$result->TERMEXAM_MID.'"  data-id="'.$result->IDNO.'" min="0" max="40"/></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="totalgradesmid loadmid" id="totalgradesmid'.$result->IDNO.'"  value="'.$result->TOTALGRADES_MID.'"   data-id="'.$result->IDNO.'" min="0" max="100"  READONLY="true"/></td>';   
                    echo '</tr>';
                  } 
                  ?>
                </tbody> 
              </table>
<?php
 }
?>

<?php
  if (isset($_POST['SHOWFINAL'])) {
    # code...
     $classcode = isset($_GET['CLASSCODE']) ? $_GET['CLASSCODE'] :"";
?>

 <table  class="  table-striped table-bordered table-hover  " style="width: 100%"  cellspacing="0"> 
                <thead>
                  <tr> 
                   <th width="400">Name</th>
                     <td width="75">Quiz 10%</td>
                     <td width="75">Hands On 10%</td>
                     <td width="75">Activity 20%</td>
                     <td width="75">Attendance 10%</td>  
                     <td width="75">Assignment 10%</td>
                     <td width="75">Exam 40%</td>
                     <td width="75">Total 100%</td> 
                  </tr> 
                </thead> 
                <tbody>
                    <?php  
                  // `QUIZZES_MID`, `ACTIVITIES_MID`, `HANDSON_MID`, `ASSIGNMENT_MID`, `ATTENDANCE_MID`, `TERMEXAM_MID`, `TOTALGRADES_MID`
                    // $mydb->setQuery("SELECT * FROM `tblstudent` s,tblgrades g WHERE s.`IDNO`=g.`IDNO` AND s.`CLASSCODE`='".$classcode."' AND s.ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME'] ."'");
$mydb->setQuery("SELECT * 
                          FROM  `tblstudent` s, tblgrades g
                          WHERE s.`IDNO` = g.`IDNO`  AND s.`CLASSID`=g.`CLASSID`
                          AND g.`CLASSID` =".$classcode);

                    $cur = $mydb->loadResultList(); 
                  foreach ($cur as $result) { 
                    echo '<tr>'; 
                    echo '<td>'. $result->LNAME.','. $result->FNAME.' '. $result->MNAME.'</td>';  
                    echo '<td><input class="quiz_final loadfinal" name="" id="quiz_final'.$result->IDNO.'" type="number" style="width: 75px;" READONLY value="'.$result->QUIZZES_FINAL.'" data-id="'.$result->IDNO.'" /><input   id="classcode" type="hidden"   value="'.$result->CLASSID.'"/></td>';


                    echo '<td><input type="number" class="handson_final loadfinal" name="" id="handson_final'.$result->IDNO.'"   style="width: 75px;"    value="'.$result->HANDSON_FINAL.'" data-id="'.$result->IDNO.'"  min="0" max="10" /></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="activity_final loadfinal" id="activity_final'.$result->IDNO.'"  value="'.$result->ACTIVITIES_FINAL.'"  data-id="'.$result->IDNO.'" min="0" max="20" /></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="attendance_final loadfinal" id="attendance_final'.$result->IDNO.'"  value="'.$result->ATTENDANCE_FINAL.'"  data-id="'.$result->IDNO.'" min="0" max="10" /></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="assignment_final loadfinal" id="assignment_final'.$result->IDNO.'"  value="'.$result->ASSIGNMENT_FINAL.'" data-id="'.$result->IDNO.'" min="0" max="10"  /></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="examfinal loadfinal" id="examfinal'.$result->IDNO.'"  value="'.$result->TERMEXAM_FINAL.'"  data-id="'.$result->IDNO.'" min="0" max="40" /></td>'; 
                    echo '<td><input type="number" style="width: 75px;" class="totalgradesfinal loadfinal" id="totalgradesfinal'.$result->IDNO.'"  value="'.$result->TOTALGRADES_FINAL.'"   data-id="'.$result->IDNO.'" min="0" max="100"  READONLY="true"/></td>';   
                    echo '</tr>';
                  } 
                  ?>
                </tbody> 
              </table>
<?php
 }
?>