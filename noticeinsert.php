<?php
    $conn = mysqli_connect('localhost','root','', 'ibaseip') or die('Error Encountered');
	// class Notice{
        if (isset($_POST['submit']) ) {
            
            if (isset($_POST['upload']))
            {
                $uploaddir = 'notice/';
                print_r($_FILES);
                $index=$_POST['title'];
                $uploadfile = $uploaddir .$index.'.jpg';
                $file_tmp_loc = $_FILES['upload']['tmp_name'];
                $file_name = $_FILES['upload']['name'];
                $file_store = "task_uploaded/".$file_name;
                
                $title = $_POST['title'];
                $details = $_POST['details'];
                $author = $_POST['author'];
                $date =$_POST['date'];
                $filename= $_POST['file']['name'];
               
                if (move_uploaded_file($file_tmp_loc, $uploadfile)) {
            
                     $query = "INSERT into notice (remarks,details,author,date,picture) values('$title','$details','$author','$date','$filename');";
                     $result = mysqli_query($conn, $query);
                    echo "File is valid, and was successfully uploaded.\n";
                } else {
                    // $query = "INSERT into notice (remarks,details,author,date) values('$title','$details','$author','$date');";
                    // $result = mysqli_query($conn, $query);
                    echo "File uploaded not success.\n";
                }
            }else{
                echo "out from file";
            }
         } else echo "Failed";    
    // header("location:notice-board.php");
?>