@extends('layout.layout')

@section('title')
    {{ $nameCategory }}
@endsection

@section('content')

    @include('layout.sidebar')

    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="{{ URL::to('index') }}">Trang chủ</a> <span class="divider">/</span></li>
            <li class="active">{{ $nameCategory }}</li>
        </ul>
        <h3> {{ $nameCategory }}
            <small class="pull-right"> Có tất cả {{ count($listProduct) }} sản phẩm</small>
        </h3>
        <hr class="soft"/>
        <form class="form-horizontal span6">
            <div class="control-group">
                <label class="control-label alignL">Sort By </label>
                <select>
                    <option>Priduct name A - Z</option>
                    <option>Priduct name Z - A</option>
                    <option>Priduct Stoke</option>
                    <option>Price Lowest first</option>
                </select>
            </div>
        </form>

        <br class="clr"/>
        <div class="tab-content">
            <div class="tab-pane  active" id="blockView">
                <ul class="thumbnails">
                    @foreach($listProduct as $product)
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="{{ URL::to('product/'. $product->id) }}"><img
                                        src="{{ asset($product->image) }}"
                                        alt="{{ $product->name }}" height="160"
                                        width="160"/></a>
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
                <hr class="soft"/>
            </div>
        </div>


        <div class="pagination">
            {!! $listProduct->render() !!}
        </div>
        <br class="clr"/>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $.get('/shop/public/category', function (data) {
                $('#sideMenu').html(data.result);
                $('#optTxt').html(data.option);
            });
        });
    </script>
@endsection
