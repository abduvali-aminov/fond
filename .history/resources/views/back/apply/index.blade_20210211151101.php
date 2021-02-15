@extends('voyager::master')
@section('content')
    <div class="container ">

        <div class="row ">
            <div
            <h1 class="page-title"><span class="glyphicon glyphicon-user"></span>  Applies</h1>
            <a class="btn text-right btn-success" >History</a>
            <div>
                <a href="{{ route('apply-create') }}" class="btn btn-success ">Add</a>
                <form class="form-inline  my-lg-0 float-right ml-2 ">
                    <input class="form-control mr-sm-2"  name="q" type="search" value="{{ request()->get('q') }}"  placeholder="Search" aria-label="Search">
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
                <th>Status</th>
                <th>History</th>
                <th class="text-right">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($applies as $counter => $apply)
                    <tr>
                        <th>{{ ++$counter }}</th>
                        <td>{{ $apply->name }}</td>
                        <td>{{ $apply->causes->name }}</td>
                        <td>{{ $apply->required_amount }} {{ $apply->summ_type->name }}</td>
                        <td>
                            @if ($apply->status == 1 )
                            <a href="{{ route('checked-status', $apply->id) }}" class="btn btn-primary">
                                <span  class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                        @elseif($apply->status == 2)
                            <a href="{{ route('rechecked-status', $apply->id) }}" class="btn btn-danger">
                                <span  class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                        @endif
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
    </div>
@endsection
