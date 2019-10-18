@extends('master')
@section('content')
<main class="main">
        <div class="page-header" style="background-image: url(assets/images/page-header-bg.jpg)">
            <div class="container">
                <h1>About Us</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-4">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Men</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container products-body">
            <nav class="toolbox horizontal-filter filter-sorts">
                <div class="filter-toggle">
                    <span>Filters:</span>
                    <a href=#>&nbsp;</a>
                </div>

                <div class="sidebar-overlay"></div>
                <aside class="toolbox-left sidebar-shop mobile-sidebar">
                    <div class="toolbox-item toolbox-sort select-custom">
                        <a class="sort-menu-trigger" href="#">Size</a>
                        <ul class="sort-list">
                            <li>Extra Large</li>
                            <li>Large</li>
                            <li>Medium</li>
                            <li>Small</li>
                        </ul>
                    </div><!-- End .toolbox-item -->

                    <div class="toolbox-item toolbox-sort select-custom">
                        <a class="sort-menu-trigger" href="#">Color</a>
                        <ul class="sort-list">
                            <li>Black</li>
                            <li>Blue</li>
                            <li>Brown</li>
                            <li>Green</li>
                            <li>Indigo</li>
                            <li>Light Blue</li>
                            <li>Red</li>
                            <li>Yellow</li>
                        </ul>
                    </div><!-- End .toolbox-item -->

                    <div class="toolbox-item toolbox-sort price-sort select-custom">
                        <a class="sort-menu-trigger" href="#">Price</a>
                        <form class="filter-price-form">
                            <div>Price: <span>$55.00</span> — <span>$111.00</span></div>
                            <label>Min price</label>
                            <input class="input-price" name="min_price"/>
                            <label>Max price</label>
                            <input class="input-price" name="max_price"/>
                            <div class="filter-price-action mt-0">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </form>
                    </div><!-- End .toolbox-item -->

                </aside><!-- End .toolbox-left -->

                <div class="toolbox-item toolbox-sort">
                    <div class="select-custom">
                        <select name="orderby" class="form-control">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div><!-- End .select-custom -->
                </div><!-- End .toolbox-item -->

                <div class="toolbox-item ml-lg-auto">
                    <div class="toolbox-item toolbox-show">
                            <label>Show:</label>

                            <div class="select-custom">
                            <select name="count" class="form-control">
                                <option value="9">9 Products</option>
                                <option value="18">18 Products</option>
                                <option value="27">27 Products</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .toolbox-item -->

                    <div class="layout-modes">
                        <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div><!-- End .layout-modes -->
                </div>
            </nav>

            <div class="row row-sm">
                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-1.jpg" alt="product">
                                <img src="assets/images/products/product-1-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            <span class="product-label label-sale">-20%</span>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Fleece Jacket</a>
                            </h2>
                            <div class="price-box">
                                <span class="old-price">$90</span>
                                <span class="product-price">$70</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-2.jpg" alt="product">
                                <img src="assets/images/products/product-2-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Ray Ban 5228</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$33.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-3.jpg" alt="product">
                                <img src="assets/images/products/product-3-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            <span class="product-label label-hot">Hot</span>
                            <span class="product-label label-sale">-20%</span>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Woman Highheels</a>
                            </h2>
                            <div class="price-box">
                                <span class="old-price">$50.00</span>
                                <span class="product-price">$45.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-4.jpg" alt="product">
                                <img src="assets/images/products/product-4-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            <span class="product-label label-sale">-20%</span>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Training Shoes</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$70</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-5.jpg" alt="product">
                                <img src="assets/images/products/product-5-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">EyeGlasses</a>
                            </h2>
                            <div class="price-box">
                                <span class="old-price">$75.00</span>
                                <span class="product-price">$55.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-6.jpg" alt="product">
                                <img src="assets/images/products/product-6-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            <span class="product-label label-sale">-30%</span>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Men Glasses</a>
                            </h2>
                            <div class="price-box">
                                <span class="old-price">$35.00</span>
                                <span class="product-price">$25.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-7.jpg" alt="product">
                                <img src="assets/images/products/product-7-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Prescription Glasses</a>
                            </h2>
                            <div class="price-box">
                                <span class="old-price">$90</span>
                                <span class="product-price">$70</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-8.jpg" alt="product">
                                <img src="assets/images/products/product-8-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            <span class="product-label label-hot">Hot</span>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Leather Jacket</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$45.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-9.jpg" alt="product">
                                <img src="assets/images/products/product-9-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            <span class="product-label label-sale">-20%</span>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Ruffle Gown</a>
                            </h2>
                            <div class="price-box">
                                <span class="old-price">$50.00</span>
                                <span class="product-price">$45.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-10.jpg" alt="product">
                                <img src="assets/images/products/product-10-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            <span class="product-label label-sale">-30%</span>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Papell Gown</a>
                            </h2>
                            <div class="price-box">
                                <span class="old-price">$35.00</span>
                                <span class="product-price">$25.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-11.jpg" alt="product">
                                <img src="assets/images/products/product-11-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            <span class="product-label label-sale">-30%</span>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Masrinna Ankle</a>
                            </h2>
                            <div class="price-box">
                                <span class="old-price">$35.00</span>
                                <span class="product-price">$25.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->

                <div class="col-6  col-md-4 col-lg-3">
                    <div class="product">
                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="assets/images/products/product-12.jpg" alt="product">
                                <img src="assets/images/products/product-12-2.jpg" class="hover-image" alt="product">
                            </a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            <span class="product-label label-sale">-30%</span>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">Crown Vintage</a>
                            </h2>
                            <div class="price-box">
                                <span class="old-price">$35.00</span>
                                <span class="product-price">$25.00</span>
                            </div><!-- End .price-box -->

                            <div class="product-details-inner">
                                <div class="product-action">
                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
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
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->

            <nav class="toolbox toolbox-pagination">
                <div class="toolbox-item toolbox-show">
                    <label>Show:</label>

                    <div class="select-custom">
                        <select name="count" class="form-control">
                            <option value="9">9 Products</option>
                            <option value="18">18 Products</option>
                            <option value="27">27 Products</option>
                        </select>
                    </div><!-- End .select-custom -->
                </div><!-- End .toolbox-item -->

                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><span class="page-link">...</span></li>
                    <li class="page-item">
                        <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div><!-- End .container -->

        <div class="mb-3"></div><!-- margin -->
    </main><!-- End .main -->
@endsection
