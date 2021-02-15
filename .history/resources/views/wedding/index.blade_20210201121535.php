@extends('main.main')

@section('content')
<div class="container mt-2">
    <a href="{{ route('main') }}" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i></a>

    <center class="mt-2">
        <h1>All the Applies</h1>
    </center>

    <div class="row row-cols-1 row-cols-md-3 g-4 ">
    @foreach ($wedding as $index)
            <div class="col mt-2">
                <div class="wrapper">
                    <div class="card h-100">
                            <img class="p-1" src="{{ Storage::url($index->photo_1) }}"  />
                            <div class="exam container p-2">
                                <p class="card-title">FIO: {{ $index->name }}</p>
                                <p class="card-text">@if(!@empty($index->causes) )Sababi: {{ $index->causes->name }} @endif</p>
                                <p class="card-text">Muxtoj: {{ $index->required_amount }} {{ $index->summ_type->name }}</p>
                            </div>
                            <div class=" button btn-block p-2 bg-dark shadow-lg">
                                <button class=" btn btn-large btn-block btn-danger ">Pomosh</button>
                                <button class="btn btn-large btn-block btn-outline-danger ">Padrobne</button>
                            </div>
                        </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

