

@if(isset($category_fields->courier_transport) && $category_fields->courier_transport->show == true)

<div class="js-additional-fields control_transport clearer">
    <div class="js-task-control__courier-transport">
        <div class="newtask_row newtask_row--passengers js-validation">
            <label class="newtask_row__label">Наличие транспорта</label>
            <div class="newtask_row--passengers__volume js-courier-transport-select">
                <input id="CourierTransport" class="js-additionalToggler" name="CourierTransport" data-code="CourierTransport" value="never_mind" type="hidden">
                <div class="newtask_row__toggle newtask_row--passengers__items transport-newtask_row--passengers__items">
                    <div class="newtask_row__toggle__item">
                        <a href="" data-value="never_mind" class="newtask_row__toggle__link js-link i-active">
                            Неважно
                        </a>
                    </div>
                    <div class="newtask_row__toggle__item">
                        <a href="" data-value="by_passenger_car" class="newtask_row__toggle__link js-link">
                            На легковом авто
                        </a>
                    </div>
                    <div class="newtask_row__toggle__item">
                        <a href="" data-value="by_truck" class="newtask_row__toggle__link js-link">
                            На грузовом авто
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
