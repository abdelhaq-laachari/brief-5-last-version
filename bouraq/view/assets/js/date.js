
// var today = new Date().toISOString().slice(0, 16);
var Pdate = new Date();
var date = Pdate.getDate();
var month = Pdate.getMonth() + 1;
var year = Pdate.getUTCFullYear();

if(date < 10)
{
    date = '0' + date;
}
if(month < 10)
{
    month = '0' + month;
}

var minDate = year + "-" + month + "-" + date ;
document.getElementById("PasteDate").setAttribute('min' , minDate);

// document.getElementsByName("today")[0].min = today;


