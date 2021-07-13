<?php  
require_once ("include/initialize.php");
     if (!isset($_SESSION['IDNO'])){
      redirect(web_root."index.php");
     }
 
  $student = New Student();
  $res = $student->single_student($_SESSION['IDNO']);
  
?>
  
      <div class="col-lg-12"> 
     <!-- <input type="text" id="myInput" onkeyup="searchtable()" placeholder="Search for names.." title="Type in a name"> -->
				<table id="tbl" class="tree table table-striped table-bordered table-hover table-responsive"  cellspacing="0">
				
				  <thead>
				  	<tr>  
						<td colspan="2">Class Code</td>
						<td colspan="5" > Subject</td> 
						<td colspan="2" >Average</td>  
						<td>Remarks</td> 
				  	</tr>	 
				  </thead> 
				  <tbody>
				  	<?php  
				  	$tree_count =0;
				  	$totalave =0;
				  	// `GRADE_ID`, `IDNO`, `SUBJ_ID`, `INST_ID`, `SYID`,
				  	//  `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `DAY`, `G_TIME`, `ROOM`, `REMARKS`, `COMMENT`

						$sql = "SELECT * FROM `tblgrade` g, tblsubject s WHERE  g.`CLASSCODE`=s.`SUBJ_CODE`  and `IDNO`='".$_SESSION['IDNO']."' GROUP BY CLASSID ";
				  		$mydb->setQuery($sql);

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {



					  $sql = "SELECT * FROM `tblgrade` WHERE Grading='Prelim' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $prelim = $mydb->loadSingleResult();
                      $prelim->Total;

                      $sql = "SELECT * FROM `tblgrade` WHERE Grading='Midterm' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $midterm = $mydb->loadSingleResult();
                      $midterm->Total;

                      $sql = "SELECT * FROM `tblgrade` WHERE Grading='Final' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $final = $mydb->loadSingleResult();
                      $final->Total;
                       

                        $sql ="SELECT * FROM `tblpercent` ";
                        $mydb->setQuery($sql);
                        $percent = $mydb->loadSingleResult();
                 
                        $totprelim = $prelim->Total * $percent->Prelim / 100;
                        $totmidterm = $midterm->Total * $percent->Midterm / 100;
                        $totfinal = $final->Total * $percent->Final / 100;
                        $tot = $totprelim + $totmidterm + $totfinal;
							 
					 
						if ($tot >= 75) {
						# code...
						$rem = "Passed";
						}else{
						$rem = "Failed";
						}

						$tree_count += 1;

				  		echo '<tr class="treegrid-'.$tree_count.'">';   
				  		echo '<td colspan="2">'. $result->SUBJ_CODE.'</td>';
				  		echo '<td colspan="5">'. $result->SUBJ_DESCRIPTION.'</td>';
				  		echo '<td colspan="2">'. $tot.'</td>';  
				  		echo '<td>'. $rem.'</td>';  
				  		echo '</tr>'; 
				  		echo  '<tr class=" treegrid-parent-'.$tree_count.'">
							          <th>Attendance</th> 
							          <th>Quiz</th> 
							          <th>Lecture</th> 
							          <th>Laboratory</th> 
							          <th>Activity</th> 
							          <th>Assignment</th> 
							          <th>LongTest</th> 
							          <th>Exam</th> 
							          <th>Total</th> 
							          <th>Grading</th> 
							    </tr>'; 

						$sql = "SELECT * FROM `tblgrade` WHERE `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
						$mydb->setQuery($sql);
						$grade = $mydb->loadResultList();

						foreach ($grade as $res) {
							# code...
							echo  '<tr class=" treegrid-parent-'.$tree_count.'">
							          <td>'.$res->Attendance.'</td> 
							          <td>'.$res->Quiz.'</td> 
							          <td>'.$res->Lecture.'</td> 
							          <td>'.$res->Laboratory.'</td> 
							          <td>'.$res->Activity.'</td> 
							          <td>'.$res->Assignment.'</td> 
							          <td>'.$res->LongTest.'</td> 
							          <td>'.$res->Exam.'</td> 
							          <td>'.$res->Total.'</td> 
							          <td>'.$res->Grading.'</td> 
							       </tr>';  
							     
						}
					  
				  	} 
				  	?>
				  </tbody>
					
				</table>
 
				<div class="btn-group">
				  <a target="_blank" href="<?php echo web_root;?>student/printgrades.php" class="btn btn-default"><i class="fa fa-print"></i>  Print</a>
				</div>

			</div>
				</form>
	

</div> <!---End of container-->