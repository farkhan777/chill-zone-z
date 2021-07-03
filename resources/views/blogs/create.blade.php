@extends('layouts.master')
@section('title', 'Create Blogs')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blogs</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blogs</a></li>
                        <li class="breadcrumb-item active">Create</li>
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
                    <h3 class="card-title">Create Data</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Blog Title">
                                    <small class="text-danger">@error('title') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="post">Post</label>
                                    <textarea name="post" class="form-control @error('post') is-invalid @enderror" placeholder="Blog Post"></textarea>
                                    <small class="text-danger">@error('post') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="post_excerpt">Post Exceprt</label>
                                    <input type="text" name="post_excerpt" class="form-control @error('post_excerpt') is-invalid @enderror" placeholder="Blog Post Excerpt">
                                    <small class="text-danger">@error('post_excerpt') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Blog Slug">
                                    <small class="text-danger">@error('slug') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="featuredImage">Featured Image</label>
                                    <input type="file" name="featuredImage" class="form-control @error('featuredImage') is-invalid @enderror" placeholder="Blog Featured Image">
                                    <small class="text-danger">@error('featuredImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="metaDescription">Meta Description</label>
                                    <input type="text" name="metaDescription" class="form-control @error('metaDescription') is-invalid @enderror" placeholder="Blog Meta Description">
                                    <small class="text-danger">@error('metaDescription') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('blogs.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection