@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add SubCategory</h4>
                            <p class="card-description"> A newly SubCategory can be added from here. </p>
                            <form action="{{ route('admin.create_subcategory') }}" method="post" autocomplete="off"
                                class="forms-sample" enctype="multipart/form-data">
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

                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Category </label>
                                            <div class="col-sm-9">
                                                <select class="form-control" style="color: white" name="category_id">
                                                    @foreach ($category as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}
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
                                            <label class="col-sm-3 col-form-label">Brand Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="category_type" />
                                            </div>
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






                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Brand Image</label>
                                            <input type="file" name="brand_image" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image" name="brand_image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <label class="sr-only" for="inlineFormInputName2">Status</label>
                                <input type="checkbox" name="status">
                                <label class="sr-only" for="inlineFormInputName2">Popular</label>
                                <input type="checkbox" name="popular">

                                <br>
                                <button type="submit" class="btn btn-primary me-2">Add SubCategory</button>
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
