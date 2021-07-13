<?php
require_once ("../include/initialize.php");
if(!isset($_SESSION['IDNO'])){
	redirect(web_root.'index.php');

}
 $quizid = isset($_GET['id']) ? $_GET['id'] :"";

  $sql = "SELECT * FROM tblquiz WHERE QUIZID='".$quizid."'"; 
  $mydb->setQuery($sql);
  $quiz = $mydb->loadSingleResult();

  $CLASSID =$quiz->CLASSID;
  $QUIZDATETIME =$quiz->QUIZDATETIME;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Take Quiz | Computer Science Web Based Class Record System</title>

<!-- Bootstrap Core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo web_root; ?>font/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- DataTables CSS -->
<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<link href="<?php echo web_root; ?>css/modern.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">

<link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">
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
    font-size: 42px;
    font-family: "broadway";
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
 
  .col-time {
    width: 10%;
    border: 1px solid blue;
    color:#fff;
    min-height: 50px;
    text-align: center;
    padding: 20px 0px; 
    position: fixed;
    margin-left: 65%;
    margin-top: -90px;
    background-color: blue; 
    z-index: -999999px;

  } 
  @media only screen and (max-width: 786px){
     .col-time {
    width: 15%;
    border: 1px solid blue; 
    min-height: 50px;
    text-align: center;
    padding: 20px 5px;
    margin-top: -100px;
    /*float: right;*/
    position: fixed;
    margin-left: 75%;
     background-color: blue;
     color:#fff;

  } 
  }
</style>
 
</head>

<body style="Pbackground-color:#e0e4e5" >

<div class="navbar-fixed-top navbar-TOPsm  col-md-10    col-md-offset-1"    role="navigation">
  <div class="container">
    <div class="navbar-header">
          <h5 class="navbar-menu p" >Computer Science Web Based Class Record System</h5>
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
               <i class="fa fa-phone fa-fw"> </i>  Call Us: (083) 228-9722 OR Email Us: Admission@greenvalleyph.com
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
                    <!-- <li><a title="Edit" href="<?php echo web_root; ?>takeexam"  >Take Exam</a></li>  -->
                    <li><a title="Edit" href="<?php echo web_root; ?>index.php?q=profile"  >My Profile</a></li> 
                    <li> <a  href="../logout.php">Logout</a></li>  
                  </ul> 
            </li>  
 
          <?php  }  ?>

        </ul>
      </div>

  </div>
</div>

  
<div class="col-md-10 col-md-push-1 "> 
   <!-- start content --> 
   <div class="container"> 
   	<p style="text-align: center;margin-top: -10px" class="page-header">Computer Science Web Based Class Record System </p>
      <div class="col-lg-12">
       <div class="col-md-6">Subject: <span style="font-size: 13px;font-weight: bold;"><?php echo $quiz->SUBJ_CODE ?></span></div>
       <div class="col-md-6">Quiz Name: <span style="font-size: 13px;font-weight: bold;"><?php echo $quiz->QUIZNAME ?></div>
       <div class="col-md-6">No. of Question: <span style="font-size: 13px;font-weight: bold;"><?php echo $quiz->NOOFQUESTION ?></span></div>
       <div class="col-md-6">Term: <span style="font-size: 13px;font-weight: bold;"><?php echo $quiz->QUIZTERM ?></span></div>
     </div> 
   </div> 
   <hr/>
   <div class="row">

   	<?php
   $sql = "SELECT * FROM `tblstudentexams` WHERE  IDNO='".$_SESSION['IDNO']."' AND QUIZID='{$quizid}' AND SUBMITTED=1";
    $mydb->setQuery($sql);
    $cur = $mydb->executeQuery();

    if($cur==false){
     die(mysql_error());
    }

    $row_count = $mydb->num_rows($cur);//get the number of count
     if ($row_count > 0){  
       include "previewquiz.php"; 
     }else{ 
      include "takeaquiz.php"; 
     } 

     

     ?>
 
            <footer class="panel-footer" style="background-color:blue;color:#fff;" >
              <p align="left" >&copy; Computer Science Web Based Class Record System</p>
           </footer>
      </div>

  </div>  
<!-- end of page  -->


  
 
<!-- jQuery -->
<script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
 
 
 <!-- Custom Theme JavaScript --> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script> 
<script>
      //Datemask2 mm/dd/yyyy
    
$(document).on("click",".chkbox",function(){

  var examid = $(this).data("id");
  var quizid = $("#QUIZID").val();
  var classcode = document.getElementById("CLASSCODE").value;
  var idno = document.getElementById("IDNO").value;
  var examterm = document.getElementById("EXAM_TERM").value;
  var prof = document.getElementById("prof").value;
  // alert(examterm);
  // alert(classcode);
  // alert(idno)
  // alert(prof);

  var choiceA = document.getElementById("CHOICE_A"+examid);
  var choiceB = document.getElementById("CHOICE_B"+examid)
  var choiceC = document.getElementById("CHOICE_C"+examid)
  var choiceD = document.getElementById("CHOICE_D"+examid)
  var answers = "";

  if (choiceA.checked==true) {
    choiceB.checked = false;
    choiceC.checked = false;
    choiceD.checked = false;
    // alert(choiceA.value) 
    answers = choiceA.value;

  }

  if (choiceB.checked==true) {
    choiceA.checked = false;
    choiceC.checked = false;
    choiceD.checked = false;
    // alert(choiceB.value)
    answers = choiceB.value;
  }
  if (choiceC.checked==true) {
    choiceA.checked = false;
    choiceB.checked = false;
    choiceD.checked = false;
    // alert(choiceC.value)
    answers = choiceC.value;
  }
  if (choiceD.checked==true) {
    choiceA.checked = false;
    choiceB.checked = false;
    choiceC.checked = false;
    // alert(choiceD.value)
    answers = choiceD.value;
  }

// alert(answers);

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "data.php?IDNO="+idno+"&CLASSCODE="+classcode+"&EXAM_TERM="+examterm+"&prof="+prof+"&quizid="+quizid,   
        // url:"data.php",
        dataType: "text",   //expect html to be returned  
        data:{EXAMID:examid,ANSWER:answers},               
        success: function(data){                
           // alert(data);

        }

    }); 
});

