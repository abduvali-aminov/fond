@extends('main.main')

@section('content')

    <section class="donation donation_fond">
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
    <table class="table table-striped ">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Requarment</th>
            <th class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($cause->apply as $counter => $apply)
                <tr>
                    <th>{{ ++$counter }}</th>
                    <td>{{ $apply->name }}</td>
                    <td>{{ $apply->required_amount }} {{ $apply->summ_type->name }}</td>
                    <td class="text-right">
                        <a href="{{ route('apply-show', $apply->id) }}" class="btn btn-primary" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a>
                        <a class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
