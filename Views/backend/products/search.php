<?php
view('partitions.backend.header');
view('partitions.backend.sidebar');
view('backend.products._searchlist',[
    'products'    => $products ?? [],
]);
view('partitions.backend.footer');