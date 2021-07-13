<?php
require_once("../include/initialize.php");

 ?>
  <?php
 if (isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     } 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">
<title>IBA</title>

<!-- Bootstrap core CSS -->

<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
   
 
    <link rel="stylesheet" href="css/css/bootstrap.min.css">  

 
                                     
   <link rel="stylesheet" href="css/templatemo-style.css">                          

 <?php 

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect("login.php");
         
    } else {  
  //it creates a new objects of member
    $user = new User();
    //make use of the static function, and we passed to parameters
    $res = $user::userAuthentication($email, $h_upass);
    if ($res==true) { 
       message("You logon as ".$_SESSION['ACCOUNT_TYPE'].".","success");
       
       $sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
          VALUES (".$_SESSION['ACCOUNT_ID'].",'".date('Y-m-d H:i:s')."','".$_SESSION['ACCOUNT_TYPE']."','Logged in')";
         $mydb->setQuery($sql);
         $mydb->executeQuery();

      if ($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
         redirect(web_root."admin/index.php");
      }elseif($_SESSION['ACCOUNT_TYPE']=='Registrar'){
          redirect(web_root."admin/index.php");

      }else{
           redirect(web_root."admin/login.php");
      }
    }else{
      message("Account does not exist! Please contact Administrator.", "error");
       redirect(web_root."admin/login.php"); 
    }
 }
 } 
 ?> 
</head>

<body>
<?php

include("adminlogin.php");

?>




</body>

</html>