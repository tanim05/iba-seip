	<form action="student/controller.php?action=createmessage" method="POST" class="form-horizontal span6"> 
	<div class="form-group">
         <div class="col-md-8 ui-widget">
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
		          	<textarea class="form-control input-sm" id="MessageText" rows="10" name="MessageText" placeholder="Body " type="text"></textarea> 
		          </div>
		        </div>
		      </div> 
 
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-send fw-fa"></span>  Send</button>  
                       </div>
                    </div>
                  </div>
              </form>