<div class="top-menu-categories-block" style="display: none;">
    <ul class="parent-items">
        @if(!empty($categories))
            @foreach($categories as $category)
                @if($category->parent_id === 0)
                    <li class="parent-item ">
                        <a class="parent-item-link" href="{{url('/tasks/new/'.$category->slug)}}"> {{$category->name}} </a>

                        <div class="child">
                            <a href="{{url('/tasks/new/'.$category->slug)}}" class="child-item-title">{{$category->name}}</a>
                            <ul class="">
                                @foreach($categories as $parent_category)
                                    @if($parent_category->parent_id === $category->id)
                                        <li class="child-item">
                                            <a class="child-item-link" href="{{url('/tasks/new/'.$category->slug.'/'.$parent_category->slug)}}">{{$parent_category->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif
            @endforeach
        @endif
    </ul>
</div>


