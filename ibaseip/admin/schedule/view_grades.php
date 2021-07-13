<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

     $classcode = isset($_GET['CLASSCODE']) ? $_GET['CLASSCODE'] :"";
     if ($classcode=="") {
     	# code...
     	redirect(web_root."admin/schedule/index.php");
     }
 

$view_grade = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : ''; 

     switch ($view_grade) {
      	case 'Prelim':
      		# code...
	 	echo '<ul class="nav  nav-pills nav-justified">
					    <li  class="active"><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Prelim"  >Prelim</a></li> 
					    <li  class=""><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Midterm" >Midterm</a></li> 
					    <li  class=""><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Final" >Final</a></li>  
					</ul><br/><br/> ';
		prelim($classcode);
      		break;
      	case 'Midterm':
      		# code...
		echo '<ul class="nav  nav-pills nav-justified">
					    <li  class=""><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Prelim"  >Prelim</a></li> 
					    <li  class="active"><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Midterm" >Midterm</a></li> 
					    <li  class=""><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Final" >Final</a></li>  
					</ul><br/><br/> ';
		midterm($classcode);
      		break;
      	case 'Final':
      		# code...
	 	echo '<ul class="nav  nav-pills nav-justified">
					    <li  class=""><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Prelim"  >Prelim</a></li> 
					    <li  class=""><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Midterm" >Midterm</a></li> 
					    <li  class="active"><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Final" >Final</a></li>  
					</ul><br/><br/> ';
		finals($classcode);
      		break;  
      	default:
      		# code...
      	echo '<ul class="nav  nav-pills nav-justified">
					    <li  class="active"><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Prelim"  >Prelim</a></li> 
					    <li  class=""><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Midterm" >Midterm</a></li> 
					    <li  class=""><a href="index.php?view=view&CLASSCODE='.$classcode.'&q=Final" >Final</a></li>  
					</ul><br/><br/> ';
		prelim($classcode);
      		break;
      } 


?>

  

