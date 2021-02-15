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
            <th class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($causes as $counter => $cause)
                <tr>
                    <th>{{ ++$counter }}</th>
                    <td>{{ $cause->name }}</td>
                    <td class="text-right">
                        <a href="{{ route('cause-show', $cause->id) }}" class="btn btn-primary" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a>
                        <a href="{{ route('cause-edit', $cause->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>@endsection
