<?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$USERID = $_SESSION['id'];
    if($USERID==''){
  redirect("index.php");
}
global $mydb;
  $query = "SELECT * FROM student_profile where id = ".$_SESSION['ACCOUNT_ID'];
  $mydb->setQueryForOracle($query);
  $result = $mydb->executeQueryforOracle();
  $singleuser = $mydb->loadSingleResultForOracle();

?> 

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>



<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"id="defaultOpen">Self Profile</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Education</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Experience</button>
</div>

<div id="London" class="tabcontent">
<div class="content-wrapper">
    <section class="content">
    <div class="box box-default">
        <div class="box-body">
        <form method="POST" action="controller.php?action=edit">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" value="<?php echo $singleuser->NAME; ?>" placeholder="Student Name" name="name">
                <input class="hidden" type="text" value="<?php echo $_SESSION['ACCOUNT_ID']; ?>" name="number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" placeholder="Student email" name="email" value="<?php echo $singleuser->EMAIL; ?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Father's Name</label>
                <input class="form-control" type="text" placeholder="Father's name" name="fname"value="<?php echo $singleuser->EMAIL; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mother's Name</label>
                <input class="form-control" type="text" placeholder="Father's name" name="mname">
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Present Address</label>
                <div class="box box-body">
                    <div class="col-md-6">
                        <label>Village/Road No.</label>
                        <input class="form-control" type="text" placeholder="Village/Road No." name="pre_vill">    
                    </div>
                    <div class="col-md-6">
                        <label>Post Office</label>
                        <input class="form-control" type="text" placeholder="Post Office" name="pre_po">    
                    </div>
                    <div class="col-md-6">
                        <label>Thana</label>
                        <input class="form-control" type="text" placeholder="Thana" name="pre_ps">    
                    </div>
                    <div class="col-md-6">
                        <label>District</label>
                        <input class="form-control" type="text" placeholder="District" name="pre_dist">    
                    </div>
                </div>
                <!-- <input class="form-control" type="text" placeholder="Present Address" name="fname"> -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Permanent Address</label>
                <div class="box box-body">
                    <div class="col-md-6">
                        <label>Village/Road No.</label>
                        <input class="form-control" type="text" placeholder="Village/Road No." name="per_vill">    
                    </div>
                    <div class="col-md-6">
                        <label>Post Office</label>
                        <input class="form-control" type="text" placeholder="Post Office" name="per_po">    
                    </div>
                    <div class="col-md-6">
                        <label>Thana</label>
                        <input class="form-control" type="text" placeholder="Thana" name="per_ps">    
                    </div>
                    <div class="col-md-6">
                        <label>District</label>
                        <input class="form-control" type="text" placeholder="District" name="per_dist">    
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" type="text" placeholder="Phone Number" name="mobile">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Photo</label>
                <input class="form-control" type="file" name="photo">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Batch No</label>
                <input class="form-control" type="text" placeholder="Batch No" name="batch_no">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Course Description</label>
                <textarea name="course_desc" id="" cols="30" rows="1" class="form-control" placeholder="Course Description"></textarea>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>



        </div>
        </form>
      </div>
    </section>
  </div>
</div>

<div id="Paris" class="tabcontent">
<div class="content-wrapper">
    <section class="content">
    <div class="box box-default">
        <div class="box-body">


          <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <a href="#addeducation" data-toggle="modal" class="btn btn-primary" id=""><i class="fa fa-plus"></i></a>
                </div>      
            </div>
          </div>
          <div class="modal fade" id="addeducation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <h3 class="modal-title" id="exampleModalLabel">Enter Your Education</h3>
                      </div>
                      <div class="modal-body">
                        <form action="php_code/education_save.php"  method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Exam Name</label>
                                <input class="form-control" type="text" placeholder="Exam Name" name="examname">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Institute Name</label>
                                <input class="form-control" type="text" placeholder="Institute Name" name="institutename">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Borad / University</label>
                                <input class="form-control" type="text" placeholder="Board / University"  name="boardname">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Passing Year</label>
                                <input class="form-control" type="number" placeholder="Passing Year" name="passingyear">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>GPA</label>
                                <input class="form-control" type="number"  name="gpa">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>
                          </div>
                          
                          
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>


                <table class="table table-stripped">
                  <thead>
                      <tr>
                            <th width="5%">Serial</th>
                            <th width="20%">Exam Name</th>
                            <th width="25%">Institute Name</th>
                            <th  width="25%">Board/University</th>
                            <th  width="10%">Passing Year</th>
                            <th  width="5%">GPA/CGPA</th>
                            <th  width="5%">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                      while ($user = oci_fetch_array($result)) {
                    ?>
                      <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $user[2]; ?></td>
                          <td><?php echo $user[3]; ?></td>
                          <td><?php echo $user[11]; ?></td>
                          <td><?php echo $user[4]; ?></td>
                          <td><?php echo $user[6]; ?></td>
                          <td>
                            <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <a href="#editeducation<?php echo($i); ?>" data-toggle="modal" class="btn btn-primary" id=""><i class="fa fa-edit"></i></a>
                </div>      
            </div>
          </div>
          <div class="modal fade" id="editeducation<?php echo($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Your Education</h3>
                      </div>
                      <div class="modal-body">
                        <form action="php_code/education_edit.php"  method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Exam Name</label>
                                <input class="form-control" type="text" placeholder="Exam Name" name="examname" value="<?php echo $user[2]; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Institute Name</label>
                                <input class="form-control" type="text" placeholder="Institute Name" name="institutename"  value="<?php echo $user[3]; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Borad / University</label>
                                <input class="form-control" type="text" placeholder="Board / University"  name="boardname"  value="<?php echo $user[11]; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Passing Year</label>
                                <input class="form-control" type="number" placeholder="Passing Year" name="passingyear"  value="<?php echo $user[4]; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>GPA</label>
                                <input class="form-control" type="number"  name="gpa"  value="<?php echo $user[6]; ?>">
                                <input class="hidden" type="number"  name="edcode"  value="<?php echo $user[0]; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>
                          </div>
                          
                          
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>

                          </td>
                      </tr>

                    <?php
                      $i++;
                      }
                    ?>
                  </tbody>
              </table>


        </div>
      </div>
    </section>
  </div> 
