@extends('master')
@section('content')
<main class="main">
        <div class="page-header" style="background-image: url(assets/images/page-header-bg.jpg)">
            <div class="container">
                <h1>ĐĂNG NHẬP</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Đăng Nhập</a></li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last dashboard-content">
                <h2>Edit Account Information</h2>
                @if (count($errors)>0)
                    <div clas="arlert arlert-danger">
                        @foreach ($errors->all() as $errors)
                            <p>{{$errors}}</p>
                        @endforeach  
                    </div>
                @endif
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-11">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group required-field">
                                            <label for="acc-name">First Name</label>
                                            <input type="text" class="form-control" id="acc-name" name="acc-name" required>
                                        </div><!-- End .form-group -->
                                    </div><!-- End .col-md-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .col-sm-11 -->
                        </div><!-- End .row -->

                        <div class="form-group required-field">
                            <label for="acc-email">Email</label>
                            <input type="email" class="form-control" id="acc-email" name="acc-email" required>
                        </div><!-- End .form-group -->

                        <div class="form-group required-field">
                            <label for="acc-password">Password</label>
                            <input type="password" class="form-control" id="acc-password" name="acc-password" required>
                        </div><!-- End .form-group -->

                        <div class="mb-2"></div><!-- margin -->

                        <div class="form-footer">
                            <div class="form-footer-right">
                                <button type="submit" class="btn btn-primary">ĐĂNG KÝ</button>
                            </div>
                        </div><!-- End .form-footer -->
                    </form>
            </div><!-- End .col-lg-9 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- margin -->
</main><!-- End .main -->
@endsection