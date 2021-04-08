/* EDIT -------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
/* Medical edit---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
    $('.updatebtn').on('click', function(){
        $('#exampleModal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id').val(data[0]);
        $('#fullname').val(data[1]);
        $('#work').val(data[2]);
        $('#purpose').val(data[3]);
        /* if(data[3] == ""){
          console.log("empty");
        }
        else{
          console.log("full");
        }
*/
        



    });
});
/* Scholarship edit---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
    $('.updatebtnScholarship').on('click', function(){
        $('#exampleModal1').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id_scholarship').val(data[0]);
        $('#fullname_scholarship').val(data[1]);
        $('#mother').val(data[2]);
        $('#workMother').val(data[3]);
        $('#father').val(data[4]);
        $('#workFather').val(data[5]);
        $('#earnings').val(data[6]);


    });
});
/* BRGY CLEARANCE edit---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
    $('.updatebtnClearance').on('click', function(){
        $('#exampleModal2').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id_clearance').val(data[0]);
        $('#fullname_clearance').val(data[1]);
        $('#age_clearance').val(data[2]);



    });
});
/* BUSINESS CLEARANCE edit---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
    $('.updatebtnBusiness').on('click', function(){
        $('#exampleModal3').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id_business').val(data[0]);
        $('#bname_business').val(data[1]);
        $('#loc_business').val(data[2]);
        $('#operator_business').val(data[3]);
        $('#addr_business').val(data[4]);



    });
});
/* RESIDENCY edit---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
    $('.updatebtnResidency').on('click', function(){
        $('#exampleModal4').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id_residency').val(data[0]);
        $('#fullname_residency').val(data[1]);
      


    });
});
/* APPOINTMENTS edit---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
    $('.updatebtnAppointments').on('click', function(){
        $('#exampleModal5').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id_appointments').val(data[0]);
        $('#textInputs').val(data[1]);
      


    });
});

/* ADD------------------------------------------------------------------------------------------------------------------------------------------------------------------ */

/* Medical add---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
$('.createbtn').on('click', function(){
    $('#createModal').modal('show');
    

});
});
/* Scholarship add---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
$('.createbtn-scholarship').on('click', function(){
    $('#createModalScholarship').modal('show');


});
});
/* Clearance add---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
$('.createbtn-clearance').on('click', function(){
    $('#createModalClearance').modal('show');


});
});
/* Business Clearance add---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
$('.createbtn-business').on('click', function(){
    $('#createModalBusiness').modal('show');


});
});
/* Residency add---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
$('.createbtn-residency').on('click', function(){
    $('#createModalResidency').modal('show');


});
});
/* APPOINTMENTS add---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
$('.createbtn-appointments').on('click', function(){
    $('#createModalAppointments').modal('show');


});
});


/* Purok Ranking */
/* Purok Ranking add---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
$('.createbtn-purok-ranking').on('click', function(){
    $('#createModalPurokRanking').modal('show');


});
});

/* Purok Ranking edit---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
    $('.updatebtnPurokRanking').on('click', function(){
        $('#exampleModal6').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id_purok_ranking').val(data[0]);
        $('#fullname_purok').val(data[1]);
        $('#age_purok').val(data[2]);
        $('#gender_purok').val(data[3]);
        $('#address_purok').val(data[4]);
        $('#sector_purok').val(data[5]);
      


    });
});

/* Census */
/* Purok Ranking add---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
    $('.createbtn-census').on('click', function(){
        $('#createModalCencus').modal('show');
    
    
    });
    });

    /* Purok Ranking edit---------------------------------------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
    $('.updatebtnCensus').on('click', function(){
        $('#exampleModal7').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);

        $('#update_id_census').val(data[0]);
        $('#firstname_census').val(data[1]);
        $('#lastname_census').val(data[2]);
        $('#middlename_census').val(data[3]);
        $('#no_census').val(data[4]);
        $('#street_census').val(data[5]);
        $('#sub_census').val(data[6]);
        $('#city_census').val(data[7]);
        $('#province_census').val(data[8]);
        $('#dateofbirth_census').val(data[9]);
        $('#placeofbirth_census').val(data[10]);
        $('#sex_census').val(data[11]);
        $('#civilstatus_census').val(data[12]);
        $('#occupation_census').val(data[13]);
        $('#citizenship_census').val(data[14]);
        $('#relationship_census').val(data[15]);
      


    });
});
    