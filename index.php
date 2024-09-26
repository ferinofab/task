<?php
$arr = require_once 'data.php';

$no_rep = [];
    foreach ($arr as $item) {
        $no[] = $item['catalog'];
    }
$no_rep = array_unique($no);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>
<body>
    <div class="filter">
        <select name="select" >
            <?foreach ($no_rep as $items):?>
             <option value="<?= $items?>"> <?= $items?></option>
            <?endforeach;?>
        </select>
    </div>
    <h1>Каталог</h1>
<div class="catalog">
    <?php foreach ($arr as $item): ?>
    <?php $select = $_GET['select'] ?? '';
        var_dump($select);
    ?>
        <?php if ($item['bool']): ?>
            <div class="cart">
                <p><?= $item['name'] ?></p>
                <?php if(empty($item['image'][0])):?>
                    <div class="img">
                        <img src="uploads/photo_no.png">
                    </div>
                <?php elseif($item['image'][0]):?>
                <div class="img">
                    <img src='<?= $item['image'][0] ?>'>
                </div>
                <?php endif;?>
                <form action="all_info.php" method="get">
                    <input type="hidden" value="<?= $item['name'] ?>" name="name">
                    <input type="hidden" value="<?= $item['description'] ?>" name="description">
                    <input type="hidden" value="<?= $item['bool'] ?>" name="bool">

                    <button class="btn">Подробнее</button>
                </form>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

</body>
</html>
