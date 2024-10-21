
<!-- Header-->

<div class="card bg-warning" style="border-radius: 0px;">
    <div class="card-body">
        <div class="container px-5">
            <h4>Halaman Register</h4>
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
                        <h4 class="text-center fw-bold mb-3">Register PPDB</h4>
                        <div class="card border-primary shadow">
                            <div class="card-body">
                                <form method="post" action="<?= base_url('app/add_register') ?>">
                                    <div class="form-group mt-3">
                                        <label>Email</label> 
                                        <input type="email" name="email" class="form-control" required>
                                        <small class="text-danger"> <?php echo form_error('email'); ?></small>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Username</label> 
                                        <input type="text" name="username" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Password</label> 
                                        <input type="password" name="pass" class="form-control" required id="myInput">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label>Confirm password</label> 
                                        <input type="password" name="pass2" class="form-control" required id="myInput2">

                                    </div>
                                      <input type="checkbox" class="mt-3" onclick="myFunction()"> Show Password

                                    <div class="form-group mt-5">
                                        <button class="btn btn-primary w-100 rounded-pill">Register</button>
                                    </div>




                                    <div class="mt-3"> <small class="mt-3">Masukan username dan password anda dengan baik dan benar</small></div>
                                    <div>
                                        <small>
                                            Apakah anda sudah mepunyai akun ? 
                                        </small>
                                    </div>

                                    <div class="text-center my-4" >
                                        <a href="<?= base_url('app/login') ?>" style="text-decoration: none;">Login sekarang</a>  
                                        <!--  <a href="<?= base_url('app/register') ?>" style="text-decoration: none;">Lupa password</a> -->
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col sm-6  mb-5 h-100">

                        <img class="img-fluid rounded-3" src="<?= base_url('assetsuser/img/drawlogin.png') ?>" alt="..." />
                        <p class="mb-0 text-center">Anda hanya dapat login dengan username dan password yang sudah anda daftarkan disistem kami</p>
                    </div>

                </div>
            </div>
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

          var x = document.getElementById("myInput2");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }


    </script>




