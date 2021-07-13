<!DOCTYPE html>
<html lang="en">
<head>


  <style>

  .name {

    width: 150px;
    float: right;
    height: 50px;
}
    .fa fa-users {

  height: 60px;

    

    }
  }
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title;?></title>

     <!-- Bootstrap Core CSS -->
<link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">


<!-- MetisMenu CSS -->
<link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">

<!-- Timeline CSS -->
<link href="<?php echo web_root; ?>admin/css/timeline.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet">
 
 
<link rel="stylesheet" href="<?php echo web_root; ?>select2/select2.min.css">
<!-- Custom Fonts -->
<link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo web_root; ?>admin/font/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- DataTables CSS -->
<link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">

<link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo web_root; ?>admin/css/jquery-ui.css">

</head>


<?php


admin_confirm_logged_in();
 
   
  ?> 
 
      
<body onload="" >
 
   <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top  " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="<?php echo web_root; ?>admin/index.php" > 
               <!--  <img src="img/iba.png" height="23"> -->
                Institute of Business Administration (IBA) </a>
            </div>
            <!-- /.navbar-header -->

                      
            <ul class="nav navbar-top-links navbar-right"> 
                    <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {
                            # code...
                        ?>
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-plus fa-fw"></i> New  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo web_root; ?>admin/subject/index.php?view=add"><i class="fa fa-book fa-fw"></i> Subject</a>
                        </li>
                        <li><a href="<?php echo web_root; ?>admin/class/index.php?view=add"><i class="fa  fa-building  fa-fw"></i> Student</a>
                        </li>
                    <!--     <li><a href="<?php echo web_root; ?>admin/class/index.php?view=grades"><i class="fa  fa-graduation-cap fa-fw"></i> Grades</a>  -->

                         <li><a href="<?php echo web_root; ?>admin/user/index.php?view=add"><i class="fa fa-user  fa-fw"></i> User</a>
                            </li>
                     <li><a href="<?php echo web_root; ?>admin/user/index.php?view=selfprofile"><i class="fa fa-user  fa-fw"></i> Self Profile</a>
                    </li>                     
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                  <?php }?>
<?php
 $user = New User();
$singleuser = $user->single_user($_SESSION['ACCOUNT_ID']);

?> 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Hi, <?php echo $_SESSION['ACCOUNT_NAME']; ?> <img title="profile image" width="23px" height="17px" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>">  
                            
                    </a>
                    <ul class="dropdown-menu dropdown-acnt">

                          <div class="divpic"> 
                            <a href="" data-target="#usermodal"  data-toggle="modal" > 
                                <img title="profile image" width="70" height="80" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>">  
                            </a>
                          </div> 
                    

                      <div class="divtxt">
                        <li><a href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"> <?php echo $_SESSION['ACCOUNT_NAME']; ?> </a>
                      <li><a title="Edit" href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"  >Edit My Profile</a>
                                    
                        </li>
                          </li>
                           <li><a href="<?php echo web_root; ?>admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a>
                        </li> 
                  </div>
                     
                         
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>  
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                     
                        <li>
                            <a href="<?php echo web_root; ?>admin/index.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>  
                        <?php if ($_SESSION['ACCOUNT_TYPE']=='Dean' || $_SESSION['ACCOUNT_TYPE']=='Administrator') {  ?>
                         <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {  ?>
                        <li>
                             <a href="<?php echo web_root; ?>admin/course/index.php"><i class="fa fa-book fa-fw"></i>Batch </a>
           
                        </li> 
                      <?php } ?>
                        <li>
                             <a href="<?php echo web_root; ?>admin/subject/index.php"><i class="fa fa-book fa-fw"></i>Subjects </a>
           
                        </li> 
                        <?php } ?>

                        <li>
                             <a href="<?php echo web_root; ?>admin/schedule/index.php" ><i class="fa fa-clock-o fa-fw"></i>Class Routine</a>
                        </li> 
                        
                         <?php if ($_SESSION['ACCOUNT_TYPE']=='Teacher' || $_SESSION['ACCOUNT_TYPE']=='Administrator') {  ?>
                        <li>
                             <a href="<?php echo web_root; ?>admin/class/index.php" ><i class="fa fa-group fa-fw"></i>  Student Entry </a>
            
                        </li>
                        <li>
                            <a href="<?php echo web_root; ?>admin/percent/index.php" ><i class="fa fa-pencil fa-fw"></i> Percentage </a>
                          
                        </li> 
                          <li>
                            <a href="<?php echo web_root; ?>admin/exam1/index.php" ><i class="fa fa-pencil fa-fw"></i> Exam </a>
                          
                        </li>   
                          <li>
                            <a href="<?php echo web_root; ?>admin/attendence/index.php" ><i class="fa fa-pencil fa-fw"></i> Attendence Entry</a>
                          
                        </li>                       
                        <li>
                            <a href="<?php echo web_root; ?>admin/attendencereport/index.php" ><i class="fa fa-pencil fa-fw"></i> Attendence Report</a>
                          
                        </li>                                            

                      <?php } ?>
                      
