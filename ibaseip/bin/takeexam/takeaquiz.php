<style type="text/css">
	p {
		font-weight: bold;
	} 
</style> 
<div class="col-time" id="countdown_tiner"></div>
<div class="container">
	<input type="hidden" id="take_quiz" value="Yes">
	<p class="col-1">Take a Quiz</p>
<form class="form-group" action="processquiz.php" method="Post" span="6">
<p>I. Multiple Choice</p> 
	 <p style="margin-left: 20px;">Instruction: Choose the correct answer.</p>
<?php  
$numbers =0; 
		$mydb->setQuery("SELECT * FROM `tblexams` e, `tblgrades` g  WHERE e.`CLASSCODE`=g.`CLASSCODE` AND `IDNO`='".$_SESSION['IDNO']."' AND  QUIZID={$quizid} AND TYPE ='Multiple Choice' ORDER BY RAND() ");

  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) {
 ?>
	<div class="container">
	  <?php
	  $numbers +=1;

	   echo $numbers.'. '. $result->EXAM_QUESTION;?>
	</div>
	<div class="container">
		<input type="hidden" id="IDNO" name="IDNO" value="<?php echo $result->IDNO;?>">
		<input type="hidden" id="prof" name="prof" value="<?php echo $quiz->TEACHER;?>">
		<input type="hidden" id="QUIZID" name="QUIZID" value="<?php echo $quizid;?>"> 
		<input type="hidden" id="CLASSID" name="CLASSID" value="<?php echo $CLASSID;?>"> 
		<input type="hidden" id="CLASSCODE" name="CLASSCODE" value="<?php echo $result->CLASSCODE;?>"> 
		<input type="hidden" id="EXAM_TERM" name="EXAM_TERM" value="<?php echo $result->TERM_EXAM;?>">
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_A<?php echo $result->EXAMID ?>" name="CHOICE_A<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_A;?>" data-id="<?php echo $result->EXAMID;?>" >  A. <b><?php echo $result->CHOICE_A;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_B<?php echo $result->EXAMID ?>" name="CHOICE_B<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_B;?>" data-id="<?php echo $result->EXAMID;?>">  B. <b><?php echo $result->CHOICE_B;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_C<?php echo $result->EXAMID ?>" name="CHOICE_C<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_C;?>" data-id="<?php echo $result->EXAMID;?>">  C. <b><?php echo $result->CHOICE_C;?></b></div>
		<div class="col-lg-6"><input class="chkbox" type="checkbox" id="CHOICE_D<?php echo $result->EXAMID ?>" name="CHOICE_D<?php echo $result->EXAMID ?>" value="<?php echo $result->CHOICE_D;?>" data-id="<?php echo $result->EXAMID;?>">  D. <b><?php echo $result->CHOICE_D;?></b></div>
	</div>
	<br/>
	<?php }   ?>
 <p>II. Identification</p> 
 <p style="margin-left: 20px;">Instruction: Type the correct answer. Wrong spelling wrong and avoid spacing in the beginning and in the end.</p>
 <?php   
		$mydb->setQuery("SELECT * FROM `tblexams` e, `tblgrades` g  WHERE e.`CLASSCODE`=g.`CLASSCODE` AND `IDNO`='".$_SESSION['IDNO']."' AND  QUIZID={$quizid} AND TYPE ='Identification' ORDER BY RAND() ");

  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) {
 ?>
	<div class="container">
	  <?php  $numbers +=1;

	   echo $numbers.'. '. $result->EXAM_QUESTION;?>
	  <div> 
	  	<input type="hidden" id="IDNO" name="IDNO" value="<?php echo $result->IDNO;?>">
		<input type="hidden" id="prof" name="prof" value="<?php echo $quiz->TEACHER;?>">
		<input type="hidden" id="QUIZID" name="QUIZID" value="<?php echo $quizid;?>"> 
		<input type="hidden" id="CLASSID" name="CLASSID" value="<?php echo $CLASSID;?>"> 
		<input type="hidden" id="CLASSCODE" name="CLASSCODE" value="<?php echo $result->CLASSCODE;?>"> 
		<input type="hidden" id="EXAM_TERM" name="EXAM_TERM" value="<?php echo $result->TERM_EXAM;?>">
	  	 <input type="" name="ans_identification<?php echo $result->EXAMID ?>" id="ans_identification<?php echo $result->EXAMID ?>" class="form-control ans_identification" Placeholder="Answer" data-id="<?php echo $result->EXAMID ?>">
	  </div>
	</div> 
	<br/>
	<?php }   ?>
	<p>III. True or False</p> 
	<p style="margin-left: 20px;">Instruction: Select the correct answer whether true or false.</p>
 <?php   
		$mydb->setQuery("SELECT * FROM `tblexams` e, `tblgrades` g  WHERE e.`CLASSCODE`=g.`CLASSCODE` AND `IDNO`='".$_SESSION['IDNO']."' AND  QUIZID={$quizid} AND TYPE ='True or False' ORDER BY RAND() ");

  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) {
 ?>
	<div class="container">
	     <input type="hidden" id="IDNO" name="IDNO" value="<?php echo $result->IDNO;?>">
		<input type="hidden" id="prof" name="prof" value="<?php echo $quiz->TEACHER;?>">
		<input type="hidden" id="QUIZID" name="QUIZID" value="<?php echo $quizid;?>"> 
		<input type="hidden" id="CLASSID" name="CLASSID" value="<?php echo $CLASSID;?>"> 
		<input type="hidden" id="CLASSCODE" name="CLASSCODE" value="<?php echo $result->CLASSCODE;?>"> 
		<input type="hidden" id="EXAM_TERM" name="EXAM_TERM" value="<?php echo $result->TERM_EXAM;?>">
	  <select class="ans_TrueFalse"  name="ans_TrueFalse<?php echo $result->EXAMID ?>"  id="ans_TrueFalse<?php echo $result->EXAMID ?>" style="width: 10%;padding: 5px 2px;height: 20%;" data-id="<?php echo $result->EXAMID ?>">
	  	<option>Select</option>
	  	<option>True</option>
	  	<option>False</option>
	  </select> <?php 
	    $numbers +=1;

	   echo $numbers.'. '. $result->EXAM_QUESTION;?>
	</div> 
	<br/>
	<?php }   ?>

 <p>IV. Matching Type</p>  
	<p style="margin-left: 20px;">Instruction: Select the correct answer whether true or false.</p>

	<div class="container"> 
		<div class="col-lg-8"> 
		<?php   
			$mydb->setQuery("SELECT * FROM `tblexams` e, `tblgrades` g  WHERE e.`CLASSCODE`=g.`CLASSCODE` AND `IDNO`='".$_SESSION['IDNO']."' AND  QUIZID={$quizid} AND TYPE ='Matching type' ORDER BY RAND() ");

			$cur = $mydb->loadResultList();

			foreach ($cur as $result) {
		?>
		 <input type="hidden" id="IDNO" name="IDNO" value="<?php echo $result->IDNO;?>">
		<input type="hidden" id="prof" name="prof" value="<?php echo $quiz->TEACHER;?>">
		<input type="hidden" id="QUIZID" name="QUIZID" value="<?php echo $quizid;?>"> 
		<input type="hidden" id="CLASSID" name="CLASSID" value="<?php echo $CLASSID;?>"> 
		<input type="hidden" id="CLASSCODE" name="CLASSCODE" value="<?php echo $result->CLASSCODE;?>"> 
		<input type="hidden" id="EXAM_TERM" name="EXAM_TERM" value="<?php echo $result->TERM_EXAM;?>">
		<select class="ans_MatchingType" style="width: 40%;padding: 5px 2px;height: 20%;" name="ans_MatchingType<?php echo $result->EXAMID ?>"  id="ans_MatchingType<?php echo $result->EXAMID ?>" data-id="<?php echo $result->EXAMID ?>"> 
				<option value="None">Select</option>
			<?php  
				$mydb->setQuery("SELECT * FROM `tblexams` e, `tblgrades` g  WHERE e.`CLASSCODE`=g.`CLASSCODE` AND `IDNO`='".$_SESSION['IDNO']."' AND  QUIZID={$quizid} AND TYPE ='Matching type' ORDER BY RAND() "); 

				$ans = $mydb->loadResultList(); 
				foreach ($ans as $res) {
					echo '<option>'.$res->EXAM_ANSWER.'</option>'; 
				}  
			 echo '</select>';
		 
		    $numbers +=1; 
		   echo $numbers.'. '. $result->EXAM_QUESTION.'<br/><br/>';
		   ?>
		<?php }   ?> 
		</div> 
       <div class="col-lg-4"> 
		<?php   
			$mydb->setQuery("SELECT * FROM `tblexams` e, `tblgrades` g  WHERE e.`CLASSCODE`=g.`CLASSCODE` AND `IDNO`='".$_SESSION['IDNO']."' AND  QUIZID={$quizid} AND TYPE ='Matching type' ORDER BY RAND() ");

			$cur = $mydb->loadResultList();

			foreach ($cur as $result) {
	 
		   		echo  '* '. $result->EXAM_ANSWER.'<br/><br/>';
			 }  
		 ?> 
		</div>  
	  </div> 
	<br/>

<?php	if (!isset($_GET['SCORES'])) { ?>


  	<div class="container">
  		<input type="submit" class="btn btn-primary" name="submit">
  	</div>

	<?php 
	}else{
		echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

	}

 	?> 

</form>
</div>