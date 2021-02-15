@extends('voyager::master')
<link rel="stylesheet" href="{{ voyager_asset('cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">') }}">
<link rel="stylesheet" href="{{ voyager_asset('cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"') }}">

@section('content')
    <div class="container mt-2">
        <table class="table table-striped ">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Cause</th>
                <th scope="col">Requarment</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1  </th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <button class="btn btn-primary">View</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2  </th>
                <td>Jacob  </td>
                <td>Thornton   </td>
                <td>@fat   </td>
            </tr>
            <tr>
                <th scope="row">3  </th>
                <td colspan="2">Larry the Bird </td>
                <td>@twitter   </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
