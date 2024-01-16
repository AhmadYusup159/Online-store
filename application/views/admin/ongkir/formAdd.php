<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Ongkir</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Ongkir</li>
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
                <h3 class="card-title">Data Ongkir</h3>
              </div>
             <form method="post" action="<?php echo site_url('ongkir/save'); ?>" class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Tujuan</label>
                  <div class="col-sm-9">
                    <input type="text" name="tujuan" class="form-control" id="inputEmail3" value="" placeholder="Nama Tujuan">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Kurir</label>
                  <div class="col-sm-9">
                  <select name="kurir" class="form-control">
                    <option value="J&T">J&T</option>
                    <option value="POS">POS</option>
                    <option value="JNE">JNE</option>
                  </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Ongkos</label>
                  <div class="col-sm-9">
                    <input type="text" name="ongkos" class="form-control" id="inputEmail3" value="" placeholder="Ongkos">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button  type="submit" class="btn btn-info float-right">Simpan</button>
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

