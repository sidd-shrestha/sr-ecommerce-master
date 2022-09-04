@extends('dashboard.user.layouts.master')
@section('content')
    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1">
                        <ul id="accordionExample">
                            <li>
                                <h6 class="title" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">Your Personal Details </h6>
                                <section class="checkout-steps-form-content collapse show" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <form action="{{ url('user/placeOrder') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @foreach ($user_details as $user_details)
                                            <div class="row">
                                                {{-- @foreach ($user as $user)
                                    <input type="hidden" value="{{$user->id}}" name="user_id">
                                    @endforeach --}}

                                                <div class="col-md-6">

                                                    <div class="single-form form-default form-group row">
                                                        <label>First Name</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="Enter your first name" class="first_name"
                                                                name="first_name" value="{{ $user_details->first_name }}">
                                                                <span id="fname_error"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="single-form form-default form-group row">
                                                        <label>Last Name</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="Enter your last name" class="last_name"
                                                                name="last_name" value="{{ $user_details->last_name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="single-form form-default form-group row">
                                                        <label>Address</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="Enter your address" class="address"
                                                                name="address" value="{{ $user_details->address }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form form-default form-group row">
                                                        <label>Country</label>
                                                        <div class="select-items">
                                                            <select class="form-control" name="country" class="country"
                                                                value="{{ $user_details->country }}">
                                                                <option value="0">Choose Country</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="India">India</option>
                                                                <option value="China">China</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="single-form form-default form-group row">
                                                        <label>Phone Number</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="Phone Number" name="contact" class="contact"
                                                                value="{{ $user_details->contact }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form form-default form-group row">
                                                        <label>City</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="City" name="city" class="city"
                                                                value="{{ $user_details->city }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form form-default form-group row">
                                                        <label>Post Code</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="Post Code" name="postal_code" class="postal_code"
                                                                value="{{ $user_details->postal_code }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" placeholder="payment_mode" name="payment_mode"
                                                >
                                                <div class="col-md-12">
                                                    <div class="single-form button">
                                                        <button type="submit" class="btn btn-warning me-2">Checkout</button>
                                                    </div>
                                                </div>
                                                <div class="price-table-btn button">
                                                    <button type="button" class="btn btn-warning me-2 razorpay_btn">Payment</button>

                                            </div>
                                            </div>
                                        @endforeach



                                </section>
                            </li>
                            {{-- <li>
                            <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">Shipping Address</h6>
                            <section class="checkout-steps-form-content collapse" id="collapseFour"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label>User Name</label>
                                            <div class="row">
                                                <div class="col-md-6 form-input form">
                                                    <input type="text" placeholder="First Name">
                                                </div>
                                                <div class="col-md-6 form-input form">
                                                    <input type="text" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Email Address</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Phone Number</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label>Mailing Address</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="Mailing Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>City</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Post Code</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="Post Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Country</label>
                                            <div class="form-input form">
                                                <input type="text" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-default">
                                            <label>Region/State</label>
                                            <div class="select-items">
                                                <select class="form-control">
                                                    <option value="0">select</option>
                                                    <option value="1">select option 01</option>
                                                    <option value="2">select option 02</option>
                                                    <option value="3">select option 03</option>
                                                    <option value="4">select option 04</option>
                                                    <option value="5">select option 05</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-payment-option">
                                            <h6 class="heading-6 font-weight-400 payment-title">Select Delivery
                                                Option</h6>
                                            <div class="payment-option-wrapper">
                                                <div class="single-payment-option">
                                                    <input type="radio" name="shipping" checked id="shipping-1">
                                                    <label for="shipping-1">
                                                        <img src="https://via.placeholder.com/60x32"
                                                            alt="Sipping">
                                                        <p>Standerd Shipping</p>
                                                        <span class="price">$10.50</span>
                                                    </label>
                                                </div>
                                                <div class="single-payment-option">
                                                    <input type="radio" name="shipping" id="shipping-2">
                                                    <label for="shipping-2">
                                                        <img src="https://via.placeholder.com/60x32"
                                                            alt="Sipping">
                                                        <p>Standerd Shipping</p>
                                                        <span class="price">$10.50</span>
                                                    </label>
                                                </div>
                                                <div class="single-payment-option">
                                                    <input type="radio" name="shipping" id="shipping-3">
                                                    <label for="shipping-3">
                                                        <img src="https://via.placeholder.com/60x32"
                                                            alt="Sipping">
                                                        <p>Standerd Shipping</p>
                                                        <span class="price">$10.50</span>
                                                    </label>
                                                </div>
                                                <div class="single-payment-option">
                                                    <input type="radio" name="shipping" id="shipping-4">
                                                    <label for="shipping-4">
                                                        <img src="https://via.placeholder.com/60x32"
                                                            alt="Sipping">
                                                        <p>Standerd Shipping</p>
                                                        <span class="price">$10.50</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="steps-form-btn button">
                                            <button class="btn" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">previous</button>
                                            <a href="javascript:void(0)" class="btn btn-alt">Save & Continue</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </li>
                        <li>
                            <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                aria-expanded="false" aria-controls="collapsefive">Payment Info</h6>
                            <section class="checkout-steps-form-content collapse" id="collapsefive"
                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkout-payment-form">
                                            <div class="single-form form-default">
                                                <label>Cardholder Name</label>
                                                <div class="form-input form">
                                                    <input type="text" placeholder="Cardholder Name">
                                                </div>
                                            </div>
                                            <div class="single-form form-default">
                                                <label>Card Number</label>
                                                <div class="form-input form">
                                                    <input id="credit-input" type="text"
                                                        placeholder="0000 0000 0000 0000">
                                                    <img src="assets/images/payment/card.png" alt="card">
                                                </div>
                                            </div>
                                            <div class="payment-card-info">
                                                <div class="single-form form-default mm-yy">
                                                    <label>Expiration</label>
                                                    <div class="expiration d-flex">
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="MM">
                                                        </div>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-form form-default">
                                                    <label>CVC/CVV <span><i
                                                                class="mdi mdi-alert-circle"></i></span></label>
                                                    <div class="form-input form">
                                                        <input type="text" placeholder="***">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-form form-default button">
                                                <button class="btn">pay now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">
                        <div class="checkout-sidebar-coupon">
                            <p>Appy Coupon to get discount!</p>
                            <form action="#">
                                <div class="single-form form-default">
                                    <div class="form-input form">
                                        <input type="text" placeholder="Coupon Code">
                                    </div>
                                    <div class="button">
                                        <button class="btn">apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="checkout-sidebar-price-table mt-30">
                            <h5 class="title">Pricing Table</h5>

                            <div class="sub-total-price">
                                @php $total = 0; @endphp
                                @foreach ($cartItems as $cartItems)
                                    <div class="total-price">

                                        <p class="value">{{ $cartItems->products->product_name }}</p>

                                        <p class="value">Rs &nbsp;{{ $cartItems->products->product_price }}</p>


                                    </div>
                                    @php $total += $cartItems->products->product_price * $cartItems->product_quantity;@endphp
                                @endforeach


                            </div>

                            <div class="total-payable">
                                <div class="payable-price">

                                    <p class="value">Subotal Price:</p>
                                    <p class="price">Rs {{ $total }}</p>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endsection