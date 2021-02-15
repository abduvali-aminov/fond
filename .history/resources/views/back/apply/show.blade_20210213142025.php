@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="row">
            @if ($apply->status==2)
            <div class="row bg-warning text-center" >
                <h1 style="margin: 0 auto">Cheked</h1>
            </div>
            @endif
            <div class="text-right row">
                @if ($apply->status == 1 )
                    <a href="{{ route('checked-status', $apply->id) }}" class=" btn btn-danger">
                        <span  class="glyphicon glyphicon-share" aria-hidden="true"></span>
                    </a>
                @elseif($apply->status == 2)
                    <a href="{{ route('rechecked-status', $apply->id) }}" class=" btn btn-primary">
                        <span  class=" glyphicon glyphicon-check" aria-hidden="true"></span>
                    </a>
                @endif
                <a href="{{ route('apply-edit', $apply->id) }}" class=" btn btn-success">
                    <span  class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
                <a href="{{ route('apply-edit', $apply->id) }}" class=" btn btn-success">
                    <span  class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
                <form action="{{ route('change-history', $apply->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <a href="{{ route('change-history', $apply->id) }}"  class="btn btn-dark">
                        <span  class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>

                </form>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-6 mt-2">
                <h3>Name: {{ $apply->name }}</h3>
                <h3>Cause: {{ $apply->causes->name }} </h3>
                <h3>Summ: {{ $apply->required_amount }} {{ $apply->summ_type->name }} </h3>
                <h3>Tell: {{ $apply->phone }} </h3>
                <h3>Address: {{ $apply->address }} </h3>
            </div>
            <div class="col-sm-3 ">
                <img src="{{ Storage::url($apply->photo_1) }}" class= "img-responsive" alt="No image"/>
            </div>
            <div class="col-sm-3">
                <img src="{{ Storage::url($apply->photo_2) }}" class= "img-responsive" alt="No image"/>
            </div>
        </div>
        <div>
            <h3>Description: {{ $apply->description }} </h3>

        </div>

    </div>
@endsection
