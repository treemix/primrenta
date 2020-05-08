<?php

namespace App\Http\Controllers\Admin\Ajax\Category\Datatable;


use App\Http\Controllers\Admin\BaseController;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class DatatableController extends BaseController
{
    public function __construct()
    {

        parent::__construct();
    }


    public function init(Request $request){

        $category_query = Category::query();


        return Datatables::of($category_query)
            ->addColumn('action_edit', function ($category){
                return '<a href="'.url("/admin/categories/edit/".$category->id).'" class="btn btn-md btn-primary btn-datatable-action"><i class="fas fa-edit"></i></a>';
            })
            ->addColumn('action_delete', function ($category){
                return '<a href="'.url("/admin/categories/delete/".$category->id).'" class="btn btn-md btn-danger btn-datatable-action"><i class="fas fa-trash"></i></a>';
            })
            ->addColumn('action_edit_page', function ($category){
                return '<a href="'.url("/admin/categories/edit-page/".$category->id).'" class="btn btn-md btn-success btn-datatable-action"><i class="fas fa-edit"></i></a>';
            })
            ->rawColumns(['action_delete', 'action_edit', 'action_edit_page'])
            ->make(true);

    }


}
