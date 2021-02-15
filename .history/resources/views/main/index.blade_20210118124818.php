@extends('main.main')
@section('content')

    <div  style="height: 350px;background-image:url('{{ asset('images/photo_3.jpg') }}');position:relative">
        <center>
            <div ">
                <h1 class="text-white">Lorem ipsum dolor sit amet.</h1>
                <form class="d-flex col-6 mt-4">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                <h2 class="text-center text-white mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cumque doloribus fugit minus necessitatibus nisi.</h2>
            </div>
        </center>
    </div>

@endsection
