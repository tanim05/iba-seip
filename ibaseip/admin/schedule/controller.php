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
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;

 
	}
   
	function doInsert(){
		if(isset($_POST['save'])){
 // `CLASSCODE`, `SUBJ_ID`, `SUBJ_CODE`, `COURSE`, `YEARLEVEL`, `SY`, `SCHEDDAY`, `SCHEDTIME`, `ROOM`, `ACCOUNT_USERNAME`
		if ($_POST['SCHEDTIME'] == "" OR $_POST['SCHEDDAY'] == ""   OR $_POST['ROOM'] == "" ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$sched = New StudentClass(); 
			$sched->CLASSCODE 			= $_POST['CLASSCODE'];
			// $sched->SUBJ_ID				= $_POST['SUBJ_ID']; 
			// $sched->SUBJ_CODE			= $_POST['CLASSCODE'];
			$sched->SEMESTER 			= $_POST['SEMESTER'];
			$sched->SY					= $_POST['SY']; 
			$sched->COURSE				= $_POST['COURSE']; 
			$sched->YEARLEVEL			= $_POST['YEARLEVEL']; 
			$sched->SECTION				= $_POST['SECTION']; 
			$sched->SCHEDTIME			= $_POST['SCHEDTIME']; 
			$sched->SCHEDTIMEto			= $_POST['SCHEDTIMEto']; 
			$sched->SCHEDDAY			= $_POST['SCHEDDAY']; 
			$sched->ROOM				= $_POST['ROOM']; 
			$sched->ACCOUNT_USERNAME	= $_POST['TEACHER']; 
			$sched->create();

						  
			message("New class schedule created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){ 
			$sched = New StudentClass(); 
			$sched->CLASSCODE 			= $_POST['CLASSCODE']; 
			$sched->SEMESTER 			= $_POST['SEMESTER'];
			$sched->SY					= $_POST['SY']; 
			$sched->COURSE				= $_POST['COURSE']; 
			$sched->YEARLEVEL			= $_POST['YEARLEVEL'];  
			$sched->SECTION				= $_POST['SECTION']; 
			$sched->SCHEDTIME			= $_POST['SCHEDTIME']; 
			$sched->SCHEDTIMEto			= $_POST['SCHEDTIMEto']; 
			$sched->SCHEDDAY			= $_POST['SCHEDDAY']; 
			$sched->ROOM				= $_POST['ROOM'];  
			$sched->ACCOUNT_USERNAME	= $_POST['TEACHER']; 
			$sched->update($_POST['CLASSID']);

			  message("Class shedule has been updated!", "success");
			  redirect("index.php");
		}
	}


	function doDelete(){
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","info");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$subj = New User();
		// 	$subj->delete($id[$i]);

		
				$id = 	$_GET['id'];

				$sched = New StudentClass();
	 		 	$sched->delete($id);
			 
			message("Schedule already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}
 
 
?>