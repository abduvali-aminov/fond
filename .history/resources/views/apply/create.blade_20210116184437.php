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


            <input type="submit" class="btn btn-success" value="Save">

        </form>
    </div>

@endsection



<button type="submit" class="btn btn-outline-success mb-2" ><i class="fa fa-save"></i> Save</button>
