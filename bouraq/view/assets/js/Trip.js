$(document).ready(function () {

    $('.editbtn').on('click', function () {
    
        $('#BookingModel').modal('show');
    
        $tr = $(this).closest('tr');
    
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
    
        console.log(data);
    
        $('#idTicket').val(data[0]);
        $('#Departure_City').val(data[1]);
        $('#Arrivale_City').val(data[2]);
        $('#Date_of_Departure').val(data[3]);
        $('#Arrival_Date').val(data[4]);
        $('#Price').val(data[5]);
        $('#jour_de_depart').val(data[6]);
    });
    });