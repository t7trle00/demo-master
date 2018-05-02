$(function xxxx() {
$('#datetimepicker_checkin').datetimepicker({

            format: 'YYYY-MM-DD',
            // $('#datetimepicker_checkin').mindate($('#start_d.value'));
        });
$('#datetimepicker_checkout').datetimepicker({
    useCurrent: false ,
    format: 'YYYY-MM-DD'  //Important! See issue #1075
});
$("#datetimepicker_checkin").on("dp.change", function (e) {
    $('#datetimepicker_checkin').data("DateTimePicker").minDate(start_d.value);
    $('#datetimepicker_checkin').data("DateTimePicker").maxDate(end_d.value);
  
    // console.log(typeof start_d.value);
});
$("#datetimepicker_checkout").on("click", function (e) {
  $('#datetimepicker_checkout').data("DateTimePicker").minDate(chkin.value);
  $('#datetimepicker_checkout').data("DateTimePicker").maxDate(end_d.value);
});
$("#datetimepicker_checkout").on("dp.change", function (e) {
  countingDate();
});
});
function countingDate(){
  var s_d = Date.parse(chkin.value) ;
  var e_d = Date.parse(chkout.value) ;
  var minute = 1000 *60 ;
  var hour = minute * 60 ;
  var day = hour * 24 ;
  console.log(e_d-s_d) ;
  var d = Math.round( ((e_d - s_d)/ day) + 1) ;
  console.log(d) ;
  var base_price =(document.getElementById('price').value) ;
  console.log(base_price) ;
  var total = d*base_price ;
  document.getElementById('total').innerHTML =d + " days" + " * " + base_price + "&euro; ";
  document.getElementById('totalprices').innerHTML = "Total: " + total + "&euro; ";
  document.getElementById('test3').value = total;
  document.getElementById('test').value = document.getElementById('chkin').value;
  document.getElementById('test2').value = document.getElementById('chkout').value;
};
