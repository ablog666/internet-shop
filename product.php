<?php
require('products_db.php');
require('components/header.php');

$id = $_GET['product_id'];

$title = get_product_title($id);
$img_url = get_img_url($id);
$price = get_product_price($id);
$char = get_product_char($id);
$descriptor = get_product_descriptor($id);

require('components/product_info.php');
require('components/footer.php');
?>