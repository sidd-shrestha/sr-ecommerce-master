<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{route('admin.home')}}"><img src="{{asset('assets/images/logo.jpg')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{route('admin.home')}}"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <!-- <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal"> {{ Auth::guard('admin')->user()->name }}</h5>
                        <span>Gold Member</span>
                    </div> -->
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li> -->
        <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All Users </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Admins </a></li>

                </ul>
            </div>
        </li> -->
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-animation-outline"></i>
                </span>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.groups')}}">Groups</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category')}}">Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.sub_category')}}">Sub-Category</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-alpha-p-box"></i>
                </span>
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ Request::is('admin/product') ?'active':''  }}"> <a class="nav-link" href="{{route('admin.product')}}">Products</a></li>
                    <!-- <li class="nav-item {{ Request::is('admin/seller') ?'active':''  }}"> <a class="nav-link" href="{{route('admin.seller')}}">Seller</a></li> -->
                    <li class="nav-item {{ Request::is('admin/order') ?'active':''  }}"> <a class="nav-link" href="{{route('admin.order')}}">Order</a></li>
                    <li class="nav-item {{ Request::is('admin/features') ?'active':''  }}"> <a class="nav-link" href="{{ route('admin.features') }}">Features</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Specification</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Offers</a></li>
                </ul>
            </div>
        </li>
        <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-icon">
                    <i class="mdi mdi-cash"></i>
                </span>
                <span class="menu-title">Transaction Reports</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-icon">
                    <i class="mdi mdi-truck-fast"></i>
                </span>
                <span class="menu-title">Deliveries</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-icon">
                    <i class="mdi mdi-image-filter-center-focus-strong"></i>
                </span>
                <span class="menu-title">Reviews</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route ('admin.trending')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-image-filter-center-focus-strong"></i>
                </span>
                <span class="menu-title">Trending</span>
            </a>
        </li> -->

    </ul>
</nav>