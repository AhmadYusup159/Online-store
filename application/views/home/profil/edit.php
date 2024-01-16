<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form  method="post" action="<?php echo site_url('main/edit'); ?>">
                        <div class="control-group">
                            <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo set_value('username');?>"/>
                                <?php echo form_error('username','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control" placeholder="Password" name="password1" />
                                <?php echo form_error('password1','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control" id="email" placeholder="Password" name="password2" />
                                
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Nama Lenkap" name="namaKonsumen"value="<?= set_value('namaKonsumen')?>"/>
                                <?php echo form_error('namaKonsumen','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Alamat" name="alamat"value="<?= set_value('alamat')?>"/>
                                <?php echo form_error('alamat','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Id Kota" name="idKota"value="<?= set_value('idKota')?>"/>
                                <?php echo form_error('idKota','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="subject" placeholder="Email" name="email"value="<?= set_value('email')?>" />
                                <?php echo form_error('email','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        
                        <div class="control-group">
                            <input type="number" min="0" class="form-control" id="subject" placeholder="Telepon" name="tlpn" value="<?= set_value('tlpn')?>"/>
                            <?php echo form_error('tlpn','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <!-- <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Status Aktif" name="statusAktif"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div> -->
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" >Edit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
                <p>Justo sed diam ut sed amet duo amet lorem amet stet sea ipsum, sed duo amet et. Est elitr dolor elitr erat sit sit. Dolor diam et erat clita ipsum justo sed.</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Store 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                </div>
            </div>
        </div>
    </div>