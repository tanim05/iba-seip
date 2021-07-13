<?php
require_once ("../include/initialize.php");
if(!isset($_SESSION['IDNO'])){
	redirect(web_root.'index.php');

} 



$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {

	case 'prelim' :
	doPrelimExam();
	break;

	case 'midterm' :
	doMidtermExam();
	break;
	
	case 'final' :
	doFinalExam();
	break;
	
  
	} 
function doPrelimExam(){
global $mydb;
	$idno = $_POST['IDNO'];
	$classcode = $_POST['CLASSCODE'];
	$termexam  = $_POST['EXAM_TERM'];
	$prof = $_POST['prof'];
	$totscore = 0;
	$ave = 0;
	$isScore=0;
 
 	# code... 
	$sql = "SELECT * FROM `tblexams` WHERE `CLASSCODE`='".$classcode."' AND TERM_EXAM='Prelim' AND TEACHER='{$prof}'";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();

		if($cur==false){
			die(mysql_error());
		}

		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count > 0){  
		 	echo $ave = $row_count;  
		 } 



 	$sql = "SELECT * FROM `tblstudentexams` WHERE `CLASSCODE`='".$classcode."' AND IDNO='".$idno."' AND TERM_EXAM='Prelim' AND ISCHECK=1 AND TEACHER='{$prof}' ";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();

		if($cur==false){
			die(mysql_error());
		}

		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count > 0){  
		 	$totscore = $row_count/$ave * 50+50; 
		  	echo $isScore =$totscore/100*10;

			//totscore=score/ave*50+50
		  // $isScore =totscore/100*10
		 }else{
		 	echo $isScore=0;
		 } 


		 $sql = "UPDATE `tblgrades` SET  `PRELIM_EXAM`=1, `QUIZZES_PRE`='" .$isScore."',`TOTALGRADES_PRE`=`TERMEXAM_PRE`+`HANDSON_PRE`+`ACTIVITIES_PRE`+`ASSIGNMENT_PRE`+`ATTENDANCE_PRE`+'".$isScore."'  WHERE `CLASSCODE`='".$classcode."' AND IDNO='".$idno."' AND ACCOUNT_USERNAME='".$prof."'";
		 $mydb->setQuery($sql);
		 $cur = $mydb->executeQuery();
		if($cur==false){
			die(mysql_error());
		} 

		redirect(web_root."takeexam/index.php?index.php?q=takeexam&classcode=".$classcode."&term=Prelim&SCORES=".$row_count);


 }

function doMidtermExam(){
global $mydb;
	$idno = $_POST['IDNO'];
	$classcode = $_POST['CLASSCODE'];
	$termexam  = $_POST['EXAM_TERM'];
	$prof = $_POST['prof'];
	$totscore = 0;
	$ave = 0;
	$isScore=0;
 
 	# code... 
	$sql = "SELECT * FROM `tblexams` WHERE `CLASSCODE`='".$classcode."' AND TERM_EXAM='Midterm' AND TEACHER='{$prof}'";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();

		if($cur==false){
			die(mysql_error());
		}

		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count > 0){  
		 	echo $ave = $row_count;  
		 } 



 	$sql = "SELECT * FROM `tblstudentexams` WHERE `CLASSCODE`='".$classcode."' AND IDNO='".$idno."' AND TERM_EXAM='Midterm' AND ISCHECK=1 AND TEACHER='{$prof}' ";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();

		if($cur==false){
			die(mysql_error());
		}

		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count > 0){  
		 	$totscore = $row_count/$ave * 50+50; 
		  	echo $isScore =$totscore/100*10;

			//totscore=score/ave*50+50
		  // $isScore =totscore/100*10
		 }else{
		 	echo $isScore=0;
		 } 


		 $sql = "UPDATE `tblgrades` SET  `MIDTERM_EXAM`=1, `QUIZZES_MID`='" .$isScore."',`TOTALGRADES_MID`=`TERMEXAM_MID`+`HANDSON_MID`+`ACTIVITIES_MID`+`ASSIGNMENT_MID`+`ATTENDANCE_MID`+'".$isScore."' WHERE `CLASSCODE`='".$classcode."' AND IDNO='".$idno."' AND ACCOUNT_USERNAME='".$prof."'";
		 $mydb->setQuery($sql);
		 $cur = $mydb->executeQuery();
		if($cur==false){
			die(mysql_error());
		} 

		redirect(web_root."takeexam/index.php?index.php?q=takeexam&classcode=".$classcode."&term=Midterm&SCORES=".$row_count);


 }

 function doFinalExam(){
global $mydb;
	$idno = $_POST['IDNO'];
	$classcode = $_POST['CLASSCODE'];
	$termexam  = $_POST['EXAM_TERM'];  
	$prof = $_POST['prof'];
	$totscore = 0;
	$ave = 0;
	$isScore=0;
 
 	# code... 
	$sql = "SELECT * FROM `tblexams` WHERE `CLASSCODE`='".$classcode."' AND TERM_EXAM='Final' AND TEACHER='{$prof}'";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();

		if($cur==false){
			die(mysql_error());
		}

		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count > 0){  
		 	echo $ave = $row_count;  
		 } 



 	$sql = "SELECT * FROM `tblstudentexams` WHERE `CLASSCODE`='".$classcode."' AND IDNO='".$idno."' AND TERM_EXAM='Final' AND ISCHECK=1 AND TEACHER='{$prof}' ";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();

		if($cur==false){
			die(mysql_error());
		}

		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count > 0){  
		 	$totscore = $row_count/$ave * 50+50; 
		  	echo $isScore =$totscore/100*10;

			//totscore=score/ave*50+50
		  // $isScore =totscore/100*10
		 }else{
		 	echo $isScore=0;
		 } 


		 $sql = "UPDATE `tblgrades` SET  `QUIZZES_FINAL`='".$isScore."',`FINAL_EXAM`=1,`TOTALGRADES_FINAL`=`TERMEXAM_FINAL`+`HANDSON_FINAL`+`ACTIVITIES_FINAL`+`ASSIGNMENT_FINAL`+`ATTENDANCE_FINAL`+'".$isScore."' WHERE `CLASSCODE`='".$classcode."' AND IDNO='".$idno."'";
		 $mydb->setQuery($sql);
		 $cur = $mydb->executeQuery();
		if($cur==false){
			die(mysql_error());
		} 

			redirect(web_root."takeexam/index.php?index.php?q=takeexam&classcode=".$classcode."&term=Final&SCORES=".$row_count);


 	
 }
 
 
?>