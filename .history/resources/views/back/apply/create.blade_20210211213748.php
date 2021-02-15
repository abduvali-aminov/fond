@extends('voyager::master')
@section('content')

    <div class="container">
        <div class="text-center">
            <h1>Create Apply</h1>
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
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label for="inputAddress">Name</label>
                    <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Name">
                </div>
                <div class="form-group col-md-5">
                    <label for="phone">Phone </label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                </div>
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

            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="address">Address </label>
                    <textarea class="form-control" id="description" rows="2"></textarea>
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="photo_1">Photo1</label>
                    <input type="file" name="photo_1" class="form-control-file" id="photo_1">
                    <label for="photo_2">Photo2</label>
                    <input type="file" name="photo_2" class="form-control-file" id="photo_2">
                </div>
            </div>

            <div class="text-right" >
                <button style="width: " type="submit" class="btn btn-primary ">Save</button>
            </div>

        </form>

    </div>

@endsection
