@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <h2>Create Repo</h2>

    <!-- /resources/views/post/create.blade.php -->
 
    <h1>Edit Repo {{ $portfo->repo_title }}</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
<!-- Create Post Form -->
   <form class="row g-3" action="{{route('admin.portf.update', $portf)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="col-md-6">
            <label for="repo-name" class="form-label">Repo Name</label>
            <input type="text" class="form-control" id="repo-name" name="repo_title">
        </div>
        <div class="col-md-6">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="col-12">
            <label for="nickname" class="form-label">Nickname</label>
            <input type="text" class="form-control" id="nickname" placeholder="" name="nickname">
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="description" placeholder="" name="description"></textarea>
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
@endsection