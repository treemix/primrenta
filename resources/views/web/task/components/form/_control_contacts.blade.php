
<div class="newtask_row newtask_row--contacts">
    <label class="newtask_row__label  js-registrationForm" for="UserName__Field">Ваши контакты</label>
    <div class="contacts__form contacts__form-auth">
        <div class="contacts-input js-validation js-registrationForm ">
            <input id="UserName__Field" class="contacts-input__input js-hintRequired ui-autocomplete-input" name="UserName" data-hint-id="username" type="text" placeholder="Имя Фамилия" autocomplete="off">
        </div>
        <div class="contacts-input js-validation js-registrationForm js-authForm">
            <label class="newtask_row__label hidden js-authForm" for="UserEmail__Field">Логин</label>
            <input id="UserEmail__Field" class="contacts-input__input js-hintRequired ui-autocomplete-input" name="UserEmail" data-hint-id="email" type="email" placeholder="E-mail" autocomplete="off">
        </div>
        <div class="contacts-input hidden js-authForm">
            <label class="newtask_row__label hidden js-authForm" for="UserPassword__Field">Пароль</label>
            <input id="UserPassword__Field" class="contacts-input__input js-hintRequired" name="UserPassword" data-hint-id="password" type="password" placeholder="Пароль">
        </div>
        <div class="contacts-input  js-validation js-registrationForm">
            <div class="b-phone">
                <div class="b-phone__number">
                    <input id="PhoneE164__Field" class="b-phone__input js-hintRequired" name="PhoneE164" data-hint-id="phone" type="tel" placeholder="Ваш телефон">
                    <span class="b-phone__plus js-phone-plus">+</span>
                </div>
            </div>
        </div>
        <div class="contacts__form__toggle-wrap">
            <div class="contacts__form__toggle hidden js-authForm">
                Не зарегистрированы? <a class="toggle_link js-showRegistrationForm" href="#">Зарегистрируйтесь</a>
            </div>
            <div class="contacts__form__toggle  js-registrationForm">
                Уже зарегистрированы? <a class="toggle_link js-showAuthForm" href="#">Войдите!</a>
            </div><div class="contacts__form__toggle hidden js-authForm">
                <a class="toggle_link js-remindPassword" href="#">Забыли пароль?</a>
            </div>
        </div>
        <div class="contacts__form__reminder row hidden js-passwordReminder"></div>
        <div class="contacts__user_phone__view js-showPhone-block hidden">
                                <span class="b-chbx-standard">
                                    <input id="ShowCreatorPhone__Field" name="ShowCreatorPhone" type="checkbox">
                                    <label for="ShowCreatorPhone__Field">Показывать мой телефон исполнителям, которые оставят предложение к заданию</label>
                                </span>
        </div>
    </div>
</div>
