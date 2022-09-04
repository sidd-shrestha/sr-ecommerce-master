@extends('dashboard.user.layouts.master')

@section('content')

<!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <div class="cart-list-head">
            <!-- Cart List Title -->
            <div class="cart-list-title">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-12">

                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <p>Product Name</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Quantity</p>
                    </div>
                    <div class="col-lg-4 col-md-2 col-12">
                        <p>Per Price</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Shipping</p>
                    </div>
                </div>
            </div>
            <!-- End Cart List Title -->
            <!-- Cart Single List list -->
            <div class="cart-single-list">
                @foreach ($order as $order)
                <div class="row align-items-center">
                    @foreach ($order->orderItem as $item)
                    <div class="col-lg-1 col-md-1 col-12">
                        <a href="product-details.html"><img src="{{ asset('uploads/product/' . $item->products->product_image) }}" alt="#"></a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">

                        <h5 class="product-name"><a href="product-details.html">
                            {{$item->products->product_name}}</a></h5>


                        <p class="product-des">
                            <span><em>Type:</em> Mirrorless</span>
                            <span><em>Color:</em> Black</span>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="count-input">
                         <p>    {{$item->product_quantity}}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-2 col-12">
                        <p> {{$item->product_price}}</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">

                         <p>
                            @if ($order->status == '0')
                            <label class="label success-label-outline float-end"> In Progress</label>
                            @else
                            <label class="label danger-label-outline float-end"> Received</label>
                            @endif
                         </p>

                    </div>
                    @endforeach
                </div>
                @endforeach

            </div>
            <!-- End Single List list -->


        </div>
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="Enter Your Coupon">
                                        <div class="button">
                                            <button class="btn">Apply Coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="right">
                                <ul>
                                    <li>Cart Subtotal<span>$2560.00</span></li>
                                    <li>Shipping<span>Free</span></li>
                                    <li>You Save<span>$29.00</span></li>
                                    <li class="last">You Pay<span>$2531.00</span></li>
                                </ul>
                                <div class="button">
                                    <a href="checkout.html" class="btn">Checkout</a>
                                    <a href="product-grids.html" class="btn btn-alt">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Total Amount -->
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->
@endsection