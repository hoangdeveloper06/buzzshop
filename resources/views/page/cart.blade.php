@extends('master')
@section('content')
    <main class="main">
        <div class="page-header" style="background-image: url(assets/images/page-header-bg-2.jpg)">
            <div class="container">
                <h1>GIỎ HÀNG</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Trang Chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-table-container">
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="product-col">Sản Phẩm</th>
                                        <th class="price-col">Giá</th>
                                        <th class="qty-col">Số Lượng</th>
                                        <th>Tạm Tính</th>
                                    </tr>
                                </thead>
                                @if (Session::has('cart'))
                                    <tbody>
                                    @foreach ($CartItem as $item)
                                       @php
                                            $img = json_decode($item['item']['images']);
                                        @endphp
                                       <tr class="product-row">
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="" class="product-image">
                                                        <img src="{{voyager::image($img[0])}}" alt="product">
                                                    </a>
                                                </figure>
                                                <h2 class="product-title">
                                                    <a href="">{{$item['item']['name']}}</a>
                                                </h2>
                                            </td>
                                            <td>{{number_format($item['item']['unit_price'])}}&#8363</td>
                                            <td>
                                                <input class="vertical-quantity form-control" type="text" value="{{$item['qty']}}">
                                            </td>
                                            <td>{{number_format(Session('cart')->totalPrice)}}&#8363</td>
                                        </tr>
                                    @endforeach
                                    <tr class="product-action-row">
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="#" class="btn-move">Thêm vào danh sách yêu thích</a>
                                            </div><!-- End .float-left -->
                                            
                                            <div class="float-right">
                                                <a href="#" title="Sửa Sản Phẩm" class="btn-edit">
                                                    <span class="sr-only">Sửa</span>
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="#" title="Xóa Sản Phẩm" class="btn-remove">
                                                    <span class="sr-only">Xóa</span>
                                                </a>
                                            </div>
                                            <!-- End .float-right -->
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="category.html" class="btn btn-outline-secondary">Tiếp Tục Mua Sắm</a>
                                            </div><!-- End .float-left -->
                                            <div class="float-right">
                                                <a href="#" class="btn btn-outline-secondary btn-clear-cart">Xóa Giỏ Hàng</a>
                                                <a href="#" class="btn btn-outline-secondary btn-update-cart">Cập Nhập Giỏ Hàng</a>
                                            </div><!-- End .float-right -->
                                        </td>
                                    </tr>
                                </tfoot>
                                @else
                                    
                                @endif

                                
                            </table>
                        </div><!-- End .cart-table-container -->
                        <div class="cart-discount">
                            <h4>Sử Dụng Mã Giảm Giá</h4>
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Nhập Mã Giảm Giá"  required>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="submit">Nhận Khuyễn Mãi</button>
                                    </div>
                                </div><!-- End .input-group -->
                            </form>
                        </div><!-- End .cart-discount -->
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="cart-summary">
                            <h3>Hóa Đơn</h3>
                            <table class="table table-totals">
                                <tbody>
                                    <tr>
                                        <td>Tạm Tính</td>
                                        <td>{{number_format(Session('cart')->totalPrice)}}&#8363</td>
                                    </tr>

                                    <tr>
                                        <td>Số Lượng</td>
                                        <td>{{(Session('cart')->totalQty)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Giảm Giá</td>
                                        <td>0%</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Tổng Hóa Đơn</td>
                                        <td>{{number_format(Session('cart')->totalPrice)}}&#8363</td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="checkout-methods">
                                <a href="{{route('checkout)'}}" class="btn btn-block btn-sm btn-primary">Thanh Toán Giỏ Hàng</a>
                                <a href="index" class="btn btn-link btn-block">Quay Lại Trang Chủ</a>
                            </div><!-- End .checkout-methods -->
                        </div><!-- End .cart-summary -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->
@endsection