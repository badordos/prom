@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        @include('components.message')

        <table class="table table-striped" id="dataTable">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Имя</th>
                <th scope="col">Почта</th>
                <th scope="col">Заголовок</th>
                <th scope="col">Текст</th>
                <th scope="col">Дата</th>
            </tr>
            </thead>
            <tbody>
            @forelse($callBacks as $callBack)
                <tr>
                    <td>{{$callBack->name}}</td>
                    <td>{{$callBack->email}}</td>
                    <td>{{$callBack->subject}}</td>
                    <td>{{$callBack->message}}</td>
                    <td>{{$callBack->created_at}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h5>Сообщений нет</h5></td>
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

            $('#dataTable').DataTable({
                "bSort" : false,
            });

        });
    </script>

@endsection
