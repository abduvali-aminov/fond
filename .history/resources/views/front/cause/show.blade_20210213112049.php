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

    <section class="card">
        <div class="card-content">
            <div class="container">
                <div class="card-title">

                </div>
                <div class="card-desc">
                    @foreach ($cause->apply as $counter=>$item)

                        <div class="card-desc__link medium">
                            <div class="img"
                                {{-- style="background: url(https://blog.pixlr.com/wp-content/uploads/2019/03/stars-pattern.png) no-repeat center center / cover; height: 100%; width:100%" --}}
                                >
                                <img src="{{ Storage::url($item->photo_1) }}" alt="no image" style="width:100%; height:100%">
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
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>



@endsection
