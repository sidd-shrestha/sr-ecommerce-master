@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">SubCategory</h4>
                            <p class="card-description"> Add SubCategory &nbsp; <a href="{{ route('admin.add_sub_category') }}"
                                    class="btn btn-outline-light btn-fw">Add</a>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Category Name </th>
                                            <th> Brand Name </th>
                                            <th> Brand Image</th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($subcategory as $subcategory)


                                            <td>{{ $subcategory->id }}</td>
                                            <td>{{ $subcategory->categories->category_name }}</td>
                                            <td>{{ $subcategory->brand_name }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/brands/' . $subcategory->brand_image) }}"
                                                    alt="">
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
