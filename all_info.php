<?php
$products = require './data.php';
function findProduct(array $products, string $name): ?array
{
    foreach ($products as $product) {
        if ($product['name'] == $name) {
            return $product;
        }
    }
    return null;
}

$name = $_GET['name'] ?? '';
$description = $_GET['description'] ?? '';
$arr = $_GET['image'] ?? '';
$bool = $_GET['bool'] ?? '';

$product = findProduct($products, $name);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style2.css">
    <title>Document</title>
</head>
<body>
<?php if ($bool): ?>
    <div class="container">
        <div class="content">
            <h1><?= $name ?></h1>
            <?php foreach ($product['image'] as $image): ?>
                <div class="image">
                    <img src='<?= $image ?>'>
                </div>
            <?php endforeach; ?>
            <p><?= $description ?></p>
        </div>
    </div>

<?php else: ?>
    <style>
        html {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7ZtAXM21fycsRNT6V0p0ogIz2s_DRQemKsg&s");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
<?php endif; ?>
</body>
</html>