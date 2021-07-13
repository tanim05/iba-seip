 <?php 
   if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  // $autonum = New Autonumber();
  // $res = $autonum->single_autonumber(2);

$id = isset($_GET['id']) ? $_GET['id'] :'';

$sql ="SELECT count(*) as 'TOTALTEST' FROM `tblexams` WHERE `QUIZID`={$id}";
$mydb->setQuery($sql);
$tottest = $mydb->loadSingleResult();


$sql ="SELECT * FROM `tblquiz` WHERE `QUIZID`={$id}" ;
$mydb->setQuery($sql);
$res = $mydb->loadSingleResult();


if ($tottest->TOTALTEST < $res->NOOFQUESTION) {
  # code...
  $btnenable = '<a href="index.php?view=addquestion&id='.$id.'" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a>';
}else {
   $btnenable ="";
}

   ?> 
   <div class="row" >
     <div class="col-md-6">Subject: <span style="font-size: 13px;font-weight: bold;"><?php echo $res->SUBJ_CODE ?></span></div>
     <div class="col-md-6">Quiz Name: <span style="font-size: 13px;font-weight: bold;"><?php echo $res->QUIZNAME ?></div>
     <div class="col-md-6">No. of Question: <span style="font-size: 13px;font-weight: bold;"><?php echo $res->NOOFQUESTION ?></span></div>
     <div class="col-md-6">Term: <span style="font-size: 13px;font-weight: bold;"><?php echo $res->QUIZTERM ?></span></div>
   </div> 
<div class="row">
      <div class="col-lg-12">
         <div class="col-lg-6">
            <h1 class="page-header">List of Question <?php echo $btnenable; ?></h1>
          </div> 
          </div>
          <!-- /.col-lg-12 -->
       </div>
          <form action="controller.php?action=delete" Method="POST">  
            <div class="table-responsive">      
        <table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
        
          <thead>
            <tr> 
              <th width="400"> 
               Question</th> 
              <th>Answer</th> 
              <th>Quiz Type</th> 
              <th width="13%" >Action</th> 
            </tr> 
          </thead> 
          <tbody>
            <?php  
  
             $mydb->setQuery("SELECT * FROM `tblexams`   WHERE  QUIZID = {$id} AND TEACHER='".$_SESSION['ACCOUNT_USERNAME']."'");

             $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              
               
             echo '<tr>';
             // echo '<td width="5%" align="center"></td>';
             echo '<td>' . $result->EXAM_QUESTION.'</a></td>';
             echo '<td>'. $result->EXAM_ANSWER.'</td>';   
             echo '<td>'. $result->TYPE.'</td>';   
             echo '<td align="center" >  
                    <a title="Remove" href="controller.php?action=delete&id='.$result->EXAMID.'&quizid='.$id.'"  class="btn btn-danger btn-xs  ">Remove <span class="fa fa-trash fw-fa"></span></a>
                    </td>'; 
             echo '</tr>';
           } 
            ?>
          </tbody>
          
        </table> 
      </div>
        </form>
  

</div> <!---End of container-->