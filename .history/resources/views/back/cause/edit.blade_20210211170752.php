@extends('voyager::master')

@section('content')
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <div class="text-center">
            <h1 >Create Cause</h1>
        </div>
        <form method="POST" action = "{{ route('cause-store') }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{ $cause->name }}">
            </div>
            <input type="submit" class="btn btn-success" value="update">
        </form>
    </div>
@endsection
