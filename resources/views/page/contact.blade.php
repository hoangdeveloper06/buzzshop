@extends('master')
@section('content')
<main class="main">
        <div class="page-header" style="background-image: url(assets/images/page-header-bg.jpg)">
            <div class="container">
                <h1>About Us</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.3245538896613!2d106.71920601542003!3d10.862900760560553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752808682896b1%3A0x4b1e0a5c9046998!2zMTE4IFF14buRYyBs4buZIDEzIGPFqSwgSGnhu4dwIELDrG5oIFBoxrDhu5tjLCBUaOG7pyDEkOG7qWMsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2sus!4v1571162605215!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div><!-- End #map -->

            <div class="row">
                <div class="col-md-8">
                    <h2 class="light-title">Write <strong>Us</strong></h2>

                    <form action="#">
                        <div class="form-group required-field">
                            <label for="contact-name">Name</label>
                            <input type="text" class="form-control" id="contact-name" name="contact-name" required>
                        </div><!-- End .form-group -->

                        <div class="form-group required-field">
                            <label for="contact-email">Email</label>
                            <input type="email" class="form-control" id="contact-email" name="contact-email" required>
                        </div><!-- End .form-group -->

                        <div class="form-group">
                            <label for="contact-phone">Phone Number</label>
                            <input type="tel" class="form-control" id="contact-phone" name="contact-phone">
                        </div><!-- End .form-group -->

                        <div class="form-group required-field">
                            <label for="contact-message">What’s on your mind?</label>
                            <textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
                        </div><!-- End .form-group -->

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-8 -->

                <div class="col-md-4">
                    <h2 class="light-title">Contact <strong>Details</strong></h2>

                    <div class="contact-info">
                        <div>
                            <i class="icon-phone"></i>
                            <p><a href="tel:">0201 203 2032</a></p>
                            <p><a href="tel:">0201 203 2032</a></p>
                        </div>
                        <div>
                            <i class="icon-mobile"></i>
                            <p><a href="tel:">201-123-3922</a></p>
                            <p><a href="tel:">302-123-3928</a></p>
                        </div>
                        <div>
                            <i class="icon-mail-alt"></i>
                            <p><a href="mailto:#">porto@gmail.com</a></p>
                            <p><a href="mailto:#">porto@portotemplate.com</a></p>
                        </div>
                        <div>
                            <i class="icon-skype"></i>
                            <p>porto_skype</p>
                            <p>porto_template</p>
                        </div>
                    </div><!-- End .contact-info -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-8"></div><!-- margin -->
    </main><!-- End .main -->
@endsection
