/* Medical ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
    $("#medical-search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#medicalTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

/* Scholarship ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
    $("#scholarship-search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#scholarshipTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
/* Brgy Clearance ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
    $("#clearance-search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#clearanceTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
/* Business Clearance ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
    $("#business-search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#businessTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
/* Residency ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
    $("#residency-search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#residencyTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
/* Appointments ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
  $("#appointments-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#appointmentsTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
/* Admin ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
  $("#admin-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#adminTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
/* User ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
  $("#user-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#userTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
/* Purok Ranking ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
  $("#purok-ranking-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#purokRankingTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
/* Census ----------------------------------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function(){
  $("#census-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#censusTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});