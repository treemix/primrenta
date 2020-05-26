

@if(isset($category_fields->dimensions))

    <div class="js-task-control js-task-control__dimensions clearer" data-control-id="Dimensions">
        <div class="newtask_row newtask_row--dimension js-dimension js-validation">
            <label for="Weight" class="newtask_row--dimension__label js-dimension-block-title">{{$category_fields->dimensions->label}}</label>
            <div class="newtask_row--dimension__loader-size js-cargo-dimension-block">
                <div class="newtask_row--dimension__loader-size__item js-dimension-block">
                    <div class="newtask_row--dimension__loader-size__item__wrapper focus">
                        <input id="WeightValue" name="dimensions_weight" class="volume-input js-dimension-input js-additionalNumericTextbox" value=""
                               placeholder="{{$category_fields->dimensions->placeholder->weight}}" maxlength="9" type="number" data-code="Weight">
                    </div>
                </div>
                <div class="newtask_row--dimension__loader-size__item js-dimension-block">
{{--                    <label class="newtask_row__label invisible" for="Options_Length__Field">Длина, м</label>--}}
                    <div class="newtask_row--dimension__loader-size__item__wrapper focus">
                        <input id="Length" name="dimensions_length" class="volume-input js-dimension-input js-additionalFloatTextbox" value=""
                               placeholder="{{$category_fields->dimensions->placeholder->length}}" maxlength="6" type="number" data-code="Length">
                    </div>
                </div>
                <div class="newtask_row--dimension__loader-size__item js-dimension-block">
{{--                    <label class="newtask_row__label invisible" for="Options_Width__Field">Ширина, м</label>--}}
                    <div class="newtask_row--dimension__loader-size__item__wrapper">
                        <input id="Width" name="dimensions_width" class="volume-input js-dimension-input js-additionalFloatTextbox" value=""
                               placeholder="{{$category_fields->dimensions->placeholder->width}}" maxlength="6" type="number" data-code="Width">
                    </div>
                </div>
                <div class="newtask_row--dimension__loader-size__item js-dimension-block">
{{--                    <label class="newtask_row__label invisible" for="Options_Height__Field">Высота, м</label>--}}
                    <div class="newtask_row--dimension__loader-size__item__wrapper">
                        <input id="Height" name="dimensions_height" class="volume-input js-dimension-input js-additionalFloatTextbox" value=""
                               placeholder="{{$category_fields->dimensions->placeholder->height}}" maxlength="6" type="number" data-code="Height">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

