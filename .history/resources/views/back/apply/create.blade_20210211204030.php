@extends('voyager::master')
@section('content')

    <div class="container">
        <div>
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
        </div>

        <form method = "POST" action= "">
            <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Name">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cause_id">Cause</label>
                    <input type="text" name="cause_id" class="form-control" id="cause_id" placeholder="Cause">
                </div>
                <div class="form-group col-md-5">
                    <label for="summ">Summ</label>
                    <input type="text" name="required_amount" class="form-control" id="summ" placeholder="Summ">
                </div>
                <div class="form-group col-md-1">
                    <label for="summ_type">Summ tupe</label>
                    <input type="text" name="summa_id" class="form-control" id="summ_type" placeholder="Summ">
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address </label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="phone">Phone </label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="photo_1">Photo1</label>
                    <input type="text" name="photo_1" class="form-control" id="photo_1">
            </div>
            <div class="form-group col-md-6">
                <label for="photo_2">Photo2</label>
                <input type="text" name="photo_2" class="form-control" id="photo_2">
            </div>
            <div class="form-group col-md-6">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>

@endsection
