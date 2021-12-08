<div class="container-fluid p-0" style="background: url('./resources/img/index.gif');background-position: center;background-repeat: no-repeat;background-size: cover; height: 100vh">
    <div class="row justify-content-center">
        <div class="col-10 col-md-6 col-lg-6 text-center" style="margin-top: 40vh;">
            <audio loop autoplay id="myaudio">
                <source src="<?=base_url()?>resources/main.mp3" type="audio/mp3">
            </audio>
            <form action="<?=base_url()?>post_form" method="post">
                <p style="font-size: 20px;" class="text-white">Bolehkah meminta perhatianmu?</p>
                <input type="text" name="name" class="text-white" placeholder="isi nama pemain" style="border-radius: 15px;background: transparent;text-align: center;font-size: 18px;border: 1px solid white;padding: 5px;width: 100%;display: block;" maxlength="15">
                <button class="btn text-white" type="submit" style="margin-top: 30vh; background: transparent;">Klik untuk memulai</button>
            </form>
        </div>
    </div>
</div>