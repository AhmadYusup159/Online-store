<?php defined('ENVIRONMENT') or define('ENVIRONMENT', 'development');
 ?>
<div class="container-fluid pt-5" >
    <div class="text-center mb-4">
        <h2 class="section-tittle px-5"><span class="px-2" >Data Toko</span></h2>
    </div>
        <div class="row px-xl-5">
            <div class="col-lg-12 mb-5">
            <a href="<?php echo site_url('Toko/add_toko/');?>" class="btn btn-sm btn-info float-left">Tambah Toko</a>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Toko</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach ($toko as $val) {?>
                    <tr>
                        <th scope="row"><?php echo $no;?></th>
                        <td><?php echo $val->namaToko; ?></td>
                        <td><img src="<?php echo base_url('assets/logo_toko/'.$val->logo); ?>" width="150" height="110" ></td>
                        <td><?php echo $val->deskripsi; ?></td>
                        <td><div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo site_url('toko/cek_id/'.$val->idToko);?>" class="btn btn-primary">Edit</a>
                            <a href="<?php echo site_url('produk/index/'.$val->idToko);?>" class="btn btn-warning">Product</a>
                           
                            <a href="<?php echo site_url('toko/delete/'.$val->idToko);?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
                        </div>
                    </td>
                    </tr>
                    <?php $no++; }?>
                </tbody>
            </table>
        </div>
        </div>
</div>