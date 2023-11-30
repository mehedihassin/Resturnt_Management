@extends('admin.master')

@section('content')


<div class="content">
    <a class="btn btn-info mb-4" href="{{route('ourteam.create')}}">Create</a>

    <div class="card">

        <div class="card-title text-center fw-bold fs-2 text-danger ">

            TEAM LIST
        </div>
        <div class="card-body">
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($teams as $team)

                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$team->name}}</td>
                        <td>{{$team->email}}</td>
                        <td>{{$team->phone}}</td>
                        <td>{{$team->designation}}</td>
                        <td><img width="50" src="{{asset('images/'. $team->image)}}"
                            alt=""></td>

                        <td>
                            <a class="btn btn-info" href="{{route('ourteam.edit',$team->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('ourteam.delete',$team->id)}}">Delete</a>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection



