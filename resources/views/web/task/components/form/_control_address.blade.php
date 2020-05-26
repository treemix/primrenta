

<div class="newtask_row newtask_row--address">
    <label class="newtask_row__label js-address-label" for="Address_0__Field">Адрес</label>
    <div class="newtask_row--address__inputs_wrapper js-blockAddresses js-validation">
        <div class="b-task-manage-addresses">
            <a class="b-task-manage-addresses__manage js-my-addresses hidden" href="#">мои адреса</a>
            <div class="b-task-manage-addresses__wrapper js-validation">
                <input name="Addresses" type="hidden" placeholder="Улица, дом, строение, корпус">
                <ul class="b-task-manage-addresses__items js-items">
                    <li class="b-task-manage-addresses__item js-item" data-lat="" data-lng="" data-locality="">
                        <span class="b-task-manage-addresses__char js-char">А</span>
                        <input id="Address_Address1__Field" type="text" class="b-task-manage-addresses__input js-address js-input ui-autocomplete-input has-autocomplete" placeholder="Улица, дом, строение, корпус" value="" autocomplete="off">
                        <span class="b-task-manage-addresses__clear js-clear-address hidden"></span>
                        <span class="b-geolocation js-address-search-geo js-hint js-hint-fast-hide" data-tippy-placement="right" data-tippy-content="Моё местоположение" data-ga="searchGeolocation"></span>
                        <p class="b-geolocation--err-msg js-address-search-geo-err-msg hidden" data-ga="searchGeolocationError">Не удалось определить местоположение</p>
                        <a class="b-styled-element__btn--delete b-task-manage-addresses__delete js-btnRemove" href=""></a>
                    </li>
                </ul>
            </div>

            <div class="b-task-manage-addresses__actions">
                <span class="b-task-manage-addresses__roundtrip hidden js-roundtrip">
                   <span class="b-chbx-standard">
                       <input id="RoundTrip__Field" class="js-check" name="RoundTrip" type="checkbox" placeholder="Улица, дом, строение, корпус">
                       <label for="RoundTrip__Field">Вернуться обратно</label>
                   </span>
                </span>
                <a class="b-task-manage-addresses__add js-btnAdd" href="">Добавить ещё один адрес</a>
            </div>

            <div id="NewTaskMapWrapper" class="b-task-manage-addresses__map b-map hidden-">
                <div id="NewTaskMapContainer" class="b-map__container" style="width: 100%; height: 100%;"></div>
                <span class="st"></span>
                <span class="sr"></span>
                <span class="sb"></span>
                <span class="sl"></span>
            </div>
        </div>
    </div>
</div>
