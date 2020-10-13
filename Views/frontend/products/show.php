<?php

view('partitions.frontend.header',[
    'categories' => $categories
]);
view('frontend.products._detail',[
    'product' => $product,
    'products'=> $products
]);
view('partitions.frontend.footer');
