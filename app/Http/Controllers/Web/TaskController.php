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

    public function all()
    {
        return view('web.task.all');
    }
}
