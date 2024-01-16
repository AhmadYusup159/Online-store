<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Form Edit Product</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <form  method="post" action="<?php echo site_url('produk/proses_edit'); ?>" enctype="multipart/form-data">
                    <div class="control-group">
                    <label> Kategori Produk</label>
                        <select name="kategori"  class="form-control">
                            <?php foreach($kategori as $val) {?>
                                <option value="<?php echo $val->idkat ?>"><?php echo $val->namaKat;  ?></option>
                            <?php }?>
                        </select>
                        <p class="help-block text-danger"></p>
                    </div>
                    <input type="hidden" name="idProduk" value="<?php echo $produk->idProduk; ?>">
                    <input type="hidden" name="idToko" value="<?php echo $produk->idToko; ?>"> 
                    <div class="control-group">
                   <label> Nama Produk</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Toko" name="namaProduk"
                            required="required" data-validation-required-message="Please enter your name" value="<?php echo $produk->namaProduk; ?>" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                   <label> Foto Produk</label>
                   <br>
                   <img src="<?php echo base_url('assets/foto_produk/'. $produk->foto); ?>" width="150" height="110" ></td>
                        <input type="file" class="form-control" id="name" placeholder="Logo" name="foto"
                            required="required" data-validation-required-message="Please enter your name"  />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                   <label> Harga Produk</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Toko" name="harga"
                            required="required" data-validation-required-message="Please enter your name" value="<?php echo $produk->harga; ?>" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                   <label> Stok Produk</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Toko" name="stok"
                            required="required" data-validation-required-message="Please enter your name" value="<?php echo $produk->stok; ?>" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                   <label> Brat Produk</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Toko" name="berat"
                            required="required" data-validation-required-message="Please enter your name" value="<?php echo $produk->berat; ?>" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label> Deskripsi Produk</label>
                        <textarea class="form-control" rows="3" id="massage" name="deskripsiProduk" placeholder="Deskripsi"
                            required="required" data-validation-required-message="Please enter your name" ></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Edit Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
