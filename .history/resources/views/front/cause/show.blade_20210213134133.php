@extends('main.main')

@section('content')

 {{ $apply->name }}


    <section class="author-card">
        <div class="container">
            <div class="author-card__head">
                <div class="author-card__title">
                    <div class="author-card__img">
                        <img src="https://www.spiritualpeople.com/wp-content/uploads/2019/01/SP-7-HEALTH-BENEFITS-OF-LAUGHTER.jpg" alt="author" width="200px">
                    </div>
                    <div class="author-card__desc">
                        <h1 class="author-card__name">Яна Кучина</h1>
                        <div class="author-card__age">23 год</div>
                        <div class="author-card__cause">Кислородное оборудование для недоношенных детей</div>
                        <div class="author-card__address">Lorem ipsum dolor sit.</div>
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
                <div class="author-card__text">
                    <p>Она не   шевелилась четыре дня. Каждый новый день увеличивал шансы ее ребенка родиться живым.</p>
                    <p>В роддоме Тихорецка ее предупредили сразу: «Мы тут детей на таком сроке не сохраняем» — и отправили на скорой под капельницей в Краснодар. Довезут — будет у Маши дочка.</p>
                    <p>5 октября, на 27-й неделе, она родила Настю. В Насте было 770 граммов веса.</p>
                    <p>— Вам ее показали, когда она родилась?</p>
                    <p>— На две секунды подняли в воздух на руке. Она не кричала. Пищала, как котеночек.</p>
                    <p>Маша услышала, как врачи обсуждают между собой рост и вес, и поняла: «Живая». А ей сказали: «Как сможете — подниметесь в реанимацию на другой этаж». Маша провела шесть часов в неведении, а потом смогла встать и медленно пойти к дочке. Сейчас она смеется, говорит: «Я к ней, наверх, поползла».</p>
                    <p>В реанимацию к новорожденным можно приходить каждые три часа. Дети лежат в кувезах — небольших прозрачных ящиках, внутри которых такая же температура и влажность, как внутри человеческого тела. Часто кувезы накрыты плотными накидками из ткани, будто птичьи клетки ночью. Ткань смягчает пугающие внешние звуки и прячет не до конца сформировавшиеся глаза детей от света. В кувезе есть отверстия, через них можно аккуратно прикоснуться к ребенку. На руки его еще долго нельзя будет взять, но рассмотреть, поговорить, потрогать — можно.</p>
                    <p>Маша говорит, страшно не было. Настя выглядела как обычный младенец. «Только очень маленькая, как кукла. И синенькая», — вспоминает Маша.</p>
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
