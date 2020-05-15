<?php

namespace App\Http\Controllers\Web\Ajax;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
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


    public function getParent(Request $request)
    {
        $category_query = Category::query();
        $category_query->where("parent_id", 0);
        $category_query->select('id', 'name');

        if($request->has('q')){
            $search = trim($request->q);
            $category_query->where('name','LIKE',"%$search%");
        }
        $category_query = $category_query->get();
        return response()->json($category_query);
    }

    public function getChild(Request $request)
    {
        if($request->has('parent_id')){
            return response()->json([
                'message' => 'Not found parent id'
            ], 401);
        }

        $category_query = Category::query();
        $category_query->where("parent_id", $request->parent_id);
        $category_query->select('id', 'name');

        if($request->has('q')){
            $search = trim($request->q);
            $category_query->where('name','LIKE',"%$search%");
        }
        $category_query = $category_query->get();
        return response()->json($category_query);
    }

}
