<?php
require_once ("include/initialize.php");
	 if (!isset($_SESSION['IDNO'])){
      redirect(web_root."index.php");
     }

?> 
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
                        $student = $res->FNAME .' ' .$res->LNAME; ;
									  		$sql="SELECT * FROM `tblmessage`   WHERE  TO_USER='{$student}'";
									  		// $mydb->setQuery("SELECT * FROM `tblschedule`");
									  		$mydb->setQuery($sql);

									  		$cur = $mydb->loadResultList();

											foreach ($cur as $result) {
									  		echo '<tr>';
									  		// echo '<td width="5%" align="center"></td>';
									  		echo '<td><a href="" >' . $result->ACCOUNT_USERNAME.'</a></td>';
									  		echo '<td>'. $result->MessageText.'</td>'; 
									  		echo '<td align="center" >  
							  					 <a title="Delete" href="student/controller.php?action=deletemessage&id='.$result->MessageID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
							  					 </td>';
									  		echo '</tr>';
									  	} 
									  	?>
                          </tbody>
                          </table>
                      </div>