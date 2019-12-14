@extends('layouts.admin')

@section('content')
    <div class="container">

        <h4>{{isset($product) ? 'Изменить' : 'Создать' }} Продукт</h4>
        <hr>

        @include('components.errors')

        <form method="post"
              action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}"
              enctype="multipart/form-data">
            {{csrf_field()}}
            @if(isset($product))
                @method('PATCH')
            @endif
            <div class="form-group">
                <label>Заголовок</label>
                <input type="text" class="form-control" name="title"
                       value="{{ isset($product) ? $product->title : old('title') }}">
            </div>
            <div class="form-group">
                <label>Тип</label>
                <select name="type_id">
                    @foreach($types as $type)
                        <option value="{{$type->id}}"
                            {{isset($product) && $product->type_id ===  $type->id ? 'selected' : '' }}>
                            {{$type->title}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Короткое описание</label>
                <input type="text" class="form-control" name="short_desc"
                       value="{{ isset($product) ? $product->short_desc : old('title') }}">
            </div>
            <div class="form-group">
                <label>Ключевые слова</label>
                <input type="text" class="form-control" name="meta"
                       value="{{ isset($product) ? $product->meta : old('meta') }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Описание</label>
                <textarea class="form-control" name="desc" id="desc"
                          rows="3">{{isset($product) ? $product->desc : old('desc')}}</textarea>
            </div>
            @if(isset($product))
                <img style="max-height: 300px;" src="{{$product->getFirstMedia('image')->getUrl() }}" class="img-fluid">
            @endif
            <div class="form-group">
                <label>Изображение</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <br>
            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>

    </div>
    <!-- /.container-fluid -->


@endsection

@section('js')

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        var editor = CKEDITOR.replace('desc');
    </script>

@endsection
