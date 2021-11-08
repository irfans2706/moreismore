<div class="container" style="margin-top: 35vh;">
    <div class="row justify-content-center">
        <div class="col-6 text-center">
            <form method="POST" action="<?=base_url()?>post_form" class="form-inline mb-5 justify-content-center">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" name="murdered" class="form-control" style="font-family: 'Poppins', sans-serif;" placeholder="Murderer?">
                </div>
                <button type="submit" class="btn btn-danger mb-2 d-none" style="font-family: 'Poppins', sans-serif;">Submit</button>
            </form>
            <a href="<?=base_url()?>clue" rel="noopener noreferrer"><p style="font-size: 60px; color: black;">Need clue?</p></a>
        </div>
    </div>
</div>