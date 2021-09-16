<?php

namespace App\Controllers;

class Product extends BaseController{
    public function index(){
        return view('product_page');
    }

    public function display(){
        return view('product/product_display');
    }

    public function page(){
        echo view('multiple/header');
        echo view('multiple/content');
        echo view('multiple/footer');
    }

    public function catalog(){
        $data = [
            'title' => 'Our Product Catalog',
            'brand' => 'Smartphone Xiaomi',
            'product_name' => ['Redmi Note 9', 'Redmi Note 9 Pro', 'Mi Note 10', 'Mi Note 10 Pro']
        ];
        return view('product_catalog', $data);
    }
}