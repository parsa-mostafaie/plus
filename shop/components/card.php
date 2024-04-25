<div class="col-3 mb-4">
    <div class="card h-100">
        <?php
        if ($product['discount_percent']) {
            echo '<span class="discount-badge">' . $product['discount_percent'] . '%</span>';
        }
        ?>
        <img width="260" height="260" loading="lazy" src="<?php echo urlOfUpload($product['thumbnail']); ?>"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $product['title']; ?>
            </h5>
            <p class="card-text">
                <?php echo mb_substr($product['content'], 0, 60); ?>
            </p>
            <?php
            if ($product['stock'] < 4) {
                echo $product['stock'] . ' محصول باقی مانده در انبار';
            }
            ?>
        </div>
        <div class="card-footer">
            <a href="<?php echo c_url('/product.php?id=' . $product['ID']); ?>" class="btn btn-primary">افزودن به سبد خرید</a>

        </div>
    </div>
</div>