@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Edit Category</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-12">

                    <form class="form-horizontal" method="POST" action="{{route('admin.categories.update')}}">
                        <input type="hidden" name="id" value="{{$id}}">
                        <input type="hidden" name="parent_id" value="{{ old('parent_id') ? old('parent_id') : ( $category->parent ? $category->parent->id : 0)}}">
                        <input type="hidden" name="parent_name" value="{{ old('parent_name') ? old('parent_name') : ( $category->parent ? $category->parent->name : "") }}">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"> </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="parent_categories" class="col-sm-2 col-form-label">Select parent category</label>
                                    <div class="col-sm-10">
                                        <select name="select_parent_id" id="parent_categories" class="form-control" style="width: 100%;"></select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name') ? old('name') : $category->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ old('slug') ? old('slug') : $category->slug }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="description" name="description" class="form-control" rows="5" placeholder="Description ...">{{ old('description') ? old('description') : $category->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right" style="min-width: 150px;">Update</button>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section("script")

    <script>
        (function ($) {
            'use strict';

            _GlobalNewEditCategory = new NewEditCategory();


        })(jQuery);
    </script>

@endsection
