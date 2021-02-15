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
                                                <select name="summa_id" class="form-control" id="summ_type">
                                                    @foreach($summ_type as $index)
                                                        <option value="{{ $index->id }}">{{ $index->name }}</option>
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
                                        <select name="cause_id" id = "cause_id" class="form-control">
                                            @foreach($causes as $index)
                                                <option value="{{ $index->id }}">{{ $index->name }}</option>
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

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos at dolores quaerat? In nam iure deleniti quisquam ex exercitationem voluptatem odit fugit consequatur culpa ea iusto nobis odio aliquam, rerum magni, laudantium dolorem illum suscipit molestias amet? Inventore sint modi libero possimus omnis quos odit pariatur, alias cupiditate voluptas ab totam ut odio? Ut quos commodi temporibus suscipit asperiores amet quam blanditiis voluptas quaerat magnam veritatis deleniti, deserunt odit ratione quibusdam porro minima ipsam? Totam cumque tenetur deleniti expedita doloremque, mollitia esse assumenda ad voluptates deserunt sint explicabo rem, atque iure magni odio. Ut quae corrupti at odio laudantium delectus accusantium, error, quia odit ad laborum libero illo nobis iste debitis assumenda repellat consectetur omnis deserunt neque. Impedit dignissimos aut nesciunt sed beatae excepturi, temporibus illo laborum alias eum. Ex id nemo quo! Quis aut velit amet natus ad, doloremque sapiente quaerat quas quam ratione, odit atque cupiditate in quasi fugit eaque voluptatum deserunt praesentium blanditiis? Quisquam rerum nesciunt magnam officiis ut natus sed ipsum facilis velit. Voluptas ipsum provident dolor animi eos beatae, velit ea sapiente amet dolores minus totam dolore doloribus iure, laborum blanditiis accusantium ad architecto, ipsa fugiat ducimus! Omnis exercitationem sapiente deserunt, soluta a unde asperiores.

