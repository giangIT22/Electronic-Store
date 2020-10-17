<?php

view('partitions.frontend.header',[
    'categories' => $categories
]);
?>
<main class="main">
        <section class="main__page-title">
            <div class="container">
                <div class="main__main-grid">
                    <div class="main__product-name">
                        <h1>Shopping products</h1>
                    </div>
                    <ul>
                        <li><a href="index.php">Home ></a></li>
                        <li><a href="#" >Shop > </a></li>
                        <li><a href="#" style="color:#FE696A;"><?=$category['name'] ?? ''?></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="main__products">
            <button class="main__filter" style="display:none;">
                <i class="fa fa-tasks" aria-hidden="true"></i>
            </button>

            <div class="container"> 
                <div class="main__show-item">
                    <div class="main__categories">
                        <button class="main__close-category" style="opacity:0; visibility:hidden;">
                            <span>Close sidebar</span>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>   
                        <h3>Categories</h3>
                        <ul>
                            <?php foreach($categories as $category):?>
                                <li><a href="index.php?controller=product&action=more&id=<?=$category['id']?>" class="active-more"><?=$category['name']?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                    <div class="main__main-grid fix-width">
                        <?php if(!empty($products)):?>
                            <?php foreach($products as $product):?>
                                <div class="main__main-item">
                                    <div class="main__card-action">
                                        <a href="#" class="btn-action">
                                            <i class="fa fa-refresh" aria-hidden="true"></i> Compare
                                        </a>
                                        <button class="btn-wishlist">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="main__img-products">
                                        <a href="index.php?controller=product&action=show&id=<?= $product['id'] ?>">
                                            <?php
                                                $productImage = !empty($product['image']) ? $product['image'] : 'no-image.png';
                                            ?>
                                            <img src="./public/uploads/<?= $productImage ;?>" alt="<?=$product['name'];?>">
                                        </a>
                                    </div>
                                    <div class="main__info-products">
                                        <a href="#" class="main__product-meta"><?=$product['category_name']?></a>
                                        <h3 class="main__product-title">
                                            <a href=""><?=$product['name']?></a>
                                        </h3>
                                    </div>
                                    <div class="main__product-price-rating">
                                        <div class="product-price">
                                            <span><?= number_format($product['price'])?></span>
                                        </div>
                                        <div class="main__star-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="main__cart-review">
                                        <a href="#" class="main__cart">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart
                                        </a>
                                        <button class="main__review btn-view"><i class="fa fa-eye" aria-hidden="true" ></i>
                                            Quick view
                                        </button>
            
                                        <div class="main__modal-product">
                                            <div class="container">
                                                <div class="main__product">
                                                    <div class="main__main-grid">                                         
                                                            <a href="#">Name product ></a>
                                                            <span class="btn-close"><i class="fa fa-times" aria-hidden="true"></i></span>                                         
                                                    </div>
                                    
                                                    <div class="main__main-grid">
                                                        <div class="main__img-slide">
                                                            <img class="thumbnail" src="./public/frontend/image/th05.jpg" alt="">
                                                            <img class="thumbnail" src="./public/frontend/image/th06.jpg" alt="">
                                                            <img class="thumbnail" src="./public/frontend/image/th07.jpg" alt="">
                                                            <img class="thumbnail" src="./public/frontend/image/th08.jpg" alt="">
                                                        </div>
                                                        <div class="main__img-product">
                                                            <img class="featured"  src="./public/frontend/image/05 (3).jpg" alt="">
                                                            <img class="featured"  src="./public/frontend/image/06 (7).jpg" alt="">
                                                            <img class="featured"  src="./public/frontend/image/07 (5).jpg" alt="">
                                                            <img class="featured"  src="./public/frontend/image/08 (3).jpg" alt="">
                                                        </div>
                                                        <ul class="info-product">
                                                            <li><h2>Name product</h2></li>
                                                            <li><h3>price product</h3></li>
                                                            <li><span>SKU :</span> SKU product</li>
                                                            <li><span>product type :</span> product type</li>
                                                            <li>
                                                                <button> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <?php endforeach;?>
                            <?php endif;?>                         
                </div>
            </div>
        </section>
    </main>
<?php
view('partitions.frontend.footer');
?>

