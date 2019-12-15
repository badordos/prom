@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="card text-center">
            <div class="card-header">
                <h2>{{$product->title}}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$product->short_desc}}</h5>
                <p class="card-text">{{$product->desc}}</p>
                <a href="tel:+79923322268" class="site-btn btn-sm btn-success"><i class="fas fa-phone-square"></i> Заказать</a>
            </div>
            <img class="card-img-bottom" src="{{$product->getFirstMedia('image')->getUrl()}}" alt="{{$product->short_desc}}">
            <div class="card-footer text-muted">
                <a href="{{route('catalog')}}" class="btn btn-sm btn-danger">Назад к каталогу</a>
            </div>
        </div>
    </div>

@endsection
