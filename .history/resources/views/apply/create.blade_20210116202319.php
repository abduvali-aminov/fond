@extends('main.main')
@section('content')

    <div class="container mt-2 mb-2">
        <a href="{{ route('apply') }}" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i></a>
        <div class="m-2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form method = "POST" action="{{ route('apply-store') }}" enctype="multipart/form-data" class="mt-2">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <select name="cause_id" id = "cause_id" class="form-control">
                    @foreach($causes as $index)
                        <option value="{{ $index->id }}">{{ $index->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="number" class="form-control" name="required_amount" placeholder="Requarment Amount">
            </div>

            <div class="form-group">
                <select name="summa_id" id = "summa_id" class="form-control">
                    @foreach($summ_type as $index)
                        <option value="{{ $index->id }}">{{ $index->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input class="form-control" name="address" placeholder="Enter address">
            </div>

            <div class="form-group">
                <input class="form-control" name="phone" placeholder="Enter phone number">
            </div>

            <div class="form-group">
                <label>Choose photo and max 2MB:</label>
                <input type="file" name="photo_1" class="form-control-file" >
            </div>

            <div class="form-group">
                <label>Choose photo and max 2MB:</label>
                <input type="file" name="photo_2" class="form-control-file" >
            </div>

            <div class="form-group">
                <textarea  class="form-control" name = "description" placeholder="Enter Description"></textarea>
            </div>


            <input type="submit" class="btn btn-success" value="Save">

        </form>
    </div>

@endsection



