@extends('voyager::master')
@section('content')
    <div class="container mt-2">
        <table class="table table-striped ">
            <thead>
            <tr>
                <th >#</th>
                <th >Name</th>
                <th >Cause</th>
                <th >Requarment</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>1 </th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td class="float-right">
                    <button class="btn btn-primary">View</button>
                    <button class="btn btn-success">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
