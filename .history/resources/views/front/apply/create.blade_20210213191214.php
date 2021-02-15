@extends('main.main')
@section('content')

    <div class="container mt-2">
        <div class="container">
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{dssd $error }}</li>
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
                    <form method="POST" action="{{ route('apply-store') }}" class="register-form" id="register-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" name="name" class="required">Имя</label>
                                    <input type="text" name="first_name" id="first_name" placeholder="Имя"/>
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
                                                <select name="meal_preferencec" id="meal_preferencec">
                                                    @foreach ($summ_type as $item)
                                                        <option value="$item->id">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summ">
                                        <label for="sum">Введите сумму</label>
                                        <input type="text"  id="sum" placeholder="Сумма" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Причина</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="cause_id" id="meal_preference">
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



