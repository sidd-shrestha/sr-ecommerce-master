<header class="header navbar-area">
    <!-- Start Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-middle">
                        <ul class="useful-links">
                            <li><a href="i{{ route('user.home') }}">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- <div class="top-left">
                        <ul class="menu-top-link">
                            <li>
                                <div class="select-position">
                                    <select id="select4">
                                        <option value="0" selected>$ USD</option>
                                        <option value="1">€ EURO</option>
                                        <option value="2">$ CAD</option>
                                        <option value="3">₹ INR</option>
                                        <option value="4">¥ CNY</option>
                                        <option value="5">৳ BDT</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="select-position">
                                    <select id="select5">
                                        <option value="0" selected>English</option>
                                        <option value="1">Español</option>
                                        <option value="2">Filipino</option>
                                        <option value="3">Français</option>
                                        <option value="4">العربية</option>
                                        <option value="5">हिन्दी</option>
                                        <option value="6">বাংলা</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">

                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="top-end">
                        <div class="user">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: whitesmoke">
                                        <i class="lni lni-user"></i>
                                        {{ Auth::guard('web')->user()->name}}</a>
                                    <ul class="sub-menu collapse" id="submenu-1-4">
                                        <li class="nav-item">
                                            <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <i class="lni lni-logout" style="color:black"></i>
                                                Logout</a>
                                            <form action="{{route('user.logout')}} " method="POST" class="d-none" id="logout-form">@csrf</form>
                                        </li>
                                        <li class="nav-item"><a href="{{route('user.user_details')}}"><i class="lni lni-user" style="color:black">
                                                </i> User Profile</a></li>
                                        <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
                                                Sibebar</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Start Header Middle -->
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-7">
                    <!-- Start Header Logo -->
                    <a class="navbar-brand" href="{{route('user.home') }}">
                        <img src="{{asset('user/assets/images/logo/logo.jpg')}}" alt="Logo">
                    </a>
                    <!-- End Header Logo -->
                </div>
                <div class="col-lg-5 col-md-7 d-xs-none">
                    <!-- Start Main Menu Search -->
                    <div class="main-menu-search">
                        <!-- navbar search start -->
                        <div class="navbar-search search-style-5">
                            <!-- <div class="search-select">
                                <div class="select-position">
                                    <select id="select1">
                                        <option selected>All</option>
                                        <option value="1">option 01</option>
                                        <option value="2">option 02</option>
                                        <option value="3">option 03</option>
                                        <option value="4">option 04</option>
                                        <option value="5">option 05</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="search-input">
                                <input type="text" placeholder="Search">
                            </div>
                            <div class="search-btn">
                                <button><i class="lni lni-search-alt"></i></button>
                            </div>
                        </div>
                        <!-- navbar search Ends -->
                    </div>
                    <!-- End Main Menu Search -->
                </div>
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area">
                        <div class="nav-hotline">
                            <i class="lni lni-phone"></i>
                            <h3>Call Us:
                                <span>(+977) 01 1234 56</span>
                            </h3>
                        </div>
                        <div class="navbar-cart">
                            <div class="wishlist">
                                <a href="{{route('user.whislist')}}">
                                    <i class="lni lni-heart"></i>
                                    <span class="total-items whislist-count">0</span>
                                </a>
                            </div>

                            <div class="cart-items">
                                <a href="{{url('user/view_cart')}}" class="main-btn">
                                    <i class="lni lni-cart"></i>
                                    <span class="total-items cart=count">0</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Middle -->
    <!-- Start Header Bottom -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="nav-inner">
                    <!-- Start Mega Category Menu -->
                    <div class="mega-category-menu">
                        <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
                        <ul class="sub-category">
                            @foreach ($groups as $groups)

                            <li><a href="{{url('/user/view_category/'. $groups->slug)}}">{{$groups->category_name}} <i class="lni lni-chevron-right"></i></a>

                                <ul class="inner-sub-category">
                                    @foreach ($groups->category as $category)
                                    <li><a href="product-grids.html">{{$category->category_name}} <i class="lni lni-chevron-right"></i></a>
                                        <ul class="inner-sub-category">
                                            @foreach ($category->subcategory as $subcategory)
                                            <li><a href="product-grids.html">{{$subcategory->brand_name}} </a>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </li>

                                    @endforeach
                                </ul>
                                @endforeach


                            </li>
                        </ul>
                    </div>
                    <!-- End Mega Category Menu -->
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{route('user.home') }}" class="active" aria-label="Toggle navigation">Home</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="{{route('user.categories')}}" class="active" aria-label="Toggle navigation">Categories</a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a href="contact.html" aria-label="Toggle navigation">Blog</a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="{{url('user/viewOrders')}}" aria-label="Toggle navigation">My Order</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('user.viewProduct')}}" aria-label="Toggle navigation">Products</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('razorpay')}}" aria-label="Toggle navigation">Payment</a>
                                </li> -->
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Nav Social -->
                <div class="nav-social">
                    <h5 class="title">Follow Us:</h5>
                    <ul>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                        </li>
                        <!-- <li>
                            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                        </li> -->
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                        </li>
                        <!-- <li>
                            <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                        </li> -->
                    </ul>
                </div>
                <!-- End Nav Social -->
            </div>
        </div>
    </div>
    <!-- End Header Bottom -->
</header>