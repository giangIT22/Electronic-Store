<?php

view('partitions.frontend.header',[
    'categories' => $categories ?? []
]);
view('frontend.products._detail',[
    'product' => $product,
    'products'=> $products ?? [],
    'images' => $images ?? []
]);
view('partitions.frontend.footer');
