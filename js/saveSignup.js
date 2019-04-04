$(document).ready(function() {
    $("#signup").click(function() {
        var username = $("#username").val();
        var password = $("#password").val();
        var passwordrepeat = $("#password-repeat").val();

// Returns successful data sybmission message when the entered information is stored in database

if(password != passwordrepeat){
alert("Password does not match");
}
else{


$.post("ajax/saveSignup.php", {
    username1: username,
    password1: password

}, function(data) {
    alert(data);
    $('#myform')[0].reset(); // To reset form fields
});
}
});
    });