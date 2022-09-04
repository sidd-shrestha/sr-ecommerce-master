@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Product</h4>
                            <p class="card-description"> A newly products can be added from here. </p>
                            <form action="{{ url('admin/update_product/'. $product->id) }}" method="post" autocomplete="off"
                                class="forms-sample" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Category </label>
                                            <div class="col-sm-9">
                                                <select class="form-control" style="color: white" name="category_id">
                                                    @foreach ($category as $category)
                                                        <option value="{{ $category->id }}">{{ $category->brand }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Slug</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="slug" value="{{$product->slug}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Code</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="product_code" value="{{$product->product_code}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Quantity</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="product_quantity" value="{{$product->product_quantity}} "/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="product_price"  value="{{$product->product_price}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @if($product->product_image)
                                <img src="{{ asset('uploads/product/' . $product->product_image) }}"
                                alt="" style="object-fit:cover; height:100px; width:100px ">
                                @endif

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Image</label>
                                            <input type="file" name="product_image" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image" name="product_image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleTextarea1">Product Description</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="product_description"  value="{{$product->product_description}}">

                                        </textarea>
                                    </div>
                                </div>
                                <label class="sr-only" for="inlineFormInputName2">Status</label>
                                <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':''}}>
                                <label class="sr-only" for="inlineFormInputName2">Trending</label>
                                <input type="checkbox" name="trending" {{$category->trending == '1' ? 'checked':''}}>

                                <br>
                                <button type="submit" class="btn btn-primary me-2">Update Product</button>
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
