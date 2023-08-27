<?php

namespace app\widgets\Item;

use yii\base\Widget;
use app\widgets\Item\assets\ItemAsset;

class Item extends Widget
{
    public int $id;
    public string $productName;
    public int $price;
    public string $imageUrl;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        ItemAsset::register($this->getView());

        return $this->render("item-view", [
            "id" => $this->id,
            "productName" => $this->productName,
            "price" => $this->price,
            "imageUrl" => $this->imageUrl
        ]);
    }
}