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
                <input {{ route('edit_status', $apply->id) }} data-id="{{$apply->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $apply->status ? 'checked' : '' }}>
                <a href="{{ route('edit_status', $apply->id) }}" class="btn btn-dark btn-lg btn-block">Saw</a>
                <a class="btn btn-dark btn-lg btn-block">Replace</a>
            </div>
        </div>
    </div>
@endsection
