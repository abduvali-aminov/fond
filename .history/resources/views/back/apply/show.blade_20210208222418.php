@extends('voyager::master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Name: {{ $apply->name }}</h3>
                <h3>Cause: {{ $apply->causes->name }} </h3>
                <h3>Requarment Amount: {{ $apply->required_amount }} {{ $apply->summ_type->name }} </h3>
                <h3>Tell: {{ $apply->phone }} </h3>
                <h3>Address: {{ $apply->address }} </h3>
                <h3>Description: {{ $apply->description }} </h3>
            </div>
            <div class="col-sm-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam totam cum ea consequatur aspernatur, eaque recusandae facilis ipsa vel illum ullam quaerat velit earum ab accusantium, voluptatibus fuga quia quasi temporibus sint voluptas! Nam at aliquid architecto aut, hic, autem consectetur adipisci doloremque quaerat tenetur ea cumque molestias quia, ipsa totam non ipsum amet? Exercitationem fuga vel nisi similique corrupti veritatis porro iste. Laborum voluptatum atque alias quos itaque, sed est assumenda commodi nesciunt, enim neque accusamus maiores. Placeat esse voluptas ullam sint, vel veniam architecto saepe voluptates. Inventore maiores animi natus! Temporibus debitis veritatis vitae impedit accusamus culpa ratione necessitatibus in sapiente maiores sit placeat molestias incidunt rem ab ullam blanditiis, pariatur dolorum magnam laboriosam, commodi ex aliquam. Ipsam atque tenetur maiores et consectetur maxime quae sequi. Aut minus autem non molestias provident pariatur rem exercitationem magnam modi iusto eos, consectetur laborum. Deleniti neque consequuntur harum ex, cumque delectus, repudiandae minus aliquid nulla sed magni! Quod suscipit, minus facilis molestias sapiente dolor aspernatur porro accusamus sed dignissimos, illo quasi! Ad doloremque impedit et non autem laudantium quidem magnam libero necessitatibus totam in a maxime qui ipsam voluptatem, quo odit similique saepe iusto earum blanditiis harum, quisquam deleniti asperiores. Officiis corrupti quasi sed vitae totam. Porro amet provident ea eum tempora ducimus a voluptates quo alias, adipisci, aliquam quisquam accusamus magnam facere esse delectus error dicta. Totam autem molestiae corporis accusamus maxime eligendi sit quisquam ut maiores sapiente id molestias debitis nostrum vel nihil, beatae quia modi quos voluptate dolorum. Dolorum nisi exercitationem inventore beatae esse! Accusantium ex repellat velit libero expedita, hic ipsam iure harum, magnam doloribus inventore itaque molestias, quam voluptatibus sint sunt nulla error totam necessitatibus modi. Officiis ullam vitae alias aliquam quibusdam cum asperiores, earum qui delectus impedit optio maxime voluptates ea. Saepe alias ea repellat.
            </div>
            <div class="col-sm-4">
                lorem300
            </div>
        </div>
    </div>
@endsection
