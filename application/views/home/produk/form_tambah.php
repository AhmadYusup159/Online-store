
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Tambah Toko</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <form  method="post" action="<?php echo site_url('produk/save'); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="idToko" value="<?php echo $idToko; ?>">
                    <div class="control-group">
                        <select name="kategori"  class="form-control">
                            <?php foreach($kategori as $val) {?>
                                <option value="<?php echo $val->idkat ?>"><?php echo $val->namaKat;  ?></option>
                            <?php }?>
                        </select>
                        <p class="help-block text-danger"></p>
                    </div>    
                    
                    <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Nama Produk" name="namaProduk"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="file" class="form-control" id="name" placeholder="FOTO" name="foto"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Harga Produk" name="harga"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Jumlah Produk" name="stok"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Berat Produk" name="berat"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="3" id="massage" name="deskripsiProduk" placeholder="Deskripsi"
                            required="required" data-validation-required-message="Please enter your name"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        
                        
                        
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Tambah Toko</button>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>