</div>

<div id="Tokyo" class="tabcontent">
<div class="content-wrapper">
    <section class="content">
    <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <a href="#addexperience" data-toggle="modal" class="btn btn-primary" id=""><i class="fa fa-plus"></i></a>
                </div>      
            </div>
          </div>
          <div class="modal fade" id="addexperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <h3 class="modal-title" id="exampleModalLabel">Enter Your Experience</h3>
                      </div>
                      <div class="modal-body">
                        <form action="php_code/experience_save.php"  method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Company Name</label>
                                <input class="form-control" type="text" placeholder="Company Name" name="cname">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Designation</label>
                                <input class="form-control" type="text" placeholder="Designation" name="des">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Start Date</label>
                                <input class="form-control" type="date"  name="sdate">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>End Date</label>
                                <input class="form-control" type="date"  name="edate">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Experiences Year</label>
                                <input class="form-control" type="text" placeholder="Experiences Year" name="duration">
                              </div>
                            </div>
                            <!-- <div class="col-md-6">
                              <div class="form-group">
                                <label>Previous Company</label>
                                <input class="form-control" type="text"  name="">
                              </div>
                            </div> -->
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>
                          </div>
                          
                          
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>


                <table class="table table-stripped">
                  <thead>
                      <tr>
                          <th width="5%">Serial</th>
                          <th width="15%">Company Name</th>
                          <th width="15%">Designation Name</th>
                          <th  width="15%">Start Date</th>
                          <th  width="15%">End Date</th>
                          <th  width="15%">Experience Year</th>
                          <th  width="5%">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                    $i = 1;
                      while ($user = oci_fetch_array($result)) {
                    ?>
                      <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $user[1]; ?></td>
                          <td><?php echo $user[2]; ?></td>
                          <td><?php echo $user[3]; ?></td>
                          <td><?php echo $user[4]; ?></td>
                          <td><?php echo $user[9]; ?></td>
                          <td>
                            <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <a href="#editexperience<?php echo($i); ?>" data-toggle="modal" class="btn btn-primary" id=""><i class="fa fa-edit"></i></a>
                </div>      
            </div>
          </div>
          <div class="modal fade" id="editexperience<?php echo($i); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Your Experience</h3>
                      </div>
                      <div class="modal-body">
                        <form action="php_code/education_edit.php"  method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Company Name</label>
                                <input class="form-control" type="text" placeholder="Company Name" name="examname" value="<?php echo $user[1]; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Designation</label>
                                <input class="form-control" type="text" placeholder="Designation" name="institutename"  value="<?php echo $user[2]; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Start Date</label>
                                <input class="form-control" type="text" placeholder="Start Date"  name="boardname"  value="<?php echo $user[3]; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>End Date</label>
                                <input class="form-control" type="number" placeholder="End Date" name="passingyear"  value="<?php echo $user[4]; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Experiences Year</label>
                                <input class="form-control" type="number"  name="gpa"  value="<?php echo $user[9]; ?>">
                                <input class="hidden" type="number"  name="edcode"  value="<?php echo $user[11]; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>
                          </div>
                          
                          
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>

                          </td>
                      </tr>

                    <?php
                      $i++;
                      }
                    ?>
                  </tbody>
              </table>


        </div>
      </div>
    </section>
  </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 


