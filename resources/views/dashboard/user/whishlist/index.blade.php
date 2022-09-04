@extends('dashboard.user.layouts.master')

@section('content')

<!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container" >
        <div class="cart-list-head">
            <!-- Cart List Title -->
            @if($whishlist->count()>0)
            <div class="cart-list-title">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-12">

                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <p>Product Name</p>

                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <p>Product Quantity</p>

                    </div>
                    <div class="col-lg-4 col-md-2 col-12">
                        <p>Product Price</p>
                    </div>
                    <div class="col-lg-3 col-md-2 col-12">

                    </div>
                </div>
            </div>
            <div class="cart-single-list">
                @foreach ($whishlist as $whishlist)
                <div class="row align-items-center product_data">
                    <div class="col-lg-1 col-md-1 col-12">
                        <a href="product-details.html"><img src="{{ asset('uploads/product/' . $whishlist->products->product_image) }}" alt="#"></a>
                    </div>

                    <div class="col-lg-2 col-md-3 col-12">

                        <h5 class="product-name"><a href="product-details.html">
                            {{$whishlist->products->product_name}}</a></h5>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">

                        <label for="Quantity">Quantity</label>
                        <div class="input-group text-center mb-3">

                            <button class="input-group-text ">-</button>
                            <input type="text" class="form-control text-center quantity_input"
                                name="product_quantity" value="1">
                            <button class="input-group-text ">+</button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="count-input">
                         <p>    {{$whishlist->products->product_price}}</p>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-2 col-12">
                        <button  class="label danger-label-outline addToCartBtn"> Add to Cart</button>
                        <button  class="label danger-label-outline removeBtn">Remove</button>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="count-input">
                            <input type="hidden" class="product_id" value="{{$whishlist->product_id}}">
                            @if ($whishlist->products->product_quantity > 0)
                            <label class="label success-label-outline"> In Stock </label>
                     @else
                     <label class="label danger-label-outline"> Out Of Stock</label>

                     @endif
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @else
            <div class="cart-list-title">
                <div class="row">
                    <div class="col-lg-6 col-md-1 col-12">
                    No Whislist items
                    </div>
                </div>
            </div>
            @endif




        </div>

    </div>
</div>
<!--/ End Shopping Cart -->
@endsection