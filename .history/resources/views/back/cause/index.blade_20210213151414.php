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
            <th class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($causes as $counter => $cause)
                <tr>
                    <th>{{ ++$counter }}</th>
                    <td>{{ $cause->name }}</td>
                    <td class="text-right">
                        <a href="{{ route('cause-show', $cause->id) }}" class="btn btn-primary" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true">View</span></a>
                        <a href="{{ route('cause-edit', $cause->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit">Edit</span> </a>
                        <a  class="btn btn-danger" >
                            <form action="{{ route('cause-delete', $cause->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger "
                            onclick="return confirm('Are you sure?')">
                                {{-- <span  class="glyphicon glyphicon-trash" aria-hidden="true">Delete</span> --}}
                            </form>
                        {{-- </a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
