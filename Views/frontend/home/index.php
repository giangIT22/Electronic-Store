<?php

view('partitions.frontend.header',[
    'categories' => $categories
]);
view('partitions.frontend.slider');
view('frontend.products.index',[
    'products'   => $products ?? [],
    ]);

view('partitions.frontend.main');
view('partitions.frontend.footer');