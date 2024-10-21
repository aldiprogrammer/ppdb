
<!-- Header-->

<div class="card bg-warning" style="border-radius: 0px;">
    <div class="card-body">
        <div class="container px-5">
            <h4>Halaman Login</h4>
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
                        <h4 class="text-center fw-bold mb-3">Login PPDB</h4>
                        <div class="card border-primary shadow">
                            <div class="card-body">
                                <form method="post" action="<?= base_url('app/act_login') ?>">
                                    <div class="form-group mt-3">
                                        <label>Username</label> 
                                        <input type="text" name="username" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Password</label> 
                                        <input type="password" name="pass" class="form-control" required id="myInput">
                                    </div>

                                    <input type="checkbox" class="mt-3" onclick="myFunction()"> Show Password

                                    <div class="form-group mt-5">
                                        <button class="btn btn-primary w-100 rounded-pill">Login</button>
                                    </div>

                                    <div>

                                        <div class="mt-3"> <small class="mt-3">Masukan username dan password anda dengan baik dan benar</small></div>
                                        <div>
                                            <small>
                                                Apakah anda sudah mepunyai akun ? 
                                            </small>
                                        </div>

                                        <div class="text-center my-4" >
                                            <a href="<?= base_url('app/register') ?>" style="text-decoration: none;">Register now</a> | 
                                            <a href="<?= base_url('app/lupapassword') ?>" style="text-decoration: none;">Forget  password</a> 

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col sm-6  mb-5 h-100">
                    <img class="img-fluid rounded-3" src="<?= base_url('assetsuser/img/drawlogin.png') ?>" alt="..." />
                    <p class="mb-0 text-center">Anda hanya dapat login dengan username dan password yang sudah anda daftarkan disistem kami</p>
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



