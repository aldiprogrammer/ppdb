<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; PPDB2024</div></div>
            <div class="col-auto">
              <!--   <a class="link-light small" href="#!">Privacy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Terms</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Contact</a> -->
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?= base_url('assetssuser/') ?>js/scripts.js"></script>
<script src="<?php echo base_url() ?>assets/alert.js"></script>

<?php echo "<script>".$this->session->flashdata('message')."</script>"?>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    $("#prov").change(function(){
        var value = $("#prov").val();
        // alert(value)
        var url = "<?= base_url('admin/get_kab?id=') ?>"+value;
        $("#kab").load(url);
    });

    $("#kab").change(function(){
        var value = $("#kab").val();
        var url = "<?= base_url('admin/get_kec?id=') ?>"+value;
        $("#kec").load(url);
    });

    $("#kec").change(function(){
        var value = $("#kec").val();
        var url = "<?= base_url('admin/get_kel?id=') ?>"+value;
        $("#kel").load(url);
    });


</script> 
</body>
</html>