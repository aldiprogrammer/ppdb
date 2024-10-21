

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $user ?></h3>

          <p>Data User</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>

        <a href="<?= base_url('admin/data_user') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

      </div>
    </div>
    <!-- ./col -->
    
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?= $siswa ?></h3>

          <p>Data Calon Siswa</p>
        </div>
        <div class="icon">
          <i class="ion ion-clock"></i>
        </div>
        <a href="<?= base_url('admin/calon_siswa') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?= $admin ?></h3>

          <p>Data Admin</p>
        </div>
        <div class="icon">
          <i class="ion ion-calander"></i>
        </div>
        <a href="<?= base_url('admin/data_admin') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

      </div>
    </div>

   <!--  <div class="col-lg-3 col-xs-6">

      <div class="small-box bg-blue">
        <div class="inner">
          <h3><?= $team ?></h3>

          <p>Data Team</p>
        </div>
        <div class="icon">
          <i class="ion ion-calander"></i>
        </div>

      </div>
    </div>

  -->
  <!-- ./col -->

  <!-- ./col -->
</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">
  <!-- Left col -->
  <section class="col-lg-7 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->

    <!-- /.nav-tabs-custom -->

    <!-- Chat box -->

    <!-- /.box (chat box) -->

    <!-- TO DO List -->

    <!-- /.box -->

    <!-- quick email widget -->




    <h3>Selamat datang di halaman admin PPDB SDN 056639 Jasa Makmur</h3>
    <!-- Calendar -->
    <div class="box box-solid bg-green-gradient">
      <div class="box-header">
        <i class="fa fa-calendar"></i>

        <h3 class="box-title">Calendar</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <!-- button with a dropdown -->
            <!-- <div class="btn-group">
              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bars"></i></button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><a href="#">Add new event</a></li>
                  <li><a href="#">Clear events</a></li>
                  <li class="divider"></li>
                  <li><a href="#">View calendar</a></li>
                </ul>
              </div> -->
              <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
              </button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
          </div>
          <!-- /.box-body -->

        </div>
        <!-- /.box -->

        

      </section>
      <!-- right col -->
      
     <div class='col-lg-4'>
         <img src="<?= base_url('assets/ppdb.png') ?>" class="img-fluid" alt="...">
     </div> 
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper --