@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Name: {{ $apply->name }}</h3>
                <h3>Cause: {{ $apply->causes->name }} </h3>
                <h3>Requarment Amount: {{ $apply->required_amount }} {{ $apply->summ_type->name }} </h3>
                <h3>Tell: {{ $apply->phone }} </h3>
                <h3>Address: {{ $apply->phone }} </h3>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
@endsection
