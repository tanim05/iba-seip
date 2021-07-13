<?php
require_once ("../include/initialize.php");
if(!isset($_SESSION['IDNO'])){
	redirect(web_root.'index.php');

} 
 
global $mydb;


if (isset($_GET['time'])) {
	# code...
	$idno = $_GET['IDNO'];
	$classcode = $_GET['CLASSCODE'];
	$termexam  = $_GET['EXAM_TERM'];
	$prof = $_GET['prof'];
	$quizid = $_GET['QUIZID']; 
	$CLASSID = $_GET['CLASSID']; 
}else{
	$idno = $_POST['IDNO'];
	$classcode = $_POST['CLASSCODE'];
	$termexam  = $_POST['EXAM_TERM'];
	$prof = $_POST['prof'];
	$quizid = $_POST['QUIZID']; 
	$CLASSID = $_POST['CLASSID']; 
}

	$quizscore = 0;
	$totscore = 0;
	$quizave = 0;
	$isScore=0;
  
		$sql = "SELECT count(*) 'AVE' FROM `tblexams` WHERE  QUIZID='{$quizid}'";
		$mydb->setQuery($sql);
		$cur = $mydb->loadSingleResult();

		if($cur==false){
			die(mysql_error());
		}else{
			  $quizave = $cur->AVE;
		}

		 $sql = "SELECT count(*) as 'SCORE' FROM `tblstudentexams` WHERE  IDNO='".$idno."' AND ISCHECK=1 AND QUIZID='{$quizid}' ";
		$mydb->setQuery($sql);
		$cur = $mydb->loadSingleResult();

		if($cur==false){
			die(mysql_error());
		}else{
			$quizscore = $cur->SCORE;
			$totscore = $quizscore / $quizave * 50+50; 

		  	 
		}
		 
	 
		$sql = "SELECT * FROM `tblscore` WHERE `QUIZID`={$quizid} AND `IDNO`='{$idno}'";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();

		if($cur==false){
			die(mysql_error());
		}

		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count <= 0){  

		  	$sql = "INSERT INTO `tblscore` (`IDNO`, `QUIZID`, `TOTALQUIZ`, `STUDENTSCORE`, `QUIZAVERAGE`) VALUES ('{$idno}',{$quizid},'{$quizave}',{$quizscore},{$totscore})";
				$mydb->setQuery($sql);
				$res = $mydb->executeQuery();

				if($res==false){
					die(mysql_error());
				} 
		 } 
	

		$sql ="UPDATE `tblstudentexams` SET `SUBMITTED`=1 WHERE `QUIZID`={$quizid} AND `IDNO`='{$idno}'";
		$mydb->setQuery($sql);
		$res = $mydb->executeQuery();

		if($res==false){
			die(mysql_error());
		} 


