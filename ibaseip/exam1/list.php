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
				  		<!-- <th>ID</th> -->
				  		<th width="400">
				  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
				  		 Question</th> 
				  		<th>Answer</th>
				  		<th>Course&Year</th>
				  		<th>Subject</th>
				  		<th>Term</th>
				  		<th width="13%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  
				  		$mydb->setQuery("SELECT * FROM `tblexams` e, `tblclass` c WHERE e.`CLASSCODE`=c.`CLASSCODE` AND TEACHER='".$_SESSION['ACCOUNT_USERNAME']."'");

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
							
							 
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result->EXAM_QUESTION.'</a></td>';
				  		echo '<td>'. $result->EXAM_ANSWER.'</td>'; 
				  		echo '<td>' . $result->COURSE.'-' . $result->YEARLEVEL.'</a></td>';
				  		echo '<td>'. $result->CLASSCODE.'</td>'; 
				  		echo '<td>'. $result->TERM_EXAM.'</td>'; 
				  		 
				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->EXAMID.'"  class="btn btn-info btn-xs  ">Edit <span class="fa fa-pencil fw-fa"></span></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->EXAMID.'"  class="btn btn-danger btn-xs  ">Delete <span class="fa fa-trash fw-fa"></span></a>
				  					 </td>'; 
				  		echo '</tr>';
				  	} 
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