<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title; ?> | IBA </title>

     <!-- Bootstrap Core CSS -->
 <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>font/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>css/modern.css" rel="stylesheet">
 <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">

 <link href="<?php echo web_root; ?>css/inbox.css" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo web_root; ?>css/jquery.treegrid.css">

  <link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo web_root; ?>admin/css/jquery-ui.css">
 <style type="text/css">


.p {

  color: white;
   margin-bottom: 0;
  margin-top: 0;
  /*padding: 0;*/
  /*float: right;*/
  list-style: none;
}

.p > a { 
  color: white;
  /*text-align: center;*/
  margin-bottom: 0;
  margin: 0;
  padding: 0;
  text-decoration:none;
  background-color:  #0000FF;
}
.p > a:hover ,
.p > a:focus {
   color: black; 
   text-decoration:none;
   background-color: #2d52f2;
}


 
.title-logo  {
    color:black;
    text-decoration:none;
    font-size: 52px;
    font-family: "arial black";
    /*font-style: bold;*/
    padding: 0;
    margin: 0;
    top: 0;
  
  }
.title-logo:hover {
  color: blue; 
  text-decoration:none; 
}
.carttxtactive {
  color: red;
  font-style: bold;
  box-shadow: red;

}
.carttxtactive:hover {
   color: white;
}

.menu  li {
  left: 0px;
  width: 150px;
  padding: 0 3px 0 3px;
  text-align: center;
 
}

.body {

  background-color: #9f9797;

}
</style>
 
</head>

<body  style="Pbackground-color:#df2020"  >

<div class="navbar-fixed-top navbar-TOPsm  col-md-10    col-md-offset-1"    role="navigation">
  <div class="container">
    <div class="navbar-header">
          <h5 class="navbar-menu p" > Application</h5>
         <button type="button" class="navbar-toggle btn-xs p" data-toggle="collapse" data-target=".smMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
    </div>
      <div  class="collapse navbar-collapse  smMenu "> 

        <ul class="navbar-nav p navbar-right tooltip-demo" style="margin-left:-8%;"> 
            <li class="dropdown dropdown-toggle ">
              <a  data-toggle="tooltip" data-placement="left" title="Contact Us"   href="<?php echo web_root.'index.php'  ?>"> 
               <i class="fa fa-phone fa-fw"> </i>  Call Us: 12312 OR Email Us: 123213
              </a>
            </li>
              
            <?php if (isset($_SESSION['IDNO']) ){  

              $student = New Student();
              $singlestudent = $student->single_student($_SESSION['IDNO']);

           ?>
            <li class="dropdown  dropdown-toggle">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-user fa-fw"></i>
                    <?php echo $singlestudent->FNAME. ' ' . $singlestudent->LNAME ; ?>
                  <i class="caret"> </i> 
               </a>

                  <ul class="dropdown-menu dropdown-acnt"> 
                    <!-- <li><a title="Edit" href="<?php echo web_root; ?>takeexam/"  >Take Exam</a></li>  -->
                    <li><a title="Edit" href="<?php echo web_root; ?>index.php?q=profile"  >My Profile</a></li> 
                    <li> <a  href="logout.php">Logout</a></li>  
                  </ul> 
            </li>  
 
          <?php  }  ?>

        </ul>
      </div>

  </div>
</div>


 <!-- <div class="col-md-10 col-md-push-1 " style=" margin-top:-2%">  -->
  <div class="col-md-10 col-md-offset-1 " > 

   <div class="col-md-4">
    <div class="row " style="margin-top: -25px"> 
     <p > 
        <a  class="title-logo"  href="<?php echo web_root; ?>index.php" title="">
        <h1 align="center" > iba</h1>
        </a>
    </p>
       
     </div>   
    </div>
    <div class="col-md-8">
     <div class="row ">
        <?php include 'nnbanner.php'; ?>
     </div>  
    </div>

   </div>

 <div class="navbar navbar-static-top navbar-magbanua col-md-10    col-md-offset-1 "    role="navigation">
    
      <div class="container ">
        <div class="navbar-header"> 
            <div class="navbar-menu p" >Menu</div>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bigMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 

       <!--  <a class="navbar-brand"  href="<?php echo web_root; ?>index.php" title="View Sites">Green Valley College Foundation, Inc.</a> -->
        </div>
<?php
  
  ?>
        <div class="collapse navbar-collapse bigMenu"  > 
          <ul class="nav navbar-nav menu" style="margin-left:-4%;"    > 

          <!-- <ul class="nav navbar-nav" >  -->
            <li  class="dropdown dropdown-toggle <?php echo ($_GET['q']=='') ? "active" : false;?> ">
              <a href="<?php echo web_root.'index.php'; ?>"> Home</a>
            </li>
           
           <li class="dropdown-toggle <?php echo ($_GET['q']=='about') ? "active" : false;?> ">
             <a href="<?php echo web_root.'index.php?q=about';  ?>"> 
               About Us
             </a>
          </li>
          
          </ul>           
        </div> 
        <!--/.navbar-collapse --> 
    </div> 
   <!-- /.nav-collapse --> 
  </div> 
 <!-- /.container -->

