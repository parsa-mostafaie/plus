<?php
function get_product($product_id)
{

    $product_sql = "SELECT * FROM products WHERE ID = $product_id";

    $product_stmt = db()->query($product_sql);

    $product = $product_stmt->fetch(PDO::FETCH_ASSOC);

    return $product;

}