<div class="container" style="margin-top: 2rem;">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 text-center">
            <p style="font-size: 36px;">rentang perhatianmu:</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10 col-md-6 col-lg-6 text-center">
            <img src="<?=base_url()?>resources/img/result.gif?v=<?=$version?>" alt="" style="width: 100%; position: relative;">
            <p id="resultTime" class="d-none" style="position: absolute;top: 30%;left: 50%;transform: translate(-50%, -30%); font-size: 40px; color: black;"><?=$time?></p>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: -4rem;">
        <div class="col-12 col-md-6 col-lg-4 text-center">
            <p style="font-size: 20px;">pandangan kedepan! kamu baru saja ketinggalan kereta. ingin mengejarnya ?</p>
            <a href="<?=base_url()?>" style="font-size: 20px;" class="text-danger">coba lagi</a>
        </div>
    </div>
</div>