<div class="container-fluid pt-5">
    <div class="text-center mbb-4">
        <h2 class="section-tittle px-5"> <span class="px-2">Data Produk</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-12-mb-5">
        <a href="<?php echo site_url('produk/add/'. $idToko); ?>" class="btn btn-sm btn-info float-left">Tambah Produk</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;
                foreach($produk as $val) {?>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td> <?php echo $val->namaProduk; ?> </td>
                    <td><img src="<?php echo base_url('assets/foto_produk/'.$val->foto); ?>" width="150" height="110" ></td>
                    <td> <?php echo $val->harga; ?> </td>
                    <td> <?php echo $val->stok; ?> </td>
                    <td> <?php echo $val->berat; ?> </td>
                    <td> <?php echo $val->deskripsiProduk; ?> </td>
                    <td> <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo site_url('Produk/edit/'. $val->idProduk); ?>"> <button type="button" class="btn btn-secondary" >edit</button> </a>  
                        <a href="<?php echo site_url('produk/delete/'. $val->idProduk.'/'.$val->idToko); ?>" onclick="return confirm('fYakin Akan Hapus Data Ini?')"> <button type="button" class="btn btn-secondary" >Hapus</button> </a>
                    </div> 
                </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
        </div>
    </div>
</div>