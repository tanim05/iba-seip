<?php
require_once ("../include/initialize.php");
if(!isset($_SESSION['IDNO'])){
	redirect(web_root.'index.php');
} 
global $mydb;
 
// echo $idno = $_GET['IDNO'];
// echo $classcode = $_GET['CLASSCODE'];
// echo $termexam  = $_GET['EXAM_TERM']; 
// echo $quizid  = $_GET['quizid']; 
// echo $answer = $_POST['E_ANSWER']; 
// echo $examid = $_POST['EXAMID'];
// echo $prof = $_GET['prof'];
// echo $iscorrect = 0;

$idno = $_GET['IDNO'];
$classcode = $_GET['CLASSCODE'];
$termexam  = $_GET['EXAM_TERM']; 
$quizid  = $_GET['quizid']; 
$answer = $_POST['E_ANSWER']; 
$examid = $_POST['EXAMID'];
$prof = $_GET['prof'];
$iscorrect = 0;


// echo $examid;
 
		// $sql = "SELECT * FROM `tblstudentexams` WHERE `EXAMID`='".$examid."' AND `IDNO`='".$idno."' AND TEACHER='{$prof}'";
		$sql = "SELECT * FROM `tblstudentexams` WHERE `EXAMID`='".$examid."' AND `IDNO`='".$idno."' AND QUIZID='{$quizid}'";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();

		if($cur==false){
			die(mysql_error());
		} 
		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count <= 0){ 
 
				$sql = "INSERT INTO tblstudentexams (`QUIZID`,`IDNO`, `CLASSCODE`, `EXAMID`, `ANSWER`, `ISCHECK`, `TERM_EXAM`,TEACHER) 
				VALUES ('".$quizid."','".$idno."','".$classcode."','".$examid."','".$answer."',0,'".$termexam."','".$prof."')";
				$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();

				$sql  = "SELECT * FROM `tblexams` e, `tblstudentexams` se  WHERE e.`EXAMID`=se.`EXAMID` AND e.`EXAMID`='".$examid."' AND se.QUIZID='{$quizid}' ";
			$mydb->setQuery($sql);
			$cur = $mydb->loadSingleResult();

			if (strtoupper($cur->EXAM_ANSWER)==strtoupper($cur->ANSWER)) {
				# code...
				$iscorrect = 1; 
			}else{
				$iscorrect=0;
			}

			echo $iscorrect;

					$sql ="UPDATE `tblstudentexams` SET `ISCHECK`='".$iscorrect."' WHERE `EXAMID`='".$examid."' AND `IDNO`='".$idno."' AND QUIZID='{$quizid}'";
				 	$mydb->setQuery($sql);
					$cur = $mydb->executeQuery();
				

      	 }else{


		 	$sql ="UPDATE `tblstudentexams` SET `ANSWER`='".$answer."' WHERE `EXAMID`='".$examid."'  AND `IDNO`='".$idno."' AND QUIZID='{$quizid}'";
		 	$mydb->setQuery($sql);
			$cur = $mydb->executeQuery();


			$sql  = "SELECT * FROM `tblexams` e, `tblstudentexams` se  WHERE e.`EXAMID`=se.`EXAMID` AND e.`EXAMID`='".$examid."'AND `IDNO`='".$idno."' AND se.QUIZID='{$quizid}'";
			$mydb->setQuery($sql);
			$cur = $mydb->loadSingleResult();

			if (strtoupper($cur->EXAM_ANSWER)==strtoupper($cur->ANSWER)) {
				# code...
				$iscorrect = 1; 
			}else{
				$iscorrect=0;
			}

			echo $iscorrect;

					$sql ="UPDATE `tblstudentexams` SET `ISCHECK`='".$iscorrect."' WHERE `EXAMID`='".$examid."' AND `IDNO`='".$idno."' AND QUIZID='{$quizid}'";
				 	$mydb->setQuery($sql);
					$cur = $mydb->executeQuery();

     	 }

?>