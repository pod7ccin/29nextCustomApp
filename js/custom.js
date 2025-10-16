$(document).ready(function() {
    /* $('.radio-section input[type="radio"]').on('change', function() {
    $('.radio-section input[type="radio"]').not(this).prop('checked', false);
    $('.radio-section input[type="radio"]').closest('li').addClass('active');
    $('.radio-section input[type="radio"]').not(this).closest('li').removeClass('active');
    }); */

    // var countdownInterval;

    $('.radio-section').on("click", function () {
        $('.radio-section').closest('li').addClass('active');
        $(this).addClass('dispop'); 
        $('.radio-section').not(this).closest('li').removeClass('active');
        $('.radio-section').not(this).removeClass('dispop');

        $(this).find('input[type="radio"]').prop('checked', true);
        $('.radio-section').not(this).find('input[type="radio"]').prop('checked', false);

        //clearInterval(countdownInterval);
        //startCountdown(600);
    });

    // function startCountdown(seconds) {
    //     clearInterval(countdownInterval);
    //     var endTime = new Date().getTime() + seconds * 1000;

    //     function updateCountdown() {
    //     var currentTime = new Date().getTime();
    //     var remainingTime = endTime - currentTime;

    //     if (remainingTime <= 0) {
    //         clearInterval(countdownInterval);
    //         document.getElementById('ten-countdown').textContent = '0:00';
    //     } else {
    //         var minutes = Math.floor(remainingTime / (1000 * 60));
    //         var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
    //         if(seconds < 10){
	//             seconds = `0${Math.floor((remainingTime % (1000 * 60)) / 1000)}`
    //         }
    //         document.getElementById('ten-countdown').textContent = `${minutes}:${seconds}`;
    //     }
    //     }

    //     updateCountdown();
    //     countdownInterval = setInterval(updateCountdown, 1000);
    // }


          function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            element.innerHTML = "00:00";
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}

countdown( "countDown", 10, 0 );

    /* $('.payment-section-head input[type="radio"]').on('change', function() {
    $(this).closest('.payment-section').addClass('active');
    $('.payment-section-body').slideDown();
    }); */

    $("#sameShippingBilling").click(function() {
    if($(this).is(":checked")) {
        $(".billing-address-body").slideUp();
    } else {
        $(".billing-address-body").slideDown();
    }
    });

    let ytLoader = document.getElementById('yt-loader').clientHeight;
    let header = document.getElementById('header').clientHeight;
    let blackStripe = document.getElementById('black-stripe').clientHeight;
    let checkoutBonusDealsReciept = document.getElementById('checkout-bonusDeals-reciept').clientHeight;
    // let greenStripe = document.getElementById('green-stripe').clientHeight;
    let expressCheckout = document.getElementById('express-checkout').clientHeight;
    let paypalGpayButtons = document.getElementById('paypal-gpay-buttons').clientHeight;
    let ChooseYourPackage = document.getElementById('Choose-your-package').clientHeight;
    let ChooseYourPackageSection = document.getElementById('Choose-your-package-section').clientHeight;
    let shippingAddress = document.getElementById('shipping-address').clientHeight;
    let enterYourShippingDetails = document.getElementById('enter-your-shipping-details').clientHeight;
    let formTopPart = document.getElementById('form-top-part').clientHeight;
    // let totalHeight = ytLoader + header + blackStripe + checkoutBonusDealsReciept + greenStripe + expressCheckout + paypalGpayButtons + ChooseYourPackage + ChooseYourPackageSection + shippingAddress + enterYourShippingDetails + formTopPart;

    let totalHeight = ytLoader + header + blackStripe + checkoutBonusDealsReciept  + expressCheckout + paypalGpayButtons + ChooseYourPackage + ChooseYourPackageSection + shippingAddress + enterYourShippingDetails + formTopPart;

    $(window).scroll(function(){
    let scroll = $(window).scrollTop();
    if (scroll >= totalHeight) {
        $(".floating-cart").addClass('active');
    } else $(".floating-cart").removeClass('active');
    });

    $('.form-control').focusout(function() {
    const textVal = $(this).val();
    if (textVal === "") {
        $(this).removeClass('has-value');
    } else {
        $(this).addClass('has-value');
    }
    });

    /* document.addEventListener('DOMContentLoaded', function() {
    let countdownTime = localStorage.getItem('countdownTime') || 600;
    const countdownElement = document.getElementById('ten-countdown');
    function updateCountdown() {
        const minutes = Math.floor(countdownTime / 60);
        const seconds = countdownTime % 60;
        countdownElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        localStorage.setItem('countdownTime', countdownTime);
        if (countdownTime === 0) {
        clearInterval(countdownInterval);
        } else {
        countdownTime--;
        }
    }
    const countdownInterval = setInterval(updateCountdown, 1000);
    updateCountdown();
    }); */

    /* document.addEventListener('DOMContentLoaded', function() {
    let countdownTime = localStorage.getItem('countdownTime') || 600;
    const countdownElement = document.getElementById('ten-countdown');

    function updateCountdown() {
        let minutes = Math.floor(countdownTime / 60);
        let seconds = countdownTime % 60;
        countdownElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        localStorage.setItem('countdownTime', countdownTime);

        if (countdownTime === 0) {
        clearInterval(countdownInterval);
        } else {
        countdownTime--;
        }
    }

    const countdownInterval = setInterval(updateCountdown, 1000);

    if (countdownTime === 0) {
        clearInterval(countdownInterval);
        // localStorage.setItem('countdownTime', 0);
    }

    updateCountdown();
    }); */

    /* const countdownTimeInSeconds = 10 * 60;
    let remainingTime = localStorage.getItem('remainingTime');
    if (remainingTime === null || isNaN(parseInt(remainingTime))) {
    remainingTime = countdownTimeInSeconds;
    localStorage.removeItem('remainingTime');
    } else {
    remainingTime = parseInt(remainingTime, 10);
    }
    updateTimerDisplay();
    const timerInterval = setInterval(() => {
    remainingTime--;
    updateTimerDisplay();
    localStorage.setItem('remainingTime', remainingTime);
    if (remainingTime <= 0) {
        document.getElementById('ten-countdown').textContent = '0:00';
        localStorage.setItem('remainingTime', '0');
        clearInterval(timerInterval);
    }
    }, 1000);

    function updateTimerDisplay() {
    const minutes = Math.floor(remainingTime / 60);
    const seconds = remainingTime % 60;
    document.getElementById('ten-countdown').textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    } */

    // $("input").focusin(function(){
    //     $("#inputEmail").addClass('default-border');
    // });

    // $("input").focusout(function(){
    //     var inputValue = $(this).val();
        
    //     if(inputValue.trim() === "") {
    //         $("#inputEmail").removeClass('default-border');
    //     } else {
    //         $("#inputEmail").addClass('default-border');
    //     }
    // });

    $("input").focusout(function(){
        var $input = $(this);

        setTimeout(function() {
            // for tick & error icon
            if ($input.hasClass('no-error')) {
                $input.parent().removeClass('addErrorIcon');
                $input.parent().addClass('addTick');
            } else {
                $input.parent().removeClass('addTick');
            }

            if ($input.hasClass('has-error')) {
                $input.parent().removeClass('addTick');
                $input.parent().addClass('addErrorIcon');
            } else {
                $input.parent().removeClass('addErrorIcon');
            }
        }, 500);
    });


});