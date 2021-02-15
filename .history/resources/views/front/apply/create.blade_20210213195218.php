@extends('main.main')
@section('content')

    <div class="container mt-2">
        <div class="container">
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
                @endif
            </div>
    </div>

<section class="form">
    <div class="main">
            <div class="signup-content">
                <div class="signup-form">
                    <form method="POST" action="{{ route('front-apply-store') }}" class="register-form" id="register-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name"  class="required">Имя</label>
                                    <input type="text" name="name" id="first_name" placeholder="Имя"/>
                                </div>

                                <div class="form-input">
                                    <label for="address" class="required">Аддресс</label>
                                    <input type="text" name="address" id="address" placeholder="Аддресс"/>
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Телефон</label>
                                    <input type="text" name="phone" placeholder="(YYYY) XXXXXXXX" id="phone_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                </div>
                                <div class="form-text-select">
                                    <div class="select">
                                        <div class="form-select">
                                            <div class="label-flex">
                                                <label for="meal_preferencec">Сумма</label>
                                            </div>
                                            <div class="select-list">
                                                <select name="summa_id" id="meal_preferencec">
                                                    @foreach ($summ_type as $item)
                                                        <option value="$item->id">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summ">
                                        <label for="sum">Введите сумму</label>
                                        <input type="text" name="required_amount"  id="sum" placeholder="Сумма" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Причина</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="cause_id " id="meal_preference">
                                            @foreach ($causes as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">Фотография 1</label>
                                    <input type="file" name="photo_1" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Фотография 2</label>
                                    <input type="file" name="photo_2" id="blank_name" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Описание</label>
                                    <textarea name="description" id="desc" placeholder="Описание" style="width: 100%; max-height: 300px; height: 200px; resize: none;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection



Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum omnis inventore excepturi nisi quod tempore culpa. Deserunt minima tenetur quod sit porro iure non maxime perspiciatis vel illum quas mollitia facere aliquam voluptatem provident vitae similique modi cumque, error eum nulla voluptatum corrupti? Maxime aut, autem temporibus sint expedita ipsa, error vero reprehenderit quos iusto illo eum eligendi ipsam, similique fugit! Eligendi, rem. Nobis nostrum quam blanditiis cumque repellendus? Ab iure ut ea nostrum, facilis aspernatur temporibus reiciendis ex inventore, dolore amet numquam expedita sint veritatis voluptates officiis placeat obcaecati a minus facere libero cumque! Harum, autem accusamus excepturi quo omnis recusandae libero. Quaerat quo impedit quos eveniet neque obcaecati temporibus aliquam reiciendis vero eligendi assumenda sapiente alias reprehenderit ullam officiis sequi quas, nobis vel! Perferendis quasi architecto commodi, nemo illo fugit ullam animi, quae eligendi tempora, pariatur totam impedit dicta alias facilis quia veniam deleniti nulla optio earum excepturi! Sapiente pariatur unde deleniti inventore officiis explicabo alias expedita, dicta consectetur excepturi numquam exercitationem quas animi quaerat harum veritatis, earum magni delectus, ipsam minus. Unde odio pariatur facilis voluptates deserunt corrupti aliquid animi sit praesentium quos omnis, illum nisi molestiae quisquam ipsam in totam odit quas nam repellat distinctio culpa.
