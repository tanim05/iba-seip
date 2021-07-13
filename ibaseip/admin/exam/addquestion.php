  <?php 
   if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  // $autonum = New Autonumber();
  // $res = $autonum->single_autonumber(2);

$id = isset($_GET['id']) ? $_GET['id'] :'';
$sql ="SELECT * FROM `tblquiz` WHERE `QUIZID`={$id}" ;
$mydb->setQuery($sql);
$res = $mydb->loadSingleResult();

   ?> 
           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Add New Question for the Quiz <a href="index.php?view=question&id=<?php echo $id ?>" class="btn btn-primary btn-xs  ">  <i class="fa fa-list fw-fa"></i> List</a></h1>
          </div> 
       </div> 
       
 
              <ul class="nav nav-tabs">
                <li  class="active"><a href="#mutiplechoice"   data-toggle="tab">Multiple Choice</a></li>
                <li ><a href="#identification"   data-toggle="tab" >Identification </a></li>
                <li ><a href="#truefalse"   data-toggle="tab">True or False</a></li>
                <li><a href="#matchingtype"   data-toggle="tab" >Matching Type</a></li> 
              </ul>  
              <div class="tab-content">
                <div class="tab-pane active" id="mutiplechoice">    
                  <?php include("multiplechoice.php"); ?>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane fade" id="identification"> 
                  <?php include("identification.php"); ?> 
                </div>
                <!-- /.tab-pane --> 
                <div class="tab-pane fade" id="truefalse"> 
                  <?php include("truefalse.php"); ?>  
                </div>
                <!-- /.tab-pane --> 
                <div class="tab-pane" id="matchingtype">  
                  <?php include("matchingtype.php"); ?> 
                </div> 
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content --> 
      