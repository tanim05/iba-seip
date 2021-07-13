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

 
			 
				$percent = New Percent(); 
				$percent->Attendance 		= $_POST['Attendance'];
				$percent->Quiz 				= $_POST['Quiz'];
				$percent->Lecture			= $_POST['Lecture']; 
				$percent->Laboratory		= $_POST['Laboratory'];
				$percent->Activity 			= $_POST['Activity'];
				$percent->Assignments		= $_POST['Assignments']; 
				$percent->LongTest			= $_POST['LongTest']; 
				$percent->Exam				= $_POST['Exam']; 
				$percent->Prelim			= $_POST['Prelim']; 
				$percent->Midterm			= $_POST['Midterm']; 
				$percent->Final				= $_POST['Final']; 
				$percent->create();


		 
		}
		message("Percent has been updated!", "success");
		redirect("index.php");

	}

	function doEdit(){ 
		$percent = New Percent(); 
		$percent->Attendance 		= $_POST['Attendance'];
		$percent->Quiz 				= $_POST['Quiz'];
		$percent->Lecture			= $_POST['Lecture']; 
		$percent->Laboratory		= $_POST['Laboratory'];
		$percent->Activity 			= $_POST['Activity'];
		$percent->Assignments		= $_POST['Assignments']; 
		$percent->LongTest			= $_POST['LongTest']; 
		$percent->Exam				= $_POST['Exam']; 
		$percent->Prelim			= $_POST['Prelim']; 
		$percent->Midterm			= $_POST['Midterm']; 
		$percent->Final				= $_POST['Final']; 
		$percent->update($_POST['PercentID']);


		message("Precent has been updated!", "success");
		redirect("index.php");
 
	}


	 
?>