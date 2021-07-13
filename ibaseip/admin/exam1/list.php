<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<style type="text/css">
	.responsive {
		overflow-x:auto;
		white-space: nowrap;
	}
</style>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">Student Marks <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a> </h1>
       		</div> 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		  <form action="controller.php?action=delete" Method="POST">  
			  <div class="responsive">			
				<table class="table table-striped table-bordered table-hover" > 
				  <thead>
				  	<tr> 
				  		
				  		
				  		<th>Subject Code</th>
				  		<th>Student ID</th>
				  		<th> Attendance</th>
				  		<th>Quiz</th> 
				  		<th>Lecture</th>
				  		<th>Lab</th>
				  		<th>Activity</th>
				  		<th>Assignment</th>
				  		<th>Test</th>
				  		<th>Exam</th> 
				  		<th>Total</th>
				  		<th>Grading</th> 
				  		
				  		<th width="13%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  
				  	    $mydb->setQuery("SELECT * FROM `tblgrade`"); 

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
							 
				  		echo '<tr>'; 

				  		//echo '<td>' . $result->CLASSID.'</a></td>';
				  		echo '<td>' . $result->CLASSCODE.'</a></td>';
				  		echo '<td>' . $result->IDNO.'</a></td>';
				  		echo '<td>' . $result->Attendance.'</a></td>';
				  		echo '<td>'. $result->Quiz.'</td>';
				  		echo '<td>'. $result->Lecture.'</td>';
				  		echo '<td>' .$result->Laboratory.'</td>';
				  		echo '<td>'. $result->Activity.'</td>';
				  		echo '<td>'. $result->Assignment.'</td>';
				  		echo '<td>' .$result->LongTest.'</td>';
				  		echo '<td>'. $result->Exam.'</td>'; 
				  		echo '<td>'. $result->Total.'</td>'; 
				  		echo '<td>'. $result->Grading.'</td>'; 
				  		//echo '<td>'. $result->Final.'</td>'; 
/*				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->PercentID.'"  class="btn btn-info btn-xs  ">Edit <span class="fa fa-pencil fw-fa"></span></a>  
				  					 </td>';*/
				  		 
				  		 echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->GRADEID.'"  class="btn btn-info btn-xs  ">Edit <span class="fa fa-pencil fw-fa"></span></a> 
				  		 			 <a title="Delete" href="controller.php?action=delete&id='.$result->GRADEID.'"  class="btn btn-danger btn-xs  ">Delete <span class="fa fa-trash fw-fa"></span></a>
				  		 			 </td>';
				  	     echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
			</div>
				</form>
	

</div> <!---End of container-->
