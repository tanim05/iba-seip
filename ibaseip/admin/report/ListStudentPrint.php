<?php
require_once("../../include/initialize.php");
  if(!isset($_SESSION['ACCOUNT_ID'])){
  redirect(web_root."admin/index.php");
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
    <p style="text-align: center;">Undergraduate School</p>
    <p style="text-align: center;"><?php echo isset($_POST['SY']) ? $_POST['SY'] : "";?></p>
    <p style="text-align: center;">BACHELOR OF SCIENCE IN COMPUTER SCIENCE </p>
  </div>
  
  <section class="invoice">
  
    <h5 align="center"><?php 
if (isset($_POST['CLASSCODE'])) {
  # code...
  $sql ="SELECT * FROM `tblclass` WHERE `CLASSID`=".$_POST['CLASSCODE'];
   $mydb->setQuery($sql); 
   $class = $mydb->loadSingleResult();

   echo "Class Code " .$class->CLASSCODE;
}
   ?></h5></div> 
     <!-- Table row --> 
            <table class="table table-bordered table-striped" style="font-size:11px" cellspacing="0" >
            <thead>
            <tr> 
              <th>Students</th> 
              <th width="100">Final Average</th> 
              <th width="100">Remarks</th>         
            </tr>
            </thead>
            <tbody>
              <?php
                $tot = 0;
                $totprelim =0;
                $totmidterm=0;
                $totfinal=0;
                $rem = ""; 
                $sql =" SELECT * FROM `tblgrade` g, `tblstudent` s,tblclass c WHERE s.IDNO=g.IDNO AND s.CLASSID=g.CLASSID AND s.CLASSID=c.CLASSID AND c.CLASSID = " . $_POST['CLASSCODE'] ." AND SY = '".$_POST['SY']."' GROUP BY s.IDNO";

                $mydb->setQuery($sql); 
                $res = $mydb->executeQuery();
                $row_count = $mydb->num_rows($res);
                  if ($row_count > 0){

                    $cur = $mydb->loadResultList(); 
                    foreach ($cur as $result) { 

                      $sql = "SELECT * FROM `tblgrade` WHERE Grading='Prelim' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $prelim = $mydb->loadSingleResult(); 

                      $sql = "SELECT * FROM `tblgrade` WHERE Grading='Midterm' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $midterm = $mydb->loadSingleResult(); 

                      $sql = "SELECT * FROM `tblgrade` WHERE Grading='Final' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $final = $mydb->loadSingleResult(); 
                       

                        $sql ="SELECT `Prelim`, `Midterm`, `Final` FROM `tblpercent` ";
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
              ?>
                      <tr>  
                        <td><?php echo $result->FNAME . ' ' .  $result->MNAME . '  ' .  $result->LNAME;?></td>   
                        <td><?php echo $tot; ?></td>  
                        <td><?php echo $rem; ?></td>
                      </tr>
              <?php  
                       
                        
                    } 
                     
                  } 
              ?>
            </tbody>
            
          </table>
        <!-- /.col --> 
      <!-- /.row -->
  
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
