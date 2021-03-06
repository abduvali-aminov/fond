@extends('main.main')
@section('content')
    <div class="container mt-2">
        <a href="{{ route('main') }}" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i></a>

        <center class="mt-2">
            <h1>All the Applies</h1>
        </center>

        <div class="row row-cols-1 row-cols-md-4 g-4 ">
        @foreach ($applies as $counter => $apply)

                <div class="col mt-2">
                    <div class="card h-100">
                        <div class="wrapper">
                            <img class="p-1" src="{{ Storage::url($apply->photo_1) }}"   />
                            <div class="card-body">
                                <h5 class="card-title">FIO: {{ $apply->name }}</h5>
                                <p class="card-text">@if(!@empty($apply->causes) )Sababi: {{ $apply->causes->name }} @endif</p>
                                <p class="card-text">Muxtoj: {{ $apply->required_amount }} {{ $apply->summ_type->name }}</p>
                            </div>
                            <
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $apply->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
