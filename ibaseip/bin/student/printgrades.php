<?php
require_once("../include/initialize.php");
  if(!isset($_SESSION['IDNO'])){
  redirect(web_root."index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>   </title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo web_root; ?>admin/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
 
   <link href="<?php echo web_root; ?>admin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>admin/font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo web_root; ?>css/jquery.treegrid.css">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <style type="text/css">
    .box {
      width: 20%;
      height: 20%;
    }
    .box img {
      width: 100%;
      height: 100%;

    }
    .title_print{ 
      margin: 0px;
      margin-top: -25%;
      padding: 0px;
    }
  </style>
  <div class="col-lg-2 box" ><img src="<?php echo web_root; ?>img/1316045790744496533.jpg" ></div>
  <div class="col-lg-10 title_print" >
    <p style="text-align: center;">Republic of the Philippines</p>
    <p style="text-align: center;">City of Taguig</p>
    <h3 style="text-align: center;">Taguig City University</h3>
    <p style="text-align: center;">General Santos Avenue, Central Bicutan, Taguig CityPage </p>  
    <p style="text-align: center;">BACHELOR OF SCIENCE IN COMPUTER SCIENCE </p>
  </div>
  <br/>
  <section class="invoice">
  
    <h5 align="center">Grades</h5></div>
     <table id="dash-table" class="tree table table-striped table-bordered table-hover table-responsive"  cellspacing="0">
        
          <thead>
            <tr>  
            <th colspan="2">Class Code</th>
            <th colspan="5" > Subject</th> 
            <th colspan="2" >Average</th>  
            <th>Remarks</th> 
            </tr>  
          </thead> 
          <tbody>
            <?php  
            $tree_count =0;
            $totalave =0;
            // `GRADE_ID`, `IDNO`, `SUBJ_ID`, `INST_ID`, `SYID`,
            //  `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `DAY`, `G_TIME`, `ROOM`, `REMARKS`, `COMMENT`

            $sql = "SELECT * FROM `tblgrade` g, tblsubject s WHERE  g.`CLASSCODE`=s.`SUBJ_CODE`  and `IDNO`='".$_SESSION['IDNO']."' GROUP BY CLASSID ";
              $mydb->setQuery($sql);

              $cur = $mydb->loadResultList();

            foreach ($cur as $result) {



            $sql = "SELECT * FROM `tblgrade` WHERE Grading='Prelim' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $prelim = $mydb->loadSingleResult();
                      $prelim->Total;

                      $sql = "SELECT * FROM `tblgrade` WHERE Grading='Midterm' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $midterm = $mydb->loadSingleResult();
                      $midterm->Total;

                      $sql = "SELECT * FROM `tblgrade` WHERE Grading='Final' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $final = $mydb->loadSingleResult();
                      $final->Total;
                       

                        $sql ="SELECT * FROM `tblpercent` ";
                        $mydb->setQuery($sql);
                        $percent = $mydb->loadSingleResult();
                 
                        $totprelim = $prelim->Total * $percent->Prelim / 100;
                        $totmidterm = $midterm->Total * $percent->Midterm / 100;
                        $totfinal = $final->Total * $percent->Final / 100;
                        $tot = $totprelim + $totmidterm + $totfinal;
               
           
            if ($tot >= 75) {
            # code...
            $rem = "Passed";
            }else{
            $rem = "Failed";
            }

            $tree_count += 1;

              echo '<tr class="treegrid-'.$tree_count.'">';   
              echo '<td colspan="2">'. $result->SUBJ_CODE.'</td>';
              echo '<td colspan="5">'. $result->SUBJ_DESCRIPTION.'</td>';
              echo '<td colspan="2">'. $tot.'</td>';  
              echo '<td>'. $rem.'</td>';  
              echo '</tr>'; 
              echo  '<tr class=" treegrid-parent-'.$tree_count.'">
                        <td>Attendance</td> 
                        <td>Quiz</td> 
                        <td>Lecture</td> 
                        <td>Laboratory</td> 
                        <td>Activity</td> 
                        <td>Assignment</td> 
                        <td>LongTest</td> 
                        <td>Exam</td> 
                        <td>Total</td> 
                        <td>Grading</td> 
                  </tr>'; 

            $sql = "SELECT * FROM `tblgrade` WHERE `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
            $mydb->setQuery($sql);
            $grade = $mydb->loadResultList();

            foreach ($grade as $res) {
              # code...
              echo  '<tr class=" treegrid-parent-'.$tree_count.'">
                        <td>'.$res->Attendance.'</td> 
                        <td>'.$res->Quiz.'</td> 
                        <td>'.$res->Lecture.'</td> 
                        <td>'.$res->Laboratory.'</td> 
                        <td>'.$res->Activity.'</td> 
                        <td>'.$res->Assignment.'</td> 
                        <td>'.$res->LongTest.'</td> 
                        <td>'.$res->Exam.'</td> 
                        <td>'.$res->Total.'</td> 
                        <td>'.$res->Grading.'</td> 
                     </tr>';  
                   
            }
            
            } 
            ?>
          </tbody>
          
        </table>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
  <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>
 <script src="<?php echo web_root; ?>js/jquery.treegrid.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
  $('.tree').treegrid();
});
</script>