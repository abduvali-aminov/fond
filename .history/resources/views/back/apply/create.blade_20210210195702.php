@extends('voyager::master')
@section('content')

    <div class="container">
        <form >
            <div class="form-group">
                <input type="text" placeholder="Name" class="form-control">
            </div>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Cause">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Summ">
                </div>
            </div>
        </form>
    </div>

@endsection
