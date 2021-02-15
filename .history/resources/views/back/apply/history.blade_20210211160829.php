@extends('voyager::master')

@section('content')
<div class="row ">
    <h1 class="page-title"><span class=" glyphicon glyphicon-list-alt"></span>  History</h1>
/div>




    <table class="table table-striped ">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Cause</th>
            <th>Requarment</th>
            <th>Status</th>
            <th>History</th>
            <th class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($history as $counter => $apply)
                <tr>
                    <th>{{ ++$counter }}</th>
                    <td>{{ $apply->name }}</td>
                    <td>{{ $apply->causes->name }}</td>
                    <td>{{ $apply->required_amount }} {{ $apply->summ_type->name }}</td>
                    <td>
                        
                    </td>
                    <td>
                        <form action="{{ route('change-history', $apply->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <a href="{{ route('change-history', $apply->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-secondary">
                                <span  class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>

                        </form>
                    </td>
                    <td class="text-right">
                        <a href="{{ route('apply-show', $apply->id) }}" class="btn btn-primary" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a>
                        <a class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection