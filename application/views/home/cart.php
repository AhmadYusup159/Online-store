<div class="container-fluid pt-5">
    <div class="px-xl-5">
        <div class=" table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">

                    <tr>
                        <th colspan="2">Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php foreach ($cartItems as $item) { ?>
                        <tr>
                            <td class="align-middle"><img src="<?php echo base_url('assets/foto_produk/' . $item['image']); ?>" alt="" style="width: 50px;"></td>
                            <td class="align-middle"><?php echo $item["name"]; ?></td>
                            <td class="align-middle">Rp.<?php echo $item["price"]; ?></td>
                            <td class="align-middle">
                                <?php echo $item["qty"]; ?>
                            </td>
                            <td class="align-middle">Rp. <?php echo $item["price"] * $item["qty"]; ?></td>

                            <td class="align-middle"> <a href="<?php echo site_url('main/delete_cart/' . $item["rowid"]); ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>