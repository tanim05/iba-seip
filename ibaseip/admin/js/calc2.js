 $(document).on("focusout",".quizPRE", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("quizPRE"+id).value;
  var handson_PRE = document.getElementById("handsonPRE"+id).value;
  var activity_PRE = document.getElementById("activityPRE"+id).value;
  var attendance_PRE = document.getElementById("attendancePRE"+id).value;
  var assignment_PRE = document.getElementById("assignmentPRE"+id).value; 
  var exam_PRE = document.getElementById("exampre"+id).value;  
  var tot_PRE;


  tot_PRE = parseFloat(isValue) + parseFloat(handson_PRE) + parseFloat(activity_PRE) + parseFloat(activity_PRE) + parseFloat(assignment_PRE) + parseFloat(exam_PRE);

        // tot = parseFloat(quiztotal) + parseFloat(handsontotal) + parseFloat(activitytotal) + parseFloat(attendancetotal) + parseFloat(assignmenttotal) + parseFloat(examtotal);

   // alert(tot_PRE);

  // alert(isValue);
// alert(classcode);
  // alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALPRE="+tot_PRE,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, quizINPUT_PRE:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});


$(document).on("focusout",".handsonPRE", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("handsonPRE"+id).value; 
  var quiz_PRE = document.getElementById("quizPRE"+id).value;
  var activity_PRE = document.getElementById("activityPRE"+id).value;
  var attendance_PRE = document.getElementById("attendancePRE"+id).value;
  var assignment_PRE = document.getElementById("assignmentPRE"+id).value; 
  var exam_PRE = document.getElementById("exampre"+id).value;  
  var tot_PRE;


  tot_PRE = parseFloat(isValue) + parseFloat(quiz_PRE) + parseFloat(activity_PRE) + parseFloat(attendance_PRE) + parseFloat(assignment_PRE) + parseFloat(exam_PRE);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALPRE="+tot_PRE,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, handsonINPUT_PRE:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});


$(document).on("focusout",".activityPRE", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("activityPRE"+id).value;
  var handson_PRE = document.getElementById("handsonPRE"+id).value; 
  var quiz_PRE = document.getElementById("quizPRE"+id).value; 
  var attendance_PRE = document.getElementById("attendancePRE"+id).value;
  var assignment_PRE = document.getElementById("assignmentPRE"+id).value; 
  var exam_PRE = document.getElementById("exampre"+id).value;  
  var tot_PRE;


  tot_PRE = parseFloat(isValue) + parseFloat(quiz_PRE) + parseFloat(handson_PRE) + parseFloat(attendance_PRE) + parseFloat(assignment_PRE) + parseFloat(exam_PRE);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALPRE="+tot_PRE,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, activityINPUT_PRE:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});
$(document).on("focusout",".attendancePRE", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("attendancePRE"+id).value;
  var activity_PRE = document.getElementById("activityPRE"+id).value;
  var handson_PRE = document.getElementById("handsonPRE"+id).value; 
  var quiz_PRE = document.getElementById("quizPRE"+id).value;  
  var assignment_PRE = document.getElementById("assignmentPRE"+id).value; 
  var exam_PRE = document.getElementById("exampre"+id).value;  
  var tot_PRE;


  tot_PRE = parseFloat(isValue) + parseFloat(quiz_PRE) + parseFloat(handson_PRE) + parseFloat(activity_PRE) + parseFloat(assignment_PRE) + parseFloat(exam_PRE);



//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALPRE="+tot_PRE,      
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, attendanceINPUT_PRE:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});

$(document).on("focusout",".assignmentPRE", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("assignmentPRE"+id).value;
  var attendance_PRE = document.getElementById("attendancePRE"+id).value;
  var activity_PRE = document.getElementById("activityPRE"+id).value;
  var handson_PRE = document.getElementById("handsonPRE"+id).value; 
  var quiz_PRE = document.getElementById("quizPRE"+id).value;    
  var exam_PRE = document.getElementById("exampre"+id).value;  
  var tot_PRE;


  tot_PRE = parseFloat(isValue) + parseFloat(quiz_PRE) + parseFloat(handson_PRE) + parseFloat(activity_PRE) + parseFloat(attendance_PRE) + parseFloat(exam_PRE);



//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALPRE="+tot_PRE,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, assignmentINPUT_PRE:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});
$(document).on("focusout",".exampre", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("exampre"+id).value;
  var assignment_PRE = document.getElementById("assignmentPRE"+id).value;
  var attendance_PRE = document.getElementById("attendancePRE"+id).value;
  var activity_PRE = document.getElementById("activityPRE"+id).value;
  var handson_PRE = document.getElementById("handsonPRE"+id).value; 
  var quiz_PRE = document.getElementById("quizPRE"+id).value;     
  var tot_PRE;


  tot_PRE = parseFloat(isValue) + parseFloat(quiz_PRE) + parseFloat(handson_PRE) + parseFloat(activity_PRE) + parseFloat(attendance_PRE) + parseFloat(assignment_PRE);



//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALPRE="+tot_PRE,   
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, examINPUT_PRE:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});

$(document).on("focusout",".loadpre" , function(){

    var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&preactive=active",    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id,SHOWPRE:"Prelim"},               
        success: function(data){                    
         $('#loaddata_PRE').html(data); 
         // alert(data)
          

        }

    }); 

});

