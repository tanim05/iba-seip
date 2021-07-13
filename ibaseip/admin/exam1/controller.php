<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;

	case 'addgrade' :
	doUpdateGrades();
	break;
	
	case 'delete' :
	doDelete(); 
	break;

	case 'photos' :
	doupdateimage();
	break;

 
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){

 
			 
				$grade = New Grade(); 
				$grade->CLASSCODE 		= $_POST['SUBJ_CODE'];
				$grade->IDNO 		= $_POST['idno'];
				$grade->Attendance 		= $_POST['Attendance'];
				$grade->Quiz 				= $_POST['Quiz'];
				$grade->Lecture			= $_POST['Lecture']; 
				$grade->Laboratory		= $_POST['Laboratory'];
				$grade->Activity 			= $_POST['Activity'];
				$grade->Attendance		= $_POST['Attendance']; 
				$grade->LongTest			= $_POST['LongTest']; 
				$grade->Exam				= $_POST['Exam']; 
				$grade->Total			= $_POST['Total']; 
				$grade->Grading			= $_POST['Grading']; 
				//$grade->ACCOUNT_USERNAME				= $_POST['ACCOUNT_USERNAME']; 
				$grade->save();


		 
		}
		message("Grade has been Inserted!", "success");
		redirect("index.php");

	}

	function doEdit(){ 
		$grade = New Grade(); 
		$grade->CLASSCODE 		= $_POST['CLASSCODE'];
		$grade->IDNO 		= $_POST['IDNO'];
		$grade->Attendance 		= $_POST['Attendance'];
		$grade->Quiz 				= $_POST['Quiz'];
		$grade->Lecture			= $_POST['Lecture']; 
		$grade->Laboratory		= $_POST['Laboratory'];
		$grade->Activity 			= $_POST['Activity'];
		$grade->Assignments		= $_POST['Assignments']; 
		$grade->LongTest			= $_POST['LongTest']; 
		$grade->Exam				= $_POST['Exam']; 
		$grade->Total			= $_POST['Total']; 
		$grade->Grading			= $_POST['Grading']; 
		//$grade->Final				= $_POST['Final']; 
		$grade->save($_POST['GRADEID']);


		message("Grade has been updated!", "success");
		redirect("index.php");
 
	}

/*	function doDelete(){
		 
		
				$id = $_POST['PercentID'];

				//$grades = New percent();
	 		 	//$grades->delete($id);
			 
			message("Student ID : ". $id ." Result already Deleted!","info");
			redirect('index.php');
	 
		
	}*/

	function doDelete(){
		 
		
				$id = 	$_GET['id'];

				$grade = New Grade();  
	 		 	$grade->delete($id);
			 
			message("Grade has been deleted!","info");
			redirect('index.php'); 

		
	}

	function doUpdateGrades(){
		global $mydb;
		if(isset($_POST['save'])){ 
		 
			// `IDNO`, `CLASSCODE`, `QUIZZES_MID`, `ACTIVITIES_MID`, `HANDSON_MID`, `ASSIGNMENT_MID`, `ATTENDANCE_MID`, `TERMEXAM_MID`, `TOTALGRADES_MID`, `QUIZZES_FINAL`, `HANDSON_FINAL`, `ACTIVITIES_FINA`, `ASSIGNMENT_FINAL`, `ATTENDANCE_FINAL`, `TERMEXAM_FINAL`, `TOTALGRADES_FINAL`, `TOTALMIDTERM`, `TOTALFINALE`, `INPUTDATE`, `ACCOUNT_USERNAME 

			$idno = $_POST['IDNO'];
			$classcode = $_POST['CLASSCODE'];

			$sql = "SELECT * FROM `tblgrades` WHERE IDNO='{$idno}' AND CLASSCODE='".$classcode."'";
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

				$grades = new Grade(); 
				$grades->QUIZZES_MID = $_POST['quizINPUT_MID'];
				$grades->ACTIVITIES_MID =$_POST['activityINPUT_MID'];
				$grades->HANDSON_MID =$_POST['handsonINPUT_MID'];
				$grades->ASSIGNMENT_MID = $_POST['assignmentINPUT_MID'];
				$grades->ATTENDANCE_MID = $_POST['attendanceINPUT_MID'];
				$grades->TERMEXAM_MID = $_POST['examINPUT_MID'];
				$grades->TOTALGRADES_MID = $_POST['totalMID'];

				$grades->QUIZZES_FINAL = $_POST['quizINPUT_FINAL'];
				$grades->ACTIVITIES_FINAL =$_POST['activityINPUT_FINAL'];
				$grades->HANDSON_FINAL =$_POST['handsonINPUT_FINAL'];
				$grades->ASSIGNMENT_FINAL = $_POST['assignmentINPUT_FINAL'];
				$grades->ATTENDANCE_FINAL = $_POST['attendanceINPUT_FINAL'];
				$grades->TERMEXAM_FINAL = $_POST['examINPUT_FINAL'];
				$grades->TOTALGRADES_FINAL = $_POST['totalFINAL'];

				$grades->TOTALMIDTERM =$_POST['MIDTERMTOTAL'];
				$grades->TOTALFINALE =$_POST['FINALETOTAL']; 

				$grades->update($gradeid);

			}else{ 

				$grades = new Grade();
				$grades->IDNO = $idno;
				$grades->CLASSCODE = $classcode;
				$grades->QUIZZES_MID = $_POST['quizINPUT_MID'];
				$grades->ACTIVITIES_MID =$_POST['activityINPUT_MID'];
				$grades->HANDSON_MID =$_POST['handsonINPUT_MID'];
				$grades->ASSIGNMENT_MID = $_POST['assignmentINPUT_MID'];
				$grades->ATTENDANCE_MID = $_POST['attendanceINPUT_MID'];
				$grades->TERMEXAM_MID = $_POST['examINPUT_MID'];
				$grades->TOTALGRADES_MID = $_POST['totalMID'];

				$grades->QUIZZES_FINAL = $_POST['quizINPUT_FINAL'];
				$grades->ACTIVITIES_FINAL =$_POST['activityINPUT_FINAL'];
				$grades->HANDSON_FINAL =$_POST['handsonINPUT_FINAL'];
				$grades->ASSIGNMENT_FINAL = $_POST['assignmentINPUT_FINAL'];
				$grades->ATTENDANCE_FINAL = $_POST['attendanceINPUT_FINAL'];
				$grades->TERMEXAM_FINAL = $_POST['examINPUT_FINAL'];
				$grades->TOTALGRADES_FINAL = $_POST['totalFINAL'];

				$grades->TOTALMIDTERM =$_POST['MIDTERMTOTAL'];
				$grades->TOTALFINALE =$_POST['FINALETOTAL'];

				$grades->INPUTDATE =date("Y-m-d");
				$grades->ACCOUNT_USERNAME =$_SESSION['ACCOUNT_USERNAME'];
				$grades->create();

			}



			message("Grades has been upated", "success");
			redirect("index.php?view=grades&id=".$idno);


			 
		}
	} 
 	 
?>