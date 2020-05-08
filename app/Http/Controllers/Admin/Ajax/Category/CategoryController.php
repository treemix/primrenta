<?php

namespace App\Http\Controllers\Admin\Ajax\Category;


use App\Http\Controllers\Admin\BaseController;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class CategoryController extends BaseController
{
    public function __construct()
    {

        parent::__construct();
    }


    public function getParent(Request $request){



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


}
