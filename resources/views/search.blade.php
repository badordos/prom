@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h1>Поиск по каталогу продукции ООО "ПРОМИНДУСТРИЯ"</h1>
        <hr>
        @if(request('title') || request('type_id'))
            <h4>Отфильтровано по "{{request('title')}}"
                @if(($reqType = $types->where('id', request('type_id'))->first()) != null) | "{{$reqType->title}}"
                @endif</h4>
            <hr>
        @endif
        <div class="row">

            @include('components.searchPanel')

            <div class="col-10">
                <div class="row">
                    @forelse($products as $product)
                        <div class="card col-lg-3 col-md-4 col-sm-9 mr-5 mt-3">
                            @php
                                $image = $product->getFirstMedia('image')
                            @endphp
                            <img class="card-img-top img-fluid img-thumbnail" style="width: 350px ; height: 350px"
                                 src="{{$image ? $image->getUrl() : '/img/about.jpg'}}"
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
                </div>
                <br>
            </div>
        </div>
    </div>

@endsection