// $(document).on("change",".quiz", function(){
//   var id = $(this).data("id");
//   var classcode = document.getElementById("classcode").value;
//   var isValue = document.getElementById("quiz"+id).value;

//   // var handson_mid = document.getElementById("handson"+id).value;

//   // alert(isValue);

// });
//------------------------------------------ midterm

$(document).on("focusout",".quiz", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("quiz"+id).value;
  var handson_mid = document.getElementById("handson"+id).value;
  var activity_mid = document.getElementById("activity"+id).value;
  var attendance_mid = document.getElementById("attendance"+id).value;
  var assignment_mid = document.getElementById("assignment"+id).value; 
  var exam_mid = document.getElementById("exammid"+id).value;  
  var tot_mid;


  tot_mid = parseFloat(isValue) + parseFloat(handson_mid) + parseFloat(activity_mid) + parseFloat(activity_mid) + parseFloat(assignment_mid) + parseFloat(exam_mid);

        // tot = parseFloat(quiztotal) + parseFloat(handsontotal) + parseFloat(activitytotal) + parseFloat(attendancetotal) + parseFloat(assignmenttotal) + parseFloat(examtotal);

   // alert(tot_mid);

  // alert(isValue);
// alert(classcode);
  // alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALMID="+tot_mid,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, quizINPUT_MID:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});


$(document).on("focusout",".handson", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("handson"+id).value; 
  var quiz_mid = document.getElementById("quiz"+id).value;
  var activity_mid = document.getElementById("activity"+id).value;
  var attendance_mid = document.getElementById("attendance"+id).value;
  var assignment_mid = document.getElementById("assignment"+id).value; 
  var exam_mid = document.getElementById("exammid"+id).value;  
  var tot_mid;


  tot_mid = parseFloat(isValue) + parseFloat(quiz_mid) + parseFloat(activity_mid) + parseFloat(attendance_mid) + parseFloat(assignment_mid) + parseFloat(exam_mid);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALMID="+tot_mid,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, handsonINPUT_MID:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});
$(document).on("focusout",".activity", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("activity"+id).value;
  var handson_mid = document.getElementById("handson"+id).value; 
  var quiz_mid = document.getElementById("quiz"+id).value; 
  var attendance_mid = document.getElementById("attendance"+id).value;
  var assignment_mid = document.getElementById("assignment"+id).value; 
  var exam_mid = document.getElementById("exammid"+id).value;  
  var tot_mid;


  tot_mid = parseFloat(isValue) + parseFloat(quiz_mid) + parseFloat(handson_mid) + parseFloat(attendance_mid) + parseFloat(assignment_mid) + parseFloat(exam_mid);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALMID="+tot_mid,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, activityINPUT_MID:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});
$(document).on("focusout",".attendance", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("attendance"+id).value;
  var activity_mid = document.getElementById("activity"+id).value;
  var handson_mid = document.getElementById("handson"+id).value; 
  var quiz_mid = document.getElementById("quiz"+id).value;  
  var assignment_mid = document.getElementById("assignment"+id).value; 
  var exam_mid = document.getElementById("exammid"+id).value;  
  var tot_mid;


  tot_mid = parseFloat(isValue) + parseFloat(quiz_mid) + parseFloat(handson_mid) + parseFloat(activity_mid) + parseFloat(assignment_mid) + parseFloat(exam_mid);



//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALMID="+tot_mid,      
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, attendanceINPUT_MID:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});

$(document).on("focusout",".assignment", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("assignment"+id).value;
  var attendance_mid = document.getElementById("attendance"+id).value;
  var activity_mid = document.getElementById("activity"+id).value;
  var handson_mid = document.getElementById("handson"+id).value; 
  var quiz_mid = document.getElementById("quiz"+id).value;    
  var exam_mid = document.getElementById("exammid"+id).value;  
  var tot_mid;


  tot_mid = parseFloat(isValue) + parseFloat(quiz_mid) + parseFloat(handson_mid) + parseFloat(activity_mid) + parseFloat(attendance_mid) + parseFloat(exam_mid);



//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALMID="+tot_mid,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, assignmentINPUT_MID:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});
$(document).on("focusout",".exammid", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("exammid"+id).value;
  var assignment_mid = document.getElementById("assignment"+id).value;
  var attendance_mid = document.getElementById("attendance"+id).value;
  var activity_mid = document.getElementById("activity"+id).value;
  var handson_mid = document.getElementById("handson"+id).value; 
  var quiz_mid = document.getElementById("quiz"+id).value;     
  var tot_mid;


  tot_mid = parseFloat(isValue) + parseFloat(quiz_mid) + parseFloat(handson_mid) + parseFloat(activity_mid) + parseFloat(attendance_mid) + parseFloat(assignment_mid);



//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALMID="+tot_mid,   
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, examINPUT_MID:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});

$(document).on("focusout",".loadmid" , function(){

    var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&midactive=active",    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id,SHOWMID:"Midterm"},               
        success: function(data){                    
         $('#loaddata_MID').html(data); 
         // alert(data)
          

        }

    }); 

});
// $(document).on("focusout",".totalgradesmid", function(){
//   var id = $(this).data("id");  
//   var classcode = document.getElementById("classcode").value;
//   var isValue = document.getElementById("totalgradesmid"+id).value;