$(document).on("focusout",".ans_identification",function(){
  var examid = $(this).data("id");
  var answer_identification = document.getElementById("ans_identification"+examid).value; 
  var quizid = $("#QUIZID").val();
  var classcode = document.getElementById("CLASSCODE").value;
  var idno = document.getElementById("IDNO").value;
  var examterm = document.getElementById("EXAM_TERM").value;
  var prof = document.getElementById("prof").value; 

    $.ajax({
      type:"POST",
      url : "processAnswer.php?IDNO="+idno+"&CLASSCODE="+classcode+"&EXAM_TERM="+examterm+"&prof="+prof+"&quizid="+quizid,   
      dataType : "text",
      data :{EXAMID:examid,E_ANSWER:answer_identification},
      success : function(data){
        // alert(data);
      }
    });

});

$(document).on("change",".ans_TrueFalse",function(){

  var examid = $(this).data("id");
  var answer_TrueFalse = document.getElementById("ans_TrueFalse"+examid).value; 
  var quizid = $("#QUIZID").val();
  var classcode = document.getElementById("CLASSCODE").value;
  var idno = document.getElementById("IDNO").value;
  var examterm = document.getElementById("EXAM_TERM").value;
  var prof = document.getElementById("prof").value; 

  // alert(answer_TrueFalse)

    $.ajax({
      type:"POST",
      url : "processAnswer.php?IDNO="+idno+"&CLASSCODE="+classcode+"&EXAM_TERM="+examterm+"&prof="+prof+"&quizid="+quizid,   
      dataType : "text",
      data :{EXAMID:examid,E_ANSWER:answer_TrueFalse},
      success : function(data){
        // alert(data);
      }
    });

});


$(document).on("change",".ans_MatchingType",function(){

  var examid = $(this).data("id");
  var answer_MatchingType = document.getElementById("ans_MatchingType"+examid).value; 
  var quizid = $("#QUIZID").val();
  var classcode = document.getElementById("CLASSCODE").value;
  var idno = document.getElementById("IDNO").value;
  var examterm = document.getElementById("EXAM_TERM").value;
  var prof = document.getElementById("prof").value; 

  // alert(answer_MatchingType)

    $.ajax({
      type:"POST",
      url : "processAnswer.php?IDNO="+idno+"&CLASSCODE="+classcode+"&EXAM_TERM="+examterm+"&prof="+prof+"&quizid="+quizid,   
      dataType : "text",
      data :{EXAMID:examid,E_ANSWER:answer_MatchingType},
      success : function(data){
        // alert(data);
      }
    });

});
 
var take_quiz = document.getElementById("take_quiz").value; 
if (take_quiz=="Yes") {
// Set the date we're counting down to
var countDownDate = new Date();
countDownDate.setMinutes(countDownDate.getMinutes() + <?php echo $QUIZDATETIME; ?>);

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("countdown_tiner").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
       // document.getElementById("countdown_tiner").innerHTML =   minutes + "m " + seconds + "s ";
    // If the count down is over, write some text 
    if (distance < 0) { 
        clearInterval(x);
        document.getElementById("countdown_tiner").innerHTML = "EXPIRED";
        // get the value
        var IDNO = document.getElementById("IDNO").value;
        var CLASSCODE = document.getElementById("CLASSCODE").value;
        var EXAM_TERM = document.getElementById("EXAM_TERM").value;
        var prof = document.getElementById("prof").value;
        var QUIZID = document.getElementById("QUIZID").value;
        var CLASSID = document.getElementById("CLASSID").value;
        var url = "processquiz.php?IDNO="+IDNO+"&CLASSCODE="+CLASSCODE+"&EXAM_TERM="+EXAM_TERM+"&prof="+prof+"&QUIZID="+QUIZID+"&CLASSID="+CLASSID+"&time=yes";

        window.location = url;

    }
}, 1000);

}

  // $idno = $_POST['IDNO'];
 //  $classcode = $_POST['CLASSCODE'];
 //  $termexam  = $_POST['EXAM_TERM'];
 //  $prof = $_POST['prof'];
 //  $quizid = $_POST['QUIZID']; 
 //  $CLASSID = $_POST['CLASSID'];

  // var IDNO = document.getElementById("").value;
  // var CLASSCODE = document.getElementById("").value;
  // var EXAM_TERM = document.getElementById("").value;
  // var prof = document.getElementById("").value;
  // var QUIZID = document.getElementById("").value;
  // var CLASSID = document.getElementById("").value;

  // if (true) {}

</script>

 
</body>
</html>