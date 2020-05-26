

@if(isset($category_fields->payment) && $category_fields->payment->show == true)

    <div class="js-additional-fields control_payment clearer">
        <div class="js-task-courier-controls-wrapper">
            <div class="js-additional-fields">
                <div class="js-task-control__courier-payment">
                    <div class="newtask_row newtask_row--passengers js-validation ">
                        <label class="newtask_row__label">Способ оплаты покупки</label>
                        <div class="newtask_row--passengers__volume js-payment-select">
                            <input id="Payment" class="radio js-additionalToggler" name="payment" value="payment_by_check" type="hidden">
                            <div class="newtask_row__toggle newtask_row--passengers__items payment-newtask_row--passengers__items">
                                <div class="newtask_row__toggle__item">
                                    <a href="" data-value="payment_by_check" class="newtask_row__toggle__link js-link i-active">Оплата по чеку после покупки</a>
                                </div>
                                <div class="newtask_row__toggle__item">
                                    <a href="" data-value="payment_by_prepayment" class="newtask_row__toggle__link js-link">Деньги на покупку заранее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
