@extends('main.main')
@section('content')
<section class="form">
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <form method="POST" action="{{ route('apply-store') }}" class="register-form" id="register-form" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" name="name" class="required">Имя</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>

                                <div class="form-input">
                                    <label for="address" class="required">Аддресс</label>
                                    <input type="text" name="address" id="address" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Телефон</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                                </div>
                                <div class="form-input">
                                    <div></div>
                                    <label for="phone_number" class="required">Телефон</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                    <div class="select-list">
                                        <select name="cause_id" id="meal_preference">
                                            @foreach ($causes as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
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
                                    <input type="file" name="chequeno" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Фотография 2</label>
                                    <input type="file" name="blank_name" id="blank_name" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Описание</label>
                                    <textarea name="desc" id="desc" style="width: 100%; max-height: 300px; height: 200px; resize: none;"></textarea>
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



