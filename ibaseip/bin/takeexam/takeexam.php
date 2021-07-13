<?php

$term = isset($_GET['term']) ? $_GET['term'] : "";

switch ($term) {
	case 'Prelim':
		doPrelim();
		break;

	case 'Midterm':
		doMidterm();
		break;

	case 'Final':
		# code...
		doFinal();
		break;
	
	default:
		# code...
		break;
}


  function doPrelim() {
  global $mydb;
$classcode = isset($_GET['classcode']) ? $_GET['classcode'] : "";
$term = isset($_GET['term']) ? $_GET['term'] : "";
$prof = isset($_GET['prof']) ? $_GET['prof'] : "";
   ?> 

 <h3>Prelim Quiz</h3>
 <p>Instruction: Choose the correct answer.</p>
<form class="form-group" action="processexam.php?action=prelim" method="Post" span="6">

<?php  

if (isset($_GET['SCORES'])) {
	# code...
	echo "<h1> Your score is : " . $_GET['SCORES'] ."</h1>";
}

  		$mydb->setQuery("SELECT * FROM `tblexams` e, `tblgrades` g,`tblstudent` s WHERE e.`CLASSCODE`=g.`CLASSCODE` AND g.`IDNO`=s.`IDNO` AND s.`IDNO`='".$_SESSION['IDNO']."' AND PRELIM_EXAM=0 AND e.`CLASSCODE` ='".$classcode."' AND TERM_EXAM='".$term."' AND s.ACCOUNT_USERNAME='{$prof}' ORDER BY EXAMID asc");

  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) {
 ?>
	<div class="container">
	  <?php echo $result->EXAM_QUESTION;?>
	</div>
	<div class="container">
		<input type="hidden" id="IDNO" name="IDNO" value="<?php echo $result->IDNO;?>">
		<input type="hidden" id="prof" name="prof" value="<?php echo $prof;?>">
		<input type="hidden" id="CLASSCODE" name="CLASSCODE" value="<?php echo $result->CLASSCODE;?>"> 
		<input type="hidden" id="EXAM_TERM" name="EXAM_TERM" value="<?php echo $result->TERM_EXAM;?>">
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_A<?php echo $result->EXAMID ?>" name="CHOICE_A<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_A;?>" data-id="<?php echo $result->EXAMID;?>" >  A. <b><?php echo $result->CHOICE_A;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_B<?php echo $result->EXAMID ?>" name="CHOICE_B<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_B;?>" data-id="<?php echo $result->EXAMID;?>">  B. <b><?php echo $result->CHOICE_B;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_C<?php echo $result->EXAMID ?>" name="CHOICE_C<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_C;?>" data-id="<?php echo $result->EXAMID;?>">  C. <b><?php echo $result->CHOICE_C;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_D<?php echo $result->EXAMID ?>" name="CHOICE_D<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_D;?>" data-id="<?php echo $result->EXAMID;?>">  D. <b><?php echo $result->CHOICE_D;?></b></div>
	</div>
	<br/>
	<?php
	} 

	if (!isset($_GET['SCORES'])) { ?>
	 
  	<div class="container">
  		<input type="submit" class="btn btn-primary" name="submit">
  	</div>

	<?php 
	}else{
		echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

	}

 	?> 

</form>

