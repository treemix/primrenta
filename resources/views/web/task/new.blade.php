@extends('layouts.web')

@section('content')
<section class="layout-task-new app-action-newtask">
    <div class="task-new-header">
        <div class="task-new-header-inner">
            <h1 class="task-new-header-title">{{$category->description}}</h1>
            <ul class="task-new-steps">
                <li class="task-new-step">
                    <h3 class="task-new-step-title">Заполните заявку</h3>
                    <p class="task-new-step-description">Мы быстро оповестим исполнителей <br>о вашей заявке.</p>
                </li>
                <li class="task-new-step">
                    <h3 class="task-new-step-title">Получите предложения</h3>
                    <p class="task-new-step-description">Заинтересованные исполнители предложат вам<br>свои услуги.</p>
                </li>
                <li class="task-new-step">
                    <h3 class="task-new-step-title">Выберите исполнителя</h3>
                    <p class="task-new-step-description">Выберите подходящее для вас<br>предложение по цене или рейтингу исполнителя.</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="task-new-columns">
        <div class="task-new-column-left">
            <div class="b-task-creation js-task-creation-wrapper">
                <div class="b-task-creation__header">Заполните заявку</div>
                <form class="" method="post" action="/">
                    @csrf
                    <div class="newtask_row newtask_row--title js-validation js-name-block">
                        <label class="newtask_row__label" for="Name__Field">Мне нужно</label>
                        <input id="Name__Field" class="js-hintRequired js-length-count ui-autocomplete-input" type="text" name="Name" tabindex="1" data-hint-id="name" maxlength="220" placeholder="Напишите, чем вам помочь..." autocomplete="off">
                        <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul>
                    </div>
                    <div class="newtask_row newtask_row--category js-categories-row">
                        <div class="js-categories-block">
                            <div class="categories-block-left">
                                <select name="category_parent" class="b-select" id="category-parent">
                                    @foreach($categories as $item)
                                        <option data-slug="{{$item->slug}}" value="{{$item->id}}" {{ $item->id == $category_id ? "selected" : "" }}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="categories-block-right">
                                <select name="category_child" class="b-select" id="category-child">
                                    @foreach($categories_child as $item)
                                        <option data-slug="{{$item->slug}}" value="{{$item->id}}" {{ $item->id == $category_parent_id ? "selected" : "" }}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="newtask_row newtask_row--description js-validation">

                        <label class="newtask_row__label" for="Description__Field">Опишите пожелания и детали, чтобы исполнители лучше оценили вашу задачу</label>

                        <div class="wrap-textarea">
                            <div class="wrap-textarea__description js-textarea-height">Например: построить одноэтажный детский домик из дерева, с крышей и двумя окнами. На участке часто собирается вода, понадобится дренаж из щебня.</div>
                            <textarea id="Description__Field" class="js-hintRequired js-textareaResize" name="Description" rows="3" tabindex="2" data-hint-id="description" maxlength="4000" placeholder="Например: построить одноэтажный детский домик из дерева, с крышей и двумя окнами. На участке часто собирается вода, понадобится дренаж из щебня."></textarea>
                            <a class="btn__attach btn__attach--private_info js-btnShowPrivateInfoBlock  js-hint js-hint-fast-hide" data-hint-position="right" data-hint-id="hint__create_task__attach_private_info" href="#">Приватная информация</a>
                            <a class="btn__attach btn__attach--media js-btnShowAttachMediaBlock hidden js-hint js-hint-fast-hide" data-hint-position="right" data-hint-id="hint__create_task__attach_media" href="#">Добавить фото</a>
                        </div>

                        <div class="newtask_row newtask_row--private_info hidden js-rowPrivateInfo">
                            <label class="row__subtitle" for="PrivateInfo__Field">Добавить приватную информацию</label>
                            <a class="row__btn_hide js-hide" href="#">Скрыть</a>
                            <textarea id="PrivateInfo__Field" class="js-hintRequired" name="PrivateInfo" rows="3" tabindex="5" data-hint-id="private_info_add" placeholder="Например: квартира 39, код домофона 234, ключ под ковриком :)"></textarea>
                        </div>

                        <div id="hint__create_task__attach_private_info" class="hidden">
                            Эта информация<br>
                            будет доступна<br>только выбранному<br>
                            исполнителю задания
                        </div>

                        <div id="hint__create_task__attach_media" class="hidden">
                            Фото поможет исполнителям лучше оценить задачу, а вам — получить больше предложений.
                        </div>

                    </div>

                    <div class="newtask_row newtask_row--attach_media  js-rowAttachMedia ">

                        <div id="NewTaskUploader" class="newtask_row--attach_media__uploader">
                            <div class="b-uploader ">
                                <div class="b-photos-add hidden-">
                                    <div class="b-photos-add__bar">
                                        <div class="b-photos-add__bar__wrap">Перетащите ваши картинки сюда<br> или нажмите на&nbsp;кнопку «Добавить», чтобы<br> выбрать и&nbsp;загрузить файлы обычным способом</div>
                                    </div>
                                    <div class="b-photos-add__uploader">
                                        <div class="upload__progressbar">
                                            <div class="js-progressbar b-progressbar_offer">
                                                <div class="b-progressbar">
                                                    <div style="width: 50%;" class="b-progressbar__line js-countpercent"></div>
                                                    <div class="b-progressbar__value"></div>
                                                </div>
                                                <div class="b-progressbar__status js-caption">Загружено 4 фотографии из 8</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uploader__items js-previews"> </div>

                                <div class="b-photos-add hidden- js-html5-uploader">
                                    <div class="b-photos-add__bar__wrap" id="holder">
                                        Добавить фото или видео
                                        <div class="b-photos-add__bar__description">Размер фотографии должен быть больше 280х206 пикселей</div>
                                        <a class="super_btn js-browseDnd"></a>
                                    </div>
                                </div>
                                <div class="b-photos-add__progressbar js-progress-block hidden-">
                                    <div class="js-progressbar b-progressbar_offer">
                                        <div class="b-progressbar">
                                            <div style="width: 50%;" class="b-progressbar__line js-countpercent"></div>
                                        </div>
                                        <div class="b-progressbar__upload-cancel js-upload-cancel"></div>
                                        <div class="js-progress-text">Загружено: <span class="js-loaded">0</span> из <span class="js-load-count"></span></div>
                                        <div class="b-progressbar__upload-error js-upload-error hidden">
                                            <div class="js-upload-error-list"></div>
                                        </div>
                                        <a class="b-progressbar__upload-error__btn js-confirm-errors hidden" href="#">Ok</a>
                                    </div>
                                </div>
                                <div class="uploader__toggle">
                                    <div class="uploader__add js-classic-uploader">
                                        <div class="uploader__add__wrapper">
                                            <a class="uploader__add__btn js-browse"><span>Выберите файл</span></a>
                                            <div style="position: absolute; left: -9999px">
                                                <input type="file">
                                            </div>
                                            <div class="uploader__add__filename js-filename">Файл не выбран</div>
                                            <div class="uploader__add__size-photo">Размер фотографии должен быть больше 280х206 пикселей</div>
                                            <div class="uploader__add__description js-description">Наличие фото помогает исполнителям лучше оценить вашу задачу и сформулировать свое предложение.&nbsp;</div>
                                            <div class="uploader__add__description js-description-freelance hidden ">Набросок, прототип или фото позволит фрилансерам лучше оценить вашу задачу.</div>
                                        </div>
                                    </div>

                                    <div class="upload__progressbar"></div>
                                </div>
                                <div class="uploader__filetypes">Jpg, png, gif, bmp, mov, avi, flv, wmv, mpg и mp4. До 100Мб </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="task-new-column-right">
            <div class="b-task-widget b-task-block b-task-block__faq">
                <div class="b-task-block__faq__title">
                    Частые вопросы
                </div>
                <div class="b-task-block__faq__items">
                    <div class="b-task-block__faq__item" data-faq="1">
                        <a href="#" class="js-item b-task-block__faq__question">Сколько предложений я получу?</a>
                    </div>
                    <div class="b-task-block__faq__item" data-faq="2">
                        <a href="#" class="js-item b-task-block__faq__question">Обязательно ли выбирать исполнителя?</a>
                    </div>
                    <div class="b-task-block__faq__item" data-faq="3">
                        <a href="#" class="js-item b-task-block__faq__question">Какую цену установить?</a>
                    </div>
                    <div class="b-task-block__faq__item" data-faq="4">
                        <a href="#" class="js-item b-task-block__faq__question">Как оплачивать услуги?</a>
                    </div>
                    <div class="b-task-block__faq__item" data-faq="5">
                        <a href="#" class="js-item b-task-block__faq__question">Как выбрать надежного исполнителя?</a>
                    </div>
                    <div class="b-task-block__faq__item" data-faq="6">
                        <a href="#" class="js-item b-task-block__faq__question">Как не выбрать исполнителем мошенника?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<div id="dialog-task-faq" class="dialog dialog-task-faq--wrapper js-dialog">
    <div id="DialogHintsPlaceholder" class="b-form-hint b-dialog-form-hint"></div>
    <div class="dialog__layout">
        <div class="dialog__wrapper">
            <div class="dialog__inner dialog-task-faq js-dialogInner" style="position: relative;">
                <div class="dialog__content js-dialogContent">
                    <div class="b-task-block b-task-block__faq">
                        <div class="b-task-block__faq__title">
                            Частые вопросы
                        </div>
                        <div class="b-task-block__faq__items">
                            <div class="b-task-block__faq__item faq-item-1" data-faq="1">
                                <a href="#" class="js-item b-task-block__faq__question">Сколько предложений я получу?</a>
                                <div class="b-task-block__faq__answer hidden">
                                    В&nbsp;среднем каждое задание на&nbsp;YouDo получает от&nbsp;3&nbsp;предложений. Обычно первые предложения поступают в&nbsp;течение первых часов после публикации задания.
                                </div>
                            </div>
                            <div class="b-task-block__faq__item faq-item-2" data-faq="2">
                                <a href="#" class="js-item b-task-block__faq__question">Обязательно ли выбирать исполнителя?</a>
                                <div class="b-task-block__faq__answer hidden">
                                    Нет, размещение задания вас ни&nbsp;к&nbsp;чему не&nbsp;обязывает. Если ни&nbsp;одно из&nbsp;предложений вас не&nbsp;заинтересует, вы&nbsp;можете просто закрыть задание.
                                </div>
                            </div>
                            <div class="b-task-block__faq__item faq-item-3" data-faq="3">
                                <a href="#" class="js-item b-task-block__faq__question">Какую цену установить?</a>
                                <div class="b-task-block__faq__answer hidden">
                                    Если вы&nbsp;не&nbsp;знаете точную стоимость работы, укажите примерный бюджет, на&nbsp;который рассчитываете. Постарайтесь как можно более подробно описать задачу, это поможет быстрее получить предложения от&nbsp;подходящих исполнителей.
                                </div>
                            </div>
                            <div class="b-task-block__faq__item faq-item-4" data-faq="4">
                                <a href="#" class="js-item b-task-block__faq__question">Как оплачивать услуги?</a>
                                <div class="b-task-block__faq__answer hidden">
                                    Самый удобный и&nbsp;безопасный вариант&nbsp;— <a href="/sbr" target="_blank">Сделка без риска</a>. Оплата списывается с&nbsp;вашей банковской карты, резервируется до&nbsp;успешного завершения работ и&nbsp;переводится исполнителю. В&nbsp;случае проблем, деньги возвращаются, а&nbsp;YouDo <a href="https://help.youdo.com/ru/articles/2547961-%D0%BC%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D1%8C-%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8F-%D0%BD%D0%B0-youdo-%D0%B2-%D0%BA%D0%B0%D0%BA%D0%BE%D0%BC-%D1%81%D0%BB%D1%83%D1%87%D0%B0%D0%B5-%D0%BC%D0%BE%D0%B6%D0%BD%D0%BE-%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C-%D0%BA%D0%BE%D0%BC%D0%BF%D0%B5%D0%BD%D1%81%D0%B0%D1%86%D0%B8%D1%8E" target="_blank">компенсирует материальный ущерб</a>, если он&nbsp;был причинен по&nbsp;вине исполнителя. Также вы&nbsp;можете выбрать оплату наличными и&nbsp;договориться с&nbsp;исполнителем о&nbsp;любом другом способе передачи денег.
                                </div>
                            </div>
                            <div class="b-task-block__faq__item faq-item-5" data-faq="5">
                                <a href="#" class="js-item b-task-block__faq__question">Как выбрать надежного исполнителя?</a>
                                <div class="b-task-block__faq__answer hidden">
                                    Внимательно изучите профили исполнителей, отзывы и&nbsp;примеры выполненных работ. Посмотрите, <a href="https://help.youdo.com/ru/articles/2547990-%D0%BA%D0%B0%D0%BA-%D1%81%D1%82%D0%B0%D1%82%D1%8C-%D0%BF%D1%80%D0%BE%D0%B2%D0%B5%D1%80%D0%B5%D0%BD%D0%BD%D1%8B%D0%BC-%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D0%B5%D0%BC" target="_blank">подтвержден&nbsp;ли паспорт и&nbsp;другие документы</a>, есть&nbsp;ли в&nbsp;профиле значки и&nbsp;награды. <a href="https://help.youdo.com/ru/articles/2598096-%D0%BA%D0%B0%D0%BA-%D0%B2%D1%8B%D0%B1%D1%80%D0%B0%D1%82%D1%8C-%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8F" target="_blank">Прочитайте другие рекомендации</a>.
                                </div>
                            </div>
                            <div class="b-task-block__faq__item faq-item-6" data-faq="6">
                                <a href="#" class="js-item b-task-block__faq__question">Как не выбрать исполнителем мошенника?</a>
                                <div class="b-task-block__faq__answer hidden">
                                    Если вы&nbsp;доверяете исполнителю ценные вещи, крупную задачу или впускаете в&nbsp;дом, проверьте его паспорт и&nbsp;попросите подписать документы. Шаблон расписки, типового договора и&nbsp;другие полезные советы <a href="https://help.youdo.com/ru/articles/2589367-%D0%BA%D0%B0%D0%BA-%D0%BD%D0%B5-%D0%BD%D0%B0%D1%80%D0%B2%D0%B0%D1%82%D1%8C%D1%81%D1%8F-%D0%BD%D0%B0-%D0%BC%D0%BE%D1%88%D0%B5%D0%BD%D0%BD%D0%B8%D0%BA%D0%B0-%D0%BF%D1%80%D0%B8-%D0%B2%D1%8B%D0%B1%D0%BE%D1%80%D0%B5-%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8F" target="_blank">смотрите в&nbsp;рекомендациях</a>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="dialog__close  js-dialog-close" href="" title="Закрыть окно">Закрыть</a>
            </div>
        </div>
    </div>
</div>
@endsection
