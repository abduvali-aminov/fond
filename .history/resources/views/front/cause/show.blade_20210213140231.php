@extends('main.main')

@section('content')



    <section class="author-card">
        <div class="container">
            <div class="author-card__head">
                <div class="author-card__title">
                    <div class="author-card__img">
                        <img src="{{ Storage::url($apply->photo_1) }}" alt="author" width="100px">
                    </div>
                    <div class="author-card__desc">
                        <h1 class="author-card__name">Name:{{ $apply->name }}</h1>
                        <div class="author-card__age">Added time: {{ $apply->updated_at }}</div>
                        <div class="author-card__cause">Cause: {{ $apply->causes->name }}</div>
                        <div class="author-card__address">Address: {{ $apply->address }}</div>
                        <p>Summ: {{ $apply->required_amount }} {{ $apply->summ_type->name }}</p>
                        <p>Tell: +{{ $apply->phone }} </p>
                    </div>
                </div>
                <div class="author-fixed__fixed">
                    <div class="container">
                        <div class="author-fixed__wrap">
                            <div class="author-fixed__text">
                                <h5>помогаем</h5>
                                <h3>Кислородное оборудование для недоношенных детей</h3>
                                <hr>
                            </div>
                            <div class="author-fixed__price">
                                <div class="author-fixed__collected">
                                    <h4>собрано</h4>
                                    <span>255 000</span>
                                </div>
                                <hr>
                                <div class="author-fixed__needed">
                                    <h4>нужно</h4>
                                    <span>955 000</span>
                                </div>
                            </div>
                            <a href="#" class="author-fixed__btn">помочь</a>
                        </div>
                    </div>
                </div>
                <
                <div class="author-card__text">
                    <p>{{ $apply->description }}</p>
                </div>
                <div class="pay">
                    <div class="pay__wrap">
                        <div class="pay__title">
                            <h2>ПОМОЧЬ</h2>
                            <p>Оформить пожертвование без комиссии в пользу проекта «Кислородное оборудование для недоношенных детей»</p>
                        </div>
                        <div class="pay__form">
                            <form action="#">
                                <div class="pay__price">
                                    <label for="price">Сумма пожертвования</label>
                                    <input type="text" name="price" id="price">
                                </div>
                                <hr>
                                <div class="pay__type">
                                    <p>Способ оплаты</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