if ($termexam=='Prelim') {
	# code... 

	// $sql ="SELECT SUM(`NOOFQUESTION`) as 'QUIZAVE' FROM `tblquiz` WHERE `QUIZTERM`='Prelim'"; 
	// $mydb->setQuery($sql);
	// $totalquiz = $mydb->loadSingleResult();

	// $totquiz  = $totalquiz->QUIZAVE;
	 

	$sql="SELECT SUM(`STUDENTSCORE`) as 'TOTALSCORE', SUM(`QUIZAVERAGE`) as 'TOTALAVE' FROM `tblscore` s, `tblquiz` q WHERE s.`QUIZID`=q.`QUIZID` AND `IDNO`='{$idno}' AND `QUIZTERM`='Prelim' AND CLASSID={$CLASSID}";
	 $mydb->setQuery($sql);
	 $score = $mydb->loadSingleResult();


	 $total_ave = $score->TOTALAVE;

	// $studentscore = $score->TOTALSCORE;


	// $tot_score = $studentscore / $totquiz * 50+50; 

	$sql ="SELECT COUNT(QUIZID) as 'NoofQuiz' FROM `tblquiz` WHERE `QUIZTERM`='Prelim' AND CLASSID={$CLASSID} ";
	$mydb->setQuery($sql);
	$totalquiz = $mydb->loadSingleResult();

	$noofquiz  = $totalquiz->NoofQuiz;
	$isScore = $total_ave / $noofquiz * 0.1;

	 

	 $sql = "UPDATE `tblgrades` SET  `PRELIM_EXAM`=1, `QUIZZES_PRE`='" .$isScore."',`TOTALGRADES_PRE`=`TERMEXAM_PRE`+`HANDSON_PRE`+`ACTIVITIES_PRE`+`ASSIGNMENT_PRE`+`ATTENDANCE_PRE`+'".$isScore."'  WHERE  IDNO='".$idno."' AND CLASSID=".$CLASSID;
		 $mydb->setQuery($sql);
		 $cur = $mydb->executeQuery();
		if($cur==false){
			die(mysql_error());
		} 

}elseif ($termexam=='Midterm') {
	# code...
	// echo "Midterm";
// 	$sql ="SELECT SUM(`NOOFQUESTION`) as 'QUIZAVE' FROM `tblquiz` WHERE `QUIZTERM`='Midterm'";
// $mydb->setQuery($sql);
// $totalquiz = $mydb->loadSingleResult();

// $totquiz  = $totalquiz->QUIZAVE;
 
 
$sql="SELECT SUM(`TOTALQUIZ`) as 'TOTALQUIZ',SUM(`STUDENTSCORE`) as 'TOTALSCORE', SUM(`QUIZAVERAGE`) as 'TOTALAVE' FROM `tblscore` s, `tblquiz` q WHERE s.`QUIZID`=q.`QUIZID` AND `IDNO`='{$idno}' AND `QUIZTERM`='Midterm' AND CLASSID={$CLASSID}";
 $mydb->setQuery($sql);
 $score = $mydb->loadSingleResult();


// $studentscore = $score->TOTALSCORE;


// $tot_score = $studentscore / $totquiz * 50+50; 
  $total_ave = $score->TOTALAVE;

$sql ="SELECT COUNT(QUIZID) as 'NoofQuiz' FROM `tblquiz` WHERE `QUIZTERM`='Midterm' AND CLASSID={$CLASSID}";
	$mydb->setQuery($sql);
	$totalquiz = $mydb->loadSingleResult();

	$noofquiz  = $totalquiz->NoofQuiz;
	$isScore = $total_ave / $noofquiz * 0.1;
 

 $sql = "UPDATE `tblgrades` SET  `MIDTERM_EXAM`=1, `QUIZZES_MID`='" .$isScore."',`TOTALGRADES_MID`=`TERMEXAM_MID`+`HANDSON_MID`+`ACTIVITIES_MID`+`ASSIGNMENT_MID`+`ATTENDANCE_MID`+'".$isScore."' WHERE  IDNO='".$idno."' AND CLASSID=".$CLASSID;
		 $mydb->setQuery($sql);
		 $cur = $mydb->executeQuery();
		if($cur==false){
			die(mysql_error());
		} 

}elseif ($termexam=='Final') {
	# code...
	// echo "Final";

		// $sql ="SELECT SUM(`NOOFQUESTION`) as 'QUIZAVE' FROM `tblquiz` WHERE `QUIZTERM`='Final'";
		// $mydb->setQuery($sql);
		// $totalquiz = $mydb->loadSingleResult();

		// $totquiz  = $totalquiz->QUIZAVE;
		 
		 
		$sql="SELECT SUM(`TOTALQUIZ`) as 'TOTALQUIZ',SUM(`STUDENTSCORE`) as 'TOTALSCORE', SUM(`QUIZAVERAGE`) as 'TOTALAVE' FROM `tblscore` s, `tblquiz` q WHERE s.`QUIZID`=q.`QUIZID` AND `IDNO`='{$idno}' AND `QUIZTERM`='Final' AND CLASSID={$CLASSID}";
		 $mydb->setQuery($sql);
		 $score = $mydb->loadSingleResult();


		// $studentscore = $score->TOTALSCORE;
 		$total_ave = $score->TOTALAVE;

		// $tot_score = $studentscore / $totquiz * 50+50; 

		$sql ="SELECT COUNT(QUIZID) as 'NoofQuiz' FROM `tblquiz` WHERE `QUIZTERM`='Final' AND CLASSID={$CLASSID}";
		$mydb->setQuery($sql);
		$totalquiz = $mydb->loadSingleResult();

		$noofquiz  = $totalquiz->NoofQuiz;
		$isScore = $total_ave / $noofquiz * 0.1; 

		 $sql = "UPDATE `tblgrades` SET  `QUIZZES_FINAL`='".$isScore."',`FINAL_EXAM`=1,`TOTALGRADES_FINAL`=`TERMEXAM_FINAL`+`HANDSON_FINAL`+`ACTIVITIES_FINAL`+`ASSIGNMENT_FINAL`+`ATTENDANCE_FINAL`+'".$isScore."' WHERE  IDNO='".$idno."' AND CLASSID=".$CLASSID;;
		 $mydb->setQuery($sql);
		 $cur = $mydb->executeQuery();
		if($cur==false){
			die(mysql_error());
		} 
}

 
	  redirect(web_root."takeexam/index.php?id={$quizid}&SCORES=".$quizscore);


  
 
?>