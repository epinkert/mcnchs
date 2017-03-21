
//hides the error if you try to bookmark and are not logged in
$("#bookmarkerror").hide();

//activate tooltips
$("body").tooltip({   
  selector: "[data-toggle='tooltip']",
  container: "body"
})



//countdowns on characters in create.php

$(document).ready(function() {
    var text_max = 35;
    $('#max35_feedback').html(text_max);

    $('#max35').keyup(function() {
        var text_length = $('#max35').val().length;
        var text_remaining = text_max - text_length;

        $('#max35_feedback').html(text_remaining);
    });
});

$(document).ready(function() {
    var text_max = 125;
    $('#max125_feedback').html(text_max);

    $('#max125').keyup(function() {
        var text_length = $('#max125').val().length;
        var text_remaining = text_max - text_length;

        $('#max125_feedback').html(text_remaining);
    });
});

/*
function updateCountdown35() {
    // 35 is the max message length
    var remaining = 35 - jQuery('.max35').val().length;
    jQuery('.countdown35').text(remaining + '');
}

jQuery(document).ready(function($) {
    updateCountdown35();
    $('.max35').change(updateCountdown35);
    $('.max35').keyup(updateCountdown35);
});

function updateCountdown125() {
    // 125 is the max message length
    var remaining = 125 - jQuery('.max125').val().length;
    jQuery('.countdown125').text(remaining + '');
}

jQuery(document).ready(function($) {
    updateCountdown125();
    $('.max125').change(updateCountdown125);
    $('.max125').keyup(updateCountdown125);
});
*/
/*
var maxLength = 35;
$('.max35').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#max35').text(length);
});

var maxLength = 125;
$('.max125').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#max125').text(length);
});
*/


//end of countdowns

//the alert if you try to bookmark without being logged in
$("#bookmarkalert").click(function() {
	$("#bookmarkerror").slideDown("slow");
});

