
<div class="newtask_row newtask_row--category js-categories-row clearer">
    <label class="newtask_row__label">Подкатегории</label>
    <div class="js-categories-block">
        <div class="categories-block-left select-category-dropdown js-selectCategoryDropdown">
            <select name="category_parent" class="b-select select-category b-core-ui-select__select_state_hide-" id="category-parent">
                @foreach($categories as $item)
                    <option data-slug="{{$item->slug}}" value="{{$item->id}}" {{ $item->id == $category_id ? "selected" : "" }}>{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="categories-block-right select-category-dropdown js-selectCategoryDropdown">
            <select name="category_child" class="b-select select-category b-core-ui-select__select_state_hide-" id="category-child">
                @foreach($categories_child as $item)
                    <option data-slug="{{$item->slug}}" value="{{$item->id}}" {{ $item->id == $category_parent_id ? "selected" : "" }}>{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
