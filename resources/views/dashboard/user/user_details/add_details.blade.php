@extends('dashboard.user.layouts.master')

@section('content')
    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="checkout-steps-form-style-1">
                        <ul id="accordionExample">
                            <li>
                                <h6 class="title" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">Your Personal Details </h6>
                                <section class="checkout-steps-form-content collapse show" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">

                                    <form action="{{ route('user.create_userdetails') }}" method="post" autocomplete="off"
                                        class="forms-sample" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            @foreach ($user as $user)
                                                <input type="hidden" value="{{ $user->id }}" name="user_id">
                                            @endforeach

                                                <div class="col-md-6">

                                                    <div class="single-form form-default form-group row">
                                                        <label>First Name</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="Enter your first name"
                                                                name="first_name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="single-form form-default form-group row">
                                                        <label>Last Name</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="Enter your last name"
                                                                name="last_name" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                    <div class="single-form form-default form-group row">
                                                        <label>Address</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="Enter your address"
                                                                name="address" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form form-default form-group row">
                                                        <label>Country</label>
                                                        <div class="select-items">
                                                            <select class="form-control" name="country"
                                                              >
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
                                                            <input type="text" placeholder="Phone Number" name="contact"
                                                               >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form form-default form-group row">
                                                        <label>City</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="City" name="city"
                                                              >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form form-default form-group row">
                                                        <label>Post Code</label>
                                                        <div class="form-input form">
                                                            <input type="text" placeholder="Post Code" name="postal_code"
                                                               >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-form form-default">
                                                        <label>Profile Image</label>
                                                        <div>
                                                            <input type="file" name="profile_image"
                                                              >
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="col-md-12">
                                                <div class="single-form button">
                                                    <button type="submit" class="btn btn-warning me-2">Update
                                                        Details</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
    </section>
@endsection
