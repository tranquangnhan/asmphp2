 <!-- start footer -->
 <footer class="footer">
        <div class="row">
            <div class="container">
                <div class="boxfooter">
                    <div class="box-bgleft">
                        <div class="boxfooter__boxleft">
                            <div class="boxleft__title mt-2">
                                <h1>Ecolife</h1>
                            </div>
                            <div class="boxleft__p">
                                <p> We are a team of designers and developers that create high quality HTML template</p>
                            </div>
                            <div class="boxleft__needhelp mt-2">
                                <div class="needhelp__left">
                                    <img src="../view/../view/images/iconphone.png" alt="">
                                </div>
                                <div class="needhelp__right">
                                    <p class="need">NEED HELP?</p>
                                    <p class="telephone">(+800) 345 678</p>
                                    <p class="telephone">(+800) 123 456</p>
                                </div>
                            </div>
                            <div class="boxleft__social-list">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="box-bgright">
                        <div class="bgright-box1">
                            <div class="box1-title">
                                <h4 class="footer-herading">Information</h4>
                            </div>
                            <ul class="footer-link">
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Secure Payment</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Stores</a></li>
                            </ul>
                        </div>
                        <div class="bgright-box1">
                            <div class="box1-title">
                                <h4 class="footer-herading">Custom Links</h4>
                            </div>
                            <ul class="footer-link">
                                <li><a href="#">Legal Notice</a></li>
                                <li><a href="#">Prices Drop</a></li>
                                <li><a href="#">New Products</a></li>
                                <li><a href="#">Best Sales</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </div>
                        <div class="bgright-box2">
                            <div class="box1-title">
                                <h4 class="footer-herading">Newsletter</h4>
                            </div>
                            <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                            <div class="inputemail">
                                <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="">
                                <div class="clear">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Sign Up">
                                </div>
                            </div>
                            <div class="appstore">
                                <div class="apple"><img src="../view/images/app_store.png" alt=""></div>
                                <div class="android">
                                    <img src="../view/images/google_play.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="boxfootend">
                            <div class="copy">
                                <p>Được phát triển bởi Trần Quang Nhân đẹp trai</p>
                            </div>
                            <div class="paymen">
                                <img src="../view/images/tinhtien.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </footer>
    <!-- end footer -->

    <!-- thư viện icon -->
    <!-- javascript main -->
    <script src="../view/javascripts/javascript.main.js"></script>
    <!-- end javascript main -->
    <!-- thư viện owl carousel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../view/owlcarousel/owl.carousel.min.js"></script>
    <!-- end thư viện owl carousel -->
    <!-- start thư viện zoom -->
    <script src="../view/jquery/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="../view/jquery/jquery.zoom.js"></script>
    <script src="../view/javascripts/javascript.singleproduct.js"></script>
    <!-- end thư viện zoom -->
    <script>
    $('.bestsale__boxsanpham').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        nextButton: '.fa-angle-right',
        prevButton: '.fa-angle-left',
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 5
            }
        }
    });
    $('.recent-product-slider').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        smartSpeed: 1000,
        autoplay: true,
        nextButton: '.fa-angle-right',
        prevButton: '.fa-angle-left',
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    $('.products__list').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        smartSpeed: 1000,
        autoplay: true,
        nextButton: '.fa-angle-right',
        prevButton: '.fa-angle-left',
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })
</script>
    </script>
</body>

</html>