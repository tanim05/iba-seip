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


		if ($_POST['intake_id'] == "" OR $_POST['intake_name'] == ""  ) {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$intake = New Intake();
			// $subj->USERID 		= $_POST['user_id'];
			$intake->intake_id 		= $_POST['intake_id'];
			$intake->intake_name	= $_POST['intake_name']; 
			// $subj->UNIT				= $_POST['UNIT'];
			// $subj->PRE_REQUISITE 	= $_POST['PRE_REQUISITE'];
			// $subj->COURSE_ID		= $_POST['COURSE_ID']; 
			// $subj->AY				= $_POST['AY']; 
			// $subj->SEMESTER			= $_POST['SEMESTER'];
			$intake->create();

						// $autonum = New Autonumber();  `SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`
						// $autonum->auto_update(2);

			message("New [". $_POST['intake_name'] ."] created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

			$intake = New Intake(); 
			$intake->intake_id 		= $_POST['intake_id'];
			$intake->intake_name	= $_POST['intake_name']; 
			// $subj->UNIT				= $_POST['UNIT'];
			// $subj->PRE_REQUISITE 	= $_POST['PRE_REQUISITE'];
			// $subj->COURSE_ID		= $_POST['COURSE_ID']; 
			// $subj->AY				= $_POST['AY']; 
			// $subj->SEMESTER			= $_POST['SEMESTER'];
			$intake->update($_POST['intake_id']);

			  message("[". $_POST['intake_name'] ."] has been updated!", "success");
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

				$intake = New Intake();
	 		 	$intake->delete($id);
			 
			message("Intake already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}
 
 
?>