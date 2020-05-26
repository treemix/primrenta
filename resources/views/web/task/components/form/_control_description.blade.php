
<div class="newtask_row newtask_row--description js-validation _control_description clearer">
    <label class="newtask_row__label" for="Description__Field">Опишите пожелания и детали, чтобы исполнители лучше оценили вашу задачу</label>
    <div class="wrap-textarea">
        <textarea id="Description__Field" class="js-hintRequired js-textareaResize js-hint" name="description" rows="3" tabindex="2"
                  data-tippy-content="{{isset($category_fields->description->hint) ? $category_fields->description->hint : ''}}"
                  maxlength="4000"
                  placeholder="{{isset($category_fields->description->placeholder) ? $category_fields->description->placeholder : ''}}"></textarea>
        <a class="btn__attach btn__attach--private_info js-btnShowPrivateInfoBlock  js-hint js-hint-fast-hide"
           data-tippy-content="Эта информация<br>будет доступна<br>только выбранному<br>исполнителю задания" href="#">Приватная информация</a>
    </div>
</div>
