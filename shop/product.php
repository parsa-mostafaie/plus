<?php
include 'includes/c-init.php';
$id = $_GET['id'];
$product = get_product($id);
if (!$product) {
    die('not exists');
}
if (isset($_GET['action']) && $_GET['action'] == 'add_to_cart') {
    //add to cart
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="<?php echo urlOfUpload($product['thumbnail']); ?>" alt="" style="width: 400px; height: auto;">
            </div>
            <div class="col-8">
                <h1><?php echo $product['title']; ?></h1>
                <?php
                $sale_price = $product['price'];
                $price_class = '';
                if ($product['discount_percent']) {
                    $price_class = 'text-success';
                    echo '<del class="text-danger">' . number_format($product['price'] / 10) . '</del>';
                    $sale_price = (100 - $product['discount_percent']) / 100 * $product['price'];
                }

                echo '<ins class="' . $price_class . '">' . number_format($sale_price / 10) . '</ins>';

                if ($product['discount_percent']) {
                    echo '<span class"discount">' . $product['discount_percent'] . '%</span>';
                }
                ?>

                <br>
                <a href="?id=<?php echo $product['ID']; ?>&action=add_to_cart" class="btn btn-success">
                    افزودن به سبد خرید
                </a>

            </div>


            <div>
                <?php echo $product['content']; ?>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>