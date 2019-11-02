@extends('master')
@section('content')
<main class="main">
    <div class="home-slider-container">
        <div class="home-slider owl-carousel owl-theme owl-theme-light">
            @foreach($slide as $slide)
            @php
                $img_slide = json_decode($slide->image);
            @endphp
            <div class="home-slide">
            <div class="slide-bg owl-lazy" data-src="{{voyager::image($slide->image)}}" style="background-position:32% center;"></div><!-- End .slide-bg -->
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
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                @foreach ($banner_category as $banner_category)
                    @php
                        $category_img = json_decode($banner_category->image);
                    @endphp
                    <div class="col-md-4">
                        <div class="banner">
                            <a href="category.html" class="banner-img">
                                <img src="{{voyager::image($banner_category->image)}}" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->  
                @endforeach
                
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .banners-container -->

    <div class="container mb-2 mb-lg-4 mb-xl-5">
        <h2 class="title text-center mb-3">Sản Phẩm Bán Chạy</h2>
        <h5 class="title text-center mb-3">Tìm Thấy {{count( $top_sale)}} sản phẩm</h5>
        <div class="owl-carousel owl-theme featured-products">
            @foreach ($top_sale as $sale)
            @php
                $img=json_decode($sale->images);
            @endphp
            
                <div class="product">
                    <figure class="product-image-container">
                        <a href="{{route('chitietsanpham', $sale->id)}}" class="product-image">
                            <img src="{{Voyager::image($img[0])}}" alt="product">
                            <img src="{{Voyager::image($img[1])}}" class="hover-image" alt="product">
                        </a>
                        <a href="{{route('chitietsanpham', $sale->id)}}" class="btn-quickview" title="Chi Tiết"><span>Chi Tiết</span></a>
                            @if (($sale->status)==1)
                                <span class="product-label label-sale">{{$sale->promotion}}%</span>
                                
                                @elseif (($sale->hot)==1)
                                <span class="product-label label-hot">Hot</span>
                            @endif
                              
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="{{route('chitietsanpham', $sale->id)}}">{{$sale->name}}</a>
                        </h2>
                        <div class="price-box">
                            
                                @php
                                    $promotion_price = ($sale->unit_price)-(($sale->unit_price)*20)/100;
                                @endphp
                            @if (($sale->status)==1)
                                <span class="old-price">{{ number_format($sale->unit_price) }}&#8363</span>
                                <span class="product-price">{{ number_format($promotion_price) }}&#8363</span>   
                            @else
                                <span class="product-price">{{ number_format($sale->unit_price) }}&#8363</span>
                            @endif
                        </div><!-- End .price-box -->
    
                        <div class="product-details-inner">
                            <div class="product-action">
                                <a href="{{route('themgiohang',$sale->id)}}" class="paction add-cart" title="Thêm Vào Giỏ">
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
        <h5 class="title text-center mb-3">Tìm Thấy {{count($top_sale)}} sản phẩm</h5>
        <div class="owl-carousel owl-theme featured-products">
            @foreach ($home_new as $new)
            @php
                $img=json_decode($new->images);
            @endphp
            
                <div class="product">
                    <figure class="product-image-container">
                        <a href="{{route('chitietsanpham', $new->id)}}" class="product-image">
                            <img src="{{Voyager::image($img[0])}}" alt="product">
                            <img src="{{Voyager::image($img[1])}}" class="hover-image" alt="product">
                        </a>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Chi Tiết"><span>Chi Tiết</span></a>
                            @if (($new->status)==1)
                                <span class="product-label label-sale">{{$new->promotion}}%</span>
                                
                                @elseif (($new->hot)==1)
                                <span class="product-label label-hot">Hot</span>
                            @endif
                              
                    </figure>
                    <div class="product-details">
                        <h2 class="product-title">
                            <a href="{{route('chitietsanpham', $new->id)}}">{{$new->name}}</a>
                        </h2>
                        <div class="price-box">
                            
                            @php
                                $promotion_price = ($new->unit_price)-(($new->unit_price)*20)/100;
                            @endphp
                            @if (($new->status)==1)
                                <span class="old-price">{{number_format($new->unit_price)}}&#8363</span>
                                <span class="product-price">{{number_format($promotion_price)}}&#8363</span>   
                            @else
                                <span class="product-price">{{number_format($new->unit_price)}}&#8363</span>
                            @endif
                        </div><!-- End .price-box -->
    
                        <div class="product-details-inner">
                            <div class="product-action">
                                <a href="#" class="paction add-cart" title="Thêm Vào Giỏ">
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