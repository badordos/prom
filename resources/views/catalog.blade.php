@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h1>Каталог продукции ООО "ПРОМИНДУСТРИЯ"</h1>
        <hr>
        <div class="row">

            @include('components.searchPanel')

            <div class="col-10">
                <div class="row">
                    @if(!$type)
                        @foreach($types as $thisType)
                            <div class="card col-lg-3 col-md-4 col-sm-9 mr-5 mt-3">
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
                        @forelse($products as $product)
                            <div class="card col-lg-3 col-md-4 col-sm-9 mr-5 mt-3">
                                <img class="card-img-top img-fluid img-thumbnail" style="width: 350px ; height: 350px"
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
