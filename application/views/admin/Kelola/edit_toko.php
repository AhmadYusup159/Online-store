<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Toko</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Toko</li>
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
            <div class="card card-info" style="width: 50rem;">
              <div class="card-header" >
                <h3 class="card-title">Data Toko</h3>
                
              </div>
             <form class="form-horizontal" method="post" action="<?php echo site_url('kelola/edit'); ?>">
                <input type="hidden" name="id" value="<?php echo $toko->idToko; ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama toko</label>
                        <div class="col-sm-9">
                            <input type="text" name="namaToko" value="<?php echo $toko->namaToko; ?>" class="form-control" id="inputEmail3" placeholder="Nama Kategori">
                            <?php echo form_error('namaToko','<div class="text-danger small ml-2">','</div>');?>
                          </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Logo</label>
                        <div class="col-sm-9">
                        <p class="help-block text-danger">*Logo tidak boleh di ubah</p>
                        <?php echo '<img src="' . base_url('assets/logo_toko/' . $toko->logo) . '">';?>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" id="massage" name="deskripsi" placeholder="Deskripsi"></textarea>
                            <?php echo form_error('deskripsi','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
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





