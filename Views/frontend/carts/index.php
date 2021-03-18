<?php

view('partitions.frontend.header',[
    'categories' => $categories ?? []
]);

view('frontend.carts._list',[
    'products' => $products ?? []
]);
view('partitions.frontend.footer');