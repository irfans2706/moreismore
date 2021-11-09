<div class="container-fluid" style="position: relative">
    <div class="row justify-content-center">
        <div class="col-10 col-md-6 col-lg-6 text-center" style="margin-top: 40vh;">
            <form action="<?=base_url()?>post_form" method="post">
                <p style="font-size: 36px;">Bolehkah meminta perhantianmu?</p>
                <input type="text" name="name" class="form-control form-control-lg" placeholder="Isi Nama Pemain" style="text-align: center;" maxlength="15">
                <button class="btn btn-primary" type="submit" style="margin-top: 30vh">Klik untuk memulai</button>
            </form>
        </div>
    </div>
    <div class="p-3" style="position: absolute; left: 10px; top: 10px; border: 1px solid black; border-radius: 2\10px;">
        <p style="font-size: 20px; font-align: center; width:200px;" class="mb-0 text-center">Leaderboard</p>
        <hr class="my-2">
        <div class="container-fluid">
            <?php $no=1; foreach($leaderboard as $index => $row): 
                if($index <=5 ):?>
                <div class="row">
                    <div class="col-8 px-0">
                        <p class="mb-0"><?=$no++?>. <?=$row->name?></p>
                    </div>
                    <div class="col-4 px-0">
                        <p class="mb-0"><?=$row->time?></p>
                    </div>
                </div>
            <?php 
                endif;
            endforeach; ?>
        </div>
    </div>
</div>