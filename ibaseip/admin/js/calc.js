function gradescalculation(){


// mid quiz
    var quizmid = $("#quizINPUT_MID").val(); 
    var quizpercentmid = $("#quizPERCENT_MID").val();
    var tot; 

    if (quizmid=="") {
      document.getElementById("quizTOTAL_MID").value = 0
     }else{
      tot = parseFloat(quizmid) * parseFloat(quizpercentmid); 
      document.getElementById("quizTOTAL_MID").value = tot.toFixed(2)
     }

// ------------------
 // mid hands on
  var handsonmid = $("#handsonINPUT_MID").val(); 
  var handsonpercentmid = $("#handsonPERCENT_MID").val();
  var tot;


  if (handsonmid =="") {
     document.getElementById("handsonTOTAL_MID").value = 0;
  }else{
     tot = parseFloat(handsonmid) * parseFloat(handsonpercentmid); 
      document.getElementById("handsonTOTAL_MID").value = tot.toFixed(2)
  }
  
// --------------------------------------
// mid activity 

  var activitymid = $("#activityINPUT_MID").val(); 
  var activitypercentmid = $("#activityPERCENT_MID").val();
  var tot;


  if (activitymid=="") {
    document.getElementById("activityTOTAL_MID").value = 0;
  }else{
     tot = parseFloat(activitymid) * parseFloat(activitypercentmid); 
     document.getElementById("activityTOTAL_MID").value = tot.toFixed(2)
  }

  // ------------------------------------
  // MID ATTENDANCE
  
  var attendancemid = $("#attendanceINPUT_MID").val(); 
  var attendancepercentmid = $("#attendancePERCENT_MID").val();
  var tot;

  if (attendancemid=="") {
    document.getElementById("attendanceTOTAL_MID").value =0;
  }else{
    tot = parseFloat(attendancemid) * parseFloat(attendancepercentmid); 
  document.getElementById("attendanceTOTAL_MID").value = tot.toFixed(2)
  } 
  // --------------------
  // MID ASSIGNMENT 
  var assignmentmid = $("#assignmentINPUT_MID").val(); 
  var assignmentpercentmid = $("#assignmentPERCENT_MID").val();
  var tot;

  if (assignmentmid=="") {
    document.getElementById("assignmentTOTAL_MID").value = 0;
  }else{
    tot = parseFloat(assignmentmid) * parseFloat(assignmentpercentmid); 
    document.getElementById("assignmentTOTAL_MID").value = tot.toFixed(2)
  }
 
  // ---------------------------------

  // MID EXAM 
  var exammid = $("#examINPUT_MID").val(); 
  var exampercentmid = $("#examPERCENT_MID").val();
  var tot;

  if (exammid=="") {
    document.getElementById("examTOTAL_MID").value = 0;
  }else{
    tot = parseFloat(exammid) * parseFloat(exampercentmid); 
    document.getElementById("examTOTAL_MID").value = tot.toFixed(2);
  } 
    
    // --------------------------------------------


 
// FINAL quiz
    var quizFINAL= $("#quizINPUT_FINAL").val(); 
    var quizpercentFINAL = $("#quizPERCENT_FINAL").val();
    var tot_FINAL; 

    if (quizFINAL=="") {
      document.getElementById("quizTOTAL_FINAL").value = 0
     }else{
      tot_FINAL = parseFloat(quizFINAL) * parseFloat(quizpercentFINAL); 
      document.getElementById("quizTOTAL_FINAL").value = tot_FINAL.toFixed(2);
     }

// ------------------
 // FINAL hands on
  var handsonFINAL = $("#handsonINPUT_FINAL").val(); 
  var handsonpercentFINAL = $("#handsonPERCENT_FINAL").val();
  var tot_FINAL;


  if (handsonFINAL =="") {
     document.getElementById("handsonTOTAL_FINAL").value = 0;
  }else{
     tot_FINAL = parseFloat(handsonFINAL) * parseFloat(handsonpercentFINAL); 
      document.getElementById("handsonTOTAL_FINAL").value = tot_FINAL.toFixed(2);
  }
  
// --------------------------------------
// FINAL activity 

  var activityFINAL = $("#activityINPUT_FINAL").val(); 
  var activitypercentFINAL = $("#activityPERCENT_FINAL").val();
  var tot_FINAL;


  if (activityFINAL=="") {
    document.getElementById("activityTOTAL_FINAL").value = 0;
  }else{
     tot_FINAL = parseFloat(activityFINAL) * parseFloat(activitypercentFINAL); 
     document.getElementById("activityTOTAL_FINAL").value = tot_FINAL.toFixed(2);
  }

  // ------------------------------------
  // FINAL ATTENDANCE
  
  var attendanceFINAL = $("#attendanceINPUT_FINAL").val(); 
  var attendancepercentFINAL = $("#attendancePERCENT_FINAL").val();
  var tot_FINAL;

  if (attendanceFINAL=="") {
    document.getElementById("attendanceTOTAL_FINAL").value =0;
  }else{
    tot_FINAL = parseFloat(attendanceFINAL) * parseFloat(attendancepercentFINAL); 
  document.getElementById("attendanceTOTAL_FINAL").value = tot_FINAL.toFixed(2);
  } 
  // --------------------
  // FINAL ASSIGNMENT 
  var assignmentFINAL = $("#assignmentINPUT_FINAL").val(); 
  var assignmentpercentFINAL = $("#assignmentPERCENT_FINAL").val();
  var tot_FINAL;

  if (assignmentFINAL=="") {
    document.getElementById("assignmentTOTAL_FINAL").value = 0;
  }else{
    tot_FINAL = parseFloat(assignmentFINAL) * parseFloat(assignmentpercentFINAL); 
    document.getElementById("assignmentTOTAL_FINAL").value = tot_FINAL.toFixed(2);
  }
 
  // ---------------------------------

  // FINAL EXAM 
  var examFINAL = $("#examINPUT_FINAL").val(); 
  var exampercentFINAL = $("#examPERCENT_FINAL").val();
  var tot_FINAL;

  if (examFINAL=="") {
    document.getElementById("examTOTAL_FINAL").value = 0;
  }else{
    tot_FINAL = parseFloat(examFINAL) * parseFloat(exampercentFINAL); 
    document.getElementById("examTOTAL_FINAL").value = tot_FINAL.toFixed(2);
  } 
    
    // --------------------------------------------
    // MID TOTAL
      var quiztotal_MID = $("#quizTOTAL_MID").val();
      var handsontotal_MID = $("#handsonTOTAL_MID").val();
      var activitytotal_MID = $("#activityTOTAL_MID").val();
      var attendancetotal_MID = $("#attendanceTOTAL_MID").val();
      var assignmenttotal_MID = $("#assignmentTOTAL_MID").val();
      var examtotal_MID = $("#examTOTAL_MID").val(); 
      var tot_MID;


      tot_MID = parseFloat(quiztotal_MID) + parseFloat(handsontotal_MID) + parseFloat(activitytotal_MID) + parseFloat(attendancetotal_MID) + parseFloat(assignmenttotal_MID) + parseFloat(examtotal_MID);

      document.getElementById("totalMID").value = tot_MID.toFixed(2); 
      document.getElementById("MIDTERM").value = tot_MID.toFixed(2);

      tot_MID = parseFloat(tot_MID) * .4;
      document.getElementById("MIDTERMTOTAL").value =  tot_MID.toFixed(2);

      // document.getElementById("TOTALAVERAGE").value = parseFloat(document.getElementById("MIDTERMTOTAL").value) + parseFloat(totalfinale);
// ------------------------------------------------


// FINAL TOTAL
      var quiztotal = $("#quizTOTAL_FINAL").val();
      var handsontotal = $("#handsonTOTAL_FINAL").val();
      var activitytotal = $("#activityTOTAL_FINAL").val();
      var attendancetotal = $("#attendanceTOTAL_FINAL").val();
      var assignmenttotal = $("#assignmentTOTAL_FINAL").val();
      var examtotal = $("#examTOTAL_FINAL").val(); 
      var tot_FINAL;


      tot_FINAL = parseFloat(quiztotal) + parseFloat(handsontotal) + parseFloat(activitytotal) + parseFloat(attendancetotal) + parseFloat(assignmenttotal) + parseFloat(examtotal);

      document.getElementById("totalFINAL").value = tot_FINAL.toFixed(2); 
      document.getElementById("FINALE").value = tot_FINAL.toFixed(2);

      tot_FINAL = parseFloat(tot_FINAL) * .6;
      document.getElementById("FINALETOTAL").value =  tot_FINAL.toFixed(2);

      document.getElementById("TOTALAVERAGE").value = parseFloat(document.getElementById("MIDTERMTOTAL").value) + parseFloat(tot_FINAL);
// ------------------------------------------------
 
 
}
 