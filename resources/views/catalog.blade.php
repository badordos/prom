@extends('layouts.app')

@section('content')



    <div class="container-fluid">
        <h2>Каталог продукции ООО "ПРОМИНДУСТРИЯ"</h2>
        <hr>
        @if(request('title') || request('type_id'))
            <h4>Отфильтровано по "{{request('title')}}
                " @if(($reqType = $types->where('id', request('type_id'))->first()) != null) | "{{$reqType->title}}
                " @endif</h4>
            <hr>
        @endif
        <div class="row">
            <div class="col-2">
                <h4>Фильтры</h4>
                <br>
                <form method="GET" id="filter" action="{{route('catalog')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <input name="title" type="text" class="form-control" id="title" placeholder="Название">
                    </div>
                    <div class="form-group">
                        <label for="type">Тип</label>
                        <select name="type_id" class="form-control" id="type">
                            <option disabled selected>Выбрать тип</option>
                            @foreach($types as $type)
                                <option value="{{$type->id}}"
                                        @if(isset($reqType) && $type->id == $reqType->id) selected @endif>
                                    {{$type->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="site-btn btn-success mb-2">Отфильтровать</button>
                </form>
            </div>
            <div class="col-10">
                <div class="row">
                    @forelse($products as $product)
                        <div class="card col-3 mr-5 mt-3">
                            <img class="card-img-top img-fluid img-thumbnail" style="width: 350px ; height: 350px"
                                 src="{{$product->getFirstMedia('image')->getUrl()}}" alt="{{$product->short_desc}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text">{{$product->type->title}}</p>
                                <p class="card-text">{{$product->short_desc}}</p>
                                <a href="{{route('product', $product)}}" class="site-btn btn-primary">Подробности</a>
                            </div>
                        </div>
                    @empty
                        <h4>Подходящих под запрос товаров не найдено</h4>
                    @endforelse
                </div>
                <br>
                {{$products->links()}}
            </div>
        </div>
    </div>

@endsection
