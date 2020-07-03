$(document).ready(function() {
    //$('#username').focus();

    $('#login').click(function() {

        event.preventDefault();  prevent PageReLoad

       var ValidEmail = $('#username').val() === 'doctor';  User validate
var ValidPassword = $('#password').val() === 'doctor';  Password validate

        if (ValidEmail === true && ValidPassword === true) {  if ValidEmail & ValidPassword
            $('.valid').css('display', 'block');
            window.location = httparkev.com;  go to home.html
        }
        else {
            $('.error').css('display', 'block');  show error msg
        }
    });
});