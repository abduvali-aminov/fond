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
                <br/>
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
Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique inventore facere explicabo repudiandae culpa odio dicta dolores. Quisquam deserunt ad inventore sit, suscipit laudantium officia nulla atque placeat deleniti veritatis iusto quas error reprehenderit adipisci accusamus non eveniet debitis quibusdam, at similique. Dignissimos, atque non. Explicabo ea autem dignissimos sed nobis dicta tenetur vero asperiores dolore quaerat doloremque maxime non qui perferendis accusamus nihil atque esse, at minima cum, accusantium sequi molestiae adipisci! Facilis quidem commodi totam, veniam eveniet aliquid at iusto aliquam, nesciunt assumenda veritatis quasi sed praesentium, voluptate dolores hic velit maxime quam ea sapiente eum quas voluptatibus sint. Ad magni beatae dolorum exercitationem porro sunt veniam fugit nulla aperiam voluptatibus, deleniti vitae molestias natus laborum magnam repudiandae quaerat temporibus in earum, maxime ratione. Minus nostrum inventore assumenda molestias quasi, reiciendis ipsa vitae, incidunt veritatis accusantium dolor iste, doloribus perferendis ratione qui fugit ex. Ducimus corrupti beatae exercitationem voluptates doloremque sunt possimus! Minima possimus cupiditate aliquam dolorum unde exercitationem quibusdam dolor nam molestiae molestias quae deleniti porro consectetur quo voluptatem impedit repellat libero optio illum, magnam rerum? Repellat nobis, repudiandae explicabo omnis totam nesciunt dolores ipsam officiis atque soluta veritatis dignissimos mollitia! Explicabo, ea, itaque aliquam nisi minus beatae ad possimus tempore veniam debitis repellat nesciunt ipsum iusto aspernatur recusandae omnis quos dolor ullam molestiae voluptas architecto. Perspiciatis esse quaerat nesciunt libero placeat. Animi hic rerum nihil non excepturi nam facilis laboriosam perspiciatis asperiores. Adipisci modi consectetur dignissimos fugiat suscipit. Ullam consequuntur harum officiis, explicabo incidunt omnis, eaque, architecto aut inventore cupiditate magni hic. Delectus, aperiam ea? Id quia ex placeat, quas magnam fuga quidem laudantium sint soluta exercitationem unde harum a modi, accusamus aperiam molestias? Modi eaque dolorem asperiores iure dicta quaerat officiis nihil? Suscipit vitae incidunt nostrum itaque eum. Deserunt quo, dolore explicabo maxime omnis delectus exercitationem minima quos mollitia, assumenda corrupti excepturi illo eligendi nisi animi magni quisquam? Delectus quia impedit pariatur excepturi exercitationem maxime dicta est beatae dolore, molestiae, tempora sapiente dolores? Totam ab quo ratione sapiente possimus nobis dolor error deserunt iure aliquam libero earum veniam, officia quisquam minima natus corporis. Porro consectetur laborum dolor natus, veritatis ratione, sapiente, nobis enim dignissimos placeat laboriosam! Libero suscipit quos dolore est, laudantium ipsum provident natus ipsam commodi? Ad expedita porro ex vitae repellendus mollitia reprehenderit recusandae, dolores, temporibus quos neque provident rerum quas? Repellat minima laudantium amet, est quaerat a ea consectetur repellendus animi? Vitae iure aperiam cum odit unde pariatur repudiandae placeat soluta quidem maxime, provident in dolorum ullam eius laboriosam exercitationem saepe esse! Fugit animi atque illum minus dolore odit voluptas aspernatur corporis labore! Perferendis nostrum eos, delectus omnis consequuntur labore fuga dolorum unde laboriosam deleniti voluptatibus tempore incidunt, corrupti totam odit ea, non ipsum voluptates at asperiores repellat! Vel, fuga. Aliquid officia totam optio repudiandae libero illum molestiae dolor, ex vel repellendus provident tenetur voluptatem. Repellendus maxime hic nulla voluptas similique eveniet numquam, consequuntur asperiores itaque ipsam nostrum quos inventore quo aperiam libero nisi, natus doloremque. Iure accusamus dolorum eveniet possimus alias.

@endsection
