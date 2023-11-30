@extends('admin.master')

@section('content')


<div class="content">
    <div class="card">
        <div class="card-title text-center fw-bold fs-2 text-danger ">

            FOOD LIST
        </div>
        <div class="card-body">
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($data as $data)

                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->discount}}</td>
                        <td><img width="50" src="{{asset('images/'. $data->image)}}"
                            alt=""></td>
                        <td>{!! $data->description !!}</td>
                        <td>
                            <a class="btn btn-info" href="{{route('admin.food.edit', $data->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('admin.food.delete', $data->id)}}">Delete</a>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection



