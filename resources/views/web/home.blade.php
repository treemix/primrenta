@extends('layouts.web')

@section('body-class', "is-home")

@section("head_script")
<script type="text/javascript">
    window.app = {
        map_container: "home-map-container",
        is_home: true,

    };
</script>
@endsection

@section('content')

    <div class="b-hero-video js-hero" >
        <div class="img-block"></div>
        <div class="b-hero-video__offer js-hero-form-wrapper">
            <div class="b-hero-video__h1">Освободим Вас От Забот</div>
            <div class="b-hero-video__h2">Нужен Помощник На Все Случаи Жизни?</div>
            <div class="b-hero-video__formbox">
                <form action="{{url("/tasks/suggest")}}" class="js-hero-form" autocomplete="off" method="POST" novalidate="novalidate">
                    <input type="hidden" class="js-hero-suggest-id" name="suggestionId" value="">
                    <div class="b-hero-video__form js-hero-input-block">
                        <div class="b-hero-video__input">
                            <input type="text" class="js-hero-input ui-autocomplete-input" name="text" maxlength="220"
                                   placeholder="Напишите, Чем Вам Помочь"
                                   data-pl-full="Напишите, Чем Вам Помочь"
                                   data-pl-small="Чем Вам Помочь?"
                                   autocomplete="off">
                        </div>
                        <div class="b-hero-video__submit">
                            <button type="submit" class="js-hero-submit" value="">
                                <span class="b-hero-video__submit-text-full">Заказать Услугу</span>
                                <span class="b-hero-video__submit-text-small">Заказать</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="b-hero-video__example">Например: <span class="js-hero-example" data-id="888">Доставить Конверт</span></div>
            <a href="{{url("/verification")}}" class="b-hero-video__gowork js-stay-executor"><i class="fas fa-lock"></i><span class="text">Стать Исполнителем И Начать Зарабатывать</span></a>
        </div>
    </div>

    <div class="b-performers-count">
        <h4 class="h-title-width-line-left-right">15 553 исполнителей</h4>
        <span>решим даже самые сложные задачи!</span>
    </div>

    <div class="b-groceries-delivery">
        <a href="{{url("/tasks/new/courier/pedestrian")}}" class="btn b-groceries-delivery__button">
            Создать задание
        </a>
    </div>


    @include("web/components/home/_popular_category")
    @include("web/components/home/_b_index_hiw")
    @include("web/components/home/_b_index_advantage")
    @include("web/components/home/_b_index_download")
    @include("web/components/home/_b_index_tasks")
    @include("web/components/home/_b_index_blog")

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
            Задания Уже Создано В Этих Категориях!
        </p>
    </div>

    @include("web/components/home/footer/categories")

@endsection
