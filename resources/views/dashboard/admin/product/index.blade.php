@extends('dashboard.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">



            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Products</h4>
                        <p class="card-description"> Add Products &nbsp; <a href="{{ route('admin.add_product') }}" class="btn btn-outline-light btn-fw">Add</a>
                        </p>
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

                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Product Code </th>
                                        <th> Brand </th>
                                        <th> Product Name </th>
                                        <th> Product Price </th>
                                        <th> Offer Price </th>
                                        <th> Product Quantity </th>
                                        <th> Product Description </th>
                                        <th> Product Image </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($product as $p)
                                    <!-- {{dd($p)}} -->
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->product_code }}</td>
                                        <td>{{ $p->subcategory->brand_name }}</td>
                                        <td>{{ $p->product_name }}</td>
                                        <td>{{ $p->product_price }}</td>
                                        <td>{{ $p->offer_price }}</td>
                                        <td>{{ $p->product_quantity }}</td>
                                        <td>{{ $p->product_description }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/product/' . $product->product_image) }}" alt="" style="object-fit:cover; height:100px; width:100px ">
                                        </td>
                                        <td>
                                            <div class="template-demo">
                                                <a href="{{ url('admin/edit_product/' . $product->id) }}" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                                </a>
                                                <a href="{{ url('admin/delete_product/'.$product->id) }}" class="btn btn-outline-danger btn-icon-text">
                                                    Delete <i class="mdi mdi-delete btn-icon-append"></i>
                                                </a>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
                2021</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                    template</a> from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>
@endsection