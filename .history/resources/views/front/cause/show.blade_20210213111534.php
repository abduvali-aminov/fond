@extends('main.main')

@section('content')
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
    
</section>




@endsection
