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


		if ($_POST['FNAME'] == "" OR $_POST['LNAME'] == "" OR $_POST['MNAME'] == ""
			OR $_POST['CONTACTNO'] == "" OR $_POST['COURSE'] == "none"  OR $_POST['YEARLEVEL'] == ""  
			OR $_POST['CLASSCODE'] == "" ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

				$sql = "SELECT * FROM `tblclass` WHERE CLASSID=". $_POST['CLASSCODE'];
				$mydb->setQuery($sql);
				$class = $mydb->loadSingleResult(); 

			$stud = New Student(); 
			$stud->IDNO 				= $_POST['IDNO'];
			$stud->FNAME 				= $_POST['FNAME'];
			$stud->LNAME				= $_POST['LNAME']; 
			$stud->MNAME				= $_POST['MNAME'];
			$stud->CONTACT_NO 			= $_POST['CONTACTNO'];
			$stud->ACC_USERNAME			= $_POST['IDNO']; 
			$stud->ACC_PASSWORD			=sha1($_POST['IDNO']); 
			$stud->COURSE				= $_POST['COURSE']; 
			$stud->YEARLEVEL			= $_POST['YEARLEVEL']; 
			$stud->SECTION				= $_POST['SECTION'];
			$stud->CLASSCODE			= $class->CLASSCODE;

			$stud->CLASSID			= $_POST['CLASSCODE'];
		    $stud->ACCOUNT_USERNAME		= $_SESSION['ACCOUNT_USERNAME'];
			$stud->create();


			$classcode = $_POST['CLASSCODE'];
			$idno = $_POST['IDNO'];
			

			$sql = "SELECT * FROM `tblgrade` WHERE IDNO='{$idno}' AND CLASSID='{$classcode}'";
			$mydb->setQuery($sql);
			$cur = $mydb->executeQuery();
			if($cur==false){
				die(mysql_error());
			}
			$row_count = $mydb->num_rows($cur);//get the number of count

			if ($row_count <= 0) {
				# code... 
				$sql = "SELECT * FROM `tblclass` WHERE CLASSID='{$classcode}'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList(); 
				foreach ($cur as $result){
					$grades = new Grade();
					$grades->IDNO = $idno;
					$grades->CLASSID = $classcode;
					$grades->CLASSCODE = $result->CLASSCODE; 
					$grades->INPUTDATE =date("m/d/Y");
					$grades->Grading = 'Prelim';
					$grades->ACCOUNT_USERNAME =$_SESSION['ACCOUNT_USERNAME'];
					$grades->create();

					$grades = new Grade();
					$grades->IDNO = $idno;
					$grades->CLASSID = $classcode;
					$grades->CLASSCODE = $result->CLASSCODE; 
					$grades->INPUTDATE =date("m/d/Y");
					$grades->Grading = 'Midterm';
					$grades->ACCOUNT_USERNAME =$_SESSION['ACCOUNT_USERNAME'];
					$grades->create();

					$grades = new Grade();
					$grades->IDNO = $idno;
					$grades->CLASSID = $classcode;
					$grades->CLASSCODE = $result->CLASSCODE; 
					$grades->INPUTDATE =date("m/d/Y");
					$grades->Grading = 'Final';
					$grades->ACCOUNT_USERNAME =$_SESSION['ACCOUNT_USERNAME'];
					$grades->create();
			}
				// $grades = new Grade();
				// $grades->IDNO = $idno;
				// $grades->CLASSCODE = $classcode; 
				// $grades->INPUTDATE =date("Y-m-d");
				// $grades->ACCOUNT_USERNAME =$_SESSION['ACCOUNT_USERNAME'];
				// $grades->create();
				 

			}

			// $sql = "SELECT * FROM `tblgrades` WHERE IDNO='{$idno}' AND CLASSCODE='".$classcode."' AND ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME'] ."'";
			// $mydb->setQuery($sql);
			// $cur = $mydb->executeQuery();
			// if($cur==false){
			// 	die(mysql_error());
			// }
			// $row_count = $mydb->num_rows($cur);//get the number of count

			// if ($row_count <= 0) {
			// 	# code... 
			// 	$grades = new Grade();
			// 	$grades->IDNO = $idno;
			// 	$grades->CLASSCODE = $classcode; 
			// 	$grades->INPUTDATE =date("Y-m-d");
			// 	$grades->ACCOUNT_USERNAME =$_SESSION['ACCOUNT_USERNAME'];
			// 	$grades->create();

			// }
 

			message("New student has been added in the class", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
global $mydb;
	if(isset($_POST['save'])){
 
			$sql = "SELECT * FROM `tblclass` WHERE CLASSID=". $_POST['CLASSCODE'];
			$mydb->setQuery($sql);
			$class = $mydb->loadSingleResult(); 
		$stud = New Student();  
		$stud->FNAME 				= $_POST['FNAME'];
		$stud->LNAME				= $_POST['LNAME']; 
		$stud->MNAME				= $_POST['MNAME'];
		$stud->CONTACT_NO 			= $_POST['CONTACTNO'];
		$stud->ACC_USERNAME			= $_POST['FNAME']; 
		$stud->ACC_PASSWORD			=sha1($_POST['IDNO']);  
		$stud->COURSE				= $_POST['COURSE']; 
		$stud->YEARLEVEL			= $_POST['YEARLEVEL']; 
		$stud->SECTION				= $_POST['SECTION'];
		$stud->CLASSCODE			= $class->CLASSCODE;
		// $stud->CLASSCODE			= $_POST['CLASSCODE'];

		$stud->CLASSID				= $_POST['CLASSCODE'];
		// $stud->ACCOUNT_USERNAME		= $_SESSION['ACCOUNT_USERNAME'];
		$stud->update($_POST['IDNO']);


			$idno = $_POST['IDNO'];
			$classcode = $_POST['CLASSCODE'];

			// $sql = "SELECT * FROM `tblgrades` WHERE IDNO='{$idno}' AND CLASSCODE='".$classcode."' AND ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME'] ."'";

			$sql = "SELECT * FROM `tblgrades` WHERE IDNO='{$idno}' AND CLASSID='{$classcode}'";
			$mydb->setQuery($sql);
			$cur = $mydb->executeQuery();
			if($cur==false){
				die(mysql_error());
			}
			$row_count = $mydb->num_rows($cur);//get the number of count

			if ($row_count <= 0) {
				# code... 
				$sql = "SELECT * FROM `tblclass` WHERE CLASSID='{$classcode}'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList(); 
				foreach ($cur as $result){
					$grades = new Grade();
					$grades->IDNO = $idno;
					$grades->CLASSID = $classcode;
					$grades->CLASSCODE = $result->CLASSCODE; 
					$grades->INPUTDATE =date("Y-m-d");
					$grades->ACCOUNT_USERNAME =$_SESSION['ACCOUNT_USERNAME'];
					$grades->create();
				}
				// $grades = new Grade();
				// $grades->IDNO = $idno;
				// $grades->CLASSCODE = $classcode; 
				// $grades->INPUTDATE =date("Y-m-d");
				// $grades->ACCOUNT_USERNAME =$_SESSION['ACCOUNT_USERNAME'];
				// $grades->create();
				 

			}
 

		message("Student has been updated!", "success");
		redirect("index.php?view=edit&id=".$_POST['IDNO']);
   
		}
	}


	function doDelete(){
		global $mydb; 
		
				$id = 	$_GET['id'];

				// $stud = New Student();
	 		//  	$stud->delete($id);

				$sql = "DELETE FROM `tblstudent` WHERE `IDNO`='{$id}'";
				$mydb->setQuery($sql);
				$mydb->executeQuery();

				$sql = "DELETE FROM `tblgrades` WHERE `IDNO`='{$id}'";
				$mydb->setQuery($sql);
				$mydb->executeQuery();
				
				$sql = "DELETE FROM `tblstudentexams` WHERE `IDNO`='{$id}'";
				$mydb->setQuery($sql);
				$mydb->executeQuery();

				$sql = "DELETE FROM `tblscore`  WHERE `IDNO`='{$id}'";
				$mydb->setQuery($sql);
				$mydb->executeQuery();


			 
			message("Student has been deleted!","info");
			redirect('index.php'); 

		
	}

	function doUpdateGrades(){
		global $mydb;
		if(isset($_POST['save'])){ 
		 
			// `IDNO`, `CLASSCODE`, `QUIZZES_MID`, `ACTIVITIES_MID`, `HANDSON_MID`, `ASSIGNMENT_MID`, `ATTENDANCE_MID`, `TERMEXAM_MID`, `TOTALGRADES_MID`, `QUIZZES_FINAL`, `HANDSON_FINAL`, `ACTIVITIES_FINA`, `ASSIGNMENT_FINAL`, `ATTENDANCE_FINAL`, `TERMEXAM_FINAL`, `TOTALGRADES_FINAL`, `TOTALMIDTERM`, `TOTALFINALE`, `INPUTDATE`, `ACCOUNT_USERNAME 

			$idno = $_POST['IDNO'];
			$classcode = $_POST['CLASSCODE'];

			$sql = "SELECT * FROM `tblgrades` WHERE IDNO='{$idno}' AND GRADEID='".$classcode."'";
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