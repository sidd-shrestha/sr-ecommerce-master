@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Seller</h4>
                            <p class="card-description"> Seller Information &nbsp; <a href="{{ route('admin.add_seller') }}"
                                    class="btn btn-outline-light btn-fw">Add</a>
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
                                            <th> Product Name </th>
                                            <th> Name </th>
                                            <th> Price  </th>
                                            <th> Date  </th>
                                            <th> Quantity  </th>
                                            <th>Product Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                              
                                        <tr>
                                          @foreach ($seller as $seller)
                                            <td>{{$seller->id}}</td>
                                            <td>{{$seller->product->product_name}}</td>
                                            <td>{{$seller->seller_name}}</td>
                                            <td>{{$seller->selling_price}}</td>
                                            <td>{{$seller->sold_date}}</td>
                                            <td>{{$seller->sold_quantity}}</td>
                                            <td>
                                              <img src="{{ asset('uploads/product/' .$seller->product-> product_image) }}"
                                                  alt="" style="object-fit:cover; height:100px; width:100px ">
                                          </td>
                                            <td>
                                              <div class="template-demo">
                                                  <button type="button" class="btn btn-outline-secondary btn-icon-text">
                                                      Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                                  </button>
                                                  <button type="button" class="btn btn-outline-danger btn-icon-text">
                                                      Delete <i class="mdi mdi-delete btn-icon-append"></i>
                                                  </button>
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

      </div>
@endsection
