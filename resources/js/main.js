$(document).ready(function() {
    let baseUrl = document.getElementById("baseUrl").value;
    let countDown = new Date().getTime();
    let termsAnimate = false;
    countDown = new Date((countDown + 9000))

    const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        x = window.setInterval(function() {    
            let now = new Date().getTime(),
                distance = countDown - now;
    
            document.getElementById("seconds").innerText = "00:00:0"+ (distance > 0 ? Math.floor((distance % (minute)) / second) : 0);
            
            //do something later when date is reached
            if (distance <= 0) {
                clearInterval(x);
                window.location.replace(baseUrl+"result");
            }
            //seconds
        }, 0)
    
    let indexInterval = 1;
    var intervalId = window.setInterval(function(){
        if(indexInterval%2 == 1){
            if(!termsAnimate){
                document.getElementById("mainImg").src = baseUrl + "resources/img/main-1.jpg"; 
            }else{
                document.getElementById("mainImg").src = baseUrl + "resources/img/main-reset.jpg";
                setTimeout(function() {
                    termsAnimate = false;
                }, 2000);
            }
        }else{
            if(!termsAnimate){
                document.getElementById("mainImg").src = baseUrl + "resources/img/main-2.jpg"; 
            }else{
                document.getElementById("mainImg").src = baseUrl + "resources/img/main-reset-2.jpg"; 
            }
        }
        indexInterval++;
    }, 500);

    $( "#mainImg" ).click(function() {
        termsAnimate = true;
        let terms = new Date().getTime();
        countDown = new Date((terms + 9000))
    });

    $( "#resultPage" ).click(function() {
        $(".leaderboard-desktop").removeClass("d-md-none");
        $(".leaderboard-desktop ").removeClass("d-lg-none");
        $(".leaderboard-desktop ").addClass("d-md-block");
        $(".leaderboard-desktop ").addClass("d-lg-block");
        $(".leaderboard ").removeClass("d-none");
        $(".desc ").removeClass("d-none");
    });

    setTimeout(function() {
        $("#resultTime").removeClass("d-none");
      }, 2000);

    $(document).bind('mousemove', function(e){
        $('#seconds').css({
            left: e.pageX + 5,
            top: e.pageY - 20
        });
    });
});