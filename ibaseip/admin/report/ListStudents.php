 
 <form action="" method="POST" >
    <!-- Main content --> 
        <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Computer Science Web Based Class Record System
            <small class="pull-right">Date: <?php echo date('m/d/Y'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
       
      </div>
        
    
        <div class="col-sm-4 invoice-col">
        Class Code
          <address> 
             <select name="CLASSCODE" class="form-control"> 
                <?php 
                  // $mydb->setQuery("SELECT * FROM `tblclass`");
                  // $cur = $mydb->loadResultList();

                  // foreach ($cur as $result) {
                  //   echo '<option >'.$result->CLASSCODE.'</option>';

                  // }
                  $mydb->setQuery("SELECT `CLASSID`,CONCAT(`CLASSCODE`,' | ',`COURSE`,`YEARLEVEL`, `SECTION`) as 'CLASS' FROM `tblclass` WHERE ACCOUNT_USERNAME='".$_SESSION['ACCOUNT_NAME']  ."'" );
                            $cur = $mydb->loadResultList();

                            foreach ($cur as $result) {
                               echo '<option value="'.$result->CLASSID.'" >'.$result->CLASS.' </option>';
                             }
                 ?> 
            </select>
          </address>
        </div>
         <div class="col-sm-2 invoice-col">
        School Year
          <address> 
             <select name="SY" class="form-control"> 
                <?php 
                  $mydb->setQuery("SELECT * FROM `tblclass` GROUP BY SY");
                  $cur = $mydb->loadResultList();

                  foreach ($cur as $result) {
                    echo '<option >'.$result->SY.'</option>';

                  }
                 ?> 
            </select>
          </address>
        </div>
      
        <!-- /.col -->
           <!-- /.col -->
        <div class="col-sm-2 invoice-col"> 
        <br/>
        <address>
        <div class="form-group"> 
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		  </div>
		  
        </address>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- title row -->
  
   <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i  class="fa fa-globe">List Of Students</i>
              <small class="pull-right"> <?php
              if (isset($_POST['CLASSCODE'])) {
                # code...
                        $sql ="SELECT * FROM `tblclass` WHERE `CLASSID`=".$_POST['CLASSCODE'];
                       $mydb->setQuery($sql); 
                       $class = $mydb->loadSingleResult();

                       echo  'Class :' .$class->CLASSCODE . ' | ';
              }
              

               echo (isset($_POST['SY'])) ? 'School Year :' .$_POST['SY']: ''; ?>
                  </small>
          </h2>
        </div> 
      </div> 
   

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12 table-responsive">
          <table class="table table-bordered table-striped" style="font-size:11px" cellspacing="0" >
            <thead>
            <tr> 
              <th>Name</th> 
              <th width="100">Final Average</th> 
              <th width="100">Remarks</th>         
            </tr>
            </thead>
            <tbody>
              <?php
                $tot = 0;
                $rem = "";
                $midtermtot=0;
                $finaltot=0;

               if(isset($_POST['submit'])){ 
           
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
                      $prelim->Total;

                      $sql = "SELECT * FROM `tblgrade` WHERE Grading='Midterm' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $midterm = $mydb->loadSingleResult();
                      $midterm->Total;

                      $sql = "SELECT * FROM `tblgrade` WHERE Grading='Final' AND `CLASSID`='".$result->CLASSID."' AND `IDNO`='".$result->IDNO."'";
                      $mydb->setQuery($sql);
                      $final = $mydb->loadSingleResult();
                      $final->Total;
                       

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
             }
              ?>
            </tbody>
            
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
</form>
    <form action="ListStudentPrint.php" method="POST" target="_blank">
    <input type="hidden" name="CLASSCODE" value="<?php echo (isset($_POST['CLASSCODE'])) ? $_POST['CLASSCODE'] : ''; ?>">
    <input type="hidden" name="SY" value="<?php echo (isset($_POST['SY'])) ? $_POST['SY'] : ''; ?>">
           <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
             <span class="pull-right"> <button type="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
          </div>
          </div> 
    </form>
    <!-- /.content -->
    <div class="clearfix"></div>
 
</div>
<!-- ./wrapper -->
  