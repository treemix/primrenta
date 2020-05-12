@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Категории</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <table class="table table-bordered table-hover" id="category-datatable">
                        <!-- Table head -->
                        <thead class="grey white-text">
                        <tr>
                            <th>ID</th>
                            <th>Parent ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>

                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Edit Page</th>
                        </tr>
                        </thead>
                        <!-- Table head -->

                        <!-- Table body -->
                        <tbody></tbody>
                        <!-- Table body -->
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection

@section("script")

    <script>
        (function ($) {
            'use strict';

            _GlobalCategory = new Category();


        })(jQuery);
    </script>
@endsection
