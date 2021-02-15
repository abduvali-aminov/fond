@extends('main.main')

@section('content')

    <section class="donation donation_fond">
        <div class="container">
            <div class="donation-wrap">
                <div class="donation__desc">
                    <h2 class="donation__title">Благотворительная акция «Рубль в день»</h2>
                    <div class="donation__auth">
                        <img src="{{ asset('/img/gifts.svg') }}" alt="auth">
                    </div>
                    <a href="#" class="donation__link">Нужна помощь</a>
                </div>
            </div>
        </div>
    </section>
{{ $cause->apply }}
    <section class="card">
            <div class="card-content">
                <div class="container">
                    <div class="card-title">

                    </div>

@endsection
