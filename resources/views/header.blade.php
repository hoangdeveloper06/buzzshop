<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BUZZSHOP-SỰ KHÁC BIỆT CỦA BẠN</title>
    <base href="{{asset('')}}">

    <meta name="keywords" content="thời trang Buzzshop" />
    <meta name="description" content="khác biệt với Buzzshop">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('')}}assets/images/icons/favicon.ico">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/style.min.css">
</head>
<body>
    <div class="page-wrapper">
    <header class="header header-transparent">
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <a href="index" class="logo">
                    <img src="{{asset('')}}assets/images/logo.png" alt="Buzz Shop Logo">
                </a>
            </div><!-- End .header-left -->

            <div class="header-right">
                <div class="row header-row header-row-top">
                    <div class="header-dropdown dropdown-expanded">
                        <a href="#">Links</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#" class="login-link">ĐĂNG KÝ</a></li>
                                <li><a href="#" class="login-link">ĐĂNG NHẬP</a></li>
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropown -->
                    <div class="header-search">
                        <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                        <div class="header-search-wrapper">
                            <form action="#" method="get">
                                <input type="search" class="form-control" name="q" id="q" placeholder="TÌM KIẾM...">
                                <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                            </form>
                        </div><!-- End .header-search-wrapper -->
                    </div><!-- End .header-search -->
                </div><!-- End .header-row -->

                <div class="row header-row header-row-bottom">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="active"><a href="index">Trang Chủ</a></li>
                            <li>
                                <a href="products" class="sf-with-ul">Sản Phẩm</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                @foreach ($category_type as $category)
                                                    <div class="col-lg-6">
                                                        <ul>                                                            
                                                            <li><a href="{{route('san-phan-danh-muc',$category->id)}}">{{$category->name}}</a></li>
                                                        </ul>
                                                    </div><!-- End col-lg-6 -->  
                                                @endforeach
                                            </div><!-- End .row -->
                                        </div><!-- End .col-lg-8 -->
                                        <div class="col-lg-4">
                                            <div class="banner">
                                                <a href="categories">
                                                    <img src="{{asset('')}}assets/images/menu-banner-2.jpg" alt="Menu banner">
                                                </a>
                                            </div><!-- End .banner -->
                                        </div><!-- End .col-lg-4 -->
                                    </div>
                                </div><!-- End .megamenu -->
                            </li>
                            <li><a href="about" >Giới Thiệu</a></li>
                            <li><a href="contact" >Liên Hệ</a></li>
                            <li><a href="news">Tin Tức</a></li>
                            <li><a href="viewcart">Giỏ Hàng</a></li>
                        </ul>
                    </nav>

                    <button class="mobile-menu-toggler" type="button">
                        <i class="icon-menu"></i>
                    </button>

                    <div class="header-dropdowns">
                        <div class="header-dropdown">
                            <a href="#">VND</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">VND</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <div class="header-dropdown">
                            <a href="#">VN</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">ENG</a></li>
                                    <li><a href="#">SPA</a></li>
                                    <li><a href="#">FRE</a></li>
                                    <li><a href="#">VN</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->
                    </div><!-- End .header-dropdowns -->
                        <div class="dropdown cart-dropdown">
                                <a href="viewcart" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <span class="dropdown-cart-icon">
                                        <span class="cart-count">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}</span>                            
                                    </span>
                                </a>
                                 <a href="viewcart" class="dropdown-toggle">
                                    <span class="dropdown-cart-text">Giỏ Hàng</span>
                                </a>
                            @if (Session::has('cart'))
                                <div class="dropdown-menu" >
                                    <div class="dropdownmenu-wrapper">
                                    @foreach ($CartItem as $cartitem)
                                    @php
                                        $img = json_decode($cartitem['item']['images']);
                                    @endphp
                                        <div class="dropdown-cart-products">
                                                <div class="product">
                                                    <figure class="product-image-container">
                                                        <a href="#" class="product-image">
                                                            <img src="{{voyager::image($img[0])}}" alt="product">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a href="#">{{$cartitem['item']['name']}}</a>
                                                        </h4>
                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">{{$cartitem['qty']}}</span>
                                                            x  {{number_format($cartitem['price'])}}&#8363
                                                        </span>
                                                    </div><!-- End .product-details -->

                                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                                </div><!-- End .product -->        
                                        </div><!-- End .cart-product -->
                                    @endforeach
                                        <div class="dropdown-cart-total">
                                            <span>Tổng:</span>
                                            <span class="cart-total-price">
                                                {{number_format(Session('cart')->totalPrice)}}&#8363
                                            </span>
                                        </div><!-- End .dropdown-cart-total -->
                                        <div class="dropdown-cart-action">
                                            <a href="{{route('viewcart')}}" class="btn btn-primary">XEM GIỎ</a>
                                            <a href="checkout-shipping.html" class="btn btn-outline-primary">THANH TOÁN</a>
                                        </div><!-- End .dropdown-cart-total -->
                                    </div><!-- End .dropdownmenu-wrapper -->
                                </div><!-- End .dropdown-menu -->
                            @endif
                        </div><!-- End .dropdown --> 
                </div><!-- End .header-row -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->
