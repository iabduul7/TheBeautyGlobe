<x-app-layout>
    <!--slider section start-->
    <div class="hero-section section position-relative">
        <div class="tf-element-carousel slider-nav" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
            ]'>
            <!--Hero Item start-->
            <div class="hero-item bg-image" data-bg="./assets/images/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!--Hero Content start-->
                            <div class="hero-content-2 color-2">
                                <h2>view our</h2>
                                <h1>Women's hair</h1>
                                <h3>Products now</h3>
                                <a href="shop.html">shop now</a>
                            </div>
                            <!--Hero Content end-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->

            <!--Hero Item start-->
            <div class="hero-item bg-image" data-bg="./assets/images/hero/hero-9.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!--Hero Content start-->
                            <div class="hero-content-2 color-2">
                                <h2>view our</h2>
                                <h1>Women's hair</h1>
                                <h3>Products now</h3>
                                <a href="shop.html">shop now</a>
                            </div>
                            <!--Hero Content end-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->
        </div>
    </div>
    <!--slider section end-->

    <!-- Feature Section Start -->
    @include('home.components.feature')
    <!-- Feature Section End -->

    <!--Product section start-->
    <div class="product-section section pt-70 pt-lg-45 pt-md-40 pt-sm-30 pt-xs-15">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-tab-menu mb-40 mb-xs-20">
                        <ul class="nav">
                            <li><a class="active" data-bs-toggle="tab" href="#products"> New Products</a></li>
                            <li><a data-bs-toggle="tab" href="#onsale"> OnSale</a></li>
                            <li><a data-bs-toggle="tab" href="#featureproducts"> Feature Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="products">
                            <div class="product-slider tf-element-carousel" data-slick-options='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "rows": 2,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                }' data-slick-responsive='[
                                {"breakpoint":1199, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 2
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 2,
                                "arrows": false,
                                "autoplay": true
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 1,
                                "arrows": false,
                                "autoplay": true
                                }}
                                ]'>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-1.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brush</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-2.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brux</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-3.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruz</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-4.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruk</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€115.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-5.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brush</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-6.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brug</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-7.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-8.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€90.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-10.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brush</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-11.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brug</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-12.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-13.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€90.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="onsale">
                            <div class="product-slider tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "rows": 2,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":1199, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":576, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-10.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brush</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-11.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brug</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-12.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-13.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€90.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-1.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brush</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-2.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brux</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-3.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruz</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-4.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruk</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€115.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-5.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brush</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-6.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brug</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-7.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-8.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€90.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featureproducts">
                            <div class="product-slider tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "rows": 2,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":1199, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":576, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-1.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brush</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-2.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brux</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-3.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruz</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-8.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€90.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-10.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brush</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-11.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brug</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-12.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-13.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€90.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-4.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruk</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€115.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-5.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brush</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-6.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brug</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span><span
                                                    class="old">€100.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <div class="col-12">
                                    <!-- Single Product Start -->
                                    <div class="single-product mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="./assets/images/product/product-7.jpg" alt="">
                                            </a>
                                            <span class="descount-sticker">-10%</span>
                                            <span class="sticker">New</span>
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4 class="price"><span class="new">€70.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Product section end-->

    <!--Deal Of Product section start-->
    <div class="deal-product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col">
                    <div class="section-title mb-40 mb-xs-20">
                        <h2>Deals of the day</h2>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tf-element-carousel" data-slick-options='{
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": true,
                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                        }' data-slick-responsive='[
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1,
                        "arrows": false,
                        "autoplay": true
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1,
                        "arrows": false,
                        "autoplay": true
                        }}
                        ]'>
                        <!-- Single Deal Product Start -->
                        <div class="single-deal-product">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="deal-product-img">
                                        <a href="single-product.html">
                                            <img src="./assets/images/deal-product/product-3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="deal-product-content">
                                        <h3><a href="single-product.html">Aftershave Lotion</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€110.00</span><span
                                                class="old">€130.00</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi..</p>
                                        <div class="cs-countdown black-color">
                                            <div class="pro-countdown" data-countdown="2020/08/10"></div>
                                        </div>
                                        <div class="actoion-box">
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Deal Product End -->
                        <!-- Single Deal Product Start -->
                        <div class="single-deal-product">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="deal-product-img">
                                        <a href="single-product.html">
                                            <img src="./assets/images/deal-product/product-2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="deal-product-content">
                                        <h3><a href="single-product.html">Brass Acces1</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€60.00</span><span class="old">€70.00</span>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi..</p>
                                        <div class="cs-countdown black-color">
                                            <div class="pro-countdown" data-countdown="2020/08/21"></div>
                                        </div>
                                        <div class="actoion-box">
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Deal Product End -->
                        <!-- Single Deal Product Start -->
                        <div class="single-deal-product">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="deal-product-img">
                                        <a href="single-product.html">
                                            <img src="./assets/images/deal-product/product-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="deal-product-content">
                                        <h3><a href="single-product.html">White Shave Brush</a></h3>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4 class="price"><span class="new">€110.00</span><span
                                                class="old">€130.00</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi..</p>
                                        <div class="cs-countdown black-color">
                                            <div class="pro-countdown" data-countdown="2020/09/05"></div>
                                        </div>
                                        <div class="actoion-box">
                                            <div class="product-action d-flex justify-content-between">
                                                <a class="product-btn" href="#">Add to Cart</a>
                                                <ul class="d-flex">
                                                    <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                                           title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Deal Product End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Deal Of Product section end-->

    <!--Banner section start-->
    <div class="banner-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <!-- Single Banner Start -->
                    <div class="single-banner mb-30">
                        <a href="#">
                            <img src="assets/images/banner/h1-banner-1.png" alt="">
                        </a>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- Single Banner Start -->
                    <div class="single-banner mb-30">
                        <a href="#">
                            <img src="assets/images/banner/h1-banner-2.png" alt="">
                        </a>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-lg-3 col-md-3">
                    <!-- Single Banner Start -->
                    <div class="single-banner mb-30">
                        <a href="#">
                            <img src="assets/images/banner/h1-banner-3.png" alt="">
                        </a>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
        </div>
    </div>
    <!--Banner section end-->

    <!--List Product section start-->
    <div class="list-section section pt-60 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30 pb-lg-10 pb-md-0 pb-sm-0 pb-xs-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                    <div class="row">
                        <div class="col-12">
                            <!--List Product Section Title Start-->
                            <div class="list-product-section-title mb-30">
                                <h2>Top rated </h2>
                            </div>
                            <!--List Product Section Title End-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                <div class="list-product-group">
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-1.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Aftershave Lotion </a></h3>
                                            <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-2.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruh </a></h3>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-3.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brux </a></h3>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                </div>
                                <div class="list-product-group">
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-4.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Aftershave Savlon </a></h3>
                                            <h4 class="price"><span class="new">€70.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-5.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Brass Acces1 </a></h3>
                                            <h4 class="price"><span class="new">€150.00</span><span
                                                    class="old">€187.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-6.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Brass Accessory </a></h3>
                                            <h4 class="price"><span class="new">€187.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                </div>
                                <div class="list-product-group">
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-7.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruw</a></h3>
                                            <h4 class="price"><span class="new">€125.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-8.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brum </a></h3>
                                            <h4 class="price"><span class="new">€60.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-9.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brun </a></h3>
                                            <h4 class="price"><span class="new">€53.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                    <div class="row">
                        <div class="col-12">
                            <!--List Product Section Title Start-->
                            <div class="list-product-section-title mb-30">
                                <h2>On-sale</h2>
                            </div>
                            <!--List Product Section Title End-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                <div class="list-product-group">
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-7.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruw</a></h3>
                                            <h4 class="price"><span class="new">€125.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-8.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brum </a></h3>
                                            <h4 class="price"><span class="new">€60.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-9.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brun </a></h3>
                                            <h4 class="price"><span class="new">€53.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                </div>
                                <div class="list-product-group">
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-1.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Aftershave Lotion </a></h3>
                                            <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-2.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruh </a></h3>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-3.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brux </a></h3>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                </div>
                                <div class="list-product-group">
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-4.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Aftershave Savlon </a></h3>
                                            <h4 class="price"><span class="new">€70.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-5.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Brass Acces1 </a></h3>
                                            <h4 class="price"><span class="new">€150.00</span><span
                                                    class="old">€187.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-6.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Brass Accessory </a></h3>
                                            <h4 class="price"><span class="new">€187.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
                    <div class="row">
                        <div class="col-12">
                            <!--List Product Section Title Start-->
                            <div class="list-product-section-title mb-30">
                                <h2>Trending items</h2>
                            </div>
                            <!--List Product Section Title End-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                <div class="list-product-group">
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-4.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Aftershave Savlon </a></h3>
                                            <h4 class="price"><span class="new">€70.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-5.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Brass Acces1 </a></h3>
                                            <h4 class="price"><span class="new">€150.00</span><span
                                                    class="old">€187.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-6.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Brass Accessory </a></h3>
                                            <h4 class="price"><span class="new">€187.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                </div>
                                <div class="list-product-group">
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-7.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruw</a></h3>
                                            <h4 class="price"><span class="new">€125.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-8.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brum </a></h3>
                                            <h4 class="price"><span class="new">€60.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-9.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brun </a></h3>
                                            <h4 class="price"><span class="new">€53.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                </div>
                                <div class="list-product-group">
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-1.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">Aftershave Lotion </a></h3>
                                            <h4 class="price"><span class="new">€110.00</span><span
                                                    class="old">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-2.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Bruh </a></h3>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                    <!-- Single List Product Start -->
                                    <div class="single-list-product">
                                        <div class="product-image">
                                            <a href="single-product.html"><img
                                                    src="./assets/images/product/product-3.jpg" alt=""></a>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">White Shave Brux </a></h3>
                                            <h4 class="price"><span class="new">€130.00</span></h4>
                                        </div>
                                    </div>
                                    <!-- Single List Product End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--List Product section end-->

    <!--Blog section start-->
    @include('home.components.blogs')
    <!--Blog section end-->

    <!--Brand section start-->
    @include('home.components.brands')
    <!--Brand section end-->
</x-app-layout>
