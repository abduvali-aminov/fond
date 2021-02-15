@extends('main.main')
@section('content')
    <div class="container mt-2">
        <a href="{{ route('main') }}" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i></a>

        <center class="mt-2">
            <h1>All the Applies</h1>
        </center>

        <div class="row row-cols-1 row-cols-md-4 g-4 ">
        @foreach ($applies as $counter => $index)

                <div class="col mt-2">
                    <div class="card h-100">
                        <img src="{{ Storage::url($index->photo_1) }}"   />
                        <div class="card-body">
                            <h5 class="card-title">{{ $index->name }}</h5>
                            <p class="card-text">{{ $index->cause_id }}</p>
                        </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    </div>
                </div>

                @endforeach
            </div>


    </div>


@endsection
