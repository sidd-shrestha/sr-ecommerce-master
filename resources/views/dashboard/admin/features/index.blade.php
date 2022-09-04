@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Remaining Features</h4>
                            <p class="card-description"> Features are required to be added&nbsp;
                            </p>

                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Product Name </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $product)
                                            <tr>

                                                <td>{{ $product->id }}</td>

                                                <td>{{ $product->product_name }}</td>
                                                <td>
                                                    <div class="template-demo">
                                                        <a href="{{ url('admin/add_feature/' . $product->id) }}" class="btn btn-outline-warning btn-icon-text">
                                                            Update Features <i class="mdi mdi-update btn-icon-append"></i>
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Features</h4>
                            <p class="card-description"> Available features of products&nbsp;
                            </p>
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
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Product Name </th>
                                            <th>Features</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($features as $features)
                                            <tr>

                                                <td>{{ $features->id }}</td>
                                                <td>{{ $features->product->product_name }}</td>
                                                <td>{{ $features->feature }}</td>

                                                <td>
                                                    <div class="template-demo">
                                                        <a href="{{ url('admin/add_feature/' . $features->id) }}" class="btn btn-outline-warning btn-icon-text">
                                                            Update Features <i class="mdi mdi-update btn-icon-append"></i>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-outline-secondary btn-icon-text"> Edit <i
                                                                class="mdi mdi-file-check btn-icon-append"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-outline-danger btn-icon-text">
                                                            Delete <i class="mdi mdi-delete btn-icon-append"></i>
                                                        </button>
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

    </div>
@endsection
