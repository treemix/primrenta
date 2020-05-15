@extends('layouts.web')

@section('content')
<section class="layout-task-start">
    <h4 class="title">Выберите категорию задания</h4>
    <ul class="list first-list">
        @foreach($categories as $category)

            @if($category->parent_id === 0)

                <li class="item">
                    <a class="icon i-{{$category->slug}}" href="{{url('/tasks/new/'.$category->slug)}}"></a>
                    <a class="link" href="{{url('/tasks/new/'.$category->slug)}}">{{$category->name}}</a>

                    <ul class="list inner-list">
                    @foreach($categories as $parent_category)
                        @if($parent_category->parent_id === $category->id)
                                <li class="item">
                                    <a class="link" href="{{url('/tasks/new/'.$category->slug.'/'.$parent_category->slug)}}">{{$parent_category->name}}</a>
                                </li>
                        @endif
                    @endforeach
                    </ul>

                </li>

            @endif

        @endforeach
    </ul>
</section>
@endsection
