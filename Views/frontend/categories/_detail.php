<main class="main">
        <section class="main__products fix-pd">
            <div class="container">
                <div class="main__main-title main--flex-center">                
                    <h2><?= $category['name']?></h2>                   
                </div>

                <div class="main__main-grid">
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
                                    <?php $productImage = !empty($product['image']) ? $product['image'] : 'no-image.png' ?>
                                    <img src="./public/uploads/<?=$productImage?>" alt="">
                                </a>
                            </div>
                            <div class="main__info-products">
                                <a href="#" class="main__product-meta"><?=$category['name']?></a>
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
                            <div class="main__cart-review">
                                <a href="index.php?controller=cart&action=store&id=<?=$product['id']?>" class="main__cart">
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
                                                    <img class="thumbnail" src="./image/th05.jpg" alt="">
                                                    <img class="thumbnail" src="./image/th06.jpg" alt="">
                                                    <img class="thumbnail" src="./image/th07.jpg" alt="">
                                                    <img class="thumbnail" src="./image/th08.jpg" alt="">
                                                </div>
                                                <div class="main__img-product">
                                                    <img class="featured"  src="./image/05 (3).jpg" alt="">
                                                    <img class="featured"  src="./image/06 (7).jpg" alt="">
                                                    <img class="featured"  src="./image/07 (5).jpg" alt="">
                                                    <img class="featured"  src="./image/08 (3).jpg" alt="">
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
            </div>
        </section>
    </main>