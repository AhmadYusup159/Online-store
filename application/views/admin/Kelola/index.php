<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Kategori</li>
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
            <div class="card" style="width: 55rem;">
              <div class="card-header">
                <h3 class="card-title">Data Kategori</h3>
              </div>
              <?php echo $this->session->flashdata('pesan') ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 150px">Nama toko</th>
                      <th style="width: 150px">Pemilik</th>
                      <th style="width: 150px">Logo toko</th>
                      <th style="width: 150px">Deskripsi Toko</th>
                      <th style="width: 150px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($toko as $val){?>
                    <tr>
                      <td><?php echo $no;?></td>

                      <td><?php echo $val->namaToko;?></td>
                      <td><?php echo $val->namaKonsumen;?></td>
                      <td><img src="<?php echo base_url('assets/logo_toko/'.$val->logo); ?>" width="150" height="110" ></td>
                      <td><?php echo $val->deskripsi;?></td>
                      <td>
                        <div class="btn-group">
                          <a href="<?php echo site_url('Kelola/cek_id/'.$val->idToko);?>" class="btn btn-warning">Edit</a>
                          <a href="<?php echo site_url('toko/delete/'.$val->idToko);?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                        </div>
                      </td>
                    </tr>
                    <?php $no++; }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="<?php echo site_url('KelolaToko/add_toko/');?>" class="btn btn-sm btn-info float-left"> Tambah Kategori</a>
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
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

