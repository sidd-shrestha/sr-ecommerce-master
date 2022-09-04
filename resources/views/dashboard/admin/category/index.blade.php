@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">



                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category</h4>
                            <p class="card-description"> Add category &nbsp; <a href="{{ route('admin.add_category') }}"
                                    class="btn btn-outline-light btn-fw">Add</a>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Category Name </th>
                                            <th> Category Image</th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($category as $category)


                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->category_name }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/category/' . $category->category_image) }}"
                                                    alt="" style="object-fit:cover; height:100px; width:100px ">
                                            </td>

                                            <td>
                                                <div class="template-demo">

                                                    <a href="{{ url('admin/edit_category/' . $category->id) }}" class="btn btn-outline-secondary btn-icon-text">
                                                        Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                                    </a>
                                                    <a href="{{ url('admin/delete_category/'.$category->id) }}" class="btn btn-outline-danger btn-icon-text">
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
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

    </div>
@endsection
