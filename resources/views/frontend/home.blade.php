
@extends('layouts.layoutsite')
@section('title', 'Trang chủ')

@section('content')
    @include('frontend.sidebar-slideshow')
    <section class="clearfix main-content my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('frontend.sidebar-listcategory')
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12"><h3>SẢN PHẨM MỚI</h3></div>
                        @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="card" style="width: 100%;">
                                    <img src="{{asset('img/sanpham/' . $product->img)}}" class="card-img-top" alt="{{$product->name}}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <h6 class="text-danger">Giá: {{number_format($product->price)}} VNĐ</h6>
                                        <a href="{{url('san-pham/'.$product->slug)}}" class="btn btn-primary">Đặt mua</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
