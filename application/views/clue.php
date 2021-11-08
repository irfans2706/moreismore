<div class="container" style="margin-top: 10vh;">
    <div class="row justify-content-center mb-3">
        <div class="col-12 text-center mb-5">
            <p style="font-size: 60px; color: black;">who is the murdered?</p>
        </div>
        <div class="col-6 col-md-6 col-lg-3 text-center">
            <img src="<?=base_url()?>resources/img/clue.png" class="clueImg" style="cursor: pointer;" width="100%" alt="">
            <p style="font-size: 40px; color: black; margin-top: 1rem;">Mosanja</p>
        </div>
        <div class="col-6 col-md-6 col-lg-3 text-center">
            <img src="<?=base_url()?>resources/img/clue.png" class="clueImg" style="cursor: pointer;" width="100%" alt="">
            <p style="font-size: 40px; color: black; margin-top: 1rem;">Rajapati</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 col-md-6 col-lg-3 text-center">
            <img src="<?=base_url()?>resources/img/clue.png" class="clueImg" style="cursor: pointer;" width="100%" alt="">
            <p style="font-size: 40px; color: black; margin-top: 1rem;">Satsujinsha</p>
        </div>
        <div class="col-6 col-md-6 col-lg-3 text-center">
            <img src="<?=base_url()?>resources/img/clue.png" class="clueImg" style="cursor: pointer;" width="100%" alt="">
            <p style="font-size: 40px; color: black; margin-top: 1rem;">Asesino</p>
        </div>
    </div>
</div>

<script>
    $(".clueImg").click(function(){
        $(this).css({"backgroundColor" : "black"});
    });
</script>