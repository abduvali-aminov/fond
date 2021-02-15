@extends('voyager::master')

@section('content')
<div class="container ">
    <div class="row ">
        <h1 class="page-title"><span class="glyphicon glyphicon-copyright-mark"></span>  Causes</h1>
        <div>
            <a href="{{ route('') }}" class="btn btn-success ">Add</a>

        </div>
    </div>



    <table class="table table-striped ">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($causes as $counter => $cause)
                <tr>
                    <th>{{ ++$counter }}</th>
                    <td>{{ $cause->name }}</td>
                    <td class="text-right">
                        <a href="{{ route('cause-show', $cause->id) }}" class="btn btn-primary" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a>
                        <a class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
