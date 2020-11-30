@extends('layouts.admin')

@section('content')
    <div class="container">

        <h4>{{isset($product) ? 'Изменить' : 'Создать' }} Категорию</h4>
        <hr>

        @include('components.errors')

        <form method="post"
              action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}"
              enctype="multipart/form-data">
            {{csrf_field()}}
            @if(isset($category))
                @method('PATCH')
            @endif
            <div class="form-group">
                <label>Заголовок</label>
                <input type="text" class="form-control" name="title"
                       value="{{ isset($category) ? $category->title : old('title') }}">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label for="active">Включен</label>
                    <select class="form-control" id="active" name="active">
                        <option>Да</option>
                        <option @if(!$category->active) selected @endif>Нет</option>
                    </select>
                </div>
            </div>
            <br>
            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>

    </div>

@endsection
