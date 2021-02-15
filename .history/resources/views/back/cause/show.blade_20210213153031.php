@extends('voyager::master')
@section('content')



<div class="container ">

        <div class="row ">
            <h1 class="page-title"><span class=" glyphicon glyphicon-copyright-mark"></span>  {{ $cause_name->name }} </h1>
        </div>



        <table class="table table-striped ">
            <thead>
            <tr>
                <th>Name</th>
                <th>Requarment</th>
                <th>History</th>
                <th>History</th>
                <th class="text-right">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($cause->apply as $counter => $apply)
                    @if($apply->status!=5 && $apply->status!=0)
                        <tr>
                            <td>{{ $apply->name }}</td>
                            <td>{{ $apply->required_amount }} {{ $apply->summ_type->name }}</td>
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
                                <a href="{{ route('apply-edit', $apply->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
