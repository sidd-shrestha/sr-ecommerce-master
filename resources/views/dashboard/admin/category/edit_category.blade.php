@extends('dashboard.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Categories</h4>
                        {{-- <form action="{{ url('admin/update_category/'. $category->id) }}" method="post" autocomplete="off"
                        class="form-inline" enctype="multipart/form-data">
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
                        @method('PUT')
                        <label class="sr-only" for="inlineFormInputName2">Brand</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter category name" name="category_name">

                        <label class="sr-only" for="inlineFormInputName2">Slug</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="slug">
                        <label class="sr-only" for="inlineFormInputName2">Meta Title</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" value="{{$category->meta_title}}" name="meta_title">
                        <label class="sr-only" for="inlineFormInputName2">Meta Keywords</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" value="{{$category->meta_keywords}}" name="meta_keywords">
                        <label class="sr-only" for="inlineFormInputName2">Meta Description</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" value="{{$category->meta_description}}" name="meta_description">

                        @if($category->category_image)
                        <img src="{{ asset('uploads/category/' . $category->category_image) }}" alt="" style="object-fit:cover; height:100px; width:100px ">
                        @endif
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Image</label>
                            <input type="file" name="category_image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="category_image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <label class="sr-only" for="inlineFormInputName2">Status</label>
                        <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':''}}>
                        <label class="sr-only" for="inlineFormInputName2">Popular</label>
                        <input type="checkbox" name="popular " {{$category->popular == '1' ? 'checked':''}}>
                        <br>

                        <button type="submit" class="btn btn-outline-warning btn-md">Update Category</button>
                        </form> --}}
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