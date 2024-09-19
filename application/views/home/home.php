 <div class="container-fluid pt-5">
    
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2"> Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php foreach($produk as $val){?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                
                <div class="card product-item border-0 mb-4">
                <div style="width: auto; height: 350px;">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 ">
                    <div style="width: auto; height: 250px;">
                        <img class="img-fluid w-100 h-100" src="<?php echo base_url ('assets/foto_produk/'.$val->foto); ?>" alt="">
                    </div>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $val->namaProduk; ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rp. <?php echo $val->harga; ?></h6>
                        </div>
                    </div>
                </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="<?php echo site_url('main/detail_produk/'.$val->idProduk) ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="<?php echo site_url('main/add_cart/'. $val->idProduk); ?>"> <button type="button" class="btn btn-PRIMARY" >Tambah ke CHART</button> </a>
                    </div>
                </div>
            </div>
            <?php }?>
             
           
        </div>
    </div>
