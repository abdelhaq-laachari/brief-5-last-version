
// /*
//  * Modal popup
//  */
// // Get the modal
// var modal = $('#modalDialog');

// // Get the button that opens the modal
// var btn = $("#mbtn");

// // Get the  element that closes the modal
// var span = $(".close");

// $(document).ready(function(){
//     // When the user clicks the button, open the modal 
//     btn.on('click', function() {
//         modal.show();
//     });
    
//     // When the user clicks on  (x), close the modal
//     span.on('click', function() {
//         modal.hide();
//     });
// });

// // When the user clicks anywhere outside of the modal, close it
// $('body').bind('click', function(e){
//     if($(e.target).hasClass("modal")){
//         modal.hide();
//     }
// });




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
    });
});