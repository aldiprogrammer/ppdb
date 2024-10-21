
<!-- Header-->

<div class="card bg-warning" style="border-radius: 0px;">
    <div class="card-body">
        <div class="container px-5">
            <h4>Halaman Lupa Password</h4>
        </div>

    </div>
</div>

<!-- Features section-->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">

            <div class="col-lg-12">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col sm-6">
                        <h4 class="text-center fw-bold mb-3">Forget Password</h4>
                        <div class="card border-primary shadow">
                            <div class="card-body">
                                <form method="post" action="<?= base_url('app/cek_email') ?>">
                                    <div class="form-group mt-3">
                                        <label>Email</label> 
                                        <input type="email" name="email" class="form-control" required>
                                        
                                    </div>
                                    <div class="mt-1"> <small class="mt-3">Masukan email anda dengan benar untuk mengecek akun email anda terdaftar atau belum </small></div>
                                    
                                    <div class="form-group mt-3">

                                     <button type='submit' class='btn btn-primary w-100'>Cek Email</button>
                                 </div>
                                 <div>



                                 </form>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>

             <div class="col sm-6  mb-5 h-100">
                <img class="img-fluid rounded-3" src="<?= base_url('assetsuser/img/drawlogin.png') ?>" alt="..." />
                <p class="mb-0 text-center">Cek email anda yang sudah terdaftar untuk melakukan reset password</p>
            </div>

        </div>
    </div>
</form>
</div>
</section>

<script>

    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>



