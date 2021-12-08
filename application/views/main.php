<div class="container m-0 p-0" style="max-width: 100%;">
    <audio loop autoplay id="myaudio">
        <source src="<?=base_url()?>resources/main.mp3" type="audio/mp3">
    </audio>
    <audio loop id="notif-1">
        <source src="<?=base_url()?>resources/notif-1.mp3" type="audio/mp3">
    </audio>
    <audio loop id="notif-2">
        <source src="<?=base_url()?>resources/notif-2.mp3" type="audio/mp3">
    </audio>
    <audio loop id="notif-3">
        <source src="<?=base_url()?>resources/notif-3.mp3" type="audio/mp3">
    </audio>
    <audio loop id="notif-4">
        <source src="<?=base_url()?>resources/notif-4.mp3" type="audio/mp3">
    </audio>
    <audio loop autoplay id="talk">
        <source src="<?=base_url()?>resources/talk.mp3" type="audio/mp3">
    </audio>
    <audio id="timerAudio">
        <source src="<?=base_url()?>resources/timer.mp3" type="audio/mp3">
    </audio>
    <img src="<?=base_url()?>resources/img/timer.png" class="d-none" alt="" id="seconds" width="70px">
    <p class="text-danger d-none" id="secondsLabel" style="font-size: 14px;z-index: 2;"></p>
    <p class="text-danger d-none" id="thirdLabel" style="position: fixed; font-size: 14px;z-index: 2;"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></p>
    <div class="row justify-content-center">
        <div class="col-12 text-center mainFrame p-0">
            <img src="<?=base_url()?>resources/img/main.gif?v=<?=$version?>" id="mainImg" alt="" style="width: 100%;">
            <img src="<?=base_url()?>resources/img/play.gif" class="d-none" alt="" style="width: 70%;">
            <img src="<?=base_url()?>resources/img/distraction1.jpg" class="d-none" alt="" style="width: 70%;">
        </div>
    </div>
</div>