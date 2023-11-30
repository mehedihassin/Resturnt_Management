@extends('admin.master')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>
<body>

    <h1 class="text-center text-primary">USER LIST</h1>


    <table id="example" class="table table-striped mx-5 my-3" m style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            @php
            $i=1;
            @endphp

            @foreach ($datas as $data)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->role}}</td>
                <td>{{$data->status}}</td>
              <td>
                @if($data->role=='manager')
                <a class="btn btn-danger" href="{{route('admin.user.distroy',$data->id)}}">Delete</a>
                @elseif($data->role=='waiter')
                <a class="btn btn-danger" href="{{route('admin.user.distroy',$data->id)}}">Delete</a>
                @elseif ($data->role=='customer')
                <a class="btn btn-danger" href="{{route('admin.user.distroy',$data->id)}}">Delete</a>
                @else
                <p>Not Allow</p>

                @endif
            </td>






            </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>

            </tr>
        </tfoot>
    </table>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable('#example');
    </script>


</body>
</html>

@endsection
