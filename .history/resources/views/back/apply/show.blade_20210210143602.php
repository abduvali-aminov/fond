@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h3>Name: {{ $apply->name }}</h3>
                <h3>Cause: {{ $apply->causes->name }} </h3>
                <h3>Summ: {{ $apply->required_amount }} {{ $apply->summ_type->name }} </h3>
                <h3>Tell: {{ $apply->phone }} </h3>
                <h3>Address: {{ $apply->address }} </h3>
                <h3>Description: {{ $apply->description }} </h3>
            </div>
            <div class="col-sm-3 ">
                <img src="{{ Storage::url($apply->photo_1) }}" class= "img-responsive" alt="No image"/>
            </div>
            <div class="col-sm-3">
                <img src="{{ Storage::url($apply->photo_2) }}" class= "img-responsive" alt="No image"/>
            </div>
            <div class="col-sm-1 ">
                if()<a class="btn btn-success btn-lg btn-block">  <span class=" glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                <a class="btn btn-dark btn-lg btn-block">aa</a>
            </div>
            
        </div>
    </div>
@endsection
