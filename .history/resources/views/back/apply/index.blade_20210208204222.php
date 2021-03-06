@extends('voyager::master')
@section('content')
    <div class="container ">

        <div class="row m-2">
            <h1 class="page-title"><span class="glyphicon glyphicon-user"></span>  Applies</h1>
            <div>
                <a class="btn btn-success ">Add</a>
                <form class="form-inline  my-lg-0 float-right ml-2 ">
                    <input class="form-control mr-sm-2"  type="search"  placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
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
</div>
@endsection
