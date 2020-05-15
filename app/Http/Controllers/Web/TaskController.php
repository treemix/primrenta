<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

        App::setLocale("ru");
    }


    public function getNewTask(Request $request)
    {
        $cat = $request->route('cat');
        $cat_child = $request->route('cat_child');

        $category = Category::where("slug", $cat)->first();

        if(empty($cat_child)){
            $category_child = Category::where("parent_id", $category->id)->where("default", true)->first();
            return redirect()->to("tasks/new/".$category->slug."/".$category_child->slug);
        }

        $category_child = Category::where("slug", $cat_child)->first();

        $categories = Category::where("parent_id", 0)->get();
        $categories_child = Category::where("parent_id", $category->id)->get();
        return view('web.task.new', [
            'category' => $category_child,
            'categories' => $categories,
            'categories_child' => $categories_child,
            'category_id' => $category->id,
            'category_parent_id' => $category_child->id,
            'is_task_new' => true
        ]);
    }

    public function getCategories()
    {
        $categories = Category::query()->get()->all();

        return view('web.task.categories', ['categories' => $categories]);
    }

    public function new_cat(Request $request)
    {



        //dd($request->route('cat_child'));

        return view('web.task.new_cat');
    }

    public function all()
    {
        return view('web.task.all');
    }
}
