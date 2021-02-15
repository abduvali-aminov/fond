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
                    <div class="wrapper">
                        <div class="card-columns h-100">
                            <div></div>
                                    <img class="p-1" src="{{ Storage::url($apply->photo_1) }}"  />
                                <div class="card-body">
                                    <div class="exam">
                                        <h5 class="card-title">FIO: {{ $apply->name }}</h5>
                                        <p class="card-text">@if(!@empty($apply->causes) )Sababi: {{ $apply->causes->name }} @endif</p>
                                        <p class="card-text">Muxtoj: {{ $apply->required_amount }} {{ $apply->summ_type->name }}</p>
                                    </div>
                                    <div class="button btn-block">
                                        <button class="btn btn-large btn-block btn-danger ">Pomosh</button>
                                        <button class="btn btn-large btn-block btn-outline-danger ">Padrobne</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
