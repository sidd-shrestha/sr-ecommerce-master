@extends('dashboard.user.layouts.master')

@section('content')
    <!--====== Start Profile One ======-->
    <br>
    <div class="profile">


        <div class="container">
            <div class="profile-content">
                <div class="profile-card">
                    <div class="profile-card-wrapper">
                        <div class="card-header bg_cover" style="
                                background-image: url(https://cdn.ayroui.com/1.0/images/profile/card-bg.jpg);
                                "></div>
                        <!-- card-header -->
                        <div class="card-profile">
                            <img src="https://cdn.ayroui.com/1.0/images/profile/profile.jpg" alt="Profile" />

                        </div>
                        <!-- card-profile -->
                        <div class="card-content text-center rounded-buttons">
                            <h6 class="card-title">
                                {{ Auth::guard('web')->user()->name }}</h6>
                            <h6>
                                {{ Auth::guard('web')->user()->email }}
                            </h6>

                        </div>
                        <div class="card-body">
                            <section class="profile-section ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="user-title">
                                                <h4>Profile Details <a href="{{route('user.add_details')}}"
                                                        class="btn btn-outline-primary float-end">Edit</a> </h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </section>

                        </div>
                        <!-- profile-card -->
                    </div>
                    <!-- profile-card -->
                </div>


            </div>
        </div>
        <!--====== End Profile One ======-->

        <section class="user-grids">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-12">
                        <div class="product-grids-head">
                            <div class="product-grid-topbar">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-md-8 col-12">
                                        <div class="product-sorting">
                                            <label for="sorting">Username:</label>
                                            <label for="sorting">Sanish Maharjan</label>
                                        </div>
                                        <div class="product-sorting">
                                            <label for="sorting"> Email:</label>
                                            <label for="sorting"> doe@email.com</label>
                                        </div>
                                        <div class="product-sorting">
                                            <label for="sorting">Phone:</label>
                                            <label for="sorting">+123 456 789 0234</label>
                                        </div>
                                        <div class="product-sorting">
                                            <label for="sorting">Address:</label>
                                            <label for="sorting">Company Inc., 8901 Marmora Road, Glasgow, D04 89GR.</label>
                                        </div>
                                        <div class="product-sorting">
                                            <label for="sorting">Gender:</label>
                                            <label for="sorting">Male</label>


                                        </div>
                                        <div class="product-sorting">
                                            <label for="sorting">Birthday:</label>
                                            <label for="sorting">
                                                04 January 1992</label>


                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
