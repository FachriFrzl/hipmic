// Sticky Header
window.onscroll = function() {myFunction()};

var header = document.getElementById("myNavbar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
};

// Menu
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

// Time counter 

var deadline = 'December 31 2022';
initializeClock('clockdiv', deadline);
console.log(deadline);
// var deadline = new Date(Date.now() + 15 * 24 * 60 * 60 * 1000);

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.now();
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
};

// time date countdown
function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
};

$(function(){
  $('.selectpicker').selectpicker();
});




// Counter

(function() {
  document.querySelectorAll('.counter').forEach(item => {
     let timer;
     let start = parseInt(item.innerText, 10),
         to = parseInt(item.getAttribute('data-to') || 0, 10),
         speed = parseInt(item.getAttribute('data-speed') || 0, 10);
     let count = start;
     if(start < to) {
        timer = setInterval(() => {
           count++;

           item.innerText = count;
           if(count >= to) {
              clearInterval(timer);
           }
        }, (speed / (to - start)));
     
     }
  });
})();




