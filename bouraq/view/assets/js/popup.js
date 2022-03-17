

$(document).ready(function () {

    $('.editbtn').on('click', function () {

        $('#BookingModel').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        // $('#update_id').val(data[0]);
        $('#Departure_City').val(data[0]);
        $('#Arrivale_City').val(data[1]);
        $('#Date_of_Departure').val(data[2]);
        $('#Arrival_Date').val(data[3]);
        $('#Price').val(data[4]);
        $('#jour_de_depart').val(data[5]);
    });
});
