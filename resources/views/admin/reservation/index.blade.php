@extends('admin.master')

@section('content')


<div class="content">
    <div class="card">
        <div class="card-title text-center fw-bold fs-2 text-danger ">

           Reservation Table
        </div>
        <div class="card-body">
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Guest</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($reservations as $reservation)

                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$reservation->name}}</td>
                        <td>{{$reservation->email}}</td>
                        <td>{{$reservation->phone}}</td>
                        <td>{{$reservation->guest}}</td>
                        <td>{{$reservation->date}}</td>
                        <td>{{$reservation->time}}</td>
                        <td>{{$reservation->message}}</td>
                        <td>

                            <a class="btn btn-danger" href="{{route('reservation.delete', $reservation->id)}}">Delete</a>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection




