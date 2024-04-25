$('#cancelMSG').hide();
$('#staffmsg').fadeOut(2000)
$('.del').click(function(){
    
    $('#myIdko').text($('.idko').val())
    $('.confirmMSG').show();
})

$('.cancel').click(function(){
    $('.confirmMSG').hide();
    $('#cancelMSG').fadeIn(500);
    $('#cancelMSG').fadeOut(5000);



})

let table = new DataTable('#myTable');