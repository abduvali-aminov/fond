@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 >Create Cause</h1>
        </div>
        <form method>
            <div class="form-group">
                <input type="text" class="form-control" name="cause" placeholder="Cause">
            </div>
            <input type="submit" class="btn btn-success" value="Save">
        </form>
    </div>
@endsection
