
@extends('dashboard.user.layouts.inc.master')
@section('content')

<!-- Start Banner Area -->
<section class="banner section">
    <div class="container">
        <div class="row">

            <h2>      {{$groups->category_name}}</h2>

            @foreach ($category as $category)
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-image">
                        <img src="{{ asset('uploads/category/' . $category->category_image) }}" alt="#">
                        <div class="button">
                            <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add
                                to Cart</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6>
                            <a  href="{{ url('user/cat/'.$groups->slug.'/'.$category->slug) }}">{{ $category->category_name }}</a>
                        </h6>
                        <h4 class="title">
                            {{--  <a href="{{ url('user/view_category/'.$category->slug.'/'.$products->slug) }}">{{ $products->product_name }}</a>  --}}

                            {{--  <a href="">{{ $subcategory->brand_name }}</a>  --}}
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
<!-- End Banner Area -->


@endsection