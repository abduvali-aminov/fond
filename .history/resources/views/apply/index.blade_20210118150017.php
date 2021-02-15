@extends('main.main')
@section('content')
    <div class="container mt-2">
        <a href="{{ route('main') }}" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i></a>

        <center class="mt-2">
            <h1>All the Applies</h1>
        </center>

        @foreach ($applies as $counter => $index)

        @endforeach

    </div>


@endsection