<?php  function prelim($classcode =0){
global $mydb;
$sql = "Select * From tblpercent";
$mydb->setQuery($sql);
$percent = $mydb->loadSingleResult();

$total = $percent->Attendance + $percent->Quiz + $percent->Lecture + $percent->Laboratory + $percent->Activity + $percent->Assignments + $percent->LongTest + $percent->Exam;
 ?>
<table  class="  table-striped table-bordered table-hover  " cellspacing="0"> 
							  <thead>
							  	<tr> 
							  		<th width="400">Name</th>
							  		 <td width="75">Attendance(<?php echo $percent->Attendance ; ?>%)</td>  
							  		 <td width="75">Quiz(<?php echo $percent->Quiz ; ?>%)</td>
							  		 <td width="75">Lecture(<?php echo $percent->Lecture ; ?>%)</td>
							  		 <td width="75">Laboratory(<?php echo $percent->Laboratory ; ?>%)</td>
							  		 <td width="75">Activity(<?php echo $percent->Activity ; ?>%)</td>
							  		 <td width="75">Assignment(<?php echo $percent->Assignments ; ?>%)</td>
							  		 <td width="75">Long Test Prelim(<?php echo $percent->LongTest ; ?>%)</td>
							  		 <td width="75">Exam Prelim(<?php echo $percent->Exam ; ?>%)</td>
							  		 <td width="75">Total(<?php echo $total ; ?>%)</td> 
							 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php  
							 
							 $mydb->setQuery("SELECT * 
													FROM  `tblstudent` s, tblgrade g
													WHERE s.`IDNO` = g.`IDNO`  AND s.`CLASSID`=g.`CLASSID` AND Grading = 'Prelim'
													AND g.`CLASSID` =".$classcode);


							  		$cur = $mydb->loadResultList(); 
									foreach ($cur as $result) { 
							  		echo '<tr>'; 
							  		echo '<td>'. $result->LNAME.','. $result->FNAME.' '. $result->MNAME.'</td>';  

							  		echo '<td><input type="number" style="width: 100px;" class="attendancePRE loadpre" id="Attendance'.$result->GRADEID.'"  value="'.$result->Attendance.'"  data-id="'.$result->GRADEID.'" min="0" /></td>'; 

							  		echo '<td><input class="quizPRE loadpre" name="" id="Quiz'.$result->GRADEID.'" type="number" style="width: 100px;"   value="'.$result->Quiz.'" data-id="'.$result->GRADEID.'" /><input   id="classcode" type="hidden"   value="'.$result->CLASSID.'"/></td>';


							  		echo '<td><input type="number" class="handsonPRE loadpre" name="" id="Lecture'.$result->GRADEID.'"   style="width: 100px;"    value="'.$result->Lecture.'" data-id="'.$result->GRADEID.'"  min="0" /></td>'; 

							  		echo '<td><input type="number" class="handsonPRE loadpre" name="" id="Laboratory'.$result->GRADEID.'"   style="width: 100px;"    value="'.$result->Laboratory.'" data-id="'.$result->GRADEID.'"  min="0" /></td>'; 

							  		echo '<td><input type="number" style="width: 100px;" class="activityPRE loadpre" id="Activity'.$result->GRADEID.'"  value="'.$result->Activity.'"  data-id="'.$result->GRADEID.'" min="0" max="20"/></td>'; 
							 
							  		echo '<td><input type="number" style="width: 100px;" class="assignmentPRE loadpre" id="Assignment'.$result->GRADEID.'"  value="'.$result->Assignment.'" data-id="'.$result->GRADEID.'"  min="0" /></td>'; 
							  		
							  		echo '<td><input type="number" style="width: 100px;" class="exampre loadpre" id="LongTest'.$result->GRADEID.'"  value="'.$result->LongTest.'"  data-id="'.$result->GRADEID.'" min="0" max="40"/></td>';

							  		echo '<td><input type="number" style="width: 100px;" class="totalgradespre loadpre" id="Exam'.$result->GRADEID.'"  value="'.$result->Exam.'"   data-id="'.$result->GRADEID.'" min="0" max="100"  /></td>';   

							  		echo '<td><div id="totalprelim'.$result->GRADEID.'">'.$result->Total.'</div></td>'; 
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody> 
							</table> 
<?php } ?>
<?php  function midterm($classcode=0){
global $mydb;
$sql = "Select * From tblpercent";
$mydb->setQuery($sql);
$percent = $mydb->loadSingleResult();

$total = $percent->Attendance + $percent->Quiz + $percent->Lecture + $percent->Laboratory + $percent->Activity + $percent->Assignments + $percent->LongTest + $percent->Exam;
 ?>
<table  class="  table-striped table-bordered table-hover  " cellspacing="0"> 
							  <thead>
							  	<tr> 
							  		<th width="400">Name</th>
							  		 <td width="75">Attendance(<?php echo $percent->Attendance ; ?>%)</td>  
							  		 <td width="75">Quiz(<?php echo $percent->Quiz ; ?>%)</td>
							  		 <td width="75">Lecture(<?php echo $percent->Lecture ; ?>%)</td>
							  		 <td width="75">Laboratory(<?php echo $percent->Laboratory ; ?>%)</td>
							  		 <td width="75">Activity(<?php echo $percent->Activity ; ?>%)</td>
							  		 <td width="75">Assignment(<?php echo $percent->Assignments ; ?>%)</td>
							  		 <td width="75">Long Test Midterm(<?php echo $percent->LongTest ; ?>%)</td>
							  		 <td width="75">Exam Midterm(<?php echo $percent->Exam ; ?>%)</td>
							  		 <td width="75">Total(<?php echo $total ; ?>%)</td> 
							 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php  
							 
							 $mydb->setQuery("SELECT * 
													FROM  `tblstudent` s, tblgrade g
													WHERE s.`IDNO` = g.`IDNO`  AND s.`CLASSID`=g.`CLASSID` AND Grading = 'Midterm'
													AND g.`CLASSID` =".$classcode);


							  		$cur = $mydb->loadResultList(); 
									foreach ($cur as $result) { 
							  		echo '<tr>'; 
							  		echo '<td>'. $result->LNAME.','. $result->FNAME.' '. $result->MNAME.'</td>';  

							  		echo '<td><input type="number" style="width: 100px;" class="attendancePRE load_midterm" id="Attendance'.$result->GRADEID.'"  value="'.$result->Attendance.'"  data-id="'.$result->GRADEID.'" min="0" /></td>'; 

							  		echo '<td><input class="quizPRE load_midterm" name="" id="Quiz'.$result->GRADEID.'" type="number" style="width: 100px;"   value="'.$result->Quiz.'" data-id="'.$result->GRADEID.'" /><input   id="classcode" type="hidden"   value="'.$result->CLASSID.'"/></td>';


							  		echo '<td><input type="number" class="handsonPRE load_midterm" name="" id="Lecture'.$result->GRADEID.'"   style="width: 100px;"    value="'.$result->Lecture.'" data-id="'.$result->GRADEID.'"  min="0" /></td>'; 

							  		echo '<td><input type="number" class="handsonPRE load_midterm" name="" id="Laboratory'.$result->GRADEID.'"   style="width: 100px;"    value="'.$result->Laboratory.'" data-id="'.$result->GRADEID.'"  min="0" /></td>'; 

							  		echo '<td><input type="number" style="width: 100px;" class="activityPRE load_midterm" id="Activity'.$result->GRADEID.'"  value="'.$result->Activity.'"  data-id="'.$result->GRADEID.'" min="0" max="20"/></td>'; 
							 
							  		echo '<td><input type="number" style="width: 100px;" class="assignmentPRE load_midterm" id="Assignment'.$result->GRADEID.'"  value="'.$result->Assignment.'" data-id="'.$result->GRADEID.'"  min="0" /></td>'; 
							  		
							  		echo '<td><input type="number" style="width: 100px;" class="exampre load_midterm" id="LongTest'.$result->GRADEID.'"  value="'.$result->LongTest.'"  data-id="'.$result->GRADEID.'" min="0" max="40"/></td>';

							  		echo '<td><input type="number" style="width: 100px;" class="totalgradespre load_midterm" id="Exam'.$result->GRADEID.'"  value="'.$result->Exam.'"   data-id="'.$result->GRADEID.'" min="0" max="100"  /></td>';   

							  		echo '<td><div id="totalMidterm'.$result->GRADEID.'">'.$result->Total.'</div></td>'; 
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody> 
							</table> 
<?php } ?>
<?php  function finals($classcode=0){
global $mydb;
$sql = "Select * From tblpercent";
$mydb->setQuery($sql);
$percent = $mydb->loadSingleResult();

$total = $percent->Attendance + $percent->Quiz + $percent->Lecture + $percent->Laboratory + $percent->Activity + $percent->Assignments + $percent->LongTest + $percent->Exam;
 ?>
<table  class="  table-striped table-bordered table-hover  " cellspacing="0"> 
							  <thead>
							  	<tr> 
							  		<th width="400">Name</th>
							  		 <td width="75">Attendance(<?php echo $percent->Attendance ; ?>%)</td>  
							  		 <td width="75">Quiz(<?php echo $percent->Quiz ; ?>%)</td>
							  		 <td width="75">Lecture(<?php echo $percent->Lecture ; ?>%)</td>
							  		 <td width="75">Laboratory(<?php echo $percent->Laboratory ; ?>%)</td>
							  		 <td width="75">Activity(<?php echo $percent->Activity ; ?>%)</td>
							  		 <td width="75">Assignment(<?php echo $percent->Assignments ; ?>%)</td>
							  		 <td width="75">Long Test Final(<?php echo $percent->LongTest ; ?>%)</td>
							  		 <td width="75">Exam Final(<?php echo $percent->Exam ; ?>%)</td>
							  		 <td width="75">Total(<?php echo $total ; ?>%)</td> 
							 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php  
							 
							 $mydb->setQuery("SELECT * 
													FROM  `tblstudent` s, tblgrade g
													WHERE s.`IDNO` = g.`IDNO`  AND s.`CLASSID`=g.`CLASSID` AND Grading = 'Final'
													AND g.`CLASSID` =".$classcode);


							  		$cur = $mydb->loadResultList(); 
									foreach ($cur as $result) { 
							  		echo '<tr>'; 
							  		echo '<td>'. $result->LNAME.','. $result->FNAME.' '. $result->MNAME.'</td>';  

							  		echo '<td><input type="number" style="width: 100px;" class="attendancePRE load_final" id="Attendance'.$result->GRADEID.'"  value="'.$result->Attendance.'"  data-id="'.$result->GRADEID.'" min="0" /></td>'; 

							  		echo '<td><input class="quizPRE load_final" name="" id="Quiz'.$result->GRADEID.'" type="number" style="width: 100px;"   value="'.$result->Quiz.'" data-id="'.$result->GRADEID.'" /><input   id="classcode" type="hidden"   value="'.$result->CLASSID.'"/></td>';


							  		echo '<td><input type="number" class="handsonPRE load_final" name="" id="Lecture'.$result->GRADEID.'"   style="width: 100px;"    value="'.$result->Lecture.'" data-id="'.$result->GRADEID.'"  min="0" /></td>'; 

							  		echo '<td><input type="number" class="handsonPRE load_final" name="" id="Laboratory'.$result->GRADEID.'"   style="width: 100px;"    value="'.$result->Laboratory.'" data-id="'.$result->GRADEID.'"  min="0" /></td>'; 

							  		echo '<td><input type="number" style="width: 100px;" class="activityPRE load_final" id="Activity'.$result->GRADEID.'"  value="'.$result->Activity.'"  data-id="'.$result->GRADEID.'" min="0" max="20"/></td>'; 
							 
							  		echo '<td><input type="number" style="width: 100px;" class="assignmentPRE load_final" id="Assignment'.$result->GRADEID.'"  value="'.$result->Assignment.'" data-id="'.$result->GRADEID.'"  min="0" /></td>'; 
							  		
							  		echo '<td><input type="number" style="width: 100px;" class="exampre load_final" id="LongTest'.$result->GRADEID.'"  value="'.$result->LongTest.'"  data-id="'.$result->GRADEID.'" min="0" max="40"/></td>';

							  		echo '<td><input type="number" style="width: 100px;" class="totalgradespre load_final" id="Exam'.$result->GRADEID.'"  value="'.$result->Exam.'"   data-id="'.$result->GRADEID.'" min="0" max="100"  /></td>';   

							  		echo '<td><div id="totalFinal'.$result->GRADEID.'">'.$result->Total.'</div></td>'; 
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody> 
							</table> 
<?php } ?>