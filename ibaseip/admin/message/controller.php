<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break; 
	
	case 'delete' :
	doDelete();
	break; 

 
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){

			// $course = $_POST['COURSE'];
			$name = isset($_POST['CLASSCODE']) ? $_POST['CLASSCODE'] : "";
			$messagetext = $_POST['MessageText'];
			$prof = $_SESSION['ACCOUNT_USERNAME'];
 
			$searchname = explode(",",$name) ;
			$count = count($searchname);

			for ($i=0; $i < $count ; $i++) { 
			# code...
			// echo $skills[$i].'<br/>';
				$sql = "INSERT INTO `tblmessage` (`MessageText`,   `ACCOUNT_USERNAME`,FROM_USER,TO_USER) 
											VALUES ('{$messagetext}' ,'{$prof}','{$prof}','{$searchname[$i]}')";	
				$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
			}

			
		 	
 

			message("Message has been sent.", "success");
			redirect("index.php");
	 
		}

	}
 
	function doDelete(){ 
		global $mydb;
		$id = 	$_GET['id'];

		$sql = "DELETE FROM `tblmessage` WHERE MessageID='{$id}' ";
		$mydb->setQuery($sql);
		$cur = $mydb->executeQuery();



		message("Message has been deleted.", "success");
		redirect("index.php");

		
	}

	 
 
?>