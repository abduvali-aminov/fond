@extends('voyager::master')

@section('content')
<div class="container ">
    <div class="row ">
        <h1 class="page-title"><span class="glyphicon glyphicon-copyright-mark"></span>  Causes</h1>
        <div>
            <a href="{{ route('cause-create') }}" class="btn btn-success ">Add</a>

        </div>
    </div>



    <table class="table table-striped ">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th class="text-right">View</th>
            <th class="text-right">Edit</th>
            <th class="text-right">Delete</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($causes as $counter => $cause)
                <tr>
                    <th>{{ ++$counter }}</th>
                    <td>{{ $cause->name }}</td>
                    <td class="text-right">
                        <a href="{{ route('cause-show', $cause->id) }}" class="btn btn-primary" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a>
                    </td>
                    <td class="text-right">
                        <a href="{{ route('cause-edit', $cause->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                    </td>
                        <form action="{{ route('change-history', $cause->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <a href="{{ route('change-history', $cause->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-secondary">
                                <span  class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
