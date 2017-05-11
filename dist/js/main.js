// XMLHttpRequest to server with the date to parse done with
var form = document.getElementById('form-date-form');
var doneRequest = new XMLHttpRequest();

form.addEventListener('submit', (e)=>{
  e.preventDefault();
  doneRequest.addEventListener('load', function() {
    document.getElementById('daily-stand-up').innerHTML = this.responseText;
  });
  var date = document.getElementById('date-field');
  doneRequest.open('GET', `daily-stand-up.php?date=${date.value}`);
  doneRequest.send();
});



