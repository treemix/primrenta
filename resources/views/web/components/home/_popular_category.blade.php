

@if(!empty($categories))
    <div class="b-index-popular">
        <div class="b-index-popular__items i-hidden js-categoriesWrapper">
        @foreach($categories as $category)
            @if($category->parent_id === 0)
                @foreach($categories as $parent_category)
                    @if($parent_category->parent_id === $category->id && $parent_category->default == true)
                        <div class="b-index-popular__item i-{{$category->slug}}">
                            <a class="b-index-popular__item__link js-index-track-ga-event" href="{{url("/tasks/new/".$category->slug."/".$parent_category->slug)}}">
                                <span class="b-index-popular__item__title">{{ $category->name }}</span>
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach
        </div>
        <a class="b-index-popular__toggle__btn" href="{{route("get.tasks.categories")}}">Все категории <i class="fas fa-caret-right"></i></a>
    </div>

@endif
