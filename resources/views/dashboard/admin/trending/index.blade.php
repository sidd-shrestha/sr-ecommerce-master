@extends('dashboard.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Trending Categories</h4>
                          @foreach ($category as $category)
                             <a href="{{url('admin/view_category/'.$category->slug)}}">{{$category->brand}}</a>
                          @endforeach

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- content-wrapper ends -->

      </div>
@endsection
