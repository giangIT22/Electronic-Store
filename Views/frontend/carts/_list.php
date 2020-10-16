<main class="main">
            <section class="main__page-title">
                <div class="container">
                    <div class="main__main-grid">
                        <div class="main__product-name">
                            <h1>Your cart</h1>
                        </div>
                        <ul>
                            <li><a href="#">Home ></a></li>
                            <li><a href="#">category ></a></li>
                            <li><a href="#">cart </a></li>
                        </ul>
                    </div>
                    <div class="main__main-grid">
                        <div class="main__main-item">
                            <h2>Products</h2>
                            <a href="index.php">< Continue Shopping</a>
                        </div>
                   </div>
            </section>

            <section class="main__products-list">
                <div class="container">
                    <div class="main__main-grid">
                        <form action="index.php?controller=cart&action=update" class="main__update" method="post">
                            <?php foreach($products as $product):?>
                                <div class="main__main-item">
                                        <div class="main__product">
                                            <a href="#" class="main__product-img">
                                                <?php $productImage = $product['image'] ? $product['image'] : 'no-image.png' ;?>
                                                <img src="./public/uploads/<?=$productImage?>" alt="">
                                            </a>
                                            <div class="main__product-info">
                                                <a href="#"><?=$product['name']?></a>
                                                <p><span>Sku:</span><?=$product['sku']?></p>
                                                <p><?=number_format($product['price'] * $product['qty'])?></p>
                                            </div>
                                        </div>
                                        <div class="main__action">                                        
                                                <label id="qty">Quantity</label>
                                                <input type="text" name="qty[<?= $product['id'] ?>]" value="<?= $product['qty'] ?>">
                                                <a onclick="return confirm('Bạn có muốn xóa không ?')" href="index.php?controller=cart&action=delete&id=<?=$product['id']?>" class="remove"><i class="fa fa-times-circle-o" aria-hidden="true"></i> <span>Remove</span></a>
                                        </div>
                                </div>
                            <?php endforeach;?>                                
                            
                            <button type="submit"><i class="fa fa-spinner" aria-hidden="true"></i>
                                Update cart
                            </button>
                        </form>

                        <div class="main__main-item">
                            <form action="index.php?controller=order&action=store" method="post" class="checkout">
                                <label for="">Customer Name</label>
                                <input type="text" name="customer_name" id="" placeholder="Customer Name">
                                <label for="">Email</label>                                
                                <input type="text" name="customer_email" id="" placeholder="Email">
                                <label for="">Phone</label>
                                <input type="text" name="customer_phone" id="" placeholder="Phone">
                                <button><i class="fa fa-credit-card" aria-hidden="true"></i>
                                    Proceed to Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

<style>
    .remove{
        display: block;
        padding: 0 !important;
        color: #fe696a;
        margin-top: 7px !important;
        text-align: left;
    }
</style>