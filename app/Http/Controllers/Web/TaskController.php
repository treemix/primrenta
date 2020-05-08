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


    public function new()
    {
        $categories = Category::query()->get()->all();

        return view('web.task.new', ['categories' => $categories]);
    }

    public function new_cat(Request $request)
    {

        $cat = $request->route('cat');
        $cat_child = $request->route('cat_child');

        //dd($request->route('cat_child'));

        return view('web.task.new_cat');
    }

    public function all()
    {
        return view('web.task.all');
    }
}
