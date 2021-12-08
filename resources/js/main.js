$(document).ready(function() {
    let baseUrl = document.getElementById("baseUrl").value;
    let countDown = new Date().getTime();
    let termsAnimate = false;
    countDown = new Date((countDown + 9000))
    let termsDistraction = true
    let termsPlay = false
    let termsNotif = 1
    var notif1 = document.getElementById("notif-1");
    var notif2 = document.getElementById("notif-2");
    var notif3 = document.getElementById("notif-3");
    var notif4 = document.getElementById("notif-4");
    var talkAudio = document.getElementById("talk");
    var timerAudio = document.getElementById("timerAudio");

    const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        x = window.setInterval(function() {    
            let now = new Date().getTime(),
                distance = countDown - now;
    
            document.getElementById("secondsLabel").innerText = "00:00:0"+ (distance > 0 ? Math.floor((distance % (minute)) / second) : 0);
            
            //do something later when date is reached
            if (distance <= 0) {
                clearInterval(x);
                notif1.pause()
                notif2.pause()
                notif3.pause()
                notif4.pause()

                $("#mainImg").removeClass("distraction1");
                $("#mainImg").removeClass("distraction2");
                if(document.getElementById("mainImg").src != baseUrl + "resources/img/play.gif"){
                    document.getElementById("mainImg").src = baseUrl + "resources/img/play.gif";
                }

                setTimeout(function() {
                    window.location.replace(baseUrl+"result");
                }, 3000);

            }else if(distance >= 6000 && termsPlay){
                $("#mainImg").removeClass("distraction1");
                $("#mainImg").removeClass("distraction2");
                if(document.getElementById("mainImg").src != baseUrl + "resources/img/play.gif"){
                    document.getElementById("mainImg").src = baseUrl + "resources/img/play.gif";
                }

                termsDistraction = true;
                termsPlay = false;
                notif1.pause()
                notif2.pause()
                notif3.pause()
                notif4.pause()
                talkAudio.play()
            }else if(distance < 6000){
                if(termsDistraction){
                    if(distance%2 == 0){
                        document.getElementById("mainImg").src = baseUrl + "resources/img/distraction1.gif";
                        $("#mainImg").removeClass("distraction2");
                        $("#mainImg").addClass("distraction1");
                        talkAudio.pause()
                    }else{
                        document.getElementById("mainImg").src = baseUrl + "resources/img/play.gif";
                        $("#mainImg").removeClass("distraction1");
                        $("#mainImg").addClass("distraction2");
                        talkAudio.pause()

                        if(termsNotif == 1){
                            notif1.play();
                            termsNotif++;
                        }else if(termsNotif == 2){
                            notif2.play();
                            termsNotif++;
                        }else if(termsNotif == 3){
                            notif3.play();
                            termsNotif++;
                        }else if(termsNotif == 4){
                            notif4.play();
                            termsNotif++;
                        }

                        if(termsNotif == 5){
                            termsNotif = 1;
                        }
                    }
                    termsDistraction = false;
                }
            }
            //seconds
        }, 0)
    
    let indexInterval = 1;
    var intervalId = window.setInterval(function(){
        // if(indexInterval%2 == 1){
        //     if(!termsAnimate){
        //         document.getElementById("mainImg").src = baseUrl + "resources/img/main-1.jpg"; 
        //     }else{
        //         document.getElementById("mainImg").src = baseUrl + "resources/img/main-reset.jpg";
        //         setTimeout(function() {
        //             termsAnimate = false;
        //         }, 2000);
        //     }
        // }else{
        //     if(!termsAnimate){
        //         document.getElementById("mainImg").src = baseUrl + "resources/img/main-2.jpg"; 
        //     }else{
        //         document.getElementById("mainImg").src = baseUrl + "resources/img/main-reset-2.jpg"; 
        //     }
        // }
        indexInterval++;
    }, 500);

    $( "#mainImg" ).click(function() {
        timerAudio.volume = 0.5;
        timerAudio.play();

        $("#thirdLabel").fadeIn();
        $("#thirdLabel").fadeOut();

        termsAnimate = true;
        termsPlay = true;
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
        $(".forMore").addClass("d-none");
    });

    setTimeout(function() {
        $("#resultTime").removeClass("d-none");
      }, 2000);

    setTimeout(function() {
        $("#seconds").removeClass("d-none");
        $("#secondsLabel").removeClass("d-none");
        $("#thirdLabel").removeClass("d-none");
        $("#thirdLabel").fadeOut();
      }, 2000);

    setTimeout(function() {
        document.getElementById("mainImg").src = baseUrl + "resources/img/play.gif";
        termsPlay = true;
    }, 2000);

    $(document).bind('mousemove', function(e){
        $('#seconds').css({
            left: e.pageX + 5,
            top: e.pageY - 20
        });
        $('#secondsLabel').css({
            left: e.pageX + 5 + 9,
            top: e.pageY - 20 + 28
        });
        $('#thirdLabel').css({
            left: e.pageX + 5 - 35,
            top: e.pageY - 20 + 20
        });
    });

    function drag_start(event) {
        var style = window.getComputedStyle(event.target, null);
        event.dataTransfer.setData("text/plain", (parseInt(style.getPropertyValue("left"), 10) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top"), 10) - event.clientY) + ',' + event.target.getAttribute('data-item'));
    }
    
    function drag_over(event) {
        event.preventDefault();
        return false;
    }
    
    function drop(event) {
        var offset = event.dataTransfer.getData("text/plain").split(',');
        var dm = document.getElementsByClassName('dragme');
        dm[parseInt(offset[2])].style.left = (event.clientX + parseInt(offset[0], 10)) + 'px';
        dm[parseInt(offset[2])].style.top = (event.clientY + parseInt(offset[1], 10)) + 'px';
        event.preventDefault();
        return false;
    }
    
    var dm = document.getElementsByClassName('dragme');
    for (var i = 0; i < dm.length; i++) {
        dm[i].addEventListener('dragstart', drag_start, false);
        document.body.addEventListener('dragover', drag_over, false);
        document.body.addEventListener('drop', drop, false);
    }

    audio = document.getElementById("myaudio");
    audio.volume = 0.2;
});