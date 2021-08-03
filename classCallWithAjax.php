<?php

$course = $_POST['courseVal'];
// $course = 1;

$conn = mysqli_connect('localhost','root','', 'ibaseip') or die('Error Encountered');
$result = mysqli_query($conn,"SELECT * FROM tblclass WHERE COURSE = '".$course."'"); //  where course = " .$course."
$class = array();
$classDropdown = '<option value="">Select Option</option>';
while($row = mysqli_fetch_array($result))
{
    // $class[] = $row[];
    // echo $row[0];
    $classDropdown .= '<option value="'.$row['CLASSID'].'">'.$row['CLASSCODE'].'</option>';
}
mysqli_close($conn);
echo $classDropdown;