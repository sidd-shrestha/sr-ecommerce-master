@extends('dashboard.user.layouts.master')

@section('content')
<section class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 custom-padding-right">
                <div class="slider-head">
                    <!-- Start Hero Slider -->
                    <div class="hero-slider">
                        <!-- Start Single Slider -->
                        <div class="single-slider" style="background-image: url(assets/images/hero/slider-bg1.jpg);">
                            <div class="content">
                                <h2><span>No restocking fee (20% savings)</span>
                                    Prada Smart +
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <h3><span>Buy Now</span> $1300</h3>
                                <div class="button">
                                    <a href="{{ url('product_details') }}" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Slider -->
                        <!-- Start Single Slider -->
                        <div class="single-slider" style="background-image: url(assets/images/hero/slider-bg2.jpg);">
                            <div class="content">
                                <h2><span>Big Sale Offer</span>
                                    Get the Best Deal on Prada Sunglasses
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <h3><span>Combo Only:</span> $1500.00</h3>
                                <div class="button">
                                    <a href="{{ url('product_details') }}" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Slider -->
                    </div>
                    <!-- End Hero Slider -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                        <!-- Start Small Banner -->
                        <div class="hero-small-banner" style="background-image: url('assets/images/hero/slider-bnr.jpg');">
                            <div class="content">
                                <h2>
                                    <span>New line required</span>
                                    Rayban
                                </h2>
                                <h3>$259.99</h3>
                            </div>
                        </div>
                        <!-- End Small Banner -->
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <!-- Start Small Banner -->
                        <div class="hero-small-banner style2">
                            <div class="content">
                                <h2>Weekend Sale!</h2>
                                <p>Saving up to 30% off all Gucci Glasses this weekend.</p>
                                <div class="button">
                                    <a class="btn" href="{{ url('product_details') }}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Start Small Banner -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->

<section class="trending-product section" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Product</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $products)
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="{{ asset('uploads/product/' . $products->product_image) }}" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add
                                to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">

                        {{-- <span class="category">{{ $trending->subcategory->brand_name }}</span> --}}

                        <h4 class="title">
                            <a href="{{ url('user/viewdetails/'.$products->slug) }}">{{ $products->product_name }}</a>
                        </h4>
                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li><span>4.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span>$199.00</span>
                        </div>

                    </div>
                </div>
                <!-- End Single Product -->
            </div>
            @endforeach


        </div>
    </div>
</section>

{{-- <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Product</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($trending as $trending)
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Product -->
                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ asset('uploads/product/' . $trending->product_image) }}" alt="#">
<div class="button">
    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add
        to Cart</a>
</div>
</div>
<div class="product-info">

    <span class="category">{{ $trending->subcategory->brand_name }}</span>

    <h4 class="title">
        <a href="{{ url('product_details') }}">{{ $trending->product_name }}</a>
    </h4>
    <ul class="review">
        <li><i class="lni lni-star-filled"></i></li>
        <li><i class="lni lni-star-filled"></i></li>
        <li><i class="lni lni-star-filled"></i></li>
        <li><i class="lni lni-star-filled"></i></li>
        <li><i class="lni lni-star"></i></li>
        <li><span>4.0 Review(s)</span></li>
    </ul>
    <div class="price">
        <span>$199.00</span>
    </div>

</div>
</div>
<!-- End Single Product -->
</div>
@endforeach


</div>
</div>
</section> --}}

{{--
    <!-- Start Banner Area -->
    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner" style="background-image:url('assets/images/banner/banner-1-bg.jpg')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="{{ url('product_details') }}" class="btn">View Details</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
    <div class="single-banner custom-responsive-margin" style="background-image:url('assets/images/banner/banner-2-bg.jpg')">
        <div class="content">
            <h2>Smart Headphone</h2>
            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                incididunt ut labore.</p>
            <div class="button">
                <a href="{{ url('product_details') }}" class="btn">Shop Now</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!-- End Banner Area -->

<!-- Start Shipping Info -->
<section class="shipping-info">
    <div class="container">
        <ul>
            <!-- Free Shipping -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-delivery"></i>
                </div>
                <div class="media-body">
                    <h5>Free Shipping</h5>
                    <span>On order over $99</span>
                </div>
            </li>
            <!-- Money Return -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-support"></i>
                </div>
                <div class="media-body">
                    <h5>24/7 Support.</h5>
                    <span>Live Chat Or Call.</span>
                </div>
            </li>
            <!-- Support 24/7 -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-credit-cards"></i>
                </div>
                <div class="media-body">
                    <h5>Online Payment.</h5>
                    <span>Secure Payment Services.</span>
                </div>
            </li>
            <!-- Safe Payment -->
            <li>
                <div class="media-icon">
                    <i class="lni lni-reload"></i>
                </div>
                <div class="media-body">
                    <h5>Easy Return.</h5>
                    <span>Hassle Free Shopping.</span>
                </div>
            </li>
        </ul>
    </div>
</section> --}}
@endsection

{{-- @section('scripts')
    <script>
        $('.category-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
@endsection
--}}