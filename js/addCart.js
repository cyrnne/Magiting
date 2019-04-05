$(document).ready(function() {
$("#addCart").click(function() {

var prodID = $("#prodID").val();






$.post("ajax/addCart.php", {
prodID1: prodID


}, function(data) {

alert(data);

$('#myform')[0].reset(); // To reset form fields	
});





});
});