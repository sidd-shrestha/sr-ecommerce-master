@extends('dashboard.user.layouts.master')

@section('content')
    <!-- Start Banner Area -->
    <section class="banner section">
        <div class="container">
            <div class="row">

                <h2> {{ $categories->category_type }}</h2>
                @foreach ($subcategory as $subcategory)
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Product -->
                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ asset('uploads/brands/' . $subcategory->brand_image) }}" alt="#">
                                <div class="button">
                                    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add
                                        to Cart</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h6>
                                    <a href="{{ url('user/view_subcategory/'.$categories->slug. '/' .$subcategory->slug) }}">{{ $subcategory->category_type }}</a>                                </h6>


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
    <!-- End Banner Area -->
    @endsection
