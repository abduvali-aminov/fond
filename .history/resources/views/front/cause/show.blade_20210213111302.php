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
@endsection
