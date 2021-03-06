@extends('voyager::master')
@section('content')
    <div class="container ">
        <table class="table table-striped ">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Cause</th>
                <th>Requarment</th>
                <th class="text-right">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($applies as $counter => $apply)

                @endforeach
            <tr>
                <th>{{ ++$counter }}</th>
                <td>{{ $apply->name }}</td>
                <td>{{ $apply->cause_id }}</td>
                <td>{{ $apply->required_amount }} {{  }}</td>
                <td class="text-right">
                    <button class="btn btn-primary">View</button>
                    <button class="btn btn-success">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
