<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">List of Quiz <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a></h1>
       		</div> 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr> 
				  		<!-- <th width="400"> 
				  		 Question</th> 
				  		<th>Answer</th>
				  		<th>Course&Year</th>
				  		<th>Subject</th>
				  		<th>Term</th>
				  		<th width="13%" >Action</th> -->
				  		<th> 
				  		 Quiz Name</th> 
				  		<th>Class Code</th>
				  		<th>No. of Question</th> 
				  		<th>Term</th>
				  		<th width="15%">Time Span in Minute</th>
				  		<th width="13%" >Action</th> 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  

				  		$sql = "SELECT  * FROM `tblquiz`  WHERE TEACHER='".$_SESSION['ACCOUNT_NAME']."'";
				  		$mydb->setQuery($sql);
				  		$cur = $mydb->loadResultList();
				        foreach ($cur as $result) {


				        	$sql ="SELECT count(*) as 'TOTALTEST' FROM `tblexams` WHERE `QUIZID`={$result->QUIZID}";
							$mydb->setQuery($sql);
							$tottest = $mydb->loadSingleResult();
							 
 
							 
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result->QUIZNAME.'</a></td>';
				  		echo '<td>'. $result->SUBJ_CODE.'</td>';  
				  		echo '<td>'. $result->NOOFQUESTION.'</td>'; 
				  		echo '<td>'. $result->QUIZTERM.'</td>';
				  		echo '<td>'. $result->QUIZDATETIME.'</td>';  
				  		 
				  		 if ($tottest->TOTALTEST < $result->NOOFQUESTION) {
				  		 	# code...
				  		  	$active = ''; 
				  		 }else{
				  		 	$active ='Disabled'; 
				  		 }
				  		echo '<td align="center" > <a title="Add Question" href="index.php?view=addquestion&id='.$result->QUIZID.'"  class="btn btn-primary btn-xs  "  '.$active.'><span class="fa fa-plus fw-fa"></span></a>
				  		<a title="View Question" href="index.php?view=question&id='.$result->QUIZID.'"  class="btn btn-info btn-xs  "><span class="fa fa-info fw-fa"></span></a>
				  		  <a title="Edit" href="index.php?view=edit&id='.$result->QUIZID.'"  class="btn btn-primary btn-xs  "><span class="fa fa-pencil fw-fa"></span></a>
				  					 <a title="Delete" href="controller.php?action=deletequiz&id='.$result->QUIZID.'"  class="btn btn-danger btn-xs  "><span class="fa fa-trash fw-fa"></span></a>
				  					 </td>'; 
				  		echo '</tr>';
				  	} 

				  // 		$cur = $mydb->loadResultList();

						// foreach ($cur as $result) {
							
							 
				  // 		echo '<tr>';
				  // 		// echo '<td width="5%" align="center"></td>';
				  // 		echo '<td>' . $result->EXAM_QUESTION.'</a></td>';
				  // 		echo '<td>'. $result->EXAM_ANSWER.'</td>'; 
				  // 		echo '<td>' . $result->COURSE.'-' . $result->YEARLEVEL.'</a></td>';
				  // 		echo '<td>'. $result->CLASSCODE.'</td>'; 
				  // 		echo '<td>'. $result->TERM_EXAM.'</td>'; 
				  		 
				  // 		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->EXAMID.'"  class="btn btn-info btn-xs  ">Edit <span class="fa fa-pencil fw-fa"></span></a>
				  // 					 <a title="Delete" href="controller.php?action=delete&id='.$result->EXAMID.'"  class="btn btn-danger btn-xs  ">Delete <span class="fa fa-trash fw-fa"></span></a>
				  // 					 </td>'; 
				  // 		echo '</tr>';
				  // 	} 

				  // 		$mydb->setQuery("SELECT * FROM `tblexams` e, `tblclass` c WHERE e.`CLASSCODE`=c.`CLASSCODE` AND TEACHER='".$_SESSION['ACCOUNT_USERNAME']."'");

				  // 		$cur = $mydb->loadResultList();

						// foreach ($cur as $result) {
							
							 
				  // 		echo '<tr>';
				  // 		// echo '<td width="5%" align="center"></td>';
				  // 		echo '<td>' . $result->EXAM_QUESTION.'</a></td>';
				  // 		echo '<td>'. $result->EXAM_ANSWER.'</td>'; 
				  // 		echo '<td>' . $result->COURSE.'-' . $result->YEARLEVEL.'</a></td>';
				  // 		echo '<td>'. $result->CLASSCODE.'</td>'; 
				  // 		echo '<td>'. $result->TERM_EXAM.'</td>'; 
				  		 
				  // 		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->EXAMID.'"  class="btn btn-info btn-xs  ">Edit <span class="fa fa-pencil fw-fa"></span></a>
				  // 					 <a title="Delete" href="controller.php?action=delete&id='.$result->EXAMID.'"  class="btn btn-danger btn-xs  ">Delete <span class="fa fa-trash fw-fa"></span></a>
				  // 					 </td>'; 
				  // 		echo '</tr>';
				  // 	} 
				  	?>
				  </tbody>
					
				</table>
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
 -->
			</div>
				</form>
	

</div> <!---End of container-->