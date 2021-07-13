<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

     $classcode = isset($_GET['CLASSCODE']) ? $_GET['CLASSCODE'] :"";
     if ($classcode=="") {
     	# code...
     	redirect(web_root."admin/schedule/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <!-- <h1 class="page-header">List of Students  </h1> -->
       		</div> 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">	
			       <ul class="nav nav-tabs" id="myTab">
					    <li class="active"><a href="#prelim" data-toggle="tab">Prelim</a></li> 
					    <li><a href="#midterm" data-toggle="tab">Midterm</a></li> 
					    <li><a href="#final" data-toggle="tab">Final</a></li>  
					</ul>      
					<div class="tab-content"> 
						 <div class="tab-pane active" id="prelim"> 
			            	<div id="loaddata_PRE">
			            	<table  class="  table-striped table-bordered table-hover  " style="width: 100%"   cellspacing="0"> 
							  <thead>
							  	<tr> 
							  		<th width="400">Name</th>
							  		 <td width="75">Attendance</td>  
							  		 <td width="75">Quiz</td>
							  		 <td width="75">Lecture</td>
							  		 <td width="75">Laboratory</td>
							  		 <td width="75">Activity</td>
							  		 <td width="75">Assignment</td>
							  		 <td width="75">Long Test Prelim</td>
							  		 <td width="75">Exam Prelim</td>
							  		 <td width="75">Total</td> 
							 
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

							  		echo '<td><input type="number" style="width: 75px;" class="attendancePRE loadpre" id="attendancePRE'.$result->IDNO.'"  value="'.$result->ATTENDANCE_PRE.'"  data-id="'.$result->IDNO.'" min="0" max="10"/></td>'; 

							  		echo '<td><input class="quizPRE loadpre" name="" id="quizPRE'.$result->IDNO.'" type="text" style="width: 75px;" READONLY   value="'.$result->QUIZZES_PRE.'" data-id="'.$result->IDNO.'" /><input   id="classcode" type="hidden"   value="'.$result->CLASSID.'"/></td>';


							  		echo '<td><input type="number" class="handsonPRE loadpre" name="" id="handsonPRE'.$result->IDNO.'"   style="width: 75px;"    value="'.$result->HANDSON_PRE.'" data-id="'.$result->IDNO.'"  min="0" max="10"/></td>'; 

							  		echo '<td><input type="number" style="width: 75px;" class="activityPRE loadpre" id="activityPRE'.$result->IDNO.'"  value="'.$result->ACTIVITIES_PRE.'"  data-id="'.$result->IDNO.'" min="0" max="20"/></td>'; 
							 
							  		echo '<td><input type="number" style="width: 75px;" class="assignmentPRE loadpre" id="assignmentPRE'.$result->IDNO.'"  value="'.$result->ASSIGNMENT_PRE.'" data-id="'.$result->IDNO.'"  min="0" max="10"/></td>'; 
							  		
							  		echo '<td><input type="number" style="width: 75px;" class="exampre loadpre" id="exampre'.$result->IDNO.'"  value="'.$result->TERMEXAM_PRE.'"  data-id="'.$result->IDNO.'" min="0" max="40"/></td>'; 
							  		echo '<td><input type="number" style="width: 75px;" class="totalgradespre loadpre" id="totalgradespre'.$result->IDNO.'"  value="'.$result->TOTALGRADES_PRE.'"   data-id="'.$result->IDNO.'" min="0" max="100"  READONLY="true"/></td>';   
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody> 
							</table>
			            	</div> 
			            </div> 


			            <div class="tab-pane" id="midterm"> 
			            	<div id="loaddata_MID">
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
			            	</div> 
			            </div> 
			            <div class="tab-pane " id="final"> 
			            	<div id="loaddata_FINAL">
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
							  		echo '<td><input class="quiz_final loadfinal" name="" id="quiz_final'.$result->IDNO.'" type="text" style="width: 75px;" READONLY value="'.$result->QUIZZES_FINAL.'" data-id="'.$result->IDNO.'"    /><input   id="classcode" type="hidden"   value="'.$result->CLASSID.'"/></td>';


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
			            	</div> 
			            </div> 
					</div><!--/tab-content-->		


 
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
 -->
			</div>
      </form>

</div> <!---End of container-->