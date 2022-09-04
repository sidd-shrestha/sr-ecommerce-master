@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Categories</h4>
                            <form action="{{ route('admin.create_groups') }}" method="post" autocomplete="off"
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

                                <label class="sr-only" for="inlineFormInputName2">Category Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                                    placeholder="Enter brand name" name="category_name">

                                <label class="sr-only" for="inlineFormInputName2">Slug</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="slug">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category Image</label>
                                        <input type="file" name="category_image" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image" name="category_image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                <label class="sr-only" for="inlineFormInputName2">Status</label>
                                <input type="checkbox" name="status">

                                <br>

                                <button type="submit" class="btn btn-outline-primary btn-md">Add Groups</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- content-wrapper ends -->

    </div>
    <!-- main-panel ends -->

@endsection
