@extends('main.main')
@section('content')

    <div  style="height: 350px;background-image:url('{{ asset('images/photo_3.jpg') }}');position:relative">
        <center>
            <div class="pt-5">
                <h1 class="text-white">Lorem ipsum dolor sit amet.</h1>
                <form class="d-flex col-6 mt-5">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                <h2 class="text-center text-white mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cumque doloribus fugit minus necessitatibus nisi.</h2>
            </div>
        </center>
    </div>

    <div class="container">
        <div class="row row-cols-1 mt-4 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/images/photo.jpg') }}" class="card-img-top" alt="...">
                    <a class="exam"> SInov </a>
                    <div class="exam card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>

                    <div class="button btn-block p-2 bg-dark shadow-lg">
                        <button class=" btn btn-large btn-block btn-danger ">Pomosh</button>
                        <button class="btn btn-large btn-block btn-outline-danger ">Padrobne</button>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/images/photo.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                    <div class="text-center mb-3">
                        <a class="btn btn-outline-success"> Kirish </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/images/photo.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                    <div class="text-center mb-3">
                        {{-- <a class="btn btn-outline-success" href="{{ route('') }}"> Kirish </a> --}}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/images/photo.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class=" button btn-block p-2 bg-dark shadow-lg">
                        <button class=" btn btn-large btn-block btn-danger ">Pomosh</button>
                        <button class="btn btn-large btn-block btn-outline-danger ">Padrobne</button>
                    </div>
                    <div class="text-center mb-3">
                        <a class="btn btn-outline-success"> Kirish </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
