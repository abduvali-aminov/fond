@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Name: {{ $apply->name }}</h3>
                <h3>Cause: {{ $apply->causes->name }} </h3>
                <h3>Requarment Amount: {{ $apply->required_amount }} {{ $apply->summ_type->name }} </h3>
                <h3>Tell: {{ $apply->phone }} </h3>
                <h3>Address: {{ $apply->address }} </h3>
                <h3>Description: {{ $apply->description }} </h3>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
@endsection