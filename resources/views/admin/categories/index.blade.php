@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <a class="btn btn-success" href="{{route('categories.create')}}">Создать категорию</a>

        <hr>

        @include('components.message')

        <table class="table table-striped" id="dataTable">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Название</th>
                <th scope="col">Включен</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->active ? 'Да' : 'Нет'}}</td>
                    <td>
                        <a href="{{route('categories.edit', $category)}}" class="badge badge-primary">Редактировать</a>
                        <form class="d-inline-block del" method="post" action="{{route('categories.destroy', $category)}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="badge badge-danger del">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h5>Категорий нет</h5></td>
                </tr>
            @endforelse
            </tbody>
        </table>

    </div>
    <!-- /.container-fluid -->
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {

            $('#dataTable').DataTable();

            $(".del").click(function () {
                if (!confirm("Уверены, что хотите удалить?")) {
                    return false;
                }
            });

        });
    </script>
@endsection
