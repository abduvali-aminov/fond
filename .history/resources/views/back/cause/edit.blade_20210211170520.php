@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 >Create Cause</h1>
        </div>
        <form method="POST" action = "{{ route('cause-store') }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{ $cause->name }}">
            </div>
            <input type="submit" class="btn btn-success" value="Save">
        </form>
    </div>
@endsection
