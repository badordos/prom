@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="blog-post">
                    <h1>{{$product->title}}</h1>
                    <div class="blog-thumb set-bg" data-setbg="{{$image = $product->getFirstMedia('image') ? $image->getUrl() : '/img/about.jpg'}}">
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
