
<!-- start main -->
<main>
      <!-- start boxsupport -->
        <div class="row">
            <div class="container">
                <div class="boxsupport mt-3">
                    <div class="boxsupport__item">
                        <div class="item__icon">
                            <img src="../view/images/shipping.png" alt="">
                        </div>
                        <div class="item-text">
                            <h3>Free Shipping</h3>
                            <p class="chumo">On all orders over $75.00</p>
                        </div>
                    </div>
                    <div class="boxsupport__item">
                        <div class="item__icon">
                            <img src="../view/images/return.png" alt="">
                        </div>
                        <div class="item-text">
                            <h3>Free Returns</h3>
                            <p class="chumo">Returns are free within 9 days</p>
                        </div>
                    </div>
                    <div class="boxsupport__item">
                        <div class="item__icon">
                            <img src="../view/images/payment.png" alt="">
                        </div>
                        <div class="item-text">
                            <h3>100% Payment Secure</h3>
                            <p class="chumo">Your payment are safe with us.</p>
                        </div>
                    </div>
                    <div class="boxsupport__item">
                        <div class="item__icon">
                            <img src="../view/images/support.png" alt="">
                        </div>
                        <div class="item-text">
                            <h3>Support 24/7</h3>
                            <p class="chumo">Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end boxsupport -->
        <!-- start banner 2 -->
        <div class="row">
            <div class="container">
                <div class="banner2">
                    <div class="banner2__item1">
                        <a href="">
                            <img src="../view/images/item1.jpg" alt="">
                        </a>
                    </div>
                    <div class="banner2__item2">
                        <a href="">
                            <img src="../view/images/item2.jpg" alt="">
                        </a>
                    </div>
                    <div class="banner2__item1">
                        <a href="">
                            <img src="../view/images/item3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end banner 2 -->
        <!-- start best sale -->
        <div class="row">
            <div class="container">
                <div class="bestsale">
                    <div class="bestsale__title">
                        <div class="title__left">
                            <h3>Best Sellers</h3>
                            <p class="chumo">Add bestselling products to weekly line up</p>
                        </div>
                        <div class="title__right">
                            <i class="fa fa-angle-left" style="font-size:18px"></i>
                            <i class="fa fa-angle-right" style="font-size:18px"></i>
                        </div>
                    </div>
                    <div class="bestsale__boxsanpham owl-carousel owl-theme">
                        <?php 
                            foreach ($products1 as $spsale) {
                                $id = $spsale['id'];
                                $img = $pathimg.$spsale['img'];
                                $ten = $spsale['name'];
                                $gia = $spsale['gia'];
                                $giamgia = $spsale['giamgia'];
                                $vote = $spsale['vote'];
                                $linksp = 'index.php?act=singleproduct&id='.$id;
                                $kqvote ='';
                                for ($i=0; $i < $vote; $i++) { 
                                    $kqvote .= '<i class="fa fa-star" aria-hidden="true"></i>';
                                }
                                $iddm = $spsale['iddm'];
                                $showTenDm = showTenDm($iddm);
                            echo '<div class="item boxsanpham__item mt-2-mb">
                            <div class="boxsanpham__item-img">
                                <div class="new">New</div>
                                <div class="quick-view">
                                    <a href="'.$linksp.'">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <a href=""> <img src="'.$img.'" alt=""></a>

                            </div>
                            <div class="boxsanpham__item-text">
                                <div class="item__description chumo">'.$showTenDm['namedm'].'</div>
                                <div class="item__title">
                                    <a href="'.$linksp.'">'.$ten.'</a>
                                </div>
                                <div class="item-start">
                                    '.$kqvote.'
                                </div>
                                <div class="giasanpham">
                                    <div class="item__giagoc">'.$gia.'</div>
                                    <div class="item__giamoi">'.$gia*(100-$giamgia).'đ</div>
                                    <div class="item__khuyenmai">'.$giamgia.'%</div>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-random" style="font-size:15px"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-heart-o"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>';
                        };
                        ?>
                    </div>
                    <div class="bestsale__boxsanpham owl-carousel owl-theme">
                    <?php 
                            foreach ($products2 as $spsale) {
                                $id= $spsale['id'];
                                $img = $pathimg.$spsale['img'];
                                $ten = $spsale['name'];
                                $gia = $spsale['gia'];
                                $giamgia = $spsale['giamgia'];
                                $vote = $spsale['vote'];
                                $linksp = 'index.php?act=singleproduct&id='.$id;
                                $kqvote ='';
                                $iddm = $spsale['iddm'];
                                $showTenDm = showTenDm($iddm);
                                for ($i=0; $i < $vote; $i++) { 
                                    $kqvote .= '<i class="fa fa-star" aria-hidden="true"></i>';
                                }
                            echo '<div class="item boxsanpham__item mt-2-mb">
                            <div class="boxsanpham__item-img">
                                <div class="new">New</div>
                                <div class="quick-view">
                                    <a href="'.$linksp.'">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <a href=""> <img src="'.$img.'" alt=""></a>

                            </div>
                            <div class="boxsanpham__item-text">
                                <div class="item__description chumo">'.$showTenDm['namedm'].'</div>
                                <div class="item__title">
                                    <a href="'.$linksp.'">'.$ten.'</a>
                                </div>
                                <div class="item-start">
                                  '.$kqvote.'
                                </div>
                                <div class="giasanpham">
                                    <div class="item__giagoc">'.$gia.'</div>
                                    <div class="item__giamoi">'.$gia*(100-$giamgia).'đ</div>
                                    <div class="item__khuyenmai">'.$giamgia.'%</div>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-random" style="font-size:15px"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-heart-o"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>';
                        };
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!--end bestsale  -->
        <!-- start Featured Products-->
        <div class="row">
            <div class="featured mt-3">
                <div class="boxproductcha mt-3">
                    <div class="container">
                        <div class="boxproduct">
                            <div class="banner-featured">
                            </div>
                            <div class="products">
                                <div class="products__title">
                                    <div class="title__left">
                                        <h2>Featured Products</h2>
                                        <p class="chumo">Add featured products to weekly line up</p>
                                    </div>
                                    <div class="title__right">
                                        <i class="fa fa-angle-left" style="font-size:18px"></i>
                                        <i class="fa fa-angle-right" style="font-size:18px"></i>
                                    </div>
                                </div>
                                <div class="owl-carousel owl-theme products__list mt-2">
                                    <?php 
                                        foreach ($sapnhap1 as $spsap) {
                                        $id= $spsap['id'];
                                        $img = $pathimg.$spsap['img'];
                                        $ten = $spsap['name'];
                                        $gia = $spsap['gia'];
                                        $giamgia = $spsap['giamgia'];
                                        $giamoi =  $gia*(100 - $giamgia);
                                        $vote = $spsap['vote'];
                                        $linksp = 'index.php?act=singleproduct&id='.$id;
                                        $kqvote ='';
                                        $iddm = $spsap['iddm'];
                                        $showTenDm = showTenDm($iddm);
                                        for ($i=0; $i < $vote; $i++) { 
                                            $kqvote .= '<i class="fa fa-star" aria-hidden="true"></i>';
                                        }
                                        echo 
                                        '<div class="item">
                                            <div class="products__list-item">
                                                <div class="list-item__img">
                                                    <div class="quick-view2">
                                                        <a href="'.$linksp.'">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                    <a href=""> <img src="'.$img.'" alt=""></a>
                                                </div>
                                                <div class="boxsanpham__item-text">
                                                    <div class="item__description chumo">
                                                    '.$showTenDm['namedm'].'
                                                    </div>
                                                    <div class="item__title">
                                                    <a href="'.$linksp.'">'.$ten.'</a>
                                                    </div>
                                                    <div class="item-start">
                                                        '.$kqvote.'
                                                    </div>
                                                    <div class="giasanpham">
                                                        <div class="item__giagoc">'.$gia.'đ</div>
                                                        <div class="item__giamoi">'.$giamoi.'đ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                        };                                    
                                        ?>
                                </div>
                                <div class="owl-carousel owl-theme products__list mt-2">
                                <?php
                                        foreach ($sapnhap2 as $spsap) {
                                        $id= $spsap['id'];
                                        $img = $pathimg.$spsap['img'];
                                        $ten = $spsap['name'];
                                        $gia = $spsap['gia'];
                                        $giamgia = $spsap['giamgia'];
                                        $giamoi =  $gia*(100 - $giamgia);
                                        $vote = $spsap['vote'];
                                        $linksp = 'index.php?act=singleproduct&id='.$id;
                                        $kqvote ='';
                                        $iddm = $spsap['iddm'];
                                        $showTenDm = showTenDm($iddm);
                                        for ($i=0; $i < $vote; $i++) { 
                                            $kqvote .= '<i class="fa fa-star" aria-hidden="true"></i>';
                                        }
                                    echo '   <div class="item">
                                    <div class="products__list-item">
                                        <div class="list-item__img">
                                            <div class="quick-view2">
                                                <a href="'.$linksp.'">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                            <a href=""> <img src="'.$img.'" alt=""></a>
                                        </div>
                                        <div class="boxsanpham__item-text">
                                            <div class="item__description chumo">
                                            '.$showTenDm['namedm'].'
                                            </div>
                                            <div class="item__title">
                                            <a href="'.$linksp.'">'.$ten.'</a>
                                            </div>
                                            <div class="item-start">
                                               '.$kqvote.'
                                            </div>
                                            <div class="giasanpham">
                                                <div class="item__giagoc">'.$gia.'đ</div>
                                                <div class="item__giamoi">'.$giamoi.'đ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                };
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-outbg">
                </div>
            </div>
        </div>
        <!-- start New Arrivals -->
        <div class="row mt-3">
            <div class="container">
                <div class="bestsale ">
                    <div class="bestsale__title">
                        <div class="title__left">
                            <h3>New Arrivals</h3>
                            <p class="chumo">Add new products to weekly line up </p>
                        </div>
                        <div class="title__right">
                            <i class="fa fa-angle-left" style="font-size:18px"></i>
                            <i class="fa fa-angle-right" style="font-size:18px"></i>
                        </div>
                    </div>
                    <div class="bestsale__boxsanpham owl-carousel owl-theme">
                    <?php 
                            foreach ($showSpMoi as $spmoi) {
                                $id= $spmoi['id'];
                                $img = $pathimg.$spmoi['img'];
                                $ten = $spmoi['name'];
                                $gia = $spmoi['gia'];
                                $giamgia = $spmoi['giamgia'];
                                $giamoi =  $gia*(100 - $giamgia);
                                $vote = $spmoi['vote'];
                                $linksp = 'index.php?act=singleproduct&id='.$id;
                                $kqvote ='';
                                $iddm = $spmoi['iddm'];
                                $showTenDm = showTenDm($iddm);
                                for ($i=0; $i < $vote; $i++) { 
                                    $kqvote .= '<i class="fa fa-star" aria-hidden="true"></i>';
                                }
                            echo '<div class="item boxsanpham__item mt-2-mb">
                            <div class="boxsanpham__item-img">
                                <div class="new">New</div>
                                <div class="quick-view">
                                    <a href="'.$linksp.'">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <a href=""> <img src="'.$img.'" alt=""></a>

                            </div>
                            <div class="boxsanpham__item-text">
                                <div class="item__description chumo">'.$showTenDm['namedm'].'</div>
                                <div class="item__title">
                                    <a href="'.$linksp.'">'.$ten.'</a>
                                </div>
                                <div class="item-start">
                                   '.$kqvote.'
                                </div>
                                <div class="giasanpham">
                                    <div class="item__giagoc">'.$gia.'đ</div>
                                    <div class="item__giamoi">'.$giamoi.'đ</div>
                                    <div class="item__khuyenmai">'.$giamgia.'%</div>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-random" style="font-size:15px"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-heart-o"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>';
                        };
                        ?>
                    </div>
                </div>

            </div>

        </div>
        <!-- end New Arrivals -->
        <!-- start baner easy -->
        <div class="row mt-3">
            <div class="container">
                <div class="bannereasy">
                    <img src="../view/images/bannereasy.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- end baner easy -->
        <!-- start Recently -->
        <div class="row mt-3">
            <div class="container">
                <div class="bestsale ">
                    <div class="bestsale__title">
                        <div class="title__left">
                            <h3>Recently Added</h3>
                            <p class="chumo">Add products to weekly line up</p>
                        </div>
                        <div class="title__right">
                            <i class="fa fa-angle-left" style="font-size:18px"></i>
                            <i class="fa fa-angle-right" style="font-size:18px"></i>
                        </div>
                    </div>
                </div>
                <div class="products products2">
                    <div class="products__list mt-2 recent-product-slider owl-carousel owl-theme ">
                        <?php 
                         foreach ($spmoi1 as $sp) {
                            $idsp = $sp['id'];
                            $img = $pathimg.$sp['img'];
                            if(is_file($img)){
                                $img = '<img src="'.$img.'" alt="">';
                            }
                            else{
                                $img = 'nothing';
                            }
                            $ten = $sp['name'];
                            $gia = $sp['gia'];
                            $giamgia = $sp['giamgia'];
                            $giamoi =  $gia*(100 - $giamgia);
                            $vote = $sp['vote'];
                            $linksp = 'index.php?act=singleproduct&id='.$idsp;
                            $kqvote ='';
                            $iddm = $sp['iddm'];
                            $showTenDm = showTenDm($iddm);
                            for ($i=0; $i < $vote; $i++) { 
                                $kqvote .= '<i class="fa fa-star" aria-hidden="true"></i>';
                            }
                             echo '<div class="item products__list-item products__list-item2 ">
                             <div class="list-item__img">
                                '.$img.'
                                 <div class="quick-view2">
                                     <a href="'.$linksp.'">
                                         <i class="fa fa-search"></i>
                                     </a>
                                 </div>
                             </div>
                             <div class="boxsanpham__item-text">
                                 <div class="item__description chumo">'.$showTenDm['namedm'].'</div>
                                 <div class="item__title">
                                     <a href="'.$linksp.'">'.$ten.'</a>
                                 </div>
                                 <div class="item-start">
                                     '.$kqvote.'
                                 </div>
                                 <div class="giasanpham">
                                     <div class="item__giagoc">'.$gia.'đ</div>
                                     <div class="item__giamoi">'.$giamoi.'đ</div>
                                 </div>
                             </div>
                         </div>';
                         }
                        ?> 
                    </div>
                    <div class="products__list mt-2 recent-product-slider owl-carousel owl-theme ">
                    <?php 
                         foreach ($spmoi2 as $sp) {
                            $id = $sp['id'];
                            $img = $pathimg.$sp['img'];
                            if(is_file($img)){
                                $img = '<img src="'.$img.'" alt="">';
                            }
                            else{
                                $img = 'nothing';
                            }
                            $ten = $sp['name'];
                            $gia = $sp['gia'];
                            $giamgia = $sp['giamgia'];
                            $giamoi =  $gia*(100 - $giamgia);
                            $linksp = 'index.php?act=singleproduct&id='.$id;
                            $vote = $sp['vote'];
                            $kqvote ='';
                            $iddm = $sp['iddm'];
                            $showTenDm = showTenDm($iddm);
                            for ($i=0; $i < $vote; $i++) { 
                                $kqvote .= '<i class="fa fa-star" aria-hidden="true"></i>';
                            }
                             echo '<div class="item products__list-item products__list-item2 ">
                             <div class="list-item__img">
                                '.$img.'
                                 <div class="quick-view2">
                                     <a href="'.$linksp.'">
                                         <i class="fa fa-search"></i>
                                     </a>
                                 </div>
                             </div>
                             <div class="boxsanpham__item-text">
                                 <div class="item__description chumo">'.$showTenDm['namedm'].'</div>
                                 <div class="item__title">
                                     <a href="'.$linksp.'">'.$ten.'</a>
                                 </div>
                                 <div class="item-start">
                                  '.$kqvote.'
                                 </div>
                                 <div class="giasanpham">
                                     <div class="item__giagoc">'.$gia.'đ</div>
                                     <div class="item__giamoi">'.$giamoi.'đ</div>
                                 </div>
                             </div>
                         </div>';
                         }
                        ?> 
                    </div>
                </div>
            </div>

        </div>
        <!-- end Recently-->
        <!-- start Client Testimonials-->
        <div class="row">
            <div class="client">
                <div class="boxclient mt-2">
                    <div class="container">
                        <div class="bestsale__title ">
                            <div class="title__left">
                                <h3>Client Testimonials</h3>
                                <p class="chumo">What our happy customers says !</p>
                            </div>
                        </div>
                        <div class="boxclient__boxbig">
                            <div class="boxbig_bg">
                                <div class="boxbig__imgleft">
                                    <img src="../view/images/imgclient1.png" alt="">
                                </div>
                                <div class="boxbig__textp">
                                    <p>
                                        All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !
                                    </p>
                                    <div class="author-text">
                                        <i class="fa fa-quote-left" style="font-size:36px"></i>
                                        <h4>orando BLoom <span>demo@posthemes.com</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="boxbig_bg">
                                <div class="boxbig__imgleft">
                                    <img src="../view/images/imgclient2.png" alt="">
                                </div>
                                <div class="boxbig__textp">
                                    <p>
                                        All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !
                                    </p>
                                    <div class="author-text">
                                        <i class="fa fa-quote-left" style="font-size:36px"></i>
                                        <h4>orando BLoom <span>demo@posthemes.com</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-bg"></div>
            </div>
        </div>
        <!-- end Client Testimonials -->
        <!-- start brand -->
        <div class="row mb-3 mt-2">
            <div class="container">
                <div class="boxbrand">
                    <div class="boxbrand__item">
                        <img src="../view/images/themeforest.jpg" alt="">
                    </div>
                    <div class="boxbrand__item none">
                        <img src="../view/images/graphicriver.jpg" alt="">
                    </div>
                    <div class="boxbrand__item none">
                        <img src="../view/images/codecanyon.jpg" alt="">
                    </div>
                    <div class="boxbrand__item none">
                        <img src="../view/images/audiojungle.jpg" alt="">
                    </div>
                    <div class="boxbrand__item none">
                        <img src="../view/images/activeden.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- end brand -->
    </main>