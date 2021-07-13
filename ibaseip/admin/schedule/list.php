<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-12">
            <h1 class="page-header">Class Routine <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Dean' ) {
            	# code...
            ?><a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a> <?php }  ?> </h1>
       		</div> 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		

				  		<th>Day</th> 
				  		<th>Subject Code-Subject Name</th>
				  		
				  		<th>
				  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
				  		 Time</th>
						<th>Teacher</th>
						<th>Semester</th>
				  		<th>Acadamic Year</th>

				  		<th>Batch - Year / Section</th>
				  		<th>Room</th>
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  // ``, ``, ``, ``, ``, ``, `empid`, `crs_yr`, `sched_room`
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");

				  	if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Dean' ) {
				  		# code...
				  		$sql="SELECT * FROM `tblclass` c, tblsubject s WHERE CLASSCODE=SUBJ_CODE   GROUP BY CONCAT(CLASSCODE,SCHEDTIME)";
				  	}else{
				  		$sql="SELECT * FROM `tblclass` c, tblsubject s WHERE CLASSCODE=SUBJ_CODE  AND ACCOUNT_USERNAME='". $_SESSION['ACCOUNT_NAME'] ."' GROUP BY CONCAT(CLASSCODE,SCHEDTIME,SCHEDTIMEto)";

				  	}
				  		
				  		// $mydb->setQuery("SELECT * FROM `tblschedule`");
				  		$mydb->setQuery($sql);

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>'. $result->SCHEDDAY.'</td>';
				  		echo '<td>' . $result->CLASSCODE.'-' . $result->SUBJ_DESCRIPTION.'</a></td>';
				  		echo '<td>'. $result->SCHEDTIME.'-'. $result->SCHEDTIMEto.'</td>';
				  		
				  		echo '<td>' . $result->ACCOUNT_USERNAME.'</a></td>';
				  		echo '<td>'. $result->SEMESTER.'</td>';
				  		echo '<td>'. $result->SY.'</td>';
				  		echo '<td>' . $result->COURSE.'-' . $result->YEARLEVEL.'/' . $result->SECTION.'</a></td>';
				  		echo '<td>'. $result->ROOM.'</td>'; 
				  		 if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Dean') {
				  		 	# code...
				  		 	echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->CLASSID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  	 
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->CLASSID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
				  					 
				  					 </td>';
				  		 }else{
				  		 	echo '<td align="center" > 
				  		<a title="View Students" href="index.php?view=view&CLASSCODE='.$result->CLASSID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-info fw-fa"></span> View Students</a>
				  					 </td>';
				  		 }
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