@extends('voyager::master')
@section('content')

    <div class="container">
        <form>
            <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Name">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cause_id">Email</label>
                    <input type="text" class="form-control" id="cause_id" placeholder="Cause">
                </div>
            <div class="form-group col-md-6">
                    <label for="summ">Password</label>
                    <input type="text" class="form-control" id="summ" placeholder="Summ">
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address </label>
                <input type="text" class="form-control" id="address" placeholder="Address">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>

@endsection
