<?php

namespace App\Http\Controllers\Admin\Category;


use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\App;

class CategoryController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function index(Request $request)
    {

        return view('admin.categories.index');
    }

    public function getNew(Request $request)
    {

        return view('admin.categories.new');
    }

    public function postNew(Request $request)
    {


    }

    public function edit(Request $request)
    {

        return view('admin.categories.edit');
    }

    public function update(Request $request)
    {


    }

    public function delete(Request $request)
    {


        return redirect()->back();
    }

    public function editPage(Request $request)
    {

        return view('admin.categories.page.index');
    }

    public function updatePage(Request $request)
    {


    }
}
