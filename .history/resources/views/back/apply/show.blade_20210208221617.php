@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="row">
            div.@cannot('update', $post)

            @elsecannot('create', $post)

            @endcannot
            <h3>Name {{ $apply->name }}</h3>
        </div>
    </div>
@endsection
