

@if(isset($category_fields->cargo_cost))
<div class="js-additional-fields clearer">
    <div class="js-task-courier-controls-wrapper">
        <div class="js-task-control__courier-cargo-cost">
            <div class="newtask_row newtask_row--valuation  js-validation">
                <label class="newtask_row__label" for="CourierCargoCost"> {{$category_fields->cargo_cost->label}} </label>
                <div class="newtask_row--valuation__wrapper">
                    <input type="number" id="CourierCargoCost" class="newtask_row--valuation__input js-additionalNumericTextbox" name="cargo_cost" maxlength="7">
                    <span class="b-hint b-additional-service__hint-input">
                        <span class="b-hint__icon b-hint__icon--round js-hint" data-tippy-content="{{$category_fields->cargo_cost->hint}}"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
