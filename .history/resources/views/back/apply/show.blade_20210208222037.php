@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Name: {{ $apply->name }}</h3>
                <h3>Cause: {{ $appl }} </h3>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
@endsection
