@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 >Create Cause</h1>
        </div>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Cause">
            </div>
            <input type="submit" class="btn">
        </form>
    </div>
@endsection