// //   alert(isValue);
// // alert(classcode);
// //   alert(id);

//   $.ajax({    //create an ajax request to load_page.php
//         type:"POST",  
//         url: "loaddata.php?CLASSCODE="+classcode,    
//         dataType: "text",   //expect html to be returned  
//         data:{IDNO:id, activityINPUT_MID:isValue},               
//         success: function(data){                    
//          // $('#loaddata').html(data); 
//          // alert(data)
          

//         }

//     }); 

// });

// -----------------------END----------------------------------------------------
// FOR FINAL CALCULATION ----------------------------------------------------------------


$(document).on("focusout",".quiz_final", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("quiz_final"+id).value; 
  var handson_final = document.getElementById("handson_final"+id).value;
  var activity_final = document.getElementById("activity_final"+id).value;
  var attendance_final = document.getElementById("attendance_final"+id).value;
  var assignment_final = document.getElementById("assignment_final"+id).value; 
  var exam_final = document.getElementById("examfinal"+id).value;  
  var tot_final;


  tot_final = parseFloat(isValue) + parseFloat(handson_final) + parseFloat(activity_final) + parseFloat(activity_final) + parseFloat(assignment_final) + parseFloat(exam_final);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALFINAL="+tot_final,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, quizINPUT_FINAL:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});


$(document).on("focusout",".handson_final", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("handson_final"+id).value;
  var quiz_final = document.getElementById("quiz_final"+id).value;  
  var activity_final = document.getElementById("activity_final"+id).value;
  var attendance_final = document.getElementById("attendance_final"+id).value;
  var assignment_final = document.getElementById("assignment_final"+id).value; 
  var exam_final = document.getElementById("examfinal"+id).value;  
  var tot_final;


  tot_final = parseFloat(isValue) + parseFloat(quiz_final) + parseFloat(activity_final) + parseFloat(activity_final) + parseFloat(assignment_final) + parseFloat(exam_final);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALFINAL="+tot_final,   
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, handsonINPUT_FINAL:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});
$(document).on("focusout",".activity_final", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("activity_final"+id).value;
  var handson_final = document.getElementById("handson_final"+id).value;
  var quiz_final = document.getElementById("quiz_final"+id).value;   
  var attendance_final = document.getElementById("attendance_final"+id).value;
  var assignment_final = document.getElementById("assignment_final"+id).value; 
  var exam_final = document.getElementById("examfinal"+id).value;  
  var tot_final;


  tot_final = parseFloat(isValue) + parseFloat(quiz_final) + parseFloat(handson_final) + parseFloat(attendance_final) + parseFloat(assignment_final) + parseFloat(exam_final);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALFINAL="+tot_final,   
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, activityINPUT_FINAL:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});
$(document).on("focusout",".attendance_final", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("attendance_final"+id).value;

 var activity_final = document.getElementById("activity_final"+id).value;
  var handson_final = document.getElementById("handson_final"+id).value;
  var quiz_final = document.getElementById("quiz_final"+id).value;    
  var assignment_final = document.getElementById("assignment_final"+id).value; 
  var exam_final = document.getElementById("examfinal"+id).value;  
  var tot_final;


  tot_final = parseFloat(isValue) + parseFloat(quiz_final) + parseFloat(handson_final) + parseFloat(activity_final) + parseFloat(assignment_final) + parseFloat(exam_final);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALFINAL="+tot_final,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, attendanceINPUT_FINAL:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});

$(document).on("focusout",".assignment_final", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("assignment_final"+id).value;
 var attendance_final = document.getElementById("attendance_final"+id).value;

 var activity_final = document.getElementById("activity_final"+id).value;
  var handson_final = document.getElementById("handson_final"+id).value;
  var quiz_final = document.getElementById("quiz_final"+id).value;     
   var exam_final = document.getElementById("examfinal"+id).value;  
  var tot_final;


  tot_final = parseFloat(isValue) + parseFloat(quiz_final) + parseFloat(handson_final) + parseFloat(activity_final) + parseFloat(attendance_final) + parseFloat(exam_final);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALFINAL="+tot_final,   
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, assignmentINPUT_FINAL:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});
$(document).on("focusout",".examfinal", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var isValue = document.getElementById("examfinal"+id).value;
  var assignment_final = document.getElementById("assignment_final"+id).value;
 var attendance_final = document.getElementById("attendance_final"+id).value;

 var activity_final = document.getElementById("activity_final"+id).value;
  var handson_final = document.getElementById("handson_final"+id).value;
  var quiz_final = document.getElementById("quiz_final"+id).value;     
  var tot_final;


  tot_final = parseFloat(isValue) + parseFloat(quiz_final) + parseFloat(handson_final) + parseFloat(activity_final) + parseFloat(attendance_final) + parseFloat(assignment_final);


//   alert(isValue);
// alert(classcode);
//   alert(id);

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode+"&TOTALFINAL="+tot_final,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id, examINPUT_FINAL:isValue},               
        success: function(data){                    
         // $('#loaddata').html(data); 
         // alert(data)
          

        }

    }); 

});


$(document).on("focusout",".loadfinal" , function(){

    var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php?CLASSCODE="+classcode,    
        dataType: "text",   //expect html to be returned  
        data:{IDNO:id,SHOWFINAL:"Final"},               
        success: function(data){                    
         $('#loaddata_FINAL').html(data);  
        }

    }); 

});
// $(document).on("focusout",".totalgradesmid", function(){
//   var id = $(this).data("id");  
//   var classcode = document.getElementById("classcode").value;
//   var isValue = document.getElementById("totalgradesmid"+id).value;

// //   alert(isValue);
// // alert(classcode);
// //   alert(id);

//   $.ajax({    //create an ajax request to load_page.php
//         type:"POST",  
//         url: "loaddata.php?CLASSCODE="+classcode,    
//         dataType: "text",   //expect html to be returned  
//         data:{IDNO:id, activityINPUT_MID:isValue},               
//         success: function(data){                    
//          // $('#loaddata').html(data); 
//          // alert(data)
          

//         }

//     }); 

// });

// --------------------------------END FINAL----------------------------------------------------------