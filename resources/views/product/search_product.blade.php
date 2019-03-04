@extends('layout.layout')

@section('title', 'Kết quả tìm kiếm')

@section('content')

    @include('layout.sidebar')

    <div class="span9">
        <ul class="breadcrumb">
            <li>
                <a href="{{ URL::to('index') }}">Trang chủ</a>
                <span class="divider">/</span>
            </li>
            <li class="active">Tìm kiếm</li>
        </ul>
        <h3> Kết quả tìm kiếm
            <small class="pull-right"> Có tất cả {{ count($listProduct) }} sản phẩm</small>
        </h3>
        <hr class="soft"/>
        <form class="form-horizontal span6">
            <div class="control-group">
                <label class="control-label alignL">Sort By </label>
                <select>
                    <option>Theo tên A - Z</option>
                    <option>Theo tên Z - A</option>
                    <option>Price Lowest first</option>
                </select>
            </div>
        </form>

        <br class="clr"/>
        <div class="tab-content">
            <div class="tab-pane  active" id="blockView">
                @if(count($listProduct))
                    <ul class="thumbnails">
                        @foreach($listProduct as $product)
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="{{ URL::to('product/'. $product->id) }}">
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" height="160" width="160"/>
                                    </a>
                                    <div class="caption">
                                        <h5>{{ $product->name }}</h5>
                                        <h4 style="text-align:center"><a class="btn" href="#">Thêm vào
                                                <i class="icon-shopping-cart"></i></a> {{ $product->price }} VNĐ
                                        </h4>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h5> Không tìm thấy sản phẩm nào </h5>
                @endif
                <hr class="soft"/>
            </div>
        </div>

        <br class="clr"/>
    </div>
@endsection
