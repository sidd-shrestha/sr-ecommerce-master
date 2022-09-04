@extends('dashboard.user.layouts.master')

@section('content')
    <section id="cart" class="py-3">
        <div class="container-fluid w-75">
            <h5 class="font-baloo font-size-20">Shopping Cart</h5>

            <!--  shopping cart items   -->
            <div class="row product_data">
                <div class="col-md-6">

                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    <ul id="saveform_errList"></ul>
                </div>
                @php $total = 0; @endphp
               @if($cartItem->count()>0)
               <div class="col-sm-9">
                   <p id="success_message"></p>
                <!-- cart item -->

                @foreach ($cartItem as $cartItem)
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="{{ asset('uploads/product/' . $cartItem->products->product_image) }}"
                                style="height: 120px;" alt="cart1" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20">{{ $cartItem->products->product_name }}</h5>
                            <small>{{ $cartItem->products->subcategory->brand_name }}</small>

                            <!-- product qty -->
                            <div class="qty d-flex pt-2 quantity">


                                <input type="hidden" value="{{ $cartItem->product_id }}" class="p_id">
                                @if ($cartItem->products->product_quantity > $cartItem->product_quantity)
                                    <div class="input-group text-center mb-3" style="width: 150px">
                                        <button class="input-group-text quantity_btn changeQuantity">-</button>
                                        <input type="text" class="form-control text-center quantity_input"
                                            name="product_quantity" value="{{ $cartItem->product_quantity }}">
                                        <button class="input-group-text quantity_btn changeQuantity">+</button>

                                    </div>
                                    @php $total += $cartItem->products->product_price * $cartItem->product_quantity;@endphp
                                @else
                                    <label class="label danger-label-outline"> Out Of Stock</label>
                                @endif

                                <button
                                    class="btn font-baloo text-danger px-3 border-right float-end delete_cart_item">Remove</button>

                                <button type="submit" class="btn font-baloo text-danger float-end">Save for
                                    Later</button>
                            </div>
                            <!-- !product qty -->

                        </div>

                        <div class="col-sm-2 text-right">
                            <div class="font-size-20 text-danger font-baloo">
                                Rs &nbsp;<span class="product_price">{{ $cartItem->products->product_price }}</span>
                            </div>
                        </div>

                    </div>
                @endforeach
                <!-- !cart item -->
                <!-- cart item -->

                <!-- !cart item -->
            </div>
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="lni lni-checkmark-circle"></i> Your
                        order is eligible for FREE Delivery.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-14">
                            <h6>Total <span class="text-danger">Rs &nbsp;<span class="text-danger"
                                        id="deal-price">{{ $total }}</span> </span> </h6>
                        </h5>
                        <div class="button">
                            <a href="{{ url('user/checkout') }}" class="btn">Proceed to Buy</a>
                        </div>

                    </div>
                </div>
            </div>
            @else
            <div class="col-sm-9">
                <!-- cart item -->


                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-8">
                            <h2> <i class="lni lni-cart"></i> No Items in cart</h2>
                        </div>
                    </div>
            </div>
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-warning py-3"><i class="lni lni-cross-circle"></i> Your
                        order is empty</h6>
                    <div class="border-top py-4">

                        <div class="button">
                            <a href="{{ url('user/checkout') }}" class="btn">Continue to Buy</a>
                        </div>

                    </div>
                </div>
            </div>


            @endif

            </div>
            <!--  !shopping cart items   -->
        </div>
    </section>
@endsection
