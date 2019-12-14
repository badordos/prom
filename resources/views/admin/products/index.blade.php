@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <a class="btn btn-success" href="{{route('products.create')}}">Создать продукт</a>

        <hr>

        @include('components.message')

        <table class="table table-striped" id="dataTable">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Заголовок</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>
                        <a href="{{route('products.edit', $product)}}" class="badge badge-primary">Редактировать</a>
                        <form class="d-inline-block" method="post" action="{{route('products.destroy', $product)}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="badge badge-danger del">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h5>Продуктов нет</h5></td>
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
