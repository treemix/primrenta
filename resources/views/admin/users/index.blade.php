@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Пользователи</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <table class="table table-responsive- table-hover-" id="users-datatable" style="width: 100%;">
                        <!-- Table head -->
                        <thead class="grey white-text" style="width: 100%;">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>

                            <th style="width: 25px;"></th>
                        </tr>
                        </thead>
                        <!-- Table head -->

                        <!-- Table body -->
                        <tbody style="width: 100%;"></tbody>
                        <!-- Table body -->
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection

@section("script")

@endsection
