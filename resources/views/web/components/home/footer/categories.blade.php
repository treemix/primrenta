<div class="b-index-tasks-categories">
    <div class="b-index-tasks-categories__wrapper">
        <ul class="b-index-tasks-categories__parent_items">
            @if(!empty($categories))
                @foreach($categories as $category)
                    @if($category->parent_id === 0)
                        <li class="b-index-tasks-categories__parent_item">
                            <a class="b-index-tasks-categories__parent_item__link" href="{{url('/executors/'.$category->slug)}}"> {{$category->name}} </a>
                            <span class="b-index-tasks-categories__parent_detailed js-index-tasks-categories__parent_detailed">Подробнее</span>
                            <ul class="b-index-tasks-categories__child_items js-index-tasks-categories__child_items hidden" id="category-{{$category->id}}">
                                @foreach($categories as $parent_category)
                                    @if($parent_category->parent_id === $category->id)
                                        <li class="b-index-tasks-categories__child_item">
                                            <a class="b-index-tasks-categories__child_item__link" href="{{url('/executors/'.$parent_category->slug)}}"> {{$parent_category->name}} </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            @endif
        </ul>
    </div>
</div>