<!--                          <li>
                             <a href="<?php echo web_root; ?>admin/exam/index.php" ><i class="fa fa-list fa-fw"></i>  Quiz </a>
            
                        </li>  
                       
                         <li>
                             <a href="<?php echo web_root; ?>admin/message/index.php" ><i class="fa fa-envelope-o fa-fw"></i>  Leave Message </a>
            
                        </li> --> 

                      <!--    <li>
                            <a href="<?php echo web_root; ?>admin/autonumber/index.php" ><i class="fa fa-downlad fa-fw"></i> Autonumber </a>
                          
                        </li> -->
                       
                       <?php if ($_SESSION['ACCOUNT_TYPE']=='Dean' || $_SESSION['ACCOUNT_TYPE']=='Administrator') {  ?>


                       <?php } ?>
                        <?php if ($_SESSION['ACCOUNT_TYPE']=='Teacher' || $_SESSION['ACCOUNT_TYPE']=='Administrator') {  ?>
                          <li>
                            <a href="<?php echo web_root; ?>admin/report/index.php" ><i class="fa fa-print fa-fw"></i> Print Grades </a>
                          
                        </li> 
                        <?php } ?>
                         <li>
                        <a href="<?php echo web_root; ?>admin/selfprofile/index.php" ><i class="fa fa-user fa-fw"></i>Self Profile</a>
                        </li> 
                        <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {  ?>
                          <li>
                            <a href="<?php echo web_root; ?>admin/user/index.php" ><i class="fa fa-user fa-fw"></i> Users </a>
                          
                        </li>
                      <?php } ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

            <!-- Modal -->
                    <div class="modal fade" id="usermodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Profile Image.</h4>
                                </div>

                                <form action="<?php echo web_root; ?>admin/user/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                            <div class="col-md-12">
                                                <div class="rows">
                                                    <img title="profile image" width="500" height="360" src="<?php echo web_root.'admin/user/'.$singleuser ->USERIMAGE ?>">  
                          
                                                </div>
                                            </div><br/>
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <input type="hidden" name="MIDNO" id="MIDNO" value="<?php echo $_SESSION['ACCOUNT_ID']; ?>">
                                                              <input name="MAX_FILE_SIZE" type=
                                                            "hidden" value="1000000"> <input id=
                                                            "photo" name="photo" type=
                                                            "file">
                                                        </div>

                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type=
                                        "button">Close</button> <button class="btn btn-primary"
                                        name="savephoto" type="submit">Upload Photo</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
  

  <div id="page-wrapper">
                   <?php   check_message();  ?> 
            <div class="row" >
      
                <div class="col-lg-12"> 
                    <p> 
                    <?php 
                    if ($title<>'Home'){
                       echo   ' <a href="'. web_root.'admin/index.php" title="Home" >Home</a>  / 
                        <a href="index.php" title="'. $title.'" >'. $title.'</a> 
                        '.(isset($header) ? ' / '. $header : '') .'</p>'  ;
                    } ?>

 

                  <?php require_once $content; ?>
                    
                </div>
                       <!-- /.col-lg-12 -->

            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>


 <script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script>


<script src="<?php echo web_root; ?>admin/select2/select2.full.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo web_root; ?>admin/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo web_root; ?>admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo web_root; ?>admin/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo web_root; ?>select2/select2.full.min.js"></script>

<script src="<?php echo web_root; ?>admin/slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<!-- <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script> -->



<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.extensions.js"></script> 
 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/meiomask.min.js"></script> 
<script src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>
 
<!-- Custom Theme JavaScript -->
<script src="<?php echo web_root; ?>admin/js/sb-admin-2.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/js/janobe.js"></script> 
<!-- <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/js/calc2.js"></script>  -->

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/js/gradecalc.js"></script> 
 <script src="<?php echo web_root; ?>admin/js/jquery-ui.js"></script> 
 <script src="<?php echo web_root; ?>js/autofunc.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script> 
 

   $(".select2").select2();  

     // $('input[data-mask]').each(function() {
     //    var input = $(this);
     //    input.setMask(input.data('mask'));
     //  });

   //Datemask2 mm/dd/yyyy
    $("#datetime12").inputmask("hh:mm t", {"placeholder": "hh:mm t"});

       //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

      $('#SCHEDTIME').inputmask({
        // mask: "h:s",
        // placeholder: "hh:mm",
        // alias: "datetime",
        // hourFormat: "24"
            mask: "h:s t\\m",
            placeholder: "hh:mm xm",
            alias: "datetime",
            hourFormat: "12"
      });
      $('#SCHEDTIMEto').inputmask({
        // mask: "h:s",
        // placeholder: "hh:mm",
        // alias: "datetime",
        // hourFormat: "24"
            mask: "h:s t\\m",
            placeholder: "hh:mm xm",
            alias: "datetime",
            hourFormat: "12"
      });
    $(document).ready(function() {  
         var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],  
          // "sort": false,
        //ordering start at column 1
        "order": [[ 6, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
 

     
 $(document).ready(function() {
    $('#dash-table').DataTable({
                responsive: true ,
                  "sort": false
        });
 
    });

 $(document).ready(function() {
    $('#dash-table1').DataTable({
                responsive: true ,
                  "sort": false
        });
 
    });


 
$('.date_pickerfrom').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0 

    });


$('.date_pickerto').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0   

    });
 
 
$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0,
     changeMonth: true,
      changeYear: true,
      yearRange: '1945:'+(new Date).getFullYear() 
    });



</script>   
 

  
</script>
</body>
</html>
