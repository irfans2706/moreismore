<style>
    body{
        background: #e2102c;
    }
</style>
<div class="container-fluid text-white" id="resultPage" style="margin-top: 2rem; position: relative">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 text-center">
            <p class="text-white" style="font-size: 20px;">rentang perhatianmu:</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10 col-md-6 col-lg-8 text-center">
            <img src="<?=base_url()?>resources/img/result.gif?v=<?=$version?>" alt="" style="width: 100%; position: relative;">
            <p id="resultTime" class="d-none" style="position: absolute;top: 30%;left: 50%;transform: translate(-60%, 15%); font-size: 40px; color: black;"><?=$time?></p>
        </div>
    </div>
    <div class="row justify-content-center desc d-none" style="margin-top: -4rem;">
        <div class="col-12 col-md-6 col-lg-4 text-center">
            <p class="text-white" style="font-size: 20px;"><a href="<?=base_url()?>" style="font-size: 20px; color: #ef476e;" >coba lagi</a> atau coba kerjakan apa yang kamu tinggalkan sekarang ?</p>
        </div>
    </div>
    <div class="p-3 d-none d-md-none d-lg-none leaderboard-desktop" style="position: absolute; left: 10px; top: 10px; border: 1px solid white; border-radius: 2\10px;">
        <p style="font-size: 20px; font-align: center; width:200px;" class="mb-0 text-center text-white">Leaderboard</p>
        <hr class="my-2" style="border-color: white">
        <div class="container-fluid">
            <?php $no=1; foreach($leaderboard as $index => $row):
                if($no <=6 ):?>
                <div class="row">
                    <div class="col-8 px-0">
                        <p class="mb-0 text-white"><?=$no++?>. <?=$row['name']?></p>
                    </div>
                    <div class="col-4 px-0">
                        <p class="mb-0 text-white"><?=$row['time']?></p>
                    </div>
                </div>
            <?php 
                endif;
            endforeach; ?>
        </div>
    </div>
    <div class="row justify-content-center d-md-none d-lg-none leaderboard d-none" style="margin-top: 1rem;">
        <div class="col-12">
            <div class="p-3 " style="border: 1px solid black;">
                <p style="font-size: 20px; font-align: center;" class="mb-0 text-center text-white">Leaderboard</p>
                <hr class="my-2">
                <div class="container-fluid">
                    <?php $no=1; foreach($leaderboard as $index => $row):
                        if($no <=6 ):?>
                        <div class="row">
                            <div class="col-8 px-0">
                                <p class="mb-0 text-white"><?=$no++?>. <?=$row['name']?></p>
                            </div>
                            <div class="col-4 px-0">
                                <p class="mb-0 text-white"><?=$row['time']?></p>
                            </div>
                        </div>
                    <?php 
                        endif;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>