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

                                <hr/>

                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">Fields</label>
                                    <div class="col-sm-10">
                                        <div class="_control_dimensions_wrapper _control_dimensions">
                                            <div class="form-group row">
                                                <div class="form-check">
                                                    <input type="checkbox" {{ (old('_control_dimensions_checkbox') || isset($fields->dimensions)) ? 'checked' : '' }} name="_control_dimensions_checkbox" class="form-check-input" id="_control_dimensions_checkbox">
                                                    <label class="form-check-label" for="_control_dimensions_checkbox">Add control dimensions</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="_control_dimensions_label" class="col-sm-2 col-form-label">Dimensions label</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="_control_dimensions_label" class="form-control" id="_control_dimensions_label" placeholder="Dimensions label"
                                                           value="{{ old('_control_dimensions_label') ? old('_control_dimensions_label') : $fields->dimensions->label }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="_control_dimensions_weight_placeholder" class="col-sm-2 col-form-label">Dimensions weight placeholder</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="_control_dimensions_weight_placeholder" class="form-control" id="_control_dimensions_weight_placeholder" placeholder="Dimensions weight placeholder"
                                                           value="{{ old('_control_dimensions_weight_placeholder') ? old('_control_dimensions_weight_placeholder') : (isset($fields->dimensions->placeholder->weight) ? $fields->dimensions->placeholder->weight : '') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="_control_dimensions_length_placeholder" class="col-sm-2 col-form-label">Dimensions length placeholder</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="_control_dimensions_length_placeholder" class="form-control" id="_control_dimensions_length_placeholder" placeholder="Dimensions length placeholder"
                                                           value="{{ old('_control_dimensions_length_placeholder') ? old('_control_dimensions_length_placeholder') : (isset($fields->dimensions->placeholder->length) ? $fields->dimensions->placeholder->length : '') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="_control_dimensions_width_placeholder" class="col-sm-2 col-form-label">Dimensions width placeholder</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="_control_dimensions_width_placeholder" class="form-control" id="_control_dimensions_width_placeholder" placeholder="Dimensions width placeholder"
                                                           value="{{ old('_control_dimensions_width_placeholder') ? old('_control_dimensions_width_placeholder') : (isset($fields->dimensions->placeholder->width) ? $fields->dimensions->placeholder->width : '') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="_control_dimensions_height_placeholder" class="col-sm-2 col-form-label">Dimensions height placeholder</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="_control_dimensions_height_placeholder" class="form-control" id="_control_dimensions_height_placeholder" placeholder="Dimensions height placeholder"
                                                           value="{{ old('_control_dimensions_height_placeholder') ? old('_control_dimensions_height_placeholder') : (isset($fields->dimensions->placeholder->height) ? $fields->dimensions->placeholder->height : '') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="_control_cargo_cost_wrapper _control_cargo_cost">
                                            <div class="form-group row">
                                                <div class="form-check">
                                                    <input type="checkbox" {{ (old('_control_cargo_cost_checkbox') || isset($fields->cargo_cost)) ? 'checked' : '' }} name="_control_cargo_cost_checkbox" class="form-check-input" id="_control_cargo_cost_checkbox">
                                                    <label class="form-check-label" for="_control_cargo_cost_checkbox">Add control cargo cost</label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="_control_cargo_cost_label" class="col-sm-2 col-form-label">Cargo cost label</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="_control_cargo_cost_label" class="form-control" id="_control_cargo_cost_label"
                                                           placeholder="Cargo cost label"
                                                           value="{{ old('_control_cargo_cost_label') ? old('_control_cargo_cost_label') : (isset($fields->cargo_cost->label) ? $fields->cargo_cost->label : '') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="_control_cargo_cost_hint" class="col-sm-2 col-form-label">Cargo cost hint</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="_control_cargo_cost_hint" class="form-control" id="_control_cargo_cost_hint"
                                                           placeholder="Cargo cost hint"
                                                           value="{{ old('_control_cargo_cost_hint') ? old('_control_cargo_cost_hint') : (isset($fields->cargo_cost->hint) ? $fields->cargo_cost->hint : '') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="_control_description_wrapper _control_description_cost">
                                            <div class="form-group row">
                                                <label for="_control_description_placeholder" class="col-sm-2 col-form-label">Description placeholder</label>
                                                <div class="col-sm-10">
                                                    <textarea
                                                        rows="4"
                                                        name="_control_description_placeholder"
                                                        class="form-control"
                                                        id="_control_description_placeholder"
                                                        placeholder="Description placeholder">{{ old('_control_description_placeholder') ? old('_control_description_placeholder') : (isset($fields->description->placeholder) ? $fields->description->placeholder : '') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="_control_description_hint" class="col-sm-2 col-form-label">Description hint</label>
                                                <div class="col-sm-10">
                                                    <textarea
                                                        rows="4"
                                                        placeholder="Description hint"
                                                        name="_control_description_hint"
                                                        class="form-control"
                                                        id="_control_description_hint">{{ old('_control_description_hint') ? old('_control_description_hint') : (isset($fields->description->hint) ? $fields->description->hint : '') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="_control_return_payment_wrapper _control_return_payment">

                                            <div class="form-group row">
                                                <div class="form-check">
                                                    <input type="checkbox" {{ (old('_control_return_payment_checkbox') || isset($fields->return_payment)) ? 'checked' : '' }} name="_control_return_payment_checkbox" class="form-check-input" id="_control_return_payment_checkbox">
                                                    <label class="form-check-label" for="_control_return_payment_checkbox">Add control return payment</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="_control_return_payment_label" class="col-sm-2 col-form-label">Return payment label</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="_control_return_payment_label" class="form-control" id="_control_return_payment_label"
                                                           placeholder="Return payment label"
                                                           value="{{ old('_control_return_payment_label') ? old('_control_return_payment_label') : (isset($fields->return_payment->label) ? $fields->return_payment->label : '') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="_control_return_payment_hint" class="col-sm-2 col-form-label">Return payment hint</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="_control_return_payment_hint" class="form-control" id="_control_return_payment_hint"
                                                           placeholder="Return payment hint"
                                                           value="{{ old('_control_return_payment_hint') ? old('_control_return_payment_hint') : (isset($fields->return_payment->hint) ? $fields->return_payment->hint : '') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <hr/>
                                        <div class="_control_payment_wrapper _control_payment">
                                            <div class="form-group row">
                                                <div class="form-check">
                                                    <input type="checkbox" {{ (old('_control_payment_checkbox') || isset($fields->payment)) ? 'checked' : '' }} name="_control_payment_checkbox" class="form-check-input" id="_control_payment_checkbox">
                                                    <label class="form-check-label" for="_control_payment_checkbox">Add control payment</label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr/>
                                        <div class="_control_courier_transport_wrapper _control_courier_transport">
                                            <div class="form-group row">
                                                <div class="form-check">
                                                    <input type="checkbox" {{ (old('_control_courier_transport_checkbox') || isset($fields->courier_transport)) ? 'checked' : '' }} name="_control_courier_transport_checkbox" class="form-check-input" id="_control_courier_transport_checkbox">
                                                    <label class="form-check-label" for="_control_courier_transport_checkbox">Add control transport</label>
                                                </div>
                                            </div>
                                        </div>




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
