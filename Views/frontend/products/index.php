<main class="main">
        <section class="main__products">
            <div class="container">
                <div class="main__main-title">
                    <h2 class="main__trending-products">Trending products</h2>
                    <a href="index.php?controller=product&action=more" class="main__more-products">
                       More products >
                   </a>
                </div>
                <div class="main__main-grid">
                   
                   <?php foreach($products as $product): ?>
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
                                <a href="#" class="main__product-meta">Headphones</a>
                                <h3 class="main__product-title">
                                    <a href=""><?= $product['name'] ?? ''?></a>
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
                                <a href="index.php?controller=cart&action=store&id=<?=$product['id']?>" class="main__cart">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart
                                </a>
                                <button class="main__review btn-view"><i class="fa fa-eye" aria-hidden="true"></i>
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
                                                <div class="main__img-product">
                                                    <img src="./image/58.jpg" alt="">
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
                   <?php endforeach; ?>
                   
                </div>
            </div>
        </section>