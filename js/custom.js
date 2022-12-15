$(document).ready(function(){


$('.sidebar-dropdown-btn').click(function(event) {
	$(this).find('.nav-second-level').slideToggle(500) ;
});

$("#dataTable").DataTable();
$('#summernote').summernote();
$( "#datepicker" ).datepicker();


//Get GD Report

$('#from_date').change(function(event) {

var toDate = $("#to_date").val();
var fromDate = $("#from_date").val();

$.ajax({
    method: 'POST',
    url: 'gd-report.php',
    data: { to_date: toDate, from_date: fromDate },
    success: function(data) {
        $('.gd-report').html(data);

    }
});


});


// Get FIR Report

$('#fir_from_date').change(function(){

    var toDate   = $("#fir_to_date").val();
    var fromDate = $("#fir_from_date").val();

    $.ajax({
        method: 'POST',
        url: 'fir-report.php',
        data: { to_date: toDate, from_date: fromDate },
        success: function(data) {
            $('.fir-report').html(data);
    
        }
    });

})


})



//JS PRINT DIV

function printDiv() 
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}