<?php


use App\Models\Category;

if(!function_exists("get_task_categories")){

    function get_task_categories(){
        return Category::query()->get()->all();
    }

}