<?php }  
 

 
  function doMidterm() {
  global $mydb;
$classcode = isset($_GET['classcode']) ? $_GET['classcode'] : "";
$term = isset($_GET['term']) ? $_GET['term'] : "";
$prof = isset($_GET['prof']) ? $_GET['prof'] : "";
   ?> 

 <h3>Midterm Quiz</h3>
 <p>Instruction: Choose the correct answer.</p>
<form class="form-group" action="processexam.php?action=midterm" method="Post" span="6">

<?php  

if (isset($_GET['SCORES'])) {
	# code...
	echo "<h1> Your score is : " . $_GET['SCORES'] ."</h1>";
}

  		$mydb->setQuery("SELECT * FROM `tblexams` e, `tblgrades` g,`tblstudent` s WHERE e.`CLASSCODE`=g.`CLASSCODE` AND g.`IDNO`=s.`IDNO` AND s.`IDNO`='".$_SESSION['IDNO']."' AND MIDTERM_EXAM=0 AND e.`CLASSCODE` ='".$classcode."' AND TERM_EXAM='".$term."' AND s.ACCOUNT_USERNAME='{$prof}' ORDER BY EXAMID asc");

  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) {
 ?>
	<div class="container">
	  <?php echo $result->EXAM_QUESTION;?>
	</div>
	<div class="container">
		<input type="hidden" id="IDNO" name="IDNO" value="<?php echo $result->IDNO;?>">
		<input type="hidden" id="prof" name="prof" value="<?php echo $prof;?>">
		<input type="hidden" id="CLASSCODE" name="CLASSCODE" value="<?php echo $result->CLASSCODE;?>"> 
		<input type="hidden" id="EXAM_TERM" name="EXAM_TERM" value="<?php echo $result->TERM_EXAM;?>">
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_A<?php echo $result->EXAMID ?>" name="CHOICE_A<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_A;?>" data-id="<?php echo $result->EXAMID;?>" >  A. <b><?php echo $result->CHOICE_A;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_B<?php echo $result->EXAMID ?>" name="CHOICE_B<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_B;?>" data-id="<?php echo $result->EXAMID;?>">  B. <b><?php echo $result->CHOICE_B;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_C<?php echo $result->EXAMID ?>" name="CHOICE_C<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_C;?>" data-id="<?php echo $result->EXAMID;?>">  C. <b><?php echo $result->CHOICE_C;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_D<?php echo $result->EXAMID ?>" name="CHOICE_D<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_D;?>" data-id="<?php echo $result->EXAMID;?>">  D. <b><?php echo $result->CHOICE_D;?></b></div>
	</div>
	<br/>
	<?php
	} 

	if (!isset($_GET['SCORES'])) { ?>
	 
  	<div class="container">
  		<input type="submit" class="btn btn-primary" name="submit">
  	</div>

	<?php 
	}else{
		echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

	}

 	?> 

</form>

<?php } ?>


<?php  function doFinal() { 
global $mydb;
$classcode = isset($_GET['classcode']) ? $_GET['classcode'] : "";
$term = isset($_GET['term']) ? $_GET['term'] : "";
$prof = isset($_GET['prof']) ? $_GET['prof'] : "";
?> 

 <h3>Final Quiz</h3>
 <p>Instruction: Choose the correct answer.</p>
<form class="form-group" action="processexam.php?action=final" method="Post" span="6">

<?php  

if (isset($_GET['SCORES'])) {
	# code...
	echo "<h1> Your score is : " . $_GET['SCORES'] ."</h1>";
}

  		$mydb->setQuery("SELECT * FROM `tblexams` e, `tblgrades` g,`tblstudent` s WHERE e.`CLASSCODE`=g.`CLASSCODE` AND g.`IDNO`=s.`IDNO` AND s.`IDNO`='".$_SESSION['IDNO']."' AND FINAL_EXAM=0  AND s.ACCOUNT_USERNAME='{$prof}'  AND e.`CLASSCODE` ='".$classcode."' AND TERM_EXAM='".$term."' ORDER BY EXAMID asc");

  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) {
 ?>
	<div class="container">
	  <?php echo $result->EXAM_QUESTION;?>
	</div>
	<div class="container">
		<input type="hidden" id="IDNO" name="IDNO" value="<?php echo $result->IDNO;?>">
		<!-- <input type="hidden" name="EXAMID[]" value="<?php echo $result->EXAMID;?>"> -->
		<input type="hidden" id="prof" name="prof" value="<?php echo $prof;?>">
		<input type="hidden" id="CLASSCODE" name="CLASSCODE" value="<?php echo $result->CLASSCODE;?>"> 
		<input type="hidden" id="EXAM_TERM" name="EXAM_TERM" value="<?php echo $result->TERM_EXAM;?>">
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_A<?php echo $result->EXAMID ?>" name="CHOICE_A<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_A;?>" data-id="<?php echo $result->EXAMID;?>" >  A. <b><?php echo $result->CHOICE_A;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_B<?php echo $result->EXAMID ?>" name="CHOICE_B<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_B;?>" data-id="<?php echo $result->EXAMID;?>">  B. <b><?php echo $result->CHOICE_B;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_C<?php echo $result->EXAMID ?>" name="CHOICE_C<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_C;?>" data-id="<?php echo $result->EXAMID;?>">  C. <b><?php echo $result->CHOICE_C;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_D<?php echo $result->EXAMID ?>" name="CHOICE_D<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_D;?>" data-id="<?php echo $result->EXAMID;?>">  D. <b><?php echo $result->CHOICE_D;?></b></div>
	</div>
	<br/>
	<?php
	} 

	if (!isset($_GET['SCORES'])) { ?>
	 
  	<div class="container">
  		<input type="submit" class="btn btn-primary" name="submit">
  	</div>

	<?php 
	}else{
		echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

	}

 	?>  

</form> 
<?php } ?>