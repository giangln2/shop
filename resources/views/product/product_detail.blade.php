@extends('layout.layout')

@section('title')
    {{ $product->name }}
@endsection

@section('content')

    @include('layout.sidebar')

    <div class="row">
        <div class="span9">
            <ul class="breadcrumb">
                <li>
                    <a href="{{ URL::to('index') }}">Trang chủ</a> <span class="divider">/</span>
                </li>
                <li class="active">{{ $product->name }}</li>
            </ul>
        </div>
        <div id="gallery" class="span3">
            <img src="{{ asset($product->image) }}" style="width:100%" alt="{{ $product->name }}"/>
        </div>
        <div class="span6">
            <h3>{{ $product->name }}</h3>
            <small>
                {{ $product->category->name }}
            </small>
            <hr class="soft"/>
            <form class="form-horizontal qtyFrm">
                <div class="control-group">
                    <label class="control-label">
                        <span>{{ $product->price }} VNĐ</span>
                    </label>
                    <div class="controls">
                        <input type="number" class="span2" placeholder="Số lượng..." min="0" max="5" value="1"/>
                        <button type="submit" class="btn btn-large btn-primary pull-right"> Thêm vào giỏ
                            <i class=" icon-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </form>

            <hr class="soft"/>
            <h4>Còn {{ $product->quantity }} sản phẩm</h4>
            <hr class="soft clr"/>
            <p>
                {!! nl2br(e($product->description)) !!}
            </p>
            <br class="clr"/>
            <hr class="soft"/>
        </div>
    </div>
@endsection
