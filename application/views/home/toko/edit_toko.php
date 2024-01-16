
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Edit Toko</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <form  method="post" action="<?php echo site_url('toko/edit'); ?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $toko->idToko; ?>">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Nama Toko" name="namaToko"
                                required="required" data-validation-required-message="Please enter your name" value="<?php echo $toko->namaToko; ?>" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <td><img src="<?php echo base_url('assets/logo_toko/'.$toko->logo); ?>" width="150" height="110" ></td>
                            <input type="file" class="form-control" id="name" placeholder="Logo" name="logo"
                                required="required" data-validation-required-message="Please enter your name"  />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="3" id="massage" name="deskripsi" placeholder="Deskripsi"
                            required="required" data-validation-required-message="Please enter your name" ></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        
                        
                        
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Edit Toko</button>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>