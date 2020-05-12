<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Requests\Admin\CategoriesRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

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

    public function postNew(CategoriesRequest $request):RedirectResponse
    {
        Category::create($request->only(['parent_id', 'name', 'slug', 'description']));
        return redirect()->route('admin.categories.index')->withSuccess(__('Category Create'));
    }

    public function edit(Request $request):View
    {
        $id = $request->route('id');

        $category = Category::where('id', $id)->first();

        return view('admin.categories.edit',[
            'id' => $id,
            'category' => $category,
        ]);
    }

    public function update(CategoriesRequest $request):RedirectResponse
    {
        $id = $request->get('id');
        $category = Category::where('id', $id)->first();

        if($category != null){
            $category->update($request->only(['parent_id', 'name', 'slug', 'description']));
            return redirect()->route('admin.categories.index')->withSuccess(__('Category Update'));
        }

        return redirect()->route('admin.categories.edit')->withErrors(__('Category not update'));
    }

    public function delete(Request $request)
    {
        $id = $request->route('id');
        Category::where('id', $id)->delete();

        return redirect()->route('admin.categories.index')->withSuccess(__('Category Delete'));
    }

    public function editPage(Request $request)
    {

        return view('admin.categories.page.index');
    }

    public function updatePage(Request $request)
    {


    }
}
