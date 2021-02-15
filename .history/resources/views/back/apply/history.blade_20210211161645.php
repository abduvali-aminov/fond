@extends('voyager::master')

@section('content')
<div class="container ">
    <h1 class="page-title"><span class=" glyphicon glyphicon-list-alt"></span>  History</h1>





    <table class="table table-striped ">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Cause</th>
            <th>Requarment</th>
            <th>Phone</th>
            <th>Address</th>
            <th class="text-right">Photo</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($history as $counter => $apply)
                <tr>
                    <th>{{ ++$counter }}</th>
                    <td>{{ $apply->name }}</td>
                    <td>{{ $apply->causes->name }}</td>
                    <td>{{ $apply->required_amount }} {{ $apply->summ_type->name }}</td>
                    <td>{{ $apply->phone }}</td>
                    <td>{{ $apply->address }}</td>
                    <td>
                        <img src="{{ Storage::url($apply->photo_1) }}" class= "img-responsive" style = "width: 150px; width: 100px" alt="No image"/>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
