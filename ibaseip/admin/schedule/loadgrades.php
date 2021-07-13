 <?php 
    require_once ("../../include/initialize.php");
  global $mydb;
      $total = 0;
      $gradeid = $_POST['gradeid'];

      $sql ="SELECT * FROM `tblpercent` ";
      $mydb->setQuery($sql);
      $percent = $mydb->loadSingleResult();

    if ($_GET['grading']=='Prelim') {
           # code... 
              $grades = new Grade(); 

            if (isset($_POST['Attendance'])) {
              # code... 
                $grades->Attendance =      $_POST['Attendance']; 
            }

            if (isset($_POST['Quiz'])) {
              # code... 
                $grades->Quiz =      $_POST['Quiz']; 
            }

            if (isset($_POST['Lecture'])) {
              # code... 
                $grades->Lecture =      $_POST['Lecture']; 
            }

            if (isset($_POST['Laboratory'])) {
              # code... 
                $grades->Laboratory =      $_POST['Laboratory']; 
            }

            if (isset($_POST['Activity'])) {
              # code... 
                $grades->Activity =      $_POST['Activity']; 
            }

            if (isset($_POST['Assignment'])) {
              # code... 
                $grades->Assignment =      $_POST['Assignment']; 
            }

            if (isset($_POST['LongTest'])) {
              # code... 
                $grades->LongTest =      $_POST['LongTest']; 
            }

            if (isset($_POST['Exam'])) {
              # code... 
                $grades->Exam =      $_POST['Exam']; 
            }
           

            $grades->update_grades($gradeid,'Prelim');
  
            $sql = "SELECT * FROM tblgrade WHERE GRADEID = " . $gradeid;
            $mydb->setQuery($sql);
            $g = $mydb->loadSingleResult(); 

            $tot_Attendance = doubleval($g->Attendance) * $percent->Attendance / 100;
            $tot_Quiz = doubleval($g->Quiz) * $percent->Quiz / 100;
            $tot_Lecture = doubleval($g->Lecture) * $percent->Lecture / 100;
            $tot_Laboratory = doubleval($g->Laboratory) * $percent->Laboratory / 100;
            $tot_Activity = doubleval($g->Activity) * $percent->Activity / 100;
            $tot_Assignment = doubleval($g->Assignment) * $percent->Assignments / 100;
            $tot_LongTest = doubleval($g->LongTest) * $percent->LongTest / 100;
            $tot_Exam = doubleval($g->Exam) * $percent->Exam / 100;

            // $total = doubleval($g->Attendance) + doubleval($g->Quiz) + doubleval($g->Lecture) + doubleval($g->Laboratory) + doubleval($g->Activity) + doubleval($g->Assignment) + doubleval($g->LongTest) + doubleval($g->Exam);
     
           

            $total = $tot_Attendance + $tot_Quiz + $tot_Lecture + $tot_Laboratory + $tot_Activity + $tot_Assignment + $tot_LongTest + $tot_Exam; 

            $grades = new Grade(); 
            $grades->Total =    $total;
            $grades->update_grades($gradeid,'Prelim');


             echo  $total;


   }
      
    if ($_GET['grading']=='Midterm') {
           # code... 
              $grades = new Grade(); 

            if (isset($_POST['Attendance'])) {
              # code... 
                $grades->Attendance =      $_POST['Attendance']; 
            }

            if (isset($_POST['Quiz'])) {
              # code... 
                $grades->Quiz =      $_POST['Quiz']; 
            }

            if (isset($_POST['Lecture'])) {
              # code... 
                $grades->Lecture =      $_POST['Lecture']; 
            }

            if (isset($_POST['Laboratory'])) {
              # code... 
                $grades->Laboratory =      $_POST['Laboratory']; 
            }

            if (isset($_POST['Activity'])) {
              # code... 
                $grades->Activity =      $_POST['Activity']; 
            }

            if (isset($_POST['Assignment'])) {
              # code... 
                $grades->Assignment =      $_POST['Assignment']; 
            }

            if (isset($_POST['LongTest'])) {
              # code... 
                $grades->LongTest =      $_POST['LongTest']; 
            }

            if (isset($_POST['Exam'])) {
              # code... 
                $grades->Exam =      $_POST['Exam']; 
            }
           

            $grades->update_grades($gradeid,'Midterm');
            
  
            $sql = "SELECT * FROM tblgrade WHERE GRADEID = " . $gradeid;
            $mydb->setQuery($sql);
            $g = $mydb->loadSingleResult(); 

            $tot_Attendance = doubleval($g->Attendance) * $percent->Attendance / 100;
            $tot_Quiz = doubleval($g->Quiz) * $percent->Quiz / 100;
            $tot_Lecture = doubleval($g->Lecture) * $percent->Lecture / 100;
            $tot_Laboratory = doubleval($g->Laboratory) * $percent->Laboratory / 100;
            $tot_Activity = doubleval($g->Activity) * $percent->Activity / 100;
            $tot_Assignment = doubleval($g->Assignment) * $percent->Assignments / 100;
            $tot_LongTest = doubleval($g->LongTest) * $percent->LongTest / 100;
            $tot_Exam = doubleval($g->Exam) * $percent->Exam / 100;

            // $total = doubleval($g->Attendance) + doubleval($g->Quiz) + doubleval($g->Lecture) + doubleval($g->Laboratory) + doubleval($g->Activity) + doubleval($g->Assignment) + doubleval($g->LongTest) + doubleval($g->Exam);
     
            
            $total = $tot_Attendance + $tot_Quiz + $tot_Lecture + $tot_Laboratory + $tot_Activity + $tot_Assignment + $tot_LongTest + $tot_Exam; 
     
            $grades = new Grade(); 
            $grades->Total =    $total;
            $grades->update_grades($gradeid,'Midterm');


             echo  $total;


   }

       if ($_GET['grading']=='Final') {
           # code... 
              $grades = new Grade(); 

            if (isset($_POST['Attendance'])) {
              # code... 
                $grades->Attendance =      $_POST['Attendance']; 
            }

            if (isset($_POST['Quiz'])) {
              # code... 
                $grades->Quiz =      $_POST['Quiz']; 
            }

            if (isset($_POST['Lecture'])) {
              # code... 
                $grades->Lecture =      $_POST['Lecture']; 
            }

            if (isset($_POST['Laboratory'])) {
              # code... 
                $grades->Laboratory =      $_POST['Laboratory']; 
            }

            if (isset($_POST['Activity'])) {
              # code... 
                $grades->Activity =      $_POST['Activity']; 
            }

            if (isset($_POST['Assignment'])) {
              # code... 
                $grades->Assignment =      $_POST['Assignment']; 
            }

            if (isset($_POST['LongTest'])) {
              # code... 
                $grades->LongTest =      $_POST['LongTest']; 
            }

            if (isset($_POST['Exam'])) {
              # code... 
                $grades->Exam =      $_POST['Exam']; 
            }
           

            $grades->update_grades($gradeid,'Final');
  
            $sql = "SELECT * FROM tblgrade WHERE GRADEID = " . $gradeid;
            $mydb->setQuery($sql);
            $g = $mydb->loadSingleResult(); 

            $tot_Attendance = doubleval($g->Attendance) * $percent->Attendance / 100;
            $tot_Quiz = doubleval($g->Quiz) * $percent->Quiz / 100;
            $tot_Lecture = doubleval($g->Lecture) * $percent->Lecture / 100;
            $tot_Laboratory = doubleval($g->Laboratory) * $percent->Laboratory / 100;
            $tot_Activity = doubleval($g->Activity) * $percent->Activity / 100;
            $tot_Assignment = doubleval($g->Assignment) * $percent->Assignments / 100;
            $tot_LongTest = doubleval($g->LongTest) * $percent->LongTest / 100;
            $tot_Exam = doubleval($g->Exam) * $percent->Exam / 100;

            // $total = doubleval($g->Attendance) + doubleval($g->Quiz) + doubleval($g->Lecture) + doubleval($g->Laboratory) + doubleval($g->Activity) + doubleval($g->Assignment) + doubleval($g->LongTest) + doubleval($g->Exam);
     
            
            $total = $tot_Attendance + $tot_Quiz + $tot_Lecture + $tot_Laboratory + $tot_Activity + $tot_Assignment + $tot_LongTest + $tot_Exam; 
     
            $grades = new Grade(); 
            $grades->Total =    $total;
            $grades->update_grades($gradeid,'Final');


             echo  $total;


   }
 
 ?>