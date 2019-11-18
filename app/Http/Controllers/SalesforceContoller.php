<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Forrest;

class SalesforceContoller extends Controller
{
    public function connect(Request $request)
    {
        $auth = Forrest::authenticate();
        echo $auth->getContent();
    }


    public function callback(Request $request)
    {
        Forrest::callback();
        return redirect('/salesforce/products');
    }

    public function getProducts()
    {
        $products = Forrest::sobjects('Product2');
        return $products;
    }

    public function getOrders()
    {
        $orders = Forrest::sobjects('Order');
        return $orders;
    }

    public function createProduct()
    {
        $rand = rand(100, 999);

        $data = [
            'Name'                  => "Test Pro $rand",
            'ProductCode'           => "TP0$rand",
            'Description'           => "Test Pro $rand product is only for testing",
            'QuantityUnitOfMeasure' => 10,
        ];

        $product = Forrest::sobjects('Product2', [
            'method' => 'post',
            'body'   => $data,
        ]);

        return redirect('/salesforce/products');
    }
}