<!-- pop up login -->
<?php // include "LogSignModal.php"; ?> 
<!-- end pop up login -->
  
<div class="col-md-10 col-md-push-1 "> 
   <!-- start content --> 
   
  <?php  check_message(); ?> 
  
        <div class="row"> 
          <div id="page-wrapper">
               <?php

          if($title=='Profile'){
                echo ' <div class="row">';

                require_once $content;
                echo ' </div><br/>';
     
              }else{
  // check_message(); ?>


            <div class="row">
              <div class="col-lg-<?php echo isset($_SESSION['IDNO']) ? '12':'8';?>">
                <div class="panel panel-default">
                  <div class="panel-heading" style="background-color:green;color:#fff;">
                  <b><?php   
                  echo  $title . (isset($_GET['category']) ?  '  |  ' .$_GET['category'] : '' )?> </b> 
                  </div>
                  <div class="panel-body">
                 
                    <?php require_once $content; ?>
           
                     
                  </div>
                <!--   <div class="panel-footer">
                      Panel Footer
                  </div> -->
              </div>
          </div> 
           <div class="col-lg-4">
          
                  <?php 
                  require_once "sidebar.php";
                
                    ?>
             </div>
        </div>
        <?php }

?>
       </div>
            <footer class="panel-footer" style="background-color:green;color:#fff;" >
              <p align="left" >&copy; Record Application </p>
           </footer>
      </div>

  </div>  
<!-- end of page  -->


 <!-- modalorder -->
 <div class="modal fade" id="myOrdered">
 </div>
<!-- end -->
 
  <!-- jQuery -->
  <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.date.extensions.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.extensions.js"></script> 

  <!-- Metis Menu Plugin JavaScript --> 
  <!-- DataTables JavaScript -->
  <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>

  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

  <!-- Custom Theme JavaScript --> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script> 
 <script src="<?php echo web_root; ?>admin/js/jquery-ui.js"></script>
 <script src="<?php echo web_root; ?>js/autofunc.js"></script>
 <script src="<?php echo web_root; ?>js/jquery.treegrid.js"></script>
<script> 
$(document).ready(function() {
  $('.tree').treegrid();
});
 
      //Datemask2 mm/dd/yyyy
    
 $(document).ready(function() {
    $('#dash-table').DataTable({
                responsive: true ,
                  "sort": false
        });
 
  });

 function searchtable() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tbl");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
} 


 
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

<script type="text/javascript">


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
 
 
function validatedate(){ 
 
  
    var todaysDate = new Date() ;

    var txtime =  document.getElementById('ftime').value
    // var myDate = new Date(dateme); 

    var tprice = document.getElementById('alltot').value 
    var pmethod = document.getElementById('paymethod').value
    var onum = document.getElementById('ORDERNUMBER').value

     
     var mytime = parseInt(txtime)  ;
     var todaytime =  todaysDate.getHours()  ;
       if (txtime==""){
     alert("You must set the time enable to submit the order.")
     }else 
     if (mytime<todaytime){ 
        alert("Selected time is invalid. Set another time.")
      }else{
        window.location = "index.php?page=7&price="+tprice+"&time="+txtime+"&paymethod="+pmethod+"&ordernumber="+onum; 
      }
  }
</script>  


    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
 


  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
  

       
  </script>     
 <!-- method for saving and retrieving data without refreshing the page. -->
<script type="text/javascript" > 

$(document).on("click", "#load", function () {
 /* load all variables */
  
   
   var depid = $(this).data("id");
   
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "menu1.php",    
        dataType: "text",   //expect html to be returned  
        data:{id:depid},               
        success: function(data){                    
         $('#loaddata'+ depid).html(data); 
          

        }

    }); 

  
}); 
</script>
<script type="text/javascript" > 

// $(document).on("keyup", "#PartialPayment", function () {
//  /* load all variables */
//  //alert("goooog")
   
//    var totsem = document.getElementById("totsem").value;
//    var partial = document.getElementById("PartialPayment").value;
//    var bal;

//    document.getElementById("partial").value = partial;

//    bal = parseFloat(totsem) - parseFloat(partial);

//    document.getElementById("Balance").innerHTML = bal.toFixed(2);
//    document.getElementById("txtBalance").innerHTML = bal.toFixed(2);
   
// }); 
  </script>
  <script type="text/javascript" > 

// $(document).on("click", "#btnpay", function () {
//  /* load all variables */
//  //alert("goooog")
   
//  var partial = document.getElementById("PartialPayment").value;
 
// Session.set("PartialPayment", partial);
 
// // retreive a session value/object
// Session.get("PartialPayment");

// // alert(Session.get("PartialPayment"));

//  if (partial >= 1600) {
//   return true;
//  }else{


//   alert("invalid payment. Minimum of 1600 pesos in-order to enroll.");
//   return false;
//  };

//  // store a session value/object

 
// // clear all session data
// // Session.clear();
  
// // dump session data
// // Session.dump();

   
// }); 








</script>
</body>
</html>