@extends('main.main')
@section('content')

    <section class="help-us">
            <div class="container">
                <h1 class="help-us__title">«Нужна помощь» — это фонд для фондов</h1>
                <div class="help-us__form">
                    <form action="#">
                        <input type="text" name="name" class="help-us__search" placeholder="Search">
                        <button type="submit" class="help-us__submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="help-us__desc">
                    <p>Мы поддерживаем работу 293 благотворительных организаций по всей России.</p>
                </div>
            </div>
        </section>
        <section class="type-donation">
            <div class="container">
                <h2 class="type-donation__title">ПОДДЕРЖИТЕ ПРОВЕРЕННЫЕ ФОНДЫ</h2>
                <div class="type-donation__list">
                    <ul class="type-donation__menu">
                        <li class="type-donation__item">
                            <a href="#" class="type-donation__link active">Все</a>
                        </li>
                        <li class="type-donation__item">
                            <a href="#" class="type-donation__link">Детям</a>
                        </li>
                        <li class="type-donation__item">
                            <a href="#" class="type-donation__link">Подросткам</a>
                        </li>
                        <li class="type-donation__item">
                            <a href="#" class="type-donation__link">Взрослым</a>
                        </li>
                        <li class="type-donation__item">
                            <a href="#" class="type-donation__link">Животным</a>
                        </li>
                        <li class="type-donation__item">
                            <a href="#" class="type-donation__link">Пожилым</a>
                        </li>
                        <li class="type-donation__item">
                            <a href="#" class="type-donation__link">Экологии</a>
                        </li>
                        <li class="type-donation__item">
                            <a href="#" class="type-donation__link">Обществу</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="donation">
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
        <section class="donation-group">
            <div class="container">
                <div class="donation-group__wrap">
                    <div class="donation-group__card">
                        @foreach($causes as $key => $index)
                            <div class="donation-group__auth">
                                <div class="donation-group__img">
                                    <img src="{{ asset('/img/Xursand (2).png') }}" alt="doantion group">
                                </div>
                                <h3 class="donation-group__name">{{ $index->name }}</h3>
                                <p class="donation-group__desc">Фонд реализует программы помощи семьям.</p>
                            </div>
                            <hr>
                            <dl class="donation-group__list">
                                <div class="donation-group__item">
                                    <dt>Собрано</dt>
                                    <dd>23 023$</dd>
                                </div>
                                <div class="donation-group__item">
                                    <dt>Собрано</dt>
                                    <dd>23 023$</dd>
                                </div>
                                <div class="donation-group__item">
                                    <dt>Собрано</dt>
                                    <dd>23 023$</dd>
                                </div>
                            </dl>
                            <div class="donation-group__link">
                                <a href="#" class="donation-group__btn help">помочь</a>
                                <a href="#" class="donation-group__btn more">подробнее</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

@endsection
