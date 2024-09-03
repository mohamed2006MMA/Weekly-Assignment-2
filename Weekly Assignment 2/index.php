<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .store-header {
            text-align: center;
            padding: 20px;
        }
        .store-header img {
            max-width: 200px;
            height: auto;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 200px;
            text-align: center;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product-title {
            font-weight: bold;
            margin: 10px 0;
        }
        .product-price {
            color: green;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<?php

include 'Store.php';
include 'Product.php';

// Create product objects
$product1 = new Product("Product 1", "images/product1.jpg", 29);
$product2 = new Product("Product 2", "images/product2.jpg", 49);
$product3 = new Product("Product 3", "images/product3.jpg", 19);

// Create an array of products
$products = [$product1, $product2, $product3];

// Create a store object
$store = new Store("My Online Store", "images/store.jpg", "Welcome to My Online Store!", $products);
?>

<div class="store-header">
    <h1><?php echo $store->getName(); ?></h1>
    <img src="<?php echo $store->getImage(); ?>" alt="Store Image">
    <p><?php echo $store->getDescription(); ?></p>
</div>

<div class="product-list">
    <?php
    //display products using foreach
    foreach ($store->getProducts() as $product) {
        echo '<div class="product">';
        echo '<img src="' . $product->getImage() . '" alt="' . $product->getTitle() . '">';
        echo '<div class="product-title">' . $product->getTitle() . '</div>';
        echo '<div class="product-price">$' . $product->getPrice() . '</div>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
