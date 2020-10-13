<main class="main">
        <section class="main__page-title">
            <div class="container">
                <div class="main__main-grid">
                    <div class="main__product-name">
                        <h1>Smartwatch Youth Edition</h1>
                    </div>
                    <ul>
                        <li><a href="index.php">Home ></a></li>
                        <li><a href="#">category ></a></li>
                        <li><a href="#">product </a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="main__detail-product">
            <div class="container">
                <div class="main__product">
                    <div class="main__main-grid">
                        <ul class="main__tabs-list">
                            <li class="tab-item">General info</li>
                            <li class="tab-item">Tech Specs</li>
                        </ul>
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
                            <li><h2><?= $product['name']?></h2></li>
                            <li><h3><?= number_format($product['price'])?></h3></li>
                            <li><span>SKU :</span> <?= $product['sku']?></li>
                            <li><span>product type :</span> product type</li>
                            <li>
                                <button> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="main__description-product">
            <div class="container">
                <div class="main__main-grid">
                    <div class="main__content">
                        <h2>Choose your style</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>
                        <img src="./image/prod-img2.jpg" alt="" width="100%">
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="main__more-product">
            <div class="container">
                <div class="main__main-grid main--flex-center">
                    <h2>You may also like</h2>
                </div>
                <div class="main__main-grid">
                    <?php if(!empty($products)): ?>
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
                                    <a href="detail.html">
                                    <?php
                                        $productImage = !empty($product['image']) ? $product['image'] : 'no-image.png';
                                    ?>
                                    <img src="./public/uploads/<?= $productImage ;?>" alt="<?=$product['name'];?>">
                                    </a>
                                </div>
                                <div class="main__info-products">
                                    <a href="#" class="main__product-meta">Headphones</a>
                                    <h3 class="main__product-title">
                                        <a href=""><?=$product['name']?></a>
                                    </h3>
                                </div>
                                <div class="main__product-price-rating">
                                    <div class="product-price">
                                        <span><?=number_format($product['price'])?></span>
                                    </div>
                                    <div class="main__star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    <?php else:?>
                    <h1>No products</h1> 
                    <?php endif;?>   
                </div>
            </div>
        </section>
</main>
