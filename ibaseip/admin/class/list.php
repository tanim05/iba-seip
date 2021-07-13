<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">List of Students <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a></h1>
       		</div> 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>ID</th>
				  		<th width="400">
				  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
				  		 Name</th>
				  		<!-- <th>Sex</th> 
				  		<th>Age</th>
				  		<th>Address</th> -->
				  		<th>Contact Number</th>
				  		<th>Batch & Year</th>
				  		<th>Subject Code</th>
				  		<th width="13%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  //`IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`,
				  	// `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `student_status`

				  	if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {
				  		# code...
				  			$mydb->setQuery("SELECT * FROM `tblstudent`");
				  	}else{
				  			$mydb->setQuery("SELECT * FROM `tblstudent` WHERE ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_USERNAME'] ."'");
				  	}
				  	

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
							
							// if($result->BDAY!='0000-00-00'){
							// 	$age = date_diff(date_create($result->BDAY),date_create('today'))->y;
							// }else{
							// 	$age='None';
							// }
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result->IDNO.'</a></td>';
				  		echo '<td>'. $result->FNAME.' '. $result->MNAME.' '. $result->LNAME.'</td>';
				  		// echo '<td>'. $result->SEX.'</td>';
				  		// echo '<td>' .$age.'</td>';
				  		// echo '<td>'. $result->HOME_ADD.'</td>';
				  		echo '<td>'. $result->CONTACT_NO.'</td>';
				  		echo '<td>' . $result->COURSE.'-' . $result->YEARLEVEL.'</a></td>';
				  		echo '<td>'. $result->CLASSCODE.'</td>'; 
				  		 
				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->S_ID.'"  class="btn btn-info btn-xs  ">Edit <span class="fa fa-pencil fw-fa"></span></a> 
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->IDNO.'"  class="btn btn-danger btn-xs  ">Delete <span class="fa fa-trash fw-fa"></span></a>
				  					 
				  					 </td>';
				  		// echo '<td align="center" > <a title="View Grades" href="index.php?view=grades&id='.$result->IDNO.'" class="btn btn-primary btn-xs" >Grades <span class="fa fa-info-circle fw-fa"></span> </a>
				  		// 			 </td>';
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