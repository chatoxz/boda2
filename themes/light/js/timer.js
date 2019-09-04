// Set the date we're counting down to
var countDownDate = new Date('Oct 19, 2019 20:30:00').getTime();


// Update the count down every 1 second
var intervalo = setInterval(function () {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    var days, hours, minutes, seconds;
    // If the count down is finished, write some text
    if (distance < 0) {
        //sale del loop del setinterval
        /*$('.number-wrap').hide();
        $('.separador-number-wrap').hide();
        $('.timer_dia').parent().addClass('time_up').removeClass('number-wrap').html('Felicidades!!!');
        clearInterval(intervalo);*/
        days = -Math.floor(distance / (1000 * 60 * 60 * 24));
        hours = -Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        minutes = -Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        seconds = -Math.floor((distance % (1000 * 60)) / 1000);
    } else {
        // Time calculations for days, hours, minutes and seconds
        days = Math.floor(distance / (1000 * 60 * 60 * 24));
        hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        seconds = Math.floor((distance % (1000 * 60)) / 1000);
    }
    // Display the result in the element with id='demo'
    $('.timer_dia').html(days + '');
    $('.timer_hora').html(hours + '');
    $('.timer_min').html(minutes + '');
    $('.timer_seg').html(seconds);


}, 1000);
