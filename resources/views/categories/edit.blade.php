@extends('layouts.master')
@section('title', 'Edit Categories')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('categories.update', [$categories->id]) }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" name="categoryName" class="form-control @error('categoryName') is-invalid @enderror" placeholder="Author Category Name" value="{{$categories->categoryName}}">
                                    <small class="text-danger">@error('title') {{$message}} @enderror</small>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="iconImage">Icon Image</label>
                                    <input type="file" name="iconImage" class="form-control @error('iconImage') is-invalid @enderror" placeholder="Author Icon Image" value="{{$categories->iconImage}}">
                                    <img src="{{ asset('uploads/categories/'.$categories->iconImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('iconImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="projectLink">Project Link</label>
                                    <input type="text" name="projectLink" class="form-control @error('projectLink') is-invalid @enderror" placeholder="Category Project Link" value="{{$categories->projectLink}}">
                                    <small class="text-danger">@error('projectLink') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('categories.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
