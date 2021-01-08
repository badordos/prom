@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h1>Каталог продукции ООО "ПРОМИНДУСТРИЯ"</h1>
        <hr>
        <div class="row">

            @include('components.searchPanel')

            <div class="col-10">

                @if(!$type)

                    <div class="row">
                        <div class="blog-post col-12">
                            <div class="blog-metas">
                                <div class="blog-meta meta-cata"><a href="{{route('home')}}">Главная</a></div>
                                <div class="blog-meta meta-cata"><a href="{{route('catalog')}}">Каталог</a></div>
                            </div>
                        </div>
                        @foreach($types as $thisType)
                            <div class="card col-lg-3 col-md-4 col-sm-9 mr-5 mt-2">
                                <img class="card-img-top img-fluid img-thumbnail" style="width: 350px ; height: 350px"
                                     src="{{$thisType->image}}"
                                     alt="{{$thisType->title}}"
                                     loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title">{{$thisType->title}}</h5>
                                    <p class="card-text">{{$thisType->desc}}</p>
                                    <a href="{{route('catalog', $thisType)}}"
                                       class="site-btn btn-primary">К продуктам</a>
                                </div>
                            </div>
                        @endforeach
                        @else
                            <div class="blog-post">
                                <div class="blog-metas">
                                    <div class="blog-meta meta-cata"><a href="{{route('home')}}">Главная</a></div>
                                    <div class="blog-meta meta-cata"><a href="{{route('catalog')}}">Каталог</a></div>
                                    <div class="blog-meta meta-cata"><a href="{{route('catalog', $type)}}">{{$type->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @forelse($products as $product)



                                    <div class="card col-lg-3 col-md-4 col-sm-9 mr-5 mt-3">
                                        <img class="card-img-top img-fluid img-thumbnail"
                                             style="width: 350px ; height: 350px"
                                             src="{{$image = $product->getFirstMedia('image') ? $image->getUrl() : '/img/about.jpg'}}"
                                             alt="{{$product->short_desc}}"
                                             loading="lazy">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$product->title}}</h5>
                                            <p class="card-text">{{$product->type->title}}</p>
                                            <p class="card-text">{{$product->short_desc}}</p>
                                            <a href="{{route('product', [$product->type, $product])}}"
                                               class="site-btn btn-primary">Подробности</a>
                                        </div>
                                    </div>
                                @empty
                                    <h4>Подходящих под запрос товаров не найдено</h4>
                                @endforelse
                                @endif
                            </div>
                            <br>
                    </div>
            </div>
        </div>

@endsection
