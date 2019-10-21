@extends('master')
@section('content')
<main class="main">
    <div class="home-slider-container">
        <div class="home-slider owl-carousel owl-theme owl-theme-light">
            @foreach($slide as $slide)
            <div class="home-slide">
            <div class="slide-bg owl-lazy" data-src="assets/images/slider/{{$slide->name}}" style="background-position:32% center;"></div><!-- End .slide-bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 offset-md-7">
                            <div class="home-slide-content slide-content-big">
                                <h1>Váy</h1>
                                <h3>
                                    <span>giảm </span>
                                    <strong>30%</strong>
                                    <span>cho mọi sản phẩm</span>
                                </h3>
                                <a href="category.html" class="btn btn-primary">MUA NGAY</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .home-slide -->
            @endforeach
        </div><!-- End .home-slider -->
    </div><!-- End .home-slider-container -->

    <div class="banners-container mb-4 mb-lg-6 mb-xl-8">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="banner">
                        <div class="banner-content">
                            <h3 class="banner-title">MẮT KÍNH</h3>

                            <a href="category.html" class="btn">MUA NGAY</a>
                        </div><!-- End .banner-content -->
                        <a href="#">
                            <img src="{{asset('')}}assets/images/banners/banner-1.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-md-4 -->
                <div class="col-md-4">
                    <div class="banner">
                        <div class="banner-content">
                            <h3 class="banner-title">GIÀY</h3>

                            <a href="category.html" class="btn">MUA NGAY</a>
                        </div><!-- End .banner-content -->
                        <a href="#">
                            <img src="{{asset('')}}assets/images/banners/banner-2.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-md-4 -->
                <div class="col-md-4">
                    <div class="banner">
                        <div class="banner-content">
                            <h3 class="banner-title">TÚI XÁCH</h3>

                            <a href="category.html" class="btn">MUA NGAY</a>
                        </div><!-- End .banner-content -->
                        <a href="#">
                            <img src="{{asset('')}}assets/images/banners/banner-3.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .banners-container -->

    <div class="container mb-2 mb-lg-4 mb-xl-5">
        <h2 class="title text-center mb-3">Sản Phẩm Bán Chạy</h2>
        <h5 class="title text-center mb-3">Tìm Thấy {{count( $top_sale)}} sản phẩm</h5>
        <div class="owl-carousel owl-theme featured-products">
            @foreach ($top_sale as $sale)
            @php
                $img=json_decode($sale->image);
            @endphp
            
                <div class="product">
                    <figure class="product-image-container">
                        <a href="product.html" class="product-image">
                            <img src="{{Voyager::image($img[0])}}" alt="product">
                            <img src="{{Voyager::image($img[1])}}" class="hover-image" alt="product">
                        </a>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Chi Tiết"><span>Chi Tiết</span></a>
                            @if (($sale->status)==1)
                                <span class="product-label label-sale">{{$sale->promotion}}%</span>
                                
                                @elseif (($sale->hot)==1)
                                <span class="product-label label-hot">Hot</span>
                            @endif
                              
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="product.html">{{$sale->name}}</a>
                        </h2>
                        <div class="price-box">
                            <span class="old-price">{{$sale->unit_price}}&#8363</span>
                                @php
                                    $promotion_price = ($sale->unit_price)-(($sale->unit_price)*20)/100;
                                @endphp
                            @if (($sale->status)==1)
                                <span class="product-price">{{$promotion_price}}&#8363</span>
                            @endif
                        </div><!-- End .price-box -->
    
                        <div class="product-details-inner">
                            <div class="product-action">
                                <a href="product.html" class="paction add-cart" title="Thêm Vào Giỏ">
                                    <span>Thêm Vào Giỏ</span>
                                </a>
    
                                <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </a>
    
                                <a href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-details-inner -->
                    </div><!-- End .product-details -->
                </div><!-- End .product -->  
            @endforeach
           
        </div><!-- End .featured-products -->
    </div><!-- End .container -->

    <div class="promo-section" style="background-image: url({{asset('')}}assets/images/promo-bg.jpg)">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="promo-slider owl-carousel owl-theme owl-theme-light">
                            <div class="promo-content">
                                <h3>Giảm tới <span>40%</span> <br><br> <strong>Khuyến Mãi Đặc Biệt</strong></h3>
                                <a href="#" class="btn btn-primary">KHÁM PHÁ NGAY</a>
                            </div><!-- Endd .promo-content -->

                            <div class="promo-content">
                                <h3>Giảm tới <span>58%</span> <br><br> <strong>KHUYẾN MÃI NGÀY LỄ</strong></h3>
                                <a href="#" class="btn btn-primary">KHÁM PHÁ NGAY</a>
                            </div><!-- Endd .promo-content -->
                        </div><!-- End .promo-slider -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .container -->
    </div><!-- End .promo-section -->

    <div class="container mb-2 mb-lg-4 mb-xl-5">
        <h2 class="title text-center mb-3">SẢN PHẨM MỚI</h2>
        <div class="owl-carousel owl-theme new-products">
            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-1.jpg" alt="product">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-1-2.jpg" class="hover-image" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Chi Tiết"><span>Chi Tiết</span></a>
                </figure>
                <div class="product-details">
                    <h2 class="product-title">
                        <a href="product.html">Mens sunglss-yellow</a>
                    </h2>
                    <div class="price-box">
                        <span class="old-price">90&#8363</span>
                        <span class="product-price">70&#8363</span>
                    </div><!-- End .price-box -->

                    <div class="product-details-inner">
                        <div class="product-action">
                            <a href="product.html" class="paction add-cart" title="Thêm Vào Giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details-inner -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->

            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-2.jpg" alt="product">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-2-2.jpg" class="hover-image" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Chi Tiết"><span>Chi Tiết</span></a>
                    <span class="product-label label-sale">-20%</span>
                </figure>
                <div class="product-details">
                    <h2 class="product-title">
                        <a href="product.html">Mens sunglss-black</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">60</span>
                    </div><!-- End .price-box -->

                    <div class="product-details-inner">
                        <div class="product-action">
                            <a href="product.html" class="paction add-cart" title="Thêm Vào Giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details-inner -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->

            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-3.jpg" alt="product">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-3-2.jpg" class="hover-image" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Chi Tiết"><span>Chi Tiết</span></a>
                    <span class="product-label label-hot">Hot</span>
                </figure>
                <div class="product-details">
                    <h2 class="product-title">
                        <a href="product.html">Mens sunglss-silver</a>
                    </h2>
                    <div class="price-box">
                        <span class="old-price">75</span>
                        <span class="product-price">55</span>
                    </div><!-- End .price-box -->

                    <div class="product-details-inner">
                        <div class="product-action">
                            <a href="product.html" class="paction add-cart" title="Thêm Vào Giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details-inner -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->

            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-4.jpg" alt="product">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-4-2.jpg" class="hover-image" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Chi Tiết"><span>Chi Tiết</span></a>
                </figure>
                <div class="product-details">
                    <h2 class="product-title">
                        <a href="product.html">Mens sunglss-brown</a>
                    </h2>
                    <div class="price-box">
                        <span class="old-price">60</span>
                        <span class="product-price">50</span>
                    </div><!-- End .price-box -->

                    <div class="product-details-inner">
                        <div class="product-action">
                            <a href="product.html" class="paction add-cart" title="Thêm Vào Giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details-inner -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->

            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-5.jpg" alt="product">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-5-2.jpg" class="hover-image" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Chi Tiết"><span>Chi Tiết</span></a>
                </figure>
                <div class="product-details">
                    <h2 class="product-title">
                        <a href="product.html">Mens sunglss</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">80</span>
                    </div><!-- End .price-box -->

                    <div class="product-details-inner">
                        <div class="product-action">
                            <a href="product.html" class="paction add-cart" title="Thêm Vào Giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details-inner -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->

            <div class="product">
                <figure class="product-image-container">
                    <a href="product.html" class="product-image">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-6.jpg" alt="product">
                        <img src="{{asset('')}}assets/images/products/sunglasses/product-6-2.jpg" class="hover-image" alt="product">
                    </a>
                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Chi Tiết"><span>Chi Tiết</span></a>
                    <span class="product-label label-sale">-20%</span>
                </figure>
                <div class="product-details">
                    <h2 class="product-title">
                        <a href="product.html">Mens sunglss-black</a>
                    </h2>
                    <div class="price-box">
                        <span class="old-price">100</span>
                        <span class="product-price">80</span>
                    </div><!-- End .price-box -->

                    <div class="product-details-inner">
                        <div class="product-action">
                            <a href="product.html" class="paction add-cart" title="Thêm Vào Giỏ">
                                <span>Thêm Vào Giỏ</span>
                            </a>

                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details-inner -->
                </div><!-- End .product-details -->
            </div><!-- End .product -->
        </div><!-- End .featured-products -->
    </div><!-- End .container -->

    <div class="blog-section">
        <div class="container">
            <h2 class="title text-center mb-3">TIN TỨC</h2>

            <div class="blog-carousel owl-carousel owl-theme">
                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img src="{{asset('')}}assets/images/blog/home/post-1.jpg" alt="Post">
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <h2 class="entry-title">
                            <a href="single.html">Fashion news</a>
                        </h2>
                        <div class="entry-date">08-May-2018</div><!-- End .entry-date -->
                        <div class="entry-content">
                            <p>Lorem Ipsum is simply dummy text the printing and type setting unknown... </p>

                            <a href="single.html" class="read-more">Read More <i class="icon-angle-right"></i></a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img src="{{asset('')}}assets/images/blog/home/post-2.jpg" alt="Post">
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <h2 class="entry-title">
                            <a href="single.html">Trends of Spring</a>
                        </h2>
                        <div class="entry-date">04-May-2018</div><!-- End .entry-date -->
                        <div class="entry-content">
                            <p>Lorem Ipsum is simply dummy text the printing and type setting unknown... </p>

                            <a href="single.html" class="read-more">Read More <i class="icon-angle-right"></i></a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img src="{{asset('')}}assets/images/blog/home/post-3.jpg" alt="Post">
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <h2 class="entry-title">
                            <a href="single.html">Women News</a>
                        </h2>
                        <div class="entry-date">22-Mar-2018</div><!-- End .entry-date -->
                        <div class="entry-content">
                            <p>Lorem Ipsum is simply dummy text the printing and type setting unknown... </p>

                            <a href="single.html" class="read-more">Read More <i class="icon-angle-right"></i></a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->
            </div><!-- End .blog-carousel -->
        </div><!-- End .container -->
    </div><!-- End .blog-section -->
</main><!-- End .main -->
@endsection