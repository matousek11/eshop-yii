<?php

namespace app\models;

use yii\base\Model;
use yii\httpclient\Client;

class IndexModel extends Model
{
    public function fetchProductsFromApi(int $start = 0, int $length = 10)
    {
        $client = new Client();
        $response = $client->createRequest()->setMethod("GET")->setUrl("http://localhost:8080/api/products.php?starting=" . $start . "&length=" . $length)->send();
        if ($response->isOk) {
            $data = $response->data;
            return isset($data['products']) ? $data['products'] : [];
        } else
            return null;
    }
}