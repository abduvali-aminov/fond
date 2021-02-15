@extends('voyager::master')

@section('content')
<div class="container ">

    <div class="row ">
        <h1 class="page-title"><span class="glyphicon glyphicon-copyright-mark"></span>  Causes</h1>
        <div>
            <button class="btn btn-success ">Add</button>
            {{-- <form class="form-inline  my-lg-0 float-right ml-2 ">
                <input class="form-control mr-sm-2"  name="q" type="search" value="{{ request()->get('q') }}"  placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
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
