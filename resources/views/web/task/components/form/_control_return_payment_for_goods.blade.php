

@if(isset($category_fields->return_payment))
<div class="newtask_row _control_return_payment_for_goods clearer-">
    <div class="js-task-control js-task-control__return-payment" data-control-id="ReturnPaymentForGoods">
        <div class="newtask_row- newtask_row--return b-additional-service__set-  js-validation js-additionalCheckbox" id="ReturnPaymentForGoods" data-code="ReturnPaymentForGoods">
            <div class="b-additional-service__item b-additional-service__item--full">
                <span class="b-chbx-standard">
                    <input id="ReturnPayment" name="return_payment" value="1" type="checkbox" data-code="ReturnPaymentForGoods">
                    <label for="ReturnPayment">{{isset($category_fields->return_payment->label) ? $category_fields->return_payment->label : ''}}</label>
                </span>
                <span class="b-hint b-additional-service__hint-text">
                    <span class="b-hint__icon b-hint__icon--round js-hint" data-tippy-content="{{isset($category_fields->return_payment->hint) ? $category_fields->return_payment->hint : ''}}"></span>
                </span>
            </div>
        </div>
    </div>
</div>
@endif
