@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Seller Details </h4>
                            <p class="card-description"> Contains of seller Information </p>
                            <form action="{{ route('admin.create_seller') }}" method="post" autocomplete="off" class="forms-sample" enctype="multipart/form-data">
                              
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Name</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" style="color: white" name="product_id">
                                                    @foreach ($product as $product)
                                                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Seller Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="seller_name"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Selling Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"name="selling_price" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Sold Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="sold_date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Sold Quantity </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="sold_quantity"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <br>
                                <button type="submit" class="btn btn-primary me-2">Proceed</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                     
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
@endsection
