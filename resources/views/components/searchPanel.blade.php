<div class="col-lg-2 col-md-6 col-sm-12">
    <h4>Фильтры</h4>
    <br>
    <form method="GET" id="filter" action="{{route('search')}}" enctype="multipart/form-data">
        <div class="form-group">
            <input name="title" type="text" class="form-control" id="title" value="{{request('title')}}" placeholder="Название">
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
