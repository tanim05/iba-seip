 $(document).on("focusout",".loadpre", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var attendance = document.getElementById("Attendance"+id).value;
  var quiz = document.getElementById("Quiz"+id).value;
  var lecture = document.getElementById("Lecture"+id).value;
  var laboratory = document.getElementById("Laboratory"+id).value;
  var activity = document.getElementById("Activity"+id).value; 
  var assignment = document.getElementById("Assignment"+id).value;  
  var longtest = document.getElementById("LongTest"+id).value;  
  var exam = document.getElementById("Exam"+id).value;   


  
 
  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Prelim",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Attendance:attendance},               
        success: function(data){                    
        $('#totalprelim'+id).html(data); 
          // alert(data) 
        }

    }); 

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Prelim",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Quiz:quiz},                   
        success: function(data){                    
        $('#totalprelim'+id).html(data); 
          // alert(data) 
        }

    }); 

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Prelim",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Lecture:lecture},                   
        success: function(data){                    
        $('#totalprelim'+id).html(data); 
          // alert(data) 
        }

    }); 

   $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Prelim",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Laboratory:laboratory},                   
        success: function(data){                    
        $('#totalprelim'+id).html(data); 
          // alert(data) 
        }

    });

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Prelim",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Activity:activity},                   
        success: function(data){                    
        $('#totalprelim'+id).html(data); 
          // alert(data) 
        }

    });

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Prelim",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Assignment:assignment},                   
        success: function(data){                    
        $('#totalprelim'+id).html(data); 
          // alert(data) 
        }

    });

      $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Prelim",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, LongTest:longtest},                   
        success: function(data){                    
        $('#totalprelim'+id).html(data); 
          // alert(data) 
        }

    });

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Prelim",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Exam:exam},                   
        success: function(data){                    
        $('#totalprelim'+id).html(data); 
          // alert(data) 
        }

    });

});

$(document).on("focusout",".load_midterm", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var attendance = document.getElementById("Attendance"+id).value;
  var quiz = document.getElementById("Quiz"+id).value;
  var lecture = document.getElementById("Lecture"+id).value;
  var laboratory = document.getElementById("Laboratory"+id).value;
  var activity = document.getElementById("Activity"+id).value; 
  var assignment = document.getElementById("Assignment"+id).value;  
  var longtest = document.getElementById("LongTest"+id).value;  
  var exam = document.getElementById("Exam"+id).value;   

// alert(id);
  
 
  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Midterm",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Attendance:attendance},               
        success: function(data){                    
        $('#totalMidterm'+id).html(data);  
        }

    }); 

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Midterm",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Quiz:quiz},                   
        success: function(data){                    
        $('#totalMidterm'+id).html(data); 
          // alert(data) 
        }

    }); 

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Midterm",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Lecture:lecture},                   
        success: function(data){                    
        $('#totalMidterm'+id).html(data); 
          // alert(data) 
        }

    }); 

   $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Midterm",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Laboratory:laboratory},                   
        success: function(data){                    
        $('#totalMidterm'+id).html(data); 
          // alert(data) 
        }

    });

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Midterm",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Activity:activity},                   
        success: function(data){                    
        $('#totalMidterm'+id).html(data); 
          // alert(data) 
        }

    });

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Midterm",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Assignment:assignment},                   
        success: function(data){                    
        $('#totalMidterm'+id).html(data); 
          // alert(data) 
        }

    });

      $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Midterm",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, LongTest:longtest},                   
        success: function(data){                    
        $('#totalMidterm'+id).html(data); 
          // alert(data) 
        }

    });

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Midterm",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Exam:exam},                   
        success: function(data){                    
        $('#totalMidterm'+id).html(data); 
          // alert(data) 
        }

    });

});
$(document).on("focusout",".load_final", function(){
  var id = $(this).data("id");  
  var classcode = document.getElementById("classcode").value;
  var attendance = document.getElementById("Attendance"+id).value;
  var quiz = document.getElementById("Quiz"+id).value;
  var lecture = document.getElementById("Lecture"+id).value;
  var laboratory = document.getElementById("Laboratory"+id).value;
  var activity = document.getElementById("Activity"+id).value; 
  var assignment = document.getElementById("Assignment"+id).value;  
  var longtest = document.getElementById("LongTest"+id).value;  
  var exam = document.getElementById("Exam"+id).value;   

// alert(id);
  
 
  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Final",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Attendance:attendance},               
        success: function(data){                    
        $('#totalFinal'+id).html(data);  
        }

    }); 

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Final",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Quiz:quiz},                   
        success: function(data){                    
        $('#totalFinal'+id).html(data); 
          // alert(data) 
        }

    }); 

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Final",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Lecture:lecture},                   
        success: function(data){                    
        $('#totalFinal'+id).html(data); 
          // alert(data) 
        }

    }); 

   $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Final",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Laboratory:laboratory},                   
        success: function(data){                    
        $('#totalFinal'+id).html(data); 
          // alert(data) 
        }

    });

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Final",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Activity:activity},                   
        success: function(data){                    
        $('#totalFinal'+id).html(data); 
          // alert(data) 
        }

    });

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Final",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Assignment:assignment},                   
        success: function(data){                    
        $('#totalFinal'+id).html(data); 
          // alert(data) 
        }

    });

      $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Final",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, LongTest:longtest},                   
        success: function(data){                    
        $('#totalFinal'+id).html(data); 
          // alert(data) 
        }

    });

     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loadgrades.php?grading=Final",    
        dataType: "text",   //expect html to be returned  
        data:{gradeid:id, Exam:exam},                   
        success: function(data){                    
        $('#totalFinal'+id).html(data); 
          // alert(data) 
        }

    });

});