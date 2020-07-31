<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="../view/css/singleproduct.css">
</head>

<body>
    <main>
        <div class="boxbanner">
            <h1>Single Product Page</h1>
            <ul>
                <li><a href="">Home <i class="fa fa-angle-right"></i></a>
                </li>
                <li><a href=""> Single Product</a></li>
            </ul>
        </div>
        <div class="boxcenter2">
        <?php
            if(!is_array($single)){
                echo 'Sản phẩm này không có';
            }
            else{
                $img = $pathimg.$single['img'];
                if(is_file($img)) $img = '<img src="'.$img.'" alt="">';
                else $img = 'not found';
                $name = $single['name'];
                $vote = $single['vote'];
                $gia = $single['gia'];
                $mota = $single['mota'];
                $iddm = $single['iddm'];
                $kqvote ='';
                for ($i=0; $i < $vote; $i++) { 
                    $kqvote .= '<i class="fa fa-star" aria-hidden="true"></i>';
                }
            ?>    
            <!-- start box sán phẩm -->
            <div class="boxsanpham">
                <div class="boxsanpham__left">
                    <div class="imgbig">
                        <?=$img?>
                    </div>
                   
                </div>
                <div class="boxsanpham__right">
                    <h2><?=$name?></h2>
                    <p class="reference"><span>Reference:</span> demo_17</p>
                    <div class="rate">
                        <div class="star">
                            <?=$kqvote?>
                        </div>
                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                    </div>
                    <div class="tien"><?=$gia?>đ</div>
                    <div class="mota">
                        <?=$mota?>
                    </div>

                    <div class="pro-details-quality mt-0px">
                        <div class="cart-plus-minus">
                            <div class="dec qtybutton">-</div>
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                            <div class="inc qtybutton">+</div>
                        </div>
                        <div class="pro-details-cart btn-hover">
                            <a href="#"> + Add To Cart</a>
                        </div>
                    </div>
                    <div class="boxaddwish">
                        <div class="pro-details-wishlist">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to wishlist</a>
                        </div>
                        <div class="pro-details-compare">
                            <a href="#"><i class="fa fa-random"></i> Add to compare</a>
                        </div>
                    </div>
                    <div class="boxsocial">
                        <span>Share</span>
                        <div class="social-info">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pro-details-policy">
                        <ul>
                            <li><img src="../view/../view/images/policy.png" alt=""><span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><img src="../view/../view/images/policy-2.png" alt=""><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><img src="../view/../view/images/policy-3.png" alt=""><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        
            <!-- end box sán phẩm -->
            <!-- start tab -->
            <div class="boxtab">
                <div class="tabs">
                    <div class="tab">
                        <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'London')">DESCRIPTION</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')"> PRODUCT DETAILS</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">REVIEWS (2)</button>
                    </div>

                    <div id="London" class="tabcontent">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat.
                            Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>

                    <div id="Paris" class="tabcontent">
                        <ul>
                            <li><span>Weight</span> 400 g</li>
                            <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                        </ul>
                    </div>

                    <div id="Tokyo" class=" tabcontent ">
                        <div class="tabcontent3">
                            <div class="tabcontent3-left">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="../view/../view/images/imgclient1.png" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
                                        <div class="review-img">
                                            <img src="../view/../view/images/imgclient2.png" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabcontent3-right">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="star-box">
                                                <span>Your rating:</span>
                                                <div class="rating-product">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="rowinput">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-10">
                                                        <input placeholder="Name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-10">
                                                        <input placeholder="Email" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="Your Review" placeholder="Message"></textarea>
                                                        <input type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end tab -->
            <div class="row">
                <div class="container">
                    <div class="bestsale">
                        <div class="bestsale__title">
                            <div class="title__left">
                                <h3>You Might Also Like</h3>
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
                                $id =   $spsale['id'];
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
                                <div class="item__description chumo">STUDIO DESIGN</div>
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
            <div class="row mb-3">
                <div class="container">
                    <div class="bestsale">
                        <div class="bestsale__title">
                            <div class="title__left">
                                <h3>In The Same Category</h3>
                                <p class="chumo">Add bestselling products to weekly line up</p>
                            </div>
                            <div class="title__right">
                                <i class="fa fa-angle-left" style="font-size:18px"></i>
                                <i class="fa fa-angle-right" style="font-size:18px"></i>
                            </div>
                        </div>
                        <div class="bestsale__boxsanpham owl-carousel owl-theme">
                            <?php 
                            $sameDm = sameDm($iddm);
                            foreach ($sameDm as $spsale) {
                                $id =   $spsale['id'];
                                $img = $pathimg.$spsale['img'];
                                $ten = $spsale['name'];
                                $gia = $spsale['gia'];
                                $giamgia = $spsale['giamgia'];
                                $vote = $spsale['vote'];
                                $namedm = $spsale['namedm'];
                                $linksp = 'index.php?act=singleproduct&id='.$id;
                                $kqvote ='';
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
                                <div class="item__description chumo">'.$namedm.'</div>
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
        </div>
        <?php }?>
    </main>
      
</body>

</html>