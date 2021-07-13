<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">Leave Message</h1>
       		</div> 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=add" Method="POST" class="form-horizontal span6">  
			      <div class="table-responsive">	
			            <ul class="nav nav-tabs" id="myTab">
					    <li class="active"><a href="#inbox" data-toggle="tab">Inbox</a></li> 
					    <!-- <li  ><a href="#sent" data-toggle="tab">Sent Messages</a></li>  -->
					    <li><a href="#create" data-toggle="tab">Create Message</a></li>  
					</ul>      
					<div class="tab-content"> 
			            <div class="tab-pane active" id="inbox"> 
			            	 <div class="col-lg-12"> 
               
                         <br/>
                          <table id="dash-table" class="table table-inbox table-hover">
                          	<thead>
                          		<tr >
                          			<td style="padding: 0px;margin: 0px;background-color: #ddd;width: 100px">Messages</td>
                          			<td style="padding: 0px;margin: 0px;background-color: #ddd;"></td>
                          			<td style="padding: 0px;margin: 0px;background-color: #ddd;width: 5px"></td>
                          		</tr>
                          	</thead>
                            <tbody>
                              <?php 
									  		$sql="SELECT * FROM `tblmessage`   WHERE  TO_USER='".$_SESSION['ACCOUNT_USERNAME'] ."'";
									  		// $mydb->setQuery("SELECT * FROM `tblschedule`");
									  		$mydb->setQuery($sql);

									  		$cur = $mydb->loadResultList();

											foreach ($cur as $result) {
									  		echo '<tr>';
									  		// echo '<td width="5%" align="center"></td>';
									  		echo '<td><a href="" >' . $result->ACCOUNT_USERNAME.'</a></td>';
									  		echo '<td>'. $result->MessageText.'</td>'; 
									  		echo '<td align="center" >  
							  					 <a title="Delete" href="controller.php?action=delete&id='.$result->MessageID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
							  					 </td>';
									  		echo '</tr>';
									  	} 
									  	?>
                          </tbody>
                          </table>
                      </div>
			            </div>
			  
			            <div class="tab-pane " id="create"> 
			            	<br/>

			            	<div class="form-group">
					                 <div class="col-md-8  ui-widget"> 
											<label class="col-md-4 control-label" for="name">To: </label> 
												<div class="col-md-8">
													 <input id="name" class="form-control input-sm"  name="CLASSCODE" >
												</div>
					                  
					                      </div>
					                    </div> 
					                  
				                   <div class="form-group">
				                    <div class="col-md-8">
				                      <label class="col-md-4 control-label" for=
				                      "MessageText">Message :</label> 
				                      <div class="col-md-8">
				                      	<textarea class="form-control input-sm" id="MessageText" rows="10" name="MessageText" placeholder=
				                            "Body " type="text"></textarea> 
				                      </div>
				                    </div>
				                  </div> 
 
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-send fw-fa"></span>  Send</button> 
                          <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                       </div>
                    </div>
                  </div>
			            </div> 
					</div><!--/tab-content-->			
				 </div>
				</form>
	

</div> <!---End of container-->