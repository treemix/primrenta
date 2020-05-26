
<div class="newtask_row newtask_row--finish js-validation _control_manage_finish_date">
    <label class="newtask_row__label" for="NeedBegin__Field">Дата и время</label>
    <div class="js-blockDate">
        <div class="b-task-manage-finish">
            <div class="b-task-manage-finish__wrap b-task-manage-finish__wrap--action">
                <input name="NeedBeginUtc" type="hidden" value="">
                <input name="NeedEndUtc" type="hidden" value="">
                <select name="date_type" class="b-select js-dateType b-core-ui-select__select_state_hide-">
                    <option value="need_start_date" selected="">Начать работу</option>
                    <option value="need_end_date">Завершить работу</option>
                    <option value="need_period_date">Указать период</option>
                </select>
            </div>


{{--            js-period-block js-extendedDate i-begin i-end--}}
            <div class="b-task-manage-finish__wrap--period js-extendedDate i-begin">
                <div class="b-task-manage-finish__wrap js-extendedDate i-begin">
                    <label class="newtask_row__label" for="NeedBegin__Field">Начать</label>
                    <div class="b-task-manage-finish__wrap__when js-datebox i-begin">
                        <div class="b-task-manage-finish__wrap__day">
                            <div class="b-task-manage-finish__wrap--date i-default js-chooseDate-block">
                                <label class="b-task-manage-finish__label" for="NeedBeginDay__Field"></label>
                                <input id="NeedBeginDay__Field" class="b-task-manage-finish__input  hasDatepicker datetimepicker-input"
                                       name="NeedBeginDate" type="text"
                                       data-toggle="datetimepicker" data-target="#NeedBeginDay__Field"
                                       placeholder="Дата" value="" autocomplete="off">
                            </div>
                        </div>
                        <div class="b-task-manage-finish__wrap__time js-time">
                            <input id="NeedBeginTime__Field" class="b-task-manage-finish__input datetimepicker-input" name="NeedBeginTime"
                                   data-toggle="datetimepicker" data-target="#NeedBeginTime__Field"
                                   type="text" placeholder="Время" value="" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="b-task-manage-finish__wrap js-extendedDate i-end">
                    <label class="newtask_row__label" for="NeedBegin__Field">Завершить</label>
                    <div class="b-task-manage-finish__wrap__when js-datebox i-end">
                        <div class="b-task-manage-finish__wrap__day">
                            <div class="b-task-manage-finish__wrap--date i-default js-chooseDate-block">
                                <label class="b-task-manage-finish__label" for="NeedEndDay__Field"></label>
                                <input id="NeedEndDay__Field" class="b-task-manage-finish__input hasDatepicker datetimepicker-input" name="NeedEndDate" type="text"
                                       data-toggle="datetimepicker" data-target="#NeedEndDay__Field"
                                       placeholder="Дата" value="" autocomplete="off">
                            </div>
                        </div>
                        <div class="b-task-manage-finish__wrap__time js-time">
                            <input id="NeedEndTime__Field" class="b-task-manage-finish__input datetimepicker-input" name="NeedEndTime" type="text"
                                   data-toggle="datetimepicker" data-target="#NeedEndTime__Field"
                                   placeholder="Время" value="" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
