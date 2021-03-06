@extends('voyager::master')
@section('content')

    <div class="container">
        <div class="text-center">
            <h1
        </div>
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

        <form method = "POST" action= "{{ route('apply-store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Name">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cause_id">Cause</label>
                    <input type="text" name="cause_id" class="form-control" id="cause_id" placeholder="Cause">
                </div>
                <div class="form-group col-md-4">
                    <label for="summ">Summ</label>
                    <input type="text" name="required_amount" class="form-control" id="summ" placeholder="Summ">
                </div>
                <div class="form-group col-md-2">
                    <label for="summ_type">SummT</label>
                    <input type="text" name="summa_id" class="form-control" id="summ_type" placeholder="Summ">
                </div>
            </div>
            <form class="form-row">
                <div class="form-group col-md-7">
                    <label for="address">Address </label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                </div>
                <div class="form-group col-md-5">
                    <label for="phone">Phone </label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                </div>
            </form>
            <div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="photo_1">Photo1</label>
                    <input type="file" name="photo_1" class="form-control-file" id="photo_1">
                </div>
                <div class="form-group col-md-3">
                    <label for="photo_2">Photo2</label>
                    <input type="file" name="photo_2" class="form-control-file  " id="photo_2">
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary ">Save</button>
            </div>

        </form>
    </div>

@endsection
