<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>
    <div class="row">
      <div class="col-lg-12"> 
            <h1 class="page-header">List of Batches <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a></h1> 
       		 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-bordered table-hover" cellspacing="0" style="font-size:12px" >
				
				  <thead>
				  	<tr> 
				  		<th> 
				  		Batch </th>
				  		<th>Year</th>
				  		<th width="10%">Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  
				  		$mydb->setQuery("SELECT * 
											FROM  `tblcourse`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>' . $result->COURSE.'</a></td>';
				  		echo '<td>'. $result->DESCRIPTION.'</td>'; 
				  		echo '<td > <a title="Edit" href="index.php?view=edit&id='.$result->COURSEID.'" class="btn btn-primary btn-xs" ><i class="fa fa-pencil fa-fw"></i></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->COURSEID.'" class="btn btn-danger btn-xs" ><i class="fa fa-bitbucket  fa-fw"></i> </a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
				 
			
				</form>
	

</div> <!---End of container-->