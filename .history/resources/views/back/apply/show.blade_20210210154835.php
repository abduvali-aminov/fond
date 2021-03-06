@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="row bg-danger text-center" >
            <h1 style="margin: 0 auto">Cheked</h1>
        </div>

        <div class="row">

            <div class="col-sm-5 mt-2">
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
                @if ($apply->status == 1 )
                    <a href="{{ route('checked-status', $apply->id) }}" class="active btn btn-success">
                        <span  class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                @elseif($apply->status == 2)
                    <a class="active btn btn-dark">
                        <span href="{{ route('rechecked-status') }}" class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                @endif
            </div>
        </div>

    </div>
@endsection
