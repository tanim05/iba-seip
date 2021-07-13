<form class="form-horizontal span6" action="controller.php?action=truefalse" method="POST" style="margin-top: 20px;"> 
                        <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "CLASSCODE">Class Code:</label>

                          <div class="col-md-8">
                            <input type="hidden" name="QUIZID" value="<?php echo $res->QUIZID; ?>">
                             <input class="form-control input-sm" id="CLASSCODE" name="CLASSCODE" placeholder=
                                "" type="text" value="<?php echo $res->SUBJ_CODE; ?>" required READONLY> 
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "QUIZTERM">Term:</label>

                          <div class="col-md-8">
                            <input class="form-control input-sm" id="QUIZTERM" name="QUIZTERM" placeholder=
                                "" type="text" value="<?php echo $res->QUIZTERM; ?>" required READONLY> 
                          </div>
                        </div>
                      </div>
                       <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "EXAM_QUESTION">Question:</label>

                          <div class="col-md-8">
                            <textarea  class="form-control input-sm" id="EXAM_QUESTION" name="EXAM_QUESTION" placeholder=
                                "Question Name" type="text"></textarea>
                            
                          </div>
                        </div>
                      </div> 

                      <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "EXAM_ANSWER">Answer:</label>

                          <div class="col-md-8">
                             <select  class="form-control input-sm" id="EXAM_ANSWER" name="EXAM_ANSWER" required="">
                              <option>Select</option>
                              <option>True</option>
                              <option>False</option>
                            </select>
                             <!-- <input class="form-control input-sm" id="EXAM_ANSWER" name="EXAM_ANSWER" placeholder=
                                "Answer" type="text" value="" required> -->
                          </div>
                        </div>
                      </div> 

                      <div class="form-group">
                        <div class="col-md-8">
                          <label class="col-md-4 control-label" for=
                          "idno"></label>

                          <div class="col-md-8">
                           <button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button>  
                           </div>
                        </div>
                      </div> 
                      </form>