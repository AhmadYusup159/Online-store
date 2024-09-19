<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
    </div>
    <div class=" px-xl-5">

        <div class="contact-form align-center">
            <div id="success"></div>
            <form method="post" action="<?php echo site_url('main/tambah_register'); ?>">
                <div class="control-group">
                    <input type="text" class="form-control" placeholder="username" name="username" value="<?= set_value('username') ?>" />
                    <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="password" class="form-control" placeholder="Password" name="password1" />
                    <?php echo form_error('password1', '<div class="text-danger small ml-2">', '</div>'); ?>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="password" class="form-control" id="email" placeholder="Password" name="password2" />

                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="subject" placeholder="Nama Lenkap" name="namaKonsumen" value="<?= set_value('namaKonsumen') ?>" />
                    <?php echo form_error('namaKonsumen', '<div class="text-danger small ml-2">', '</div>'); ?>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="subject" placeholder="Alamat" name="alamat" value="<?= set_value('alamat') ?>" />
                    <?php echo form_error('alamat', '<div class="text-danger small ml-2">', '</div>'); ?>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="subject" placeholder="Id Kota" name="idKota" value="<?= set_value('idKota') ?>" />
                    <?php echo form_error('idKota', '<div class="text-danger small ml-2">', '</div>'); ?>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control" id="subject" placeholder="Email" name="email" value="<?= set_value('email') ?>" />
                    <?php echo form_error('email', '<div class="text-danger small ml-2">', '</div>'); ?>
                    <p class="help-block text-danger"></p>
                </div>


                <div class="control-group">
                    <input type="number" min="0" class="form-control" id="subject" placeholder="Telepon" name="tlpn" value="<?= set_value('tlpn') ?>" />
                    <?php echo form_error('tlpn', '<div class="text-danger small ml-2">', '</div>'); ?>
                    <p class="help-block text-danger"></p>
                </div>
                <!-- <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Status Aktif" name="statusAktif"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div> -->
                <div>
                    <button class="btn btn-primary py-2 px-4" type="submit">DAFTAR</button>
                </div>
            </form>
        </div>


    </div>
</div>