@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="blog-post col-12">
            <div class="blog-metas">
                <div class="blog-meta meta-cata"><a href="{{route('home')}}">Главная</a></div>
                <div class="blog-meta meta-cata"><a href="{{route('catalog')}}">Каталог</a></div>
                <div class="blog-meta meta-cata"><a href="{{route('catalog', $product->type)}}">{{$product->type->title}}</a></div>
                <div class="blog-meta"><a href="{{route('product', [$product->type, $product])}}">{{$product->title}}</a></div>
            </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="blog-post">
                    <h1>{{$product->title}}</h1>
                    @php
                        $image = $product->getFirstMedia('image')
                    @endphp
                    <div class="blog-thumb set-bg" data-setbg="{{$image ? $image->getUrl() : '/img/about.jpg'}}">
                    </div>
                    <h2>{{$product->short_desc}}</h2>
                    <p>{{$product->desc}}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">

                @include('components.callbackForm')

            </div>
        </div>

    </div>

@endsection
