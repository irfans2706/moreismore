$(document).ready(function() {
    let baseUrl = document.getElementById("baseUrl").value;
    let countDown = new Date().getTime();
    countDown = new Date((countDown + 9000))

    const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        x = window.setInterval(function() {    
            let now = new Date().getTime(),
                distance = countDown - now;
    
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second) + " Detik";
            
            //do something later when date is reached
            if (distance <= 0) {
            // window.location.replace(baseUrl+"done");
            clearInterval(x);
            }
            //seconds
        }, 0)
    
    let indexInterval = 1;
    var intervalId = window.setInterval(function(){
        if(indexInterval%2 == 1){
            document.getElementById("mainImg").src = baseUrl + "resources/img/main-1.jpg"; 
        }else{
            document.getElementById("mainImg").src = baseUrl + "resources/img/main-2.jpg"; 
        }
        indexInterval++;
    }, 500);

    $( "#mainImg" ).click(function() {
        document.getElementById("mainImg").src = baseUrl + "resources/img/main-reset.jpg";
        let terms = new Date().getTime();
        countDown = new Date((terms + 9000))
      });
});