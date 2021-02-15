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

        <form method = "POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $apply->name }}">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="phone">Phone </label>
                        <input type="text" name="phone" class="form-control" id="phone" value="{{ $apply->phone }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cause_id">Cause</label>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="summ">Summ</label>
                        <input type="text" name="required_amount" class="form-control" id="summ" value="{{ $apply->required_amount }}">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="summ_type">SummT</label>

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="address">Address </label>
                        <input class="form-control" name="address" id="description" value="{{ $apply->address }}">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" value="{{ $apply->description }}">fdvdfdf</textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="photo_1">Photo1</label>
                        <input type="file" name="photo_1" class="form-control-file" id="photo_1">
                        <label for="photo_2">Photo2</label>
                        <input type="file" name="photo_2" class="form-control-file" id="photo_2">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a href="{{ route('voyager.applies.index') }}" style="width: 150px" type="submit" class="btn btn-warning ">Cancel</a>
                <button style="width: 150px" type="submit" class="btn btn-primary ">Save</button>
            </div>

        </form>

    </div>

@endsection
