function countdown(endDate) {
  let days, hours, minutes, seconds;
  
  endDate = new Date(endDate).getTime();
  
  if (isNaN(endDate)) {
	return;
  }
  
  setInterval(calculate, 1000);
  
  function calculate() {
    let startDate = new Date();
    startDate = startDate.getTime();
    
    let timeRemaining = parseInt((endDate - startDate) / 1000);
    
    if (timeRemaining >= 0) {
      days = parseInt(timeRemaining / 86400);
      timeRemaining = (timeRemaining % 86400);
      
      hours = parseInt(timeRemaining / 3600);
      timeRemaining = (timeRemaining % 3600);
      
      minutes = parseInt(timeRemaining / 60);
      timeRemaining = (timeRemaining % 60);
      
      seconds = parseInt(timeRemaining);
      
      document.getElementById("days").innerHTML = "<span>" + parseInt(days, 10) + " : </span>" + "<span class='text-countdown'>DÍAS</span>";
      document.getElementById("hours").innerHTML = "<span>" + ("0" + hours).slice(-2) + " : </span>" + "<span class='text-countdown'>HORAS</span>";
      document.getElementById("minutes").innerHTML = "<span>" + ("0" + minutes).slice(-2) + " : </span>" + "<span class='text-countdown'>MINUTOS</span>";
      document.getElementById("seconds").innerHTML = "<span>" + ("0" + seconds).slice(-2) + "</span>" + "<span class='text-countdown'>SEGUNDOS</span>";
    } else {
      return;
    }
  }
}

(function () { 
  countdown('10/01/2020 11:59:00 PM'); 
}());