 <style type="text/css">
	p {
		font-weight: bold;
	} 
</style>
<div class="container">
	<p style="font-weight: bold;font-size: 15px">Quiz Preview</p>
		<?php
				$quizid = isset($_GET['id']) ? $_GET['id'] :"";

			 $sql ="SELECT count(*) as 'TOTAL' FROM `tblstudentexams` WHERE `ISCHECK`=1 AND `SUBMITTED`=1 AND IDNO ='".$_SESSION['IDNO'] ."' AND `QUIZID`={$quizid}";
			 $mydb->setQuery($sql); 
			 $score = $mydb->loadSingleResult(); 
				# code...
				echo "<h1> Your score is : " . $score->TOTAL ."</h1>";
		?>
<p>I. Multiple Choice</p> 
	 <p style="margin-left: 20px;">Instruction: Choose the correct answer.</p>
<?php  
$numbers =0; 
		 
 
	    $sql ="SELECT * FROM `tblexams` e, `tblstudentexams` se WHERE e.`EXAMID`=se.`EXAMID` AND TYPE ='Multiple Choice' AND `SUBMITTED`=1  AND  e.`QUIZID`={$quizid}  AND `IDNO`='".$_SESSION['IDNO']."'";
		$mydb->setQuery($sql);

  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) {

		$examid = $result->EXAMID;

		$sql ="SELECT * FROM `tblstudentexams` WHERE `SUBMITTED`=true  AND  `QUIZID`={$quizid} AND EXAMID ={$examid} AND `IDNO`='".$_SESSION['IDNO']."'";
		$mydb->setQuery($sql); 
  		$quizans = $mydb->loadSingleResult();
 
			if ($result->CHOICE_A==$quizans->ANSWER) {
				# code... 
				@$chk = '<div class="col-lg-6"><input class="chkbox"  checked="true" type="checkbox" DISABLED  >  A. <b>'.$result->CHOICE_A.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED >  B. <b>'.$result->CHOICE_B.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED >  C. <b>'.$result->CHOICE_C.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED >  D. <b>'.$result->CHOICE_D.'</b></div>';

			}elseif ($result->CHOICE_D==$quizans->ANSWER) {
				# code...
					@$chk = '<div class="col-lg-6"><input class="chkbox"  type="checkbox" DISABLED  >  A. <b>'.$result->CHOICE_A.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED  checked="true">  B. <b>'.$result->CHOICE_B.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED >  C. <b>'.$result->CHOICE_C.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED >  D. <b>'.$result->CHOICE_D.'</b></div>';

			}elseif ($result->CHOICE_C==$quizans->ANSWER) {
				# code...
					@$chk = '<div class="col-lg-6"><input class="chkbox"  type="checkbox" DISABLED >  A. <b>'.$result->CHOICE_A.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED>  B. <b>'.$result->CHOICE_B.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED  checked="true">  C. <b>'.$result->CHOICE_C.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED>  D. <b>'.$result->CHOICE_D.'</b></div>';

			}elseif ($result->CHOICE_D==$quizans->ANSWER) {
				# code...
					@$chk = '<div class="col-lg-6"><input class="chkbox"  type="checkbox" DISABLED  >  A. <b>'.$result->CHOICE_A.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED>  B. <b>'.$result->CHOICE_B.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED>  C. <b>'.$result->CHOICE_C.'</b></div>
						<div class="col-lg-6"><input class="chkbox" type="checkbox" DISABLED  checked="true">  D. <b>'.$result->CHOICE_D.'</b></div>';

			} 
 ?>
	<div class="container">
	  <?php echo $result->EXAM_QUESTION;?>
	</div>
	<div class="container">
		<?php echo @$chk;?> 
	</div>
	<?php }   ?>

	<br/>
 <p>II. Identification</p> 
 <p style="margin-left: 20px;">Instruction: Type the correct answer. Wrong spelling wrong and avoid spacing in the beginning and in the end.</p>
 <?php   
		$sql ="SELECT * FROM `tblexams` e, `tblstudentexams` se WHERE e.`EXAMID`=se.`EXAMID` AND TYPE ='Identification' AND `SUBMITTED`=1  AND  e.`QUIZID`={$quizid}  AND `IDNO`='".$_SESSION['IDNO']."'";
		$mydb->setQuery($sql);

  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) {
 ?>
	<div class="container">
	  <?php  $numbers +=1;

	   echo $numbers.'. '. $result->EXAM_QUESTION;?>
	  <div>  
	  	 <input type="" name="" class="form-control" value="<?php echo $result->ANSWER; ?>"  disabled>
	  </div>
	</div> 
	<br/>
	<?php }   ?>
	<p>III. True or False</p> 
	<p style="margin-left: 20px;">Instruction: Select the correct answer whether true or false.</p>
 <?php   
		$sql ="SELECT * FROM `tblexams` e, `tblstudentexams` se WHERE e.`EXAMID`=se.`EXAMID` AND TYPE ='True or False' AND `SUBMITTED`=1  AND  e.`QUIZID`={$quizid}  AND `IDNO`='".$_SESSION['IDNO']."'";
		$mydb->setQuery($sql);

  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) {
 ?>
	<div class="container"> 
	  <select  style="width: 10%;padding: 5px 2px;height: 20%;" disabled >
	  	<option>Select</option>
	  	<option <?php echo ($result->ANSWER=="True") ? "SELECTED" : "" ?>>True</option>
	  	<option <?php echo ($result->ANSWER=="False") ? "SELECTED" : "" ?>>False</option>
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
			$sql ="SELECT * FROM `tblexams` e, `tblstudentexams` se WHERE e.`EXAMID`=se.`EXAMID` AND TYPE ='Matching Type' AND `SUBMITTED`=1  AND  e.`QUIZID`={$quizid}  AND `IDNO`='".$_SESSION['IDNO']."'";
				$mydb->setQuery($sql);

		  		$cur = $mydb->loadResultList();

				foreach ($cur as $result) {
		?> 
		<select  style="width: 40%;padding: 5px 2px;height: 20%;" disabled>  
	 	    <option><?php echo $result->ANSWER; ?></option>';   
		 </select> 
		 <?php
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
</form>
</div>