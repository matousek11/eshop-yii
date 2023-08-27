<?php

/** @var yii\web\View $this */

use app\widgets\Item\Item;

$this->title = 'Eshop';
?>
<div class="site-index">
    <div class="col col-md-6">
        <div class="jumbotron text-left bg-transparent mt-5 mb-5 w-100 w-md-50">
            <h1 class="display-4">Eshop</h1>

            <p class="lead">Eshop landing page built with Yii php framework. Data is randomly generated from <a
                    href="https://github.com/matousek11/eshop-controller">api</a>. Try to add parameters
                ?starting=10$length=20 to see what happen.</p>

            <p><a class="btn btn-lg btn-success" href="https://github.com/matousek11?tab=repositories">Look at more
                    projects</a></p>
        </div>
    </div>

    <div class="body-content">
        <div class="row justify-content-center gap-5">
            <?php foreach ($products as $product): ?>
                <?php echo Item::widget(["id" => $product["id"], "productName" => $product["nameOfProduct"], "price" => $product["price"], "imageUrl" => $product["imageUrl"]]) ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>