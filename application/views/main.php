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
        <source src="<?=base_url()?>resources/talk.mp3?v=1" type="audio/mp3">
    </audio>
    <audio id="endTalk">
        <source src="<?=base_url()?>resources/end.mp3" type="audio/mp3">
    </audio>
    <audio id="timerAudio">
        <source src="<?=base_url()?>resources/timer.mp3" type="audio/mp3">
    </audio>
    <img src="<?=base_url()?>resources/img/timer.png" class="d-none" alt="" id="seconds" width="70px">
    <p class="text-danger d-none" id="secondsLabel" style="font-size: 14px;z-index: 2;"></p>
    <img src="<?=base_url()?>resources/plus.gif?v=2" class="text-danger d-none" id="thirdLabel" style="position: fixed;font-size: 14px;z-index: 2;display: none;right: 50px;bottom: 50px;" width="50px">
    <div class="row justify-content-center">
        <div class="col-12 text-center mainFrame p-0">
            <img src="<?=base_url()?>resources/img/main.gif?v=<?=$version?>" id="mainImg" alt="" style="width: 100%;">
            <img src="<?=base_url()?>resources/img/play.gif" class="d-none" alt="" style="width: 70%;">
            <img src="<?=base_url()?>resources/img/distraction1.jpg" class="d-none" alt="" style="width: 70%;">
            <img src="<?=base_url()?>resources/img/final.jpg" class="d-none" alt="" style="width: 70%;">
        </div>
    </div>
</div>