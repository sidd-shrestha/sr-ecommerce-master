@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Products</h4>
                            <p class="card-description"> A newly products can be added from here. </p>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-product-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-product" type="button" role="tab"
                                        aria-controls="pills-product" aria-selected="true">Product</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-seo-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo"
                                        aria-selected="false">SEO</button>
                                </li>


                            </ul>
                            <form action="{{ route('admin.create_product') }}" method="post" autocomplete="off"
                                class="forms-sample" enctype="multipart/form-data">

                                @csrf
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-product" role="tabpanel"
                                        aria-labelledby="pills-product-tab" tabindex="0">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Brand </label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" style="color: white"
                                                            name="subcategory_id">
                                                            @foreach ($sub_category as $sub_category)
                                                                <option value="{{ $sub_category->id }}">
                                                                    {{ $sub_category->category_type }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Product Code</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="product_code" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Product Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="product_name" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Product Quantity</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="product_quantity" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Product Price</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="product_price" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Offer Price</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="offer_price" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Sale Tag</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="sale_tag" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                <textarea class="form-control" id="exampleTextarea1" rows="4" name="product_description"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="exampleTextarea1">Product Status</label>
                                            <div class="col-md-6">
                                                <label class="sr-only" for="inlineFormInputName2">Status</label>
                                                <input type="checkbox" name="status">
                                                <label class="sr-only" for="inlineFormInputName2">Featured
                                                    Products</label>
                                                <input type="checkbox" name="featured_products">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="sr-only" for="inlineFormInputName2">New Arrival</label>
                                                <input type="checkbox" name="new_arrival_products">
                                                <label class="sr-only" for="inlineFormInputName2">Products
                                                    Offers</label>
                                                <input type="checkbox" name="offer_products">
                                                <label class="sr-only" for="inlineFormInputName2">Trending</label>
                                                <input type="checkbox" name="trending">
                                            </div>
                                        </div>

                                        <br>



                                    </div>
                                    <div class="tab-pane fade" id="pills-seo" role="tabpanel"
                                        aria-labelledby="pills-seo-tab" tabindex="0">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Meta Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="meta_title" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Slug</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="slug" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Meta keyword</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="meta_keyword" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Meta Description</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="meta_description" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-outline-primary btn-fw">Add Product</button>
                                        <button type="button" class="btn btn-outline-secondary btn-fw">Cancel</button>

                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
@endsection
