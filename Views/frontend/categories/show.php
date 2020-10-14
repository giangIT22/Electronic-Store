<?php

view('partitions.frontend.header',[
    'categories' => $categories
]);

view('partitions.frontend.slider');
view('frontend.categories._detail',[
    'products' => $products,
    'category' => $category
]);
view('partitions.frontend.footer');