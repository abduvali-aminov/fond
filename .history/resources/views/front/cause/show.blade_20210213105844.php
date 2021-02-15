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

    <section class="card">
            <div class="card-content">
                <div class="container">
                    <div class="card-title">

                    </div>
                    <div class="card-desc">
                        <div class="card-desc__link medium">
                            @foreach ($cause->apply as $counter => $index)


                                <div class=""
                                    {{-- style="background: url(https://blog.pixlr.com/wp-content/uploads/2019/03/stars-pattern.png) no-repeat center center / cover; height: 100%; width:100%" --}}
                                    >
                                    <img src="{{ Storage::url($index->photo_1) }}" alt="{{ __('') }}">
                                </div>
                                <div class="desc">
                                    <div class="desc__content">
                                        <div class="desc__title">Мосгорсуд сократил срок ареста главного редактора «Медиазоны» Сергея Смирнова
                                        </div>
                                        <div class="desc__text">
                                            <p>Новосибирская прокуратура проверит жалобы на низкие зарплаты в Институте цитологии и генетики. Его сотрудница жаловалась Путину</p>
                                            <div class="desc__price">
                                                <div class="desc__collected">
                                                    <h4>собрано</h4>
                                                    <span>255 000</span>
                                                </div>
                                                <hr>
                                                <div class="desc__needed">
                                                    <h4>нужно</h4>
                                                    <span>955 000</span>
                                                </div>
                                            </div>
                                                <a href="#" class="desc__btn">подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
