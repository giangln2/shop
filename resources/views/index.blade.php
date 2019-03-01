@extends('layout.layout')

@section('title','Trang chủ')

@section('slider')
    @include('layout.slider')
@endsection

@section('content')

    @include('layout.sidebar')

    <div class="span9">
        <div class="well well-small">
            <h4>Sách nổi bật
                <small class="pull-right">{{ count($listProduct) }} sản phẩm</small>
            </h4>
            <div class="row-fluid">
                <div id="featured" class="carousel slide">
                    <div class="carousel-inner">
                        @for($count = 0; $count < count($listProduct); $count++)
                            @if($count == 0)
                                <div class="item active">
                                    <ul class="thumbnails">
                            @elseif($count % 4 == 0)
                                <div class="item">
                                    <ul class="thumbnails">
                            @endif
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="{{ URL::to('product/'.$listProduct[$count]->id) }}" title="{{ $listProduct[$count]->name }}">
                                                    <img src="{{ $listProduct[$count]->image }}" alt="{{ $listProduct[$count]->name }}">
                                                </a>
                                                <div class="caption">
                                                    <h5 id="sliderTxt">
                                                        <a href="{{ URL::to('product/' . $listProduct[$count]->id) }}">{{ $listProduct[$count]->name }}</a>
                                                    </h5>
                                                    <h4>
                                                        <a class="btn" href="{{ URL::to('product/'.$listProduct[$count]->id) }}">Xem</a>
                                                        <span class="pull-right">{{ $listProduct[$count]->price }} VNĐ</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                            @if(($count + 1) % 4 == 0)
                                    </ul>
                                </div>
                            @endif
                        @endfor
                        @if(count($listProduct) < 4)
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#featured" data-slide="next">›</a>
            </div>
        </div>
    </div>
    <h4>Sách mới </h4>
    <ul class="thumbnails">
        @foreach($listProduct as $product)
            <li class="span3">
                <div class="thumbnail">
                    <a href="{{ URL::to('product/' . $product->id) }}">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" height="160" width="160"/>
                    </a>
                    <div class="caption">
                        <h5>
                            <a href="{{ URL::to('product/' . $product->id) }}" title="{{ $product->name }}">{{ $product->name }}</a>
                        </h5>
                        <p>
                            <a href="{{ URL::to('category/' . $product->category->id) }}">{{ $product->category->name }}</a>
                        </p>

                        <h4 style="text-align:center">
                            <a class="btn" href="#">Thêm vào <i class="icon-shopping-cart"></i></a>
                            {{ $product->price }} VNĐ
                        </h4>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
