@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Feature</h4>

                            <form action="{{ route('admin.create_feature') }}" method="post" autocomplete="off" class="forms-sample" enctype="multipart/form-data">

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
                                    <div class="col-md-12">
                                        <label for="exampleTextarea1">Features</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="feature"></textarea>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary me-2">Add Feature</button>
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
