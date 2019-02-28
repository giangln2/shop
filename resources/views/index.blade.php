@extends('layout.layout')

@section('title','Trang chủ')

@section('slider')
    @include('layout.slider')
@endsection

@section('content')

    @include('layout.sidebar')

    <div class="span9">
        <div class="well well-small">
            <h4>Featured Products
                <small class="pull-right">200+ featured products</small>
            </h4>
            <div class="row-fluid">
                <div id="featured" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <i class="tag"></i>
                                        <a href="product_details.html"><img
                                                src="themes/images/products/8.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span
                                                    class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="product_details.html"><img
                                                src="themes/images/products/9.jpg" alt=""></a>
                                        <div class="caption">
                                            <h5>Product name</h5>
                                            <h4><a class="btn" href="product_details.html">VIEW</a> <span
                                                    class="pull-right">$222.00</span></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                </div>
            </div>
        </div>
        <h4>Sản phẩm mới </h4>
        <ul class="thumbnails">
            @foreach($listProduct as $product)
                <li class="span3">
                    <div class="thumbnail">
                        <a href="{{ URL::to('product/' . $product->id) }}"><img src="{{ $product->image }}"
                                                                                alt="{{ $product->name }}"
                                                                                height="160"
                                                                                width="160"/></a>
                        <div class="caption">
                            <h5><a href="{{ URL::to('product/' . $product->id) }}">{{ $product->name }}</a></h5>
                            <p>
                                @for($counter = 0; $counter < count($product->category); $counter++)
                                    @if($counter == count($product->category) - 1)
                                        {{ $product->category[$counter]->name }}
                                    @else
                                        {{ $product->category[$counter]->name }},
                                    @endif
                                @endfor
                            </p>

                            <h4 style="text-align:center"><a class="btn" href="#">Thêm vào <i
                                        class="icon-shopping-cart"></i></a> {{ $product->price }}
                                VNĐ
                            </h4>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
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
