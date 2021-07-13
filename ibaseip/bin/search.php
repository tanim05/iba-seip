<?php
 require_once ("include/initialize.php");

//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
 $mydb->setQuery("SELECT * FROM `tblstudent` WHERE  FNAME LIKE '%".$searchTerm."%' OR LNAME LIKE '%".$searchTerm."%' GROUP BY IDNO");
 $res = $mydb->loadResultList();
 foreach ($res as $row ) {
 	# code...
 	  $data[] = $row->FNAME . ' ' . $row->LNAME;
 }
 
//return json data
echo json_encode($data);
?>
 