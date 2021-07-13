   <form action="student/controller.php?action=edit" class="form-horizontal" method="post">
       
       <br/>
			<fieldset>
			  <!-- <h4>It’s free and always will be.</h4> -->
				 <div class="container">
	 
              <legend>Update Accounts</legend>
			 
				<div class="form-group">
					<div class="rows">
						<div class="col-md-6">
							<div class="col-lg-12">
								<input class="form-control input-lg" id="USER_NAME" name="USER_NAME" placeholder="Username" type="text"value="<?php echo isset($res->ACC_USERNAME) ? $res->ACC_USERNAME : ''; ?>">
							</div>
						</div>
					</div>
				</div> 
				<div class="form-group">
					<div class="rows">
						<div class="col-md-6">
							<div class="col-lg-12">
								<input class="form-control input-lg" id="PASS" name="PASS" placeholder="New Password" type="password" value="<?php echo isset($_SESSION['PASS']) ? $_SESSION['PASS'] : ''; ?>" required="true">
							</div>
						</div>
					</div>
				</div>
 
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<div class="col-lg-12">
								<button class="btn btn-success btn-lg" name="save" type="submit">Save</button>
							</div>
						</div>
					</div>
				</div>
				
				</div>
					
				</div>	
				</fieldset>
			</form>
	 