<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$IDNO = $_GET['id'];
    if($IDNO==''){
  redirect("index.php");
}
  $student = New Student();
  $res = $student->single_student($IDNO);
  
?>

 <form class="form-horizontal span6" action="controller.php?action=addgrade" method="POST">
<div class="row">
 <div class="col-lg-12">
		 <div class="col-md-6 page-header">
		 	<h2 ><?php echo   $res->LNAME.','. $res->FNAME.' '. $res->MNAME; ?></h2> 
      <input type="hidden" name="IDNO" value="<?php echo $res->IDNO ;?>">
		 </div>  
 
    <div class="col-lg-6">
  	<div class="col-md-6">
  		<h4>Course/Year :<?php echo $res->COURSE.'-'.$res->YEARLEVEL;?> </h4>
  	</div>
  	<div class="col-md-6">
  		<h4>Class Code :<?php echo $res->CLASSCODE ;?> </h4>
      <input type="hidden" name="CLASSCODE" value="<?php echo $res->CLASSCODE ;?>">
  	</div>
  </div>
	
</div>  
  </div>
 </div>
<div class="container">
   <?php  

   $idno = $res->IDNO;
   $classcode = $res->CLASSCODE; 
    $sql = "SELECT * FROM `tblgrades` WHERE IDNO='{$idno}' AND CLASSCODE='".$classcode."'";
    $mydb->setQuery($sql);
    @$g = $mydb->loadSingleResult()
// `IDNO`, `CLASSCODE`, `QUIZZES_MID`, `ACTIVITIES_MID`, `HANDSON_MID`, `ASSIGNMENT_MID`, `ATTENDANCE_MID`, `TERMEXAM_MID`, `TOTALGRADES_MID`, `QUIZZES_FINAL`, `HANDSON_FINAL`, `ACTIVITIES_FINA`, `ASSIGNMENT_FINAL`, `ATTENDANCE_FINAL`, `TERMEXAM_FINAL`, `TOTALGRADES_FINAL`, `TOTALMIDTERM`, `TOTALFINALE`, `INPUTDATE`, `ACCOUNT_USERNAME 
   ?>
<div class="row">
     <div class="col-lg-6">
      <table class="table-bordered">
          <tr>
          <td width="150">CRITERIA</td>
          <td width="50">%</td>
          <td colspan="3" align="center">GRADE</td>
         <!--  <td width="50"></td>
          <td width="50"></td> -->
        </tr>
        <tr>
          <td width="150">Quiz</td>
          <td ><input type="" class="intmid" name="" style="width: 60px;" value="10" readonly="true"></td>
          <td ><input type="" class="intmid" name="quizPERCENT_MID" id="quizPERCENT_MID" style="width: 60px;" value="0.1" readonly="true"></td>
          <td ><input type="" class="intmid" name="quizINPUT_MID" id="quizINPUT_MID" value="<?php echo isset($g->QUIZZES_MID) ? $g->QUIZZES_MID : "0" ;?>" style="width: 60px;"></td>
          <td ><input type="" class="intmid" name="quizTOTAL_MID" id="quizTOTAL_MID" value="0" style="width: 60px;" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Hands On</td>
          <td ><input type="" class="intmid" name="" id="" style="width: 60px" value="10" readonly="true"></td>
          <td ><input type="" class="intmid" name="handsonPERCENT_MID" id="handsonPERCENT_MID" style="width: 60px" value="0.1" readonly="true"></td>
          <td ><input type="" class="intmid" name="handsonINPUT_MID" id="handsonINPUT_MID" value="<?php echo isset($g->HANDSON_MID) ? $g->HANDSON_MID : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="intmid" name="handsonTOTAL_MID" id="handsonTOTAL_MID" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Activity</td>
          <td ><input type="" class="intmid" name="" id="" style="width: 60px" value="20" readonly="true"></td>
          <td ><input type="" class="intmid" name="activityPERCENT_MID" id="activityPERCENT_MID" style="width: 60px" value="0.2" readonly="true"></td>
          <td ><input type="" class="intmid" name="activityINPUT_MID" id="activityINPUT_MID" value="<?php echo isset($g->ACTIVITIES_MID) ? $g->ACTIVITIES_MID : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="intmid" name="activityTOTAL_MID" id="activityTOTAL_MID" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Attendance</td>
          <td ><input type="" class="intmid" name="" id="" style="width: 60px" value="10" readonly="true"></td>
          <td ><input type="" class="intmid" name="attendancePERCENT_MID" id="attendancePERCENT_MID" style="width: 60px" value="0.1" readonly="true"></td>
          <td ><input type="" class="intmid" name="attendanceINPUT_MID" id="attendanceINPUT_MID" value="<?php echo isset($g->ATTENDANCE_MID) ? $g->ATTENDANCE_MID : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="intmid" name="attendanceTOTAL_MID" id="attendanceTOTAL_MID" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Assignment</td>
          <td ><input type="" class="intmid" name="" id="" style="width: 60px" value="10" readonly="true"></td>
          <td ><input type="" class="intmid" name="assignmentPERCENT_MID" id="assignmentPERCENT_MID" style="width: 60px" value="0.1" readonly="true"></td>
          <td ><input type="" class="intmid" name="assignmentINPUT_MID" id="assignmentINPUT_MID" value="<?php echo isset($g->ASSIGNMENT_MID) ? $g->ASSIGNMENT_MID : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="intmid" name="assignmentTOTAL_MID" id="assignmentTOTAL_MID" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Exam</td>
          <td ><input type="" class="intmid" name="" id="" style="width: 60px" value="40" readonly="true"></td>
          <td ><input type="" class="intmid" name="examPERCENT_MID" id="examPERCENT_MID" style="width: 60px" value="0.4" readonly="true"></td>
          <td ><input type="" class="intmid" name="examINPUT_MID" id="examINPUT_MID" value="<?php echo isset($g->TERMEXAM_MID) ? $g->TERMEXAM_MID : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="intmid" name="examTOTAL_MID" id="examTOTAL_MID" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Total</td>
          <td ><input type="" class="" name="" id="" style="width: 60px"  value="100" readonly="true"></td>
          <td ><input type="" class="" name="" id="" style="width: 60px" value="1" readonly="true"></td>
          <td ><input type="" class="" name="" id="" style="width: 60px" readonly="true"></td>
          <td ><input type="" class="" name="totalMID" id="totalMID" value="<?php echo isset($g->TOTALGRADES_MID) ? $g->TOTALGRADES_MID : "0" ;?>" style="width: 60px" readonly="true"></td>
        </tr>
      </table>
    </div>  
      <div class="col-lg-6">
      <table class="table-bordered">
          <tr>
          <td width="150">CRITERIA</td>
          <td width="50">%</td>
          <td colspan="3" align="center">GRADE</td>
         <!--  <td width="50"></td>
          <td width="50"></td> -->
        </tr>
        <tr>
          <td width="150">Quiz</td>
          <td ><input type="" class="infinal" name="" style="width: 60px;" value="10" readonly="true"></td>
          <td ><input type="" class="infinal" name="quizPERCENT_FINAL" id="quizPERCENT_FINAL" style="width: 60px;" value="0.1" readonly="true"></td>
          <td ><input type="" class="infinal" name="quizINPUT_FINAL" id="quizINPUT_FINAL" value="<?php echo isset($g->QUIZZES_FINAL) ? $g->QUIZZES_FINAL : "0" ;?>" style="width: 60px;"></td>
          <td ><input type="" class="infinal" name="quizTOTAL_FINAL" id="quizTOTAL_FINAL" value="0" style="width: 60px;" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Hands On</td>
          <td ><input type="" class="infinal" name="" id="" style="width: 60px" value="10" readonly="true"></td>
          <td ><input type="" class="infinal" name="handsonPERCENT_FINAL" id="handsonPERCENT_FINAL" style="width: 60px" value="0.1" readonly="true"></td>
          <td ><input type="" class="infinal" name="handsonINPUT_FINAL" id="handsonINPUT_FINAL" value="<?php echo isset($g->HANDSON_FINAL) ? $g->HANDSON_FINAL : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="infinal" name="handsonTOTAL_FINAL" id="handsonTOTAL_FINAL" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Activity</td>
          <td ><input type="" class="infinal" name="" id="" style="width: 60px" value="20" readonly="true"></td>
          <td ><input type="" class="infinal" name="activityPERCENT_FINAL" id="activityPERCENT_FINAL" style="width: 60px" value="0.2" readonly="true"></td>
          <td ><input type="" class="infinal" name="activityINPUT_FINAL" id="activityINPUT_FINAL" value="<?php echo isset($g->ACTIVITIES_FINAL) ? $g->ACTIVITIES_FINAL : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="infinal" name="activityTOTAL_FINAL" id="activityTOTAL_FINAL" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Attendance</td>
          <td ><input type="" class="infinal" name="" id="" style="width: 60px" value="10" readonly="true"></td>
          <td ><input type="" class="infinal" name="attendancePERCENT_FINAL" id="attendancePERCENT_FINAL" style="width: 60px" value="0.1" readonly="true"></td>
          <td ><input type="" class="infinal" name="attendanceINPUT_FINAL" id="attendanceINPUT_FINAL" value="<?php echo isset($g->ATTENDANCE_FINAL) ? $g->ATTENDANCE_FINAL : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="infinal" name="attendanceTOTAL_FINAL" id="attendanceTOTAL_FINAL" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Assignment</td>
          <td ><input type="" class="infinal" name="" id="" style="width: 60px" value="10" readonly="true"></td>
          <td ><input type="" class="infinal" name="assignmentPERCENT_FINAL" id="assignmentPERCENT_FINAL" style="width: 60px" value="0.1" readonly="true"></td>
          <td ><input type="" class="infinal" name="assignmentINPUT_FINAL" id="assignmentINPUT_FINAL" value="<?php echo isset($g->ASSIGNMENT_FINAL) ? $g->ASSIGNMENT_FINAL : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="infinal" name="assignmentTOTAL_FINAL" id="assignmentTOTAL_FINAL" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Exam</td>
          <td ><input type="" class="infinal" name="" id="" style="width: 60px" value="40" readonly="true"></td>
          <td ><input type="" class="infinal" name="examPERCENT_FINAL" id="examPERCENT_FINAL" style="width: 60px" value="0.4" readonly="true"></td>
          <td ><input type="" class="infinal" name="examINPUT_FINAL" id="examINPUT_FINAL" value="<?php echo isset($g->TERMEXAM_FINAL) ? $g->TERMEXAM_FINAL : "0" ;?>" style="width: 60px"></td>
          <td ><input type="" class="infinal" name="examTOTAL_FINAL" id="examTOTAL_FINAL" value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">Total</td>
          <td ><input type="" class="" name="" id="" style="width: 60px"  value="100" readonly="true"></td>
          <td ><input type="" class="" name="" id="" style="width: 60px" value="1" readonly="true"></td>
          <td ><input type="" class="" name="" id="" style="width: 60px" readonly="true"></td>
          <td ><input type="" class="" name="totalFINAL" id="totalFINAL" value="<?php echo isset($g->TOTALGRADES_FINAL) ? $g->TOTALGRADES_FINAL : "0" ;?>" style="width: 60px" readonly="true"></td>
        </tr>
      </table>
    </div> 
  </div>
    <div class="row">
    <div class="col-lg-12" align="center" >
       <table class="table-bordered" style="width: 100">
          <tr>
          <td  colspan="3">TOTAL GRADE COMPUTATION</td> 
         <!--  <td width="50"></td>
          <td width="50"></td> -->
        </tr>
        
        <tr>
          <td width="150">MIDTERM</td> 
          <td ><input type="" class="" name="MIDTERM" id="MIDTERM" style="width: 60px" readonly="true"></td>
          <td ><input type="" class="" name="MIDTERMTOTAL" id="MIDTERMTOTAL"  value="0" style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">FINALE</td>  
          <td ><input type="" class="" name="FINALE" id="FINALE" style="width: 60px" readonly="true"></td>
          <td ><input type="" class="" name="FINALETOTAL" id="FINALETOTAL" value="0"  style="width: 60px" readonly="true"></td>
        </tr>
        <tr>
          <td width="150">TOTAL</td>  
          <td colspan="2"><input type="" class="" name="TOTALAVERAGE" id="TOTALAVERAGE" style="width: 120px" readonly="true"></td>
        </tr>
      </table>
    </div> 
  </div>

  <div class="row">
    <div class="form-group">
                    <div class="col-md-12">  
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button>  
                    </div>
                  </div>
  </div>

</div> <!---End of container-->

 
   </form>