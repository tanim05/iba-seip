<?php
    session_start();
  require 'db/connection.php';
  if (isset($_POST['upload'])) {
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_tmp_loc = $_FILES['file']['tmp_name'];
    $file_store = "task_uploaded/".$file_name;

    if (move_uploaded_file($file_tmp_loc, $file_store)) {
    } else {
        
    }
  }
?>