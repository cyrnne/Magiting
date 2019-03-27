$(document).ready(function() {
    $("#saveBtn").click(function() {
        var name = $("emp_id").val();
        var email = $("emp_pass").val();
        var contact = $("#emptype").val();

// Returns successful data sybmission message when the entered information is stored in database

$.post("saveData.php", {
    name1: name,
    email1: email,
    contact1: contact,
    msg1: msg
}, function(data) {
    alert(data);
    $('#myform')[0].reset(); // To reset form fields
});
});
    });