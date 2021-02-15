@extends('voyager::master')
@section('content')

    <div class="container">
        <form>
            <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Name">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cause_id">Cause</label>
                    <input type="text" name="cause_id" class="form-control" id="cause_id" placeholder="Cause">
                </div>
            <div class="form-group col-md-6">
                    <label for="summ">Summ</label>
                    <input type="text" name="required_amount" class="form-control" id="summ" placeholder="Summ">
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address </label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="photo_1">City</label>
                    <input type="text" name="photo_1" class="form-control" id="photo_1">
                    <input type="text" name="photo_1" class="form-control" id="photo_1">
            </div>
            <div class="form-group col-md-6">
                <label for="photo_2">State</label>

            </div>


            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>

@endsection
