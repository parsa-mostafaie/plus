<?php
function get_product($product_id)
{

    $product_sql = "SELECT * FROM products WHERE ID = $product_id";

    $product_stmt = db()->query($product_sql);

    $product = $product_stmt->fetch(PDO::FETCH_ASSOC);

    return $product;

}


function get_products($args = [])
{

    $page = isset($args['page']) ? $args['page'] : 1;
    $per_page = 12;
    $offset = ($page - 1) * $per_page;

    $product_sql = "SELECT * FROM products LIMIT $per_page OFFSET $offset";

    $product_stmt = db()->query($product_sql);

    $products = $product_stmt->fetchAll(PDO::FETCH_ASSOC);

    return $products;

}