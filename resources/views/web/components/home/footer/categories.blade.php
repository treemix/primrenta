<div class="b-index-tasks-categories">
    <div class="b-index-tasks-categories__wrapper">
        <ul class="b-index-tasks-categories__parent_items">
            @if(!empty($categories))
                @foreach($categories as $category)
                    @if($category->parent_id === 0)
                        <li class="b-index-tasks-categories__parent_item">
                            <a class="b-index-tasks-categories__parent_item__link" href="{{url('/tasks/'.$category->slug)}}"> {{$category->name}} </a>
                        </li>
                    @endif
                @endforeach
            @endif
        </ul>
    </div>
</div>
