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
	case 'addquestion' :
	addQuestion();
	break;

	case 'multiplechoice' :
	doMultipleChoice();
	break;

	case 'identification' :
	doIdentification();
	break;

	case 'truefalse' :
	doTrueFalse();
	break;

	case 'matchingtype' :
	doMatchingType();
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
	case 'deletequiz' :
	doDeletequiz();
	break;

	case 'photos' :
	doupdateimage();
	break;

 
	}
   function doInsert(){
   	global $mydb;
   	if (isset($_POST['save'])) {
   		# code...
   		$CLASSID = $_POST['CLASSCODE'];
   		$QUIZNAME = $_POST['QUIZNAME'];
   		$NOOFQUESTION = $_POST['NOOFQUESTION'];
   		$QUIZTERM =$_POST['QUIZTERM'];
   		$TEACHER = $_SESSION['ACCOUNT_NAME'];
   		$QUIZDATETIME = $_POST['QUIZDATETIME'];

		$sql = "SELECT * FROM `tblclass` WHERE CLASSID='{$CLASSID}'";
		$mydb->setQuery($sql);
		$class = $mydb->loadSingleResult(); 
		$SUBJ_CODE =$class->CLASSCODE;
		
				// foreach ($cur as $result){
				// 	$grades = new Grade();
				// 	$grades->IDNO = $idno;
				// 	$grades->CLASSID = $classcode;
				// 	$grades->CLASSCODE = $result->CLASSCODE; 
				// 	$grades->INPUTDATE =date("Y-m-d");
				// 	$grades->ACCOUNT_USERNAME =$_SESSION['ACCOUNT_USERNAME'];
				// 	$grades->create();
				// }

   		$sql = "INSERT INTO `tblquiz` (`CLASSID`,`SUBJ_CODE`, `QUIZNAME`, `NOOFQUESTION`, `QUIZTERM`, `TEACHER`,`QUIZDATETIME`) VALUES ('{$CLASSID}','{$SUBJ_CODE}','{$QUIZNAME}',{$NOOFQUESTION},'{$QUIZTERM}','{$TEACHER}','{$QUIZDATETIME}')";
   		$mydb->setQuery($sql);
   		$res = $mydb->executeQuery();
   		if ($res) {
   			# code...
   			message("New Quiz has been added!", "success");
			redirect("index.php");
   		}

   	}
   }

	function addQuestion(){
		global $mydb;
		if(isset($_POST['save'])){


		if ($_POST['CLASSCODE'] == "select" OR $_POST['EXAM_QUESTION'] == "" OR $_POST['EXAM_ANSWER'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$id = $_POST['QUIZID'];

			 $autonum = New Autonumber();
             $res = $autonum->set_autonumber("EXAMID");

			$exam = New Exams(); 
			$exam->EXAMID 				= $res->AUTO;
			$exam->QUIZID 				= $_POST['QUIZID'];
			$exam->CLASSCODE 			= $_POST['CLASSCODE'];
			$exam->EXAM_QUESTION		= $_POST['EXAM_QUESTION']; 
			$exam->EXAM_ANSWER			= $_POST['EXAM_ANSWER'];
			$exam->CHOICE_A 			= $_POST['CHOICE_A'];
			$exam->CHOICE_B				= $_POST['CHOICE_B']; 
			$exam->CHOICE_C				= $_POST['CHOICE_C']; 
			$exam->CHOICE_D				= $_POST['CHOICE_D'];
			$exam->TERM_EXAM			= $_POST['QUIZTERM'];  
			$exam->TYPE					= "Multiple Choice";  
			$exam->TEACHER    		    = $_SESSION['ACCOUNT_USERNAME'];
			$exam->create();


			 $autonum = New Autonumber();
             $res = $autonum->auto_update("EXAMID");

			$sql ="SELECT count(*) as 'TOTALTEST' FROM `tblexams` WHERE `QUIZID`={$id}";
			$mydb->setQuery($sql);
			$tottest = $mydb->loadSingleResult();


			$sql ="SELECT * FROM `tblquiz` WHERE `QUIZID`={$id}" ;
			$mydb->setQuery($sql);
			$res = $mydb->loadSingleResult();


			if ($tottest->TOTALTEST = $res->NOOFQUESTION) {
				message("New Question has been added in the exam", "success");
			redirect("index.php?view=question&id=".$_POST['QUIZID']);
			}else{
				message("New Question has been added in the exam", "success");
			redirect("index.php?view=addquestion&id=".$_POST['QUIZID']);
			}


			
			
		}
		}

	}

	function doMultipleChoice(){
		global $mydb;
		if(isset($_POST['save'])){


		if ($_POST['CLASSCODE'] == "select" OR $_POST['EXAM_QUESTION'] == "" OR $_POST['EXAM_ANSWER'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$id = $_POST['QUIZID'];

			 $autonum = New Autonumber();
             $res = $autonum->set_autonumber("EXAMID");

			$exam = New Exams(); 
			$exam->EXAMID 				= $res->AUTO;
			$exam->QUIZID 				= $_POST['QUIZID'];
			$exam->CLASSCODE 			= $_POST['CLASSCODE'];
			$exam->EXAM_QUESTION		= $_POST['EXAM_QUESTION']; 
			$exam->EXAM_ANSWER			= $_POST['EXAM_ANSWER'];
			$exam->CHOICE_A 			= $_POST['CHOICE_A'];
			$exam->CHOICE_B				= $_POST['CHOICE_B']; 
			$exam->CHOICE_C				= $_POST['CHOICE_C']; 
			$exam->CHOICE_D				= $_POST['CHOICE_D'];
			$exam->TERM_EXAM			= $_POST['QUIZTERM'];  
			$exam->TYPE					= "Multiple Choice";  
			$exam->TEACHER    		    = $_SESSION['ACCOUNT_USERNAME'];
			$exam->create();


			 $autonum = New Autonumber();
             $res = $autonum->auto_update("EXAMID");

			$sql ="SELECT count(*) as 'TOTALTEST' FROM `tblexams` WHERE `QUIZID`={$id}";
			$mydb->setQuery($sql);
			$tottest = $mydb->loadSingleResult();


			$sql ="SELECT * FROM `tblquiz` WHERE `QUIZID`={$id}" ;
			$mydb->setQuery($sql);
			$res = $mydb->loadSingleResult();


			if ($tottest->TOTALTEST = $res->NOOFQUESTION) {
				message("New Question has been added in the exam", "success");
			redirect("index.php?view=question&id=".$_POST['QUIZID']);
			}else{
				message("New Question has been added in the exam", "success");
			redirect("index.php?view=addquestion&id=".$_POST['QUIZID']);
			}


			
			
		}
		}

	}

		function doIdentification(){
		global $mydb;
		if(isset($_POST['save'])){


		if ($_POST['CLASSCODE'] == "select" OR $_POST['EXAM_QUESTION'] == "" OR $_POST['EXAM_ANSWER'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$id = $_POST['QUIZID'];

			 $autonum = New Autonumber();
             $res = $autonum->set_autonumber("EXAMID");

			$exam = New Exams(); 
			$exam->EXAMID 				= $res->AUTO;
			$exam->QUIZID 				= $_POST['QUIZID'];
			$exam->CLASSCODE 			= $_POST['CLASSCODE'];
			$exam->EXAM_QUESTION		= $_POST['EXAM_QUESTION']; 
			$exam->EXAM_ANSWER			= $_POST['EXAM_ANSWER']; 
			$exam->TERM_EXAM			= $_POST['QUIZTERM'];  
			$exam->TYPE					= "Identification";  
			$exam->TEACHER    		    = $_SESSION['ACCOUNT_USERNAME'];
			$exam->create();


			 $autonum = New Autonumber();
             $res = $autonum->auto_update("EXAMID");

			$sql ="SELECT count(*) as 'TOTALTEST' FROM `tblexams` WHERE `QUIZID`={$id}";
			$mydb->setQuery($sql);
			$tottest = $mydb->loadSingleResult();


			$sql ="SELECT * FROM `tblquiz` WHERE `QUIZID`={$id}" ;
			$mydb->setQuery($sql);
			$res = $mydb->loadSingleResult();


			if ($tottest->TOTALTEST = $res->NOOFQUESTION) {
				message("New Question has been added in the exam", "success");
			redirect("index.php?view=question&id=".$_POST['QUIZID']);
			}else{
				message("New Question has been added in the exam", "success");
			redirect("index.php?view=addquestion&id=".$_POST['QUIZID']);
			}


			
			
		}
		}

	}
function doTrueFalse(){
		global $mydb;
		if(isset($_POST['save'])){


		if ($_POST['CLASSCODE'] == "select" OR $_POST['EXAM_QUESTION'] == "" OR $_POST['EXAM_ANSWER'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$id = $_POST['QUIZID'];

			 $autonum = New Autonumber();
             $res = $autonum->set_autonumber("EXAMID");

			$exam = New Exams(); 
			$exam->EXAMID 				= $res->AUTO;
			$exam->QUIZID 				= $_POST['QUIZID'];
			$exam->CLASSCODE 			= $_POST['CLASSCODE'];
			$exam->EXAM_QUESTION		= $_POST['EXAM_QUESTION']; 
			$exam->EXAM_ANSWER			= $_POST['EXAM_ANSWER']; 
			$exam->TERM_EXAM			= $_POST['QUIZTERM'];  
			$exam->TYPE					= "True or False";  
			$exam->TEACHER    		    = $_SESSION['ACCOUNT_USERNAME'];
			$exam->create();


			 $autonum = New Autonumber();
             $res = $autonum->auto_update("EXAMID");

			$sql ="SELECT count(*) as 'TOTALTEST' FROM `tblexams` WHERE `QUIZID`={$id}";
			$mydb->setQuery($sql);
			$tottest = $mydb->loadSingleResult();


			$sql ="SELECT * FROM `tblquiz` WHERE `QUIZID`={$id}" ;
			$mydb->setQuery($sql);
			$res = $mydb->loadSingleResult();


			if ($tottest->TOTALTEST = $res->NOOFQUESTION) {
				message("New Question has been added in the exam", "success");
			redirect("index.php?view=question&id=".$_POST['QUIZID']);
			}else{
				message("New Question has been added in the exam", "success");
			redirect("index.php?view=addquestion&id=".$_POST['QUIZID']);
			}


			
			
		}
		}

	}
	function doMatchingType(){
		global $mydb;
		if(isset($_POST['save'])){


		if ($_POST['CLASSCODE'] == "select" OR $_POST['EXAM_QUESTION'] == "" OR $_POST['EXAM_ANSWER'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	

			$id = $_POST['QUIZID'];

			 $autonum = New Autonumber();
             $res = $autonum->set_autonumber("EXAMID");

			$exam = New Exams(); 
			$exam->EXAMID 				= $res->AUTO;
			$exam->QUIZID 				= $_POST['QUIZID'];
			$exam->CLASSCODE 			= $_POST['CLASSCODE'];
			$exam->EXAM_QUESTION		= $_POST['EXAM_QUESTION']; 
			$exam->EXAM_ANSWER			= $_POST['EXAM_ANSWER']; 
			$exam->TERM_EXAM			= $_POST['QUIZTERM'];  
			$exam->TYPE					= "Matching Type";  
			$exam->TEACHER    		    = $_SESSION['ACCOUNT_USERNAME'];
			$exam->create();


			 $autonum = New Autonumber();
             $res = $autonum->auto_update("EXAMID");

			$sql ="SELECT count(*) as 'TOTALTEST' FROM `tblexams` WHERE `QUIZID`={$id}";
			$mydb->setQuery($sql);
			$tottest = $mydb->loadSingleResult();


			$sql ="SELECT * FROM `tblquiz` WHERE `QUIZID`={$id}" ;
			$mydb->setQuery($sql);
			$res = $mydb->loadSingleResult();


			if ($tottest->TOTALTEST = $res->NOOFQUESTION) {
				message("New Question has been added in the exam", "success");
				redirect("index.php?view=question&id=".$_POST['QUIZID']);
			}else{
				message("New Question has been added in the exam", "success");
				redirect("index.php?view=addquestion&id=".$_POST['QUIZID']);
			}


			
			
		}
		}

	}
	function doEdit(){
    global $mydb;
   	if (isset($_POST['save'])) {
   		# code...
   		$SUBJ_CODE = $_POST['CLASSCODE'];
   		$QUIZNAME = $_POST['QUIZNAME'];
   		$NOOFQUESTION = $_POST['NOOFQUESTION'];
   		$QUIZTERM =$_POST['QUIZTERM'];
   		$TEACHER = $_SESSION['ACCOUNT_NAME'];
   		$QUIZID =$_POST['QUIZID'];
   		$QUIZDATETIME = $_POST['QUIZDATETIME'];

   		$sql = "UPDATE  `tblquiz` SET `SUBJ_CODE`='{$SUBJ_CODE}', `QUIZNAME`='{$QUIZNAME}', `NOOFQUESTION`={$NOOFQUESTION}, `QUIZTERM`='{$QUIZTERM}', `TEACHER`='{$TEACHER}', `QUIZDATETIME`='{$QUIZDATETIME}'  WHERE QUIZID={$QUIZID}";
   		$mydb->setQuery($sql);
   		$res = $mydb->executeQuery();
   		if ($res) {
   			# code...
   			message("New Quiz has been updated!", "success");
			redirect("index.php");
   		}

   	}
	// // if(isset($_POST['save'])){
 
  
		
	// // 		$exam = New Exams();  
	// // 		$exam->CLASSCODE 			= $_POST['CLASSCODE'];
	// // 		$exam->EXAM_QUESTION		= $_POST['EXAM_QUESTION']; 
	// // 		$exam->EXAM_ANSWER			= $_POST['EXAM_ANSWER'];
	// // 		$exam->CHOICE_A 			= $_POST['CHOICE_A'];
	// // 		$exam->CHOICE_B				= $_POST['CHOICE_B']; 
	// // 		$exam->CHOICE_C				= $_POST['CHOICE_C']; 
	// // 		$exam->CHOICE_D				= $_POST['CHOICE_D'];
	// // 		$exam->TERM_EXAM			= $_POST['TERM_EXAM'];    
	// // 		$exam->update($_POST['EXAMID']);
 

	// // 	message("Question has been updated!", "success");
	// // 	redirect("index.php?view=edit&id=".$_POST['EXAMID']);
   
	// 	}
	}


	function doDeletequiz(){
		 global $mydb;
		 
		    $quizid = $_GET['id'];

			$sql = "DELETE FROM  `tblquiz`  WHERE QUIZID={$quizid}";
			$mydb->setQuery($sql);
			$res = $mydb->executeQuery();
			if ($res) {
				# code...
			 message("Quiz has been deleted!", "success");
			redirect("index.php");
			}

		
	}

	function doDelete(){
		 
		
				$id = 	$_GET['id'];
				$quizid = $_GET['quizid'];

				$exam = New Exams();  
	 		 	$exam->delete($id);
			 
			message("Question has been deleted!","info");
			redirect('index.php?view=question&id='.$quizid); 

		
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