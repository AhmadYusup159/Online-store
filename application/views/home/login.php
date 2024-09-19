

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Login</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form  method="post" action="<?php echo site_url('main/login_member'); ?>">
                    <?php echo $this->session->flashdata('pesan') ?>
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="username" name="username" />
                                <?php echo form_error('username','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control" id="email" placeholder="Password" name="password" />
                                <?php echo form_error('password','<div class="text-danger small ml-2">','</div>');?>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">masuk</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>