@extends('layouts.web')

@section('content')

    <div class="b-hero-video js-hero" style="background-image: url({{asset("video/frame.jpg")}})">

        <div class="b-hero-video__offer js-hero-form-wrapper">
            <div class="b-hero-video__h1">Освободим <span class="nobr">вас от забот</span></div>
            <div class="b-hero-video__h2">Поможем найти надежного исполнителя <span class="nobr">для любых задач</span></div>
            <div class="b-hero-video__formbox">
                <form action="/tasks/suggest" class="js-hero-form" autocomplete="off" method="POST" novalidate="novalidate">
                    <input type="hidden" class="js-hero-suggest-id" name="suggestionId" value="">
                    <div class="b-hero-video__form js-hero-input-block">
                        <div class="b-hero-video__input">
                            <input type="text" class="js-hero-input ui-autocomplete-input" name="text" maxlength="220" placeholder="Напишите, чем вам помочь…" data-pl-full="Напишите, чем вам помочь…" data-pl-small="Чем вам помочь?" autocomplete="off">
                        </div>
                        <div class="b-hero-video__submit">
                            <button type="submit" class="js-hero-submit" value="">
                                <span class="b-hero-video__submit-text-full">Заказать услугу</span>
                                <span class="b-hero-video__submit-text-small">Заказать</span>
                            </button>
                        </div>
                    </div>
                    <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul></form>
            </div>
            <div class="b-hero-video__example">Например: <span class="js-hero-example" data-id="888">доставить конверт</span>
            </div>
            <a href="/verification" class="b-hero-video__gowork js-stay-executor"><span>стать исполнителем и начать зарабатывать</span></a>
        </div>


        <div class="b-hero-video__keeper">
            <video poster="{{asset("video/frame.jpg")}}" loop="" autoplay="" muted="">
                <source src="{{asset("video/hero_video.mp4")}}" type="video/mp4">
            </video>
        </div>
    </div>

    <div class="b-performers-count">
        <h4>Более 1 500 000 исполнителей</h4>
        <span>готовы помочь вам в решении самых разнообразных задач</span>
    </div>

    <div class="b-groceries-delivery">
        <a href="/tasks/suggest" class="btn b-groceries-delivery__button">
            Создать задание
        </a>
    </div>

    <div class="b-index-popular">
        <div class="b-index-popular__items i-hidden js-categoriesWrapper">
            <div class="b-index-popular__item i-Courier">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/courier/courierother">
                    <span class="b-index-popular__item__title">Курьерские услуги</span>
                </a>
            </div>
            <div class="b-index-popular__item i-Clerical">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/clerical/clericalother">
                    <span class="b-index-popular__item__title">Ремонт и строительство</span>
                </a>
            </div>
            <div class="b-index-popular__item i-Trucking">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/trucking/truckingother">
                    <span class="b-index-popular__item__title">Грузоперевозки</span>
                </a>
            </div>
            <div class="b-index-popular__item i-House">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/house/houseother">
                    <span class="b-index-popular__item__title">Уборка</span>
                </a>
            </div>
            <div class="b-index-popular__item i-VirtualAssistant">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/virtualassistant/virtualassistantother">
                    <span class="b-index-popular__item__title">Виртуальный помощник</span>
                </a>
            </div>
            <div class="b-index-popular__item i-ComputerHelp">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/computerhelp/computerhelpother">
                    <span class="b-index-popular__item__title">Компьютерная помощь</span>
                </a>
            </div>
            <div class="b-index-popular__item i-Promo">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/promo/promoother">
                    <span class="b-index-popular__item__title">Мероприятия и промоакции</span>
                </a>
            </div>
            <div class="b-index-popular__item i-Design">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/design/designother">
                    <span class="b-index-popular__item__title">Дизайн</span>
                </a>
            </div>
            <div class="b-index-popular__item i-WebDevelopment">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/webdevelopment/webdevelopmentother">
                    <span class="b-index-popular__item__title">Web-разработка</span>
                </a>
            </div>
            <div class="b-index-popular__item i-Photoshop">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/photoshop/photoshopother">
                    <span class="b-index-popular__item__title">Фото- и видеоуслуги</span>
                </a>
            </div>
            <div class="b-index-popular__item i-TechRepair">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/techrepair/techrepairother">
                    <span class="b-index-popular__item__title">Установка и ремонт техники</span>
                </a>
            </div>
            <div class="b-index-popular__item i-HealthAndBeauty">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/healthandbeauty/healthandbeautyother">
                    <span class="b-index-popular__item__title">Красота и здоровье</span>
                </a>
            </div>
            <div class="b-index-popular__item i-ElectronicRepair">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/electronicrepair/electronicrepairother">
                    <span class="b-index-popular__item__title">Ремонт цифровой техники</span>
                </a>
            </div>
            <div class="b-index-popular__item i-LegalAdvice">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/legaladvice/legaladviceother">
                    <span class="b-index-popular__item__title">Юридическая помощь</span>
                </a>
            </div>
            <div class="b-index-popular__item i-Teaching">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/teaching/teachingother">
                    <span class="b-index-popular__item__title">Репетиторы и обучение</span>
                </a>
            </div>
            <div class="b-index-popular__item i-Auto">
                <a class="b-index-popular__item__link js-index-track-ga-event" href="/tasks/new/auto/carother">
                    <span class="b-index-popular__item__title">Ремонт транспорта</span>
                </a>
            </div>

        </div>
        <a class="b-index-popular__toggle__btn" href="/tasks/new">Все категории</a>
    </div>

    <div class="b-teasers">
        <a href="/security#security-sbr" class="b-teasers__item b-teasers__item--sbr">
            <div class="b-teasers__image i-lazy-visible lazyloaded">
            </div>
            <div class="b-teasers__text">
                <div class="b-teasers__title">Удобная и&nbsp;безопасная оплата</div>
                <div class="b-teasers__description">
                    При оплате через <span class="b-teasers__link">Сделку без риска</span> YouDo вернет деньги, если что-то пойдет не&nbsp;так.
                </div>
            </div>
        </a>
        <a href="/security#security-passport" class="b-teasers__item b-teasers__item--passport">
            <div class="b-teasers__image i-lazy-visible lazyloaded"></div>
            <div class="b-teasers__text">
                <div class="b-teasers__title">Надежные исполнители</div>
                <div class="b-teasers__description">
                    «<span class="b-teasers__link">Проверенные исполнители</span>» подтвердили свои документы.
                </div>
            </div>
        </a>
        <a href="/security#security-recall" class="b-teasers__item b-teasers__item--recall">
            <div class="b-teasers__image i-lazy-visible lazyloaded"></div>
            <div class="b-teasers__text">
                <div class="b-teasers__title">Достоверные отзывы</div>
                <div class="b-teasers__description">
                    Более <span class="b-teasers__link">1 000 000 отзывов</span> от&nbsp;заказчиков помогут выбрать подходящего исполнителя.
                </div>
            </div>
        </a>
        <a href="/youdo-for-business" class="b-teasers__item b-teasers__item--business">
            <div class="b-teasers__image i-lazy-visible lazyloaded"></div>
            <span class="b-teasers__text">
        <div class="b-teasers__title">PrimRenta для бизнеса</div>
        <div class="b-teasers__description">
           Безналичная оплата <span class="b-teasers__link">бизнес-заданий</span> с&nbsp;предоставлением закрывающих документов.
        </div>
      </span>
        </a>
    </div>

    <div class="b-index-hiw">
        <div class="b-index-hiw__wrapper">
            <div class="b-index-hiw__title">
                С&nbsp;PrimRenta вы&nbsp;экономите на&nbsp;услугах до&nbsp;70%.<br>
                Как это возможно?
            </div>
            <ol class="b-index-hiw__steps">
                <li class="b-index-hiw__step b-index-hiw__step--task">
                    <div class="b-index-hiw__step__title">Создайте задание</div>
                    <div class="js-responsive-image i-no-preloader i-done">
                        <img class="b-index-hiw__step__pic" data-original="img/hiw-1.png" src="img/hiw-1.png" alt="" style="display: block;">
                    </div>
                    <p class="b-index-hiw__step__description">Опишите своими словами задачу, которую требуется выполнить.</p>
                    <p class="b-index-hiw__step__text js-index-track-ga-event"><a href="/tasks/new/courier/pedestrian">Создать задание</a></p>
                </li>
                <li class="b-index-hiw__step b-index-hiw__step--offer">
                    <div class="b-index-hiw__step__title">Исполнители предложат вам свои услуги и цены</div>
                    <div class="js-responsive-image i-no-preloader i-done">
                        <img class="b-index-hiw__step__pic" data-original="img/hiw-2.png" src="img/hiw-2.png" alt="" style="display: block;">
                    </div>
                    <p class="b-index-hiw__step__description">Уже через пару минут вы&nbsp;начнете получать предложения от&nbsp;исполнителей, готовых выполнить ваше задание.</p>
                </li>
                <li class="b-index-hiw__step b-index-hiw__step--executor">
                    <div class="b-index-hiw__step__title">Выберите лучшее предложение</div>
                    <div class="js-responsive-image i-no-preloader i-done">
                        <img class="b-index-hiw__step__pic" data-original="img/hiw-3.png" src="img/hiw-3.png" alt="">
                    </div>
                    <p class="b-index-hiw__step__description">Вы&nbsp;сможете выбрать подходящего исполнителя, по&nbsp;разным критериям:</p>
                    <p class="b-index-hiw__step__text">
                        <span class="i-price">Стоимость услуг</span> <span class="i-reviews">Отзывы заказчиков</span>
                        <span class="i-rating">Рейтинг</span> <span class="i-example">Примеры работ</span>
                    </p>
                </li>
            </ol>
            <div class="b-index-hiw__actions">
                <a class="b-index-hiw__actions__btn js-index-track-ga-event" href="/tasks/new/courier/pedestrian">Разместите задание прямо сейчас</a>
                <div class="b-index-hiw__actions__text">и&nbsp;найдите исполнителя за&nbsp;несколько минут</div>
            </div>
        </div>
    </div>

    <div class="b-index-advantage">
        <div class="b-index-advantage__wrapper">
            <div class="b-index-advantage__title">Наши преимущества</div>
            <div class="b-index-advantage__item b-index-advantage__item--prices">
                <div class="b-index-advantage__item__title">Выгодные цены</div>
                <p class="b-index-advantage__item__text">
                    У&nbsp;частных исполнителей нет расходов на&nbsp;офис, рекламу, зарплату секретарю и&nbsp;других
                    затрат, которые сервисные компании обычно включают в&nbsp;стоимость своих услуг.
                </p>
            </div>
            <div class="b-index-advantage__item b-index-advantage__item--verification">
                <div class="b-index-advantage__item__title">Проверенные исполнители</div>
                <p class="b-index-advantage__item__text">
                    Все исполнители проходят процедуру верификации, мы&nbsp;проверяем отзывы, разбираемся
                    с&nbsp;жалобами и&nbsp;контролируем качество их&nbsp;работы.
                </p>
            </div>
            <div class="b-index-advantage__item b-index-advantage__item--time">
                <div class="b-index-advantage__item__title">Экономия времени</div>
                <p class="b-index-advantage__item__text">
                    У нас вы&nbsp;можете найти подходящего исполнителя за&nbsp;несколько минут.
                    Многие из&nbsp;них готовы приступить к&nbsp;работе в&nbsp;тот&nbsp;же день, а&nbsp;иногда в&nbsp;тот&nbsp;же час.
                </p>
            </div>
        </div>
    </div>

    <div class="b-index-download">
        <div class="js-responsive-image i-no-preloader i-done">
            <img class="b-index-download__pic" src="img/download_hand.png" alt="" style="display: block;">
        </div>
        <div class="b-index-download__wrapper">
            <div class="b-index-download__title">Персональный помощник в вашем кармане</div>
            <div class="b-index-download__text">Уже в разработке, но уже сейчас можете воспользоваться мобильной версией сайта.</div>
            <a disabled class="b-index-download__btn b-index-download__btn--ios js-appsfm-href i-ios i-ios--RU" target="_blank" href="#"><span></span></a>
            <a class="b-index-download__btn b-index-download__btn--android js-appsfm-href i-android i-android--RU" target="_blank" href="#"><span></span></a>
        </div>
    </div>

    <div class="b-index-blog">
        <div class="b-index-blog__wrapper">
            <div class="b-index-blog__title">
                Новые публикации <a href="#" target="_blank">в блоге</a>
            </div>
            <div class="b-index-blog__items">
                <div class="b-index-blog__item  ">
                    <a class="b-index-blog__item-wrapper lazyloaded" href="#" target="_blank" style="background-image: url({{asset("img/blog/zi.jpg")}});">

                        <span class="b-index-blog__item-description">
                            <span class="b-index-blog__item-section">Наши новости</span>
                            <span class="b-index-blog__item-title">Актуальная информация</span>
                        </span>
                    </a>
                </div>
                <div class="b-index-blog__item  ">
                    <a class="b-index-blog__item-wrapper lazyloaded" href="#" target="_blank" style="background-image: url({{asset("img/blog/zi2.jpg")}});">

                        <span class="b-index-blog__item-description">
                            <span class="b-index-blog__item-section">Наши новости</span>
                            <span class="b-index-blog__item-title">Цифровые пропуска</span>
                        </span>
                    </a>
                </div>
                <div class="b-index-blog__item  ">
                    <a class="b-index-blog__item-wrapper lazyloaded" href="#" target="_blank" style="background-image: url({{asset("img/blog/zi3.jpg")}});">

                        <span class="b-index-blog__item-description">
                            <span class="b-index-blog__item-section">Наши новости</span>
                            <span class="b-index-blog__item-title">Спецодежда от YouDo</span>
                        </span>
                    </a>
                </div>
                <div class="b-index-blog__item  ">
                    <a class="b-index-blog__item-wrapper lazyloaded" href="#" target="_blank" style="background-image: url({{asset("img/blog/zi4.jpg")}});">

                        <span class="b-index-blog__item-description">
                            <span class="b-index-blog__item-section">Наши новости</span>
                            <span class="b-index-blog__item-title">Поручите бизнес-задачи самозанятым</span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="b-index-blog__hero">
                Хотите стать героем наших историй? Это просто!
                <a class="js-index-track-ga-event" href="/tasks/new">Разместите задание</a>
                или <a href="/verification">станьте исполнителем</a>.
            </div>

        </div>
    </div>

    <div class="b-index-columns">
        <div class="b-index-columns__wrapper">
            <h5 class="b-index-columns__title">Что заказывают прямо сейчас</h5>
{{--            <div class="b-index-helpers">--}}
{{--                <div class="b-index-pennants">--}}
{{--                    <a href="/verification" class="b-index-pennants__link--executors i-lazy-visible lazyloaded"><span>Как стать исполнителем</span></a>--}}
{{--                    <a href="/security" class="b-index-pennants__link--security i-lazy-visible lazyloaded"><span>Безопасность и гарантии</span></a>--}}
{{--                    <a href="/b2b" target="_blank" class="b-index-pennants__link--b2b i-lazy-visible lazyloaded"><span>Надежные исполнители для&nbsp;бизнеса</span></a>--}}
{{--                </div>--}}
{{--                <div class="b-index-subscribe">--}}
{{--                    <ul class="b-follow-btns">--}}
{{--                        <li class="b-follow-btns__item i-fb">--}}
{{--                            <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/youdocom" data-width="385" data-height="250" data-hide-cover="true" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=141970832520341&amp;container_width=385&amp;height=250&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fyoudocom&amp;locale=ru_RU&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;width=385"><span style="vertical-align: bottom; width: 385px; height: 180px;"><iframe name="f11d559cd465498" width="385px" height="250px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/plugins/page.php?app_id=141970832520341&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df205a69e7028df4%26domain%3Dyoudo.com%26origin%3Dhttps%253A%252F%252Fyoudo.com%252Ff226a34cbd4f02c%26relation%3Dparent.parent&amp;container_width=385&amp;height=250&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fyoudocom&amp;locale=ru_RU&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;width=385" style="border: none; visibility: visible; width: 385px; height: 180px;" class=""></iframe></span></div>--}}
{{--                        </li>--}}
{{--                        <li class="b-follow-btns__item i-vk">--}}
{{--                            <div class="js-social-vk" data-type="group" data-width="385" data-height="215" data-use-meta="0"></div>--}}
{{--                        </li>--}}
{{--                        <li class="b-follow-btns__item i-tw">--}}
{{--                            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-follow-button twitter-follow-button-rendered" style="position: static; visibility: visible; width: 154px; height: 20px;" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.c63890edc4243ee77048d507b181eeec.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=youdo&amp;show_count=true&amp;show_screen_name=false&amp;size=m&amp;time=1588072798192" data-screen-name="youdo"></iframe>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="b-index-stream">
                <div class="b-index-stream__viewport">
                    <ul class="b-index-stream__items js-tasksItems" style="">
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-computerhelp"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298403">
                                    Есть TRIAL программы. Нужна помощь по активации
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">500</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Есть TRIAL программы. Нужна помощь по активации 3D Studi MAX 2018</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Кирилл Ш.</span>
                                <span class="icon b-map-pin-small-status-process"></span>
                                <span class="status b-index-stream__item__status">Выполняется</span>
                            </p>
                        </li>
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-photoshop"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298336">
                                    Монтаж 2-х роликов от 3 до 4 минут
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">3 000</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Есть домашняя запись 2 песен 9 музыкантов оркестра Налича, сделанная каждым из них у себя дома. Необходимо собрать ролики. Звуковой трек уже сведен и лежит...</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Александр Н.</span>
                                <span class="icon b-map-pin-small-status-done"></span>
                                <span class="status b-index-stream__item__status">Уже выполнено</span>
                            </p>
                        </li>
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-virtualassistant"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298230">
                                    Написать summary на английском небольших текстов (всего...
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">1 145</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Нужна помощь в написании summary по английским небольшим текстам.(тексты максимум 2 страницы в объеме по которым нужно сделать summaru) Структуру этого...</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Антонина</span>
                                <span class="icon b-map-pin-small-status-process"></span>
                                <span class="status b-index-stream__item__status">Выполняется</span>
                            </p>
                        </li>
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-design"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298167">
                                    Дизайн бытовки
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">4 000</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Дизайн - проект бытовки. Есть строение и есть понимание как хочется его переделать, нужно нарисовать по описанию и помочь с выбором материалов по цветовой...</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Анна П.</span>
                                <span class="icon b-map-pin-small-status-process"></span>
                                <span class="status b-index-stream__item__status">Выполняется</span>
                            </p>
                        </li>
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-design"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298157">
                                    Дизайн-проект 3-х комнатной квартиры
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">60 000</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Нужно подготовить дизайн- проект 3-комнатной квартиры, Обмерный план и информацию по проекту отправлю исполнителю. Присылайте портфолио - будем выбирать...</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Владимир И.</span>
                                <span class="icon b-map-pin-small-status-process"></span>
                                <span class="status b-index-stream__item__status">Выполняется</span>
                            </p>
                        </li>
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-virtualassistant"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298155">
                                    Общение с поставщиком
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">550</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Обзвон поставщиков товаров по базе</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Михаил Т.</span>
                                <span class="icon b-map-pin-small-status-done"></span>
                                <span class="status b-index-stream__item__status">Уже выполнено</span>
                            </p>
                        </li>
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-photoshop"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298150">
                                    Обработать фотографии
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">750</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Нужно обработать три фото - обложки книги. Можно найти более лучшее качество в интернете. На фото удалить лишнее и сделать размер плакатов ширина 50 см...</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Михаил Б.</span>
                                <span class="icon b-map-pin-small-status-process"></span>
                                <span class="status b-index-stream__item__status">Выполняется</span>
                            </p>
                        </li>
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-design"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298135">
                                    Изготовить 3D модель для печати на 3D принтере
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">1 700</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Сделать 3D модель колесного колпачка 180мм диаметром для Кадиллак Эскалейд. Есть подробные фотографии. Живой образец естественно передам при встрече.</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Дмитрий П.</span>
                                <span class="icon b-map-pin-small-status-process"></span>
                                <span class="status b-index-stream__item__status">Выполняется</span>
                            </p>
                        </li>
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-virtualassistant"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298123">
                                    Перенос текста таблицы из pdf в exel 8 стр
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">550</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Таблицу Гибдд перенести в exel, 8 страниц, марка авто/вин номер, рег. знак и подобная информация.</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Евгения Ш.</span>
                                <span class="icon b-map-pin-small-status-process"></span>
                                <span class="status b-index-stream__item__status">Выполняется</span>
                            </p>
                        </li>
                        <li class="b-index-stream__item js-item">
                            <div class="js-responsive-image i-no-preloader i-done">
                                <span class="b-index-stream__item__pic i-virtualassistant"></span>
                            </div>
                            <div class="b-index-stream__item__title">
                                <a class="b-index-stream__item__link js-link" href="/t7298121">
                                    Исправить бух баланс
                                </a>
                                <span class="b-index-stream__item__price ">
                                        <span class="js-format-money">1 700</span>
                                        <span class="rub">Р</span>
                                </span>
                            </div>
                            <p class="b-index-stream__item__description">Задание для Ларисы М</p>
                            <p class="b-index-stream__item__info">
                                <span class="author">Татьяна С.</span>
                                <span class="icon b-map-pin-small-status-process"></span>
                                <span class="status b-index-stream__item__status">Выполняется</span>
                            </p>
                        </li>
                    </ul>
                </div>
                <a class="js-track-ga-event-all b-index-stream__load_btn" href="/tasks-all-any-all-1">Показать все задания</a>
            </div>
        </div>
    </div>

@endsection

@section("footer")

    <div class="b-index-tasks-counter">

        <div class="b-index-tasks-counter__items i-delitemer">
            <span class="b-index-tasks-counter__item">6</span>
            <span class="b-index-tasks-counter__item">6</span>
            <span class="b-index-tasks-counter__item">5</span>
            <span class="b-index-tasks-counter__item">5</span>
            <span class="b-index-tasks-counter__item">5</span>
            <span class="b-index-tasks-counter__item">3</span>
            <span class="b-index-tasks-counter__item">2</span>
        </div>
        <p class="b-index-tasks-counter__text">
            задания уже создано в этих категориях
        </p>
    </div>

    <div class="b-index-tasks-categories">
        <div class="b-index-tasks-categories__wrapper">
            <ul class="b-index-tasks-categories__parent_items">

                @if(!empty($categories))
                    @foreach($categories as $category)
                        @if($category->parent_id === 0)
                            <li class="b-index-tasks-categories__parent_item">
                                <a class="b-index-tasks-categories__parent_item__link" href="{{url('/jobs/'.$category->slug)}}"> {{$category->name}} </a>
                                <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                                <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items hidden" id="category-{{$category->id}}">
                                    @foreach($categories as $parent_category)
                                        @if($parent_category->parent_id === $category->id)
                                            <li class="b-index-tasks-categories__child_item">
                                                <a class="b-index-tasks-categories__child_item__link" href="{{url('/jobs/'.$parent_category->slug)}}"> {{$parent_category->name}} </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endforeach
                @endif




                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://remont.youdo.com/">
                        Бытовой ремонт
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items hidden" id="category-338">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://remont.youdo.com/minor-repair/">
                                Мелкий бытовой ремонт
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://remont.youdo.com/repair/">
                                Ремонт под ключ
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://remont.youdo.com/facing/">
                                Отделочные работы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://remont.youdo.com/plumbers/">
                                Сантехнические услуги
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://remont.youdo.com/electrician/">
                                Электрика
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://remont.youdo.com/furniture/">
                                Сборка и ремонт мебели
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://remont.youdo.com/doors/">
                                Установка и ремонт дверей
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://remont.youdo.com/tile/">
                                Укладка плитки
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://remont.youdo.com/plitochniki/">
                                Плиточники
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://courier.youdo.com/">
                        Курьерские услуги
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-339">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://courier.youdo.com/products-delivery/">
                                Доставка продуктов
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://courier.youdo.com/drugs-delivery/">
                                Доставка лекарств из аптеки
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://courier.youdo.com/store-delivery/">
                                Доставка из магазина
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://courier.youdo.com/food-delivery/">
                                Доставка еды
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://courier.youdo.com/courier-services/">
                                Курьерская доставка
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://courier.youdo.com/documents-delivery/">
                                Доставка документов
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://courier.youdo.com/gifts-delivery/">
                                Доставка цветов и подарков
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://courier.youdo.com/driver/">
                                Трезвый водитель
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://courier.youdo.com/zhivotnyh/">
                                Доставка животных
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/ustanovka/">
                        Установка бытовой техники
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-1849">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/ustanovka/stiralnaya-mashina/">
                                Стиральная машина
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/ustanovka/plita/">
                                Плита
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/ustanovka/varochnaya-panel/">
                                Варочная панель
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/ustanovka/duhovoi-shkaf/">
                                Духовой шкаф
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/ustanovka/kondicioner/">
                                Кондиционер
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/ustanovka/posudomoechnaya-mashina/">
                                Посудомоечная машина
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/ustanovka/vytyazhka/">
                                Вытяжка
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/ustanovka/holodilnik/">
                                Холодильник
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/remont-bitovoy-tehniki/">
                        Ремонт бытовой техники
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-1850">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/remont-bitovoy-tehniki/krupnaya/">
                                Крупная техника
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/remont-bitovoy-tehniki/kuhonnaya/">
                                Техника для кухни
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/remont-bitovoy-tehniki/ehlektronika/">
                                Ремонт электроники
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/remont-bitovoy-tehniki/klimaticheskaya/">
                                Климатическая техника
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://perevozki.youdo.com/">
                        Грузоперевозки
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-3260">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://perevozki.youdo.com/cars/">
                                Аренда авто
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://perevozki.youdo.com/city/">
                                Городские грузоперевозки
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://perevozki.youdo.com/international/">
                                Международные грузоперевозки
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://perevozki.youdo.com/country/">
                                Грузоперевозки по России
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://perevozki.youdo.com/pereezd/">
                                Переезд
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://perevozki.youdo.com/passenger/">
                                Пассажирские перевозки
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://perevozki.youdo.com/garbage/">
                                Вывоз мусора
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://freelance.youdo.com/">
                        Помощь фрилансеров
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-3494">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/turnkey/">
                                Сайты под ключ
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/design/">
                                WEB-Дизайн
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/programming/">
                                Программирование
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/verstka/">
                                Верстка
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/administration/">
                                Администрирование сервера
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/supportsite/">
                                Поддержка сайтов
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/kontent/">
                                Разработка контента
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/polygraphy/">
                                Дизайн и полиграфия
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/marketing/">
                                Маркетинг и реклама
                            </a>

                            <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed">Подробнее</span>
                            <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items hidden" id="category-6027">
                                <li class="b-index-tasks-categories__child_item">
                                    <a class="b-index-tasks-categories__child_item__link" href="https://freelance.youdo.com/marketing/seo/">
                                        Оптимизация сайтов
                                    </a>


                                </li>
                            </ul>

                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://photo.youdo.com/">
                        Фото- и видео-услуги
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-4027">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://photo.youdo.com/photo/">
                                Услуги фотографов
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://photo.youdo.com/video/">
                                Видеосъемка
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://photo.youdo.com/photoedit/">
                                Обработка фото
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://photo.youdo.com/videoedit/">
                                Монтаж видео
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://photo.youdo.com/digit/">
                                Оцифровка
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://personal.youdo.com/">
                        Домашний персонал
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-4984">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://personal.youdo.com/nanny/">
                                Няни
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://personal.youdo.com/sidelki/">
                                Сиделки
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://personal.youdo.com/housekeeper/">
                                Домработницы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://personal.youdo.com/helper/">
                                Помощники по дому и хозяйству
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://personal.youdo.com/pets/">
                                Уход за домашними животными
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://personal.youdo.com/laundry/">
                                Стирка и глажка
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/lawyer/">
                        Юридические услуги
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-10868">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/lawyer/advocate/">
                                Адвокаты
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/lawyer/autolawyer/">
                                Автоюристы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/lawyer/documents/">
                                Составление документов
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/lawyer/business/">
                                Сопровождение бизнеса
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/lawyer/collection/">
                                Взыскание задолженностей
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/lawyer/price/">
                                Стоимость услуг
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/beauty/">
                        Красота и здоровье
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-17525">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/beauty/massage/">
                                Массаж
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/beauty/epilation/">
                                Эпиляция
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/beauty/sugaring/">
                                Шугаринг
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/beauty/piercing/">
                                Пирсинг
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/beauty/tattoo/">
                                Татуировки
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/beauty/cosmetology/">
                                Косметология
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/beauty/spa/">
                                СПА процедуры
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/beauty/stylist/">
                                Стилисты
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/apple/">
                        Ремонт Apple
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-17526">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/apple/iphone/">
                                iPhone
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/apple/ipad/">
                                iPad
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/apple/macbook/">
                                MacBook
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/apple/appletv/">
                                Apple TV
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/apple/imac/">
                                iMac
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/apple/applewatch/">
                                Apple Watch
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/apple/macmini/">
                                Mac Mini
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/apple/ipod/">
                                iPod
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/promo/">
                        Услуги промоутеров
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-19012">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/promo/promotions/">
                                Проведение промо-акций
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/promo/surveys/">
                                Проведение опросов
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/promo/reklama/">
                                Распространение рекламы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/promo/mysteryshopping/">
                                Услуги тайного покупателя
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/promo/weddings/">
                                Организация свадеб
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/promo/corporate/">
                                Проведение корпоративов
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/promo/eventorganisation/">
                                Организация мероприятий
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/promo/catering/">
                                Услуги кейтеринга
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://spb.youdo.com/">
                        Санкт-Петербург
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-19512">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://spb.youdo.com/uborka/">
                                Клининговые услуги
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://spb.youdo.com/remont/">
                                Бытовой ремонт
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://spb.youdo.com/beauty/">
                                Красота и здоровье
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://spb.youdo.com/courier/">
                                Курьерские услуги
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://spb.youdo.com/photo/">
                                Фото- и видео-услуги
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://ekb.youdo.com/">
                        Екатеринбург
                    </a>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/auto/">
                        Ремонт авто
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-48602">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/auto/diagnostic/">
                                Диагностика
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/auto/engine/">
                                Ремонт двигателя
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/auto/kpp/">
                                Ремонт КПП
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/auto/runninggear/">
                                Ремонт ходовой части
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/auto/steeringsystem/">
                                Ремонт рулевой системы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/auto/brakesystem/">
                                Ремонт тормозной системы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/auto/fuelsystem/">
                                Ремонт топливной системы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/auto/exhaustsystem/">
                                Ремонт выхлопной системы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/auto/tireservice/">
                                Шиномонтаж
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/coach/">
                        Обучение
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-48978">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/coach/repetitory/">
                                Репетиторы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/coach/logopeda/">
                                Услуги логопеда
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/coach/studentam/">
                                Помощь студентам
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/coach/inostrannye/">
                                Иностранные языки
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/coach/personala/">
                                Обучение персонала
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/coach/biznestrenery/">
                                Бизнес тренеры
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/coach/sport/">
                                Спорт
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/coach/muzyka/">
                                Музыка
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/coach/vozhdenie/">
                                Вождение
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://novosibirsk.youdo.com/">
                        Новосибирск
                    </a>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://nnovgorod.youdo.com/">
                        Нижний Новгород
                    </a>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/uborka/">
                        Уборка
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-180206">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/uborka/kvartir/">
                                Квартиры
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/uborka/ofisov/">
                                Офисы
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/uborka/zagorodnogo-doma/">
                                Загородные дома
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/uborka/pomeshcheniy/">
                                Прочие помещения
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/uborka/generalnaya/">
                                Генеральная уборка
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/uborka/kompleksnaya/">
                                Комплексная уборка
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/uborka/moyka-okon/">
                                Мойка окон
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/roadhelp/">
                        Помощь на дороге
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-190069">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/opening/">
                                Вскрытие автомобилей
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/alarms/">
                                Отключение сигнализаций
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/starting/">
                                Запуск двигателя
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/gas/">
                                Подвоз бензина
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/battery/">
                                Зарядка аккумулятора
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/prikurit/">
                                Прикурить автомобиль
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/tire/">
                                Услуги шиномонтажа
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/sekretki/">
                                Снятие секреток
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/minor/">
                                Мелкий ремонт авто
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/roadhelp/freight/">
                                Грузовики
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/remont-kompyuterov/">
                        Ремонт компьютеров
                    </a>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/repetitory/">
                        Репетиторы
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-201374">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/inostrannye-yazyki/">
                                Иностранные языки
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/programmirovanie/">
                                Программирование
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/ege/">
                                Подготовка к ЕГЭ
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/oge/">
                                Подготовка к ОГЭ
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/muzyka/">
                                Музыка
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/vokal/">
                                Вокал
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/olimpiady/">
                                Подготовка к олимпиадам
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/dlya-shkolnikov/">
                                Школа
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/dlya-studentov/">
                                ВУЗ
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/podgotovka-k-shkole/">
                                Подготовка к школе
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/nachalnaya-shkola/">
                                Начальная школа
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/izo/">
                                Изобразительное искусство
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/rukodelie/">
                                Рукоделие
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/kompyuternaya-gramotnost/">
                                Компьютерная грамотность
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/repetitory/other/">
                                Другие предметы
                            </a>


                        </li>
                    </ul>

                </li>
                <li class="b-index-tasks-categories__parent_item">
                    <a class="b-index-tasks-categories__parent_item__link" href="https://youdo.com/remont-ehlektroniki/">
                        Ремонт электроники
                    </a>
                    <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed hidden">Подробнее</span>
                    <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items" id="category-202319">
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/remont-ehlektroniki/audiotekhnika/">
                                Ремонт аудиотехники
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/remont-ehlektroniki/video-audio/">
                                Фото и видеотехника
                            </a>


                        </li>
                        <li class="b-index-tasks-categories__child_item">
                            <a class="b-index-tasks-categories__child_item__link" href="https://youdo.com/remont-ehlektroniki/telefony/">
                                Телефон
                            </a>


                        </li>
                    </ul>

                </li>
            </ul>
        </div>
    </div>

@endsection
