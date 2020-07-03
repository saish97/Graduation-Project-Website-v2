$(document).ready(function() {
    //$('#username').focus();

    $('#login').click(function() {

        event.preventDefault(); // prevent PageReLoad

       var ValidEmail = $('#username').val() === 'admin'; // User validate
var ValidPassword = $('#password').val() === 'admin'; // Password validate

        if (ValidEmail === true && ValidPassword === true) { // if ValidEmail & ValidPassword
            $('.valid').css('display', 'block');
            window.location = "file:///C:/Users/HP/Desktop/Graduation Project Website/html/table-basic.html"; // go to home.html
        }
        else {
            $('.error').css('display', 'block'); // show error msg
        }
    });
});