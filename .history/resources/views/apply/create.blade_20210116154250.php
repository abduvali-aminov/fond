@extends('main.main')
@section('content')

    <div class="container mt-2">
        <a href="{{ route('apply') }}" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i></a>

        <form method="POST" href="{{ route('apply-store') }}" class="" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Name">
            </div>
        </form>

    </div>

@endsection
