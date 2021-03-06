@extends('voyager::master')
@section('content')
    <div class="container ">

        <div class="row">
            <h1 class="page-title"><span class="glyphicon glyphicon-user"></span>  Applies</h1>
            <a class="btn btn-success">Add</a>
            <h5 class="text-right">search:</h5>
            <input type="text" class>

        </div>



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


            <tr>
                <th>{{ ++$counter }}</th>
                <td>{{ $apply->name }}</td>
                <td>{{ $apply->cause_id }}</td>
                <td>{{ $apply->required_amount }} {{ $apply->summa_id }}</td>
                <td class="text-right">
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</button>
                    <button class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="float-right">
        {{ $applies->links() }}
    </div>
</div>
@endsection
