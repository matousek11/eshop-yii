<?php

/** @var yii\web\View $this */

use app\widgets\Item\Item;

$this->title = 'Eshop';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
        <div class="row justify-content-center gap-5">
            <?php foreach ($products as $product): ?>
                <?php echo Item::widget(["id" => $product["id"], "productName" => $product["nameOfProduct"], "price" => $product["price"], "imageUrl" => $product["imageUrl"]]) ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>