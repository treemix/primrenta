@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Новая категория</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{route('admin.categories.post.new')}}">
                                <div class="form-group row">
                                    <label for="parent_categories" class="col-sm-2 col-form-label">Select parent category</label>
                                    <div class="col-sm-10">
                                        <select id="parent_categories" class="form-control" style="width: 100%;"></select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="description" name="description" class="form-control" rows="5" placeholder="Description ..."></textarea>
                                    </div>
                                </div>



                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right">Создать</button>
                        </div>
                        <!-- /.card-footer -->
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

@section("script")

@endsection
