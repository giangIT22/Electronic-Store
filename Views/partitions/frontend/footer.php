<footer class="footer">
        <div class="container">
            <div class="footer__contact">
                <div class="footer__footer-grid">
                    <div class="footer__footer-item">
                        <div class="footer__widget-tittle">
                            <h3>Shop departments</h3>
                        </div>
                        <ul class="footer__widget-list">
                            <li><a href="#">Sneakers &amp; Athletic</a></li>
                            <li><a href="#">Athletic Apparel</a></li>
                            <li><a href="#">Sandals</a></li>
                            <li><a href="#">Swimwear</a></li>
                            <li><a href="#">Sunglasses &amp; Eyewear</a></li>
                            <li><a href="#">Watches</a></li>
                            <li><a href="#">Sunglasses &amp; Eyewear</a></li>
                            <li><a href="#">Watches</a></li>
                        </ul>
                    </div>
                    <div class="footer__footer-item">
                        <div class="footer__widget-tittle">
                            <h3>Account & shipping info</h3>
                        </div>
                        <ul class="footer__widget-list">
                            <li><a href="#">Your account</a></li>
                            <li><a href="#">Shipping rates</a></li>
                            <li><a href="#">Refunds & replacements</a></li>
                            <li><a href="#">Order tracking</a></li>
                            <li><a href="#">Delivery info</a></li>
                        </ul>
                    </div>
                    <div class="footer__footer-item">
                        <div class="footer__widget-tittle">
                            <h3>Stay informed</h3>
                        </div>
                        <form action="" class="footer__widget-form">
                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </span>
                            <input type="text" name="" id="" placeholder="Your email">
                            <button>Subscribe*</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__service">
            <div class="container">
                <div class="footer__footer-grid">
                    <div class="footer__footer-item">
                        <div class="footer__media">
                            <span><i class="fa fa-rocket" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="footer__media-body">
                            <h6>Fast and free delivery</h6>
                            <p>Free delivery for all orders over $200</p>
                        </div>
                    </div>
                    <div class="footer__footer-item">
                        <div class="footer__media">
                            <span><i class="fa fa-refresh" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="footer__media-body">
                            <h6>Money back guarantee</h6>
                            <p>We return money within 30 days</p>
                        </div>
                    </div>
                    <div class="footer__footer-item">
                        <div class="footer__media">
                            <span><i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="footer__media-body">
                            <h6>24/7 customer support</h6>
                            <p>Friendly 24/7 customer support</p>
                        </div>
                    </div>
                    <div class="footer__footer-item">
                        <div class="footer__media">
                            <span><i class="fa fa-credit-card" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="footer__media-body">
                            <h6>Secure online payment</h6>
                            <p>We possess SSL / Secure сertificate</p>
                        </div>
                    </div>
                </div>
                <div class="footer__footer-grid">
                    <div class="footer__footer-item">
                        <a class="footer__logo">
                            <img src="./public/image/footer-logo-light.png" alt="">
                        </a>
                        <ul class="footer__widget-list">
                            <li>
                                <a href="">Outlets</a>
                            </li>
                            <li>
                                <a href="">Affiliates</a>
                            </li>
                            <li>
                                <a href="">Support</a>
                            </li>
                            <li>
                                <a href="">Privacy</a>
                            </li>
                            <li>
                                <a href="">Terms of use</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__footer-item">
                        <div class="footer__contact-link">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button class="top-btn"><i class="fa fa-arrow-up" aria-hidden="true"></i>
    </button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="./public/frontend/js/index.js"></script>
    <script>
        $(() => {
            $('.heading--menu').click(function() {
                $('.heading__navbar').toggleClass('stickey-2');
            })

            $('.btn-view').click(function(){
                // $('body').addClass('modal-open');
                $('.main__modal-product').fadeIn(200);
            })

            $('.btn-close').click(function(){
                // $('body').removeClass('modal-open');
                $('.main__modal-product').fadeOut(100);
            })
            
            //======detail product quick
            $('.main__img-product .featured').show();
            $('.thumbnail:first').addClass('active');

             $('.thumbnail').click(function(){
                $('.thumbnail').removeClass('active');
                $(this).addClass('active');
                let val = $(this).attr('src');
                $('.main__img-product .featured').hide();
                $('.main__img-product .featured').attr('src',val);
                $('.main__img-product .featured').fadeIn();
            })

            //===============btn back to top============

            $(window).scroll(function(){
                if($(this).scrollTop() >400){
                    $('.top-btn').addClass('fadeIn');
                }else{
                    $('.top-btn').removeClass('fadeIn');
                }
            });

            $(".top-btn").click(function(){
                $('html, body').animate({scrollTop :0},500);
            });

            $('.main__filter').click(function(){
                $('.main__categories').addClass('show');

            })

            $('.main__close-category').click(function(){
                $('.main__categories').removeClass('show');
            })
        })

        <?php if($_GET['controller'] == 'product' &&$_GET['action'] == 'more') :?>            
                $(()=>{
                    $('a.shop').addClass('active');
                    $('a.home').removeClass('active');                     
                })
        <?php endif; ?>

        <?php if($_GET['controller'] == 'home' && $_GET['action'] == 'index') :?>
                $(()=>{
                    $('a.home').addClass('active');
                    $('a.shop').removeClass('active');                       
                })
        <?php endif; ?>

    </script>
</body>

</html>