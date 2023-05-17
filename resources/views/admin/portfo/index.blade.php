@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Repo Name</th>
            <th scope="col">Author</th>
            <th scope="col">Author Nickname</th>
            <th scope="col">Description</th>
            <th scope="col">Date of Creation</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portf as $portfo)
                <tr>
                    <th scope="row">{{ $portfo->id }}</th>
                    <td>{{ $portfo->repo_title }}</td>
                    <td>{{ $portfo->author }}</td>
                    <td>{{ $portfo->nickname }}</td>
                    <td>{{ $portfo->description }}</td>
                    <td>{{ $portfo->date_of_start }}</td>
                    <td>
                        <ul class="list-unstyled d-flex">
                            <li><a href="" class="btn btn-small btn-secondary mx-1">Show</a></li>
                            <li><a href="" class="btn btn-small btn-warning mx-1">Edit</a></li>
                            
                        </ul>
                    </td>
                </tr>
            @endforeach  
        </tbody>
    </table>
</div>
@endsection