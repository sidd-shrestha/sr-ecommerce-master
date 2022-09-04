@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">



                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Order</h4>

                            </p>
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> User fullname </th>
                                            <th> Product name</th>
                                            <th> Product Image</th>
                                            <th> Product Quantity</th>
                                            <th> Product Price</th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $order)
                                        @foreach($orderItems as $orderItems)
                                        <tr>


                                            <td>
                                                {{$order->order_id}}
                                            </td>
                                            <td>
                                                {{$order->first_name}}   {{$order->last_name}}
                                            </td>

                                            <td>
                                                {{$orderItems->products->product_name}}
                                            </td>
                                            <td>
                                                <img src="{{ asset('uploads/product/' . $orderItems->products->product_image) }}" alt="" style="object-fit: cover; min-height:50px;max-height:100px">
                                            </td>
                                            <td>
                                                {{$orderItems->product_quantity}}
                                            </td>
                                            <td>
                                                {{$orderItems->product_price}}
                                            </td>
                                            <td>
                                                <div class="template-demo">

                                                    <a href="" class="btn btn-outline-secondary btn-icon-text">
                                                        Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                                    </a>
                                                    <a href="" class="btn btn-outline-danger btn-icon-text">
                                                        Delete <i class="mdi mdi-delete btn-icon-append"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
@endforeach
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

        <!-- partial -->
    </div>
@endsection
