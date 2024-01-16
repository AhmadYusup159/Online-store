<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Password Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <?php echo $this->session->flashdata('pesan') ?>
             <form class="form-horizontal" method="post" action="<?php echo site_url('adminpanel/edit'); ?>">
                <input type="hidden" name="id" >
                <div class="card-body">
                    <div class="form-group row">
                        <label for="password_aktif" class="col-sm-3 col-form-label">Password Saat ini</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" id="password_aktif" >
                            <?php echo form_error('password','<div class="text-danger small ml-2">','</div>');?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password1" class="col-sm-3 col-form-label">Password baru</label>
                        <div class="col-sm-9">
                            <input type="password" name="password1" class="form-control" id="password1" >
                            <?php echo form_error('password1','<div class="text-danger small ml-2">','</div>');?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password2" class="col-sm-3 col-form-label">Ketik Ulang Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password2" class="form-control" id="password2" >
                            <?php echo form_error('password2','<div class="text-danger small ml-2">','</div>');?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Simpan</button>
                </div>
            </form>
            </div>
            <!-- /.card -->
          </div>
           <!-- /.card-body -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

