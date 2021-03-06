@extends('main.main')
@section('content')

    <div class="container mt-2">
        <a href="{{ route('apply') }}" class="btn btn-outline-dark"><i class="fa fa-arrow-circle-left fa-1x" aria-hidden="true"></i></a>

        <form method="POST" href="{{ route('apply-store') }}" class="mt-2" enctype="multipart/form-data">

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
                <select name="summ_id" id = "summ_id" class="form-control">
                    @foreach($summ_types as $summ_type)
                        <option value="{{ $summ_type->id }}">{{ $summ_type->name }}</option>
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
                <label>Choose photo:</label>
                <input type="file" name="photo_1" class="form-control-file" >
            </div>

            <div class="form-group">
                <label>Choose photo:</label>
                <input type="file" name="photo_2" class="form-control-file" >
            </div>

            <div class="form-group">
                <label>Choose photo:</label>
                <input type="file" name="photo_3" class="form-control-file" >
            </div>


            <div class="form-group">
                <textarea  class="form-control" name = "description" rows="3" placeholder="Enter Description"></textarea>
            </div>

        
        </form>

    </div>

@endsection
