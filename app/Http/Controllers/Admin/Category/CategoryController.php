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
            'fields' => json_decode($category->fields)
        ]);
    }

    public function update(CategoriesRequest $request):RedirectResponse
    {
        $id = $request->get('id');
        $category = Category::where('id', $id)->first();
        $fields = array();

        if($request->get('_control_dimensions_checkbox') === "on"){
            $fields['dimensions'] = [
                'show' => true,
                'label' => $request->get('_control_dimensions_label'),
                'placeholder' => [
                    'weight' => $request->get('_control_dimensions_weight_placeholder'),
                    'length' => $request->get('_control_dimensions_length_placeholder'),
                    'width' => $request->get('_control_dimensions_width_placeholder'),
                    'height' => $request->get('_control_dimensions_height_placeholder'),
                ]
            ];
        }

        if($request->get('_control_return_payment_checkbox') === "on"){
            $_control_return_payment_hint = $request->get('_control_return_payment_hint');
            $fields['return_payment'] = [
                'show' => true,
                'label' => $request->get('_control_return_payment_label'),
                'hint' => (!empty($_control_return_payment_hint) ? $_control_return_payment_hint : ''),
            ];
        }

        if($request->get('_control_cargo_cost_checkbox') === "on"){
            $fields['cargo_cost'] = [
                'show' => true,
                'label' => $request->get('_control_cargo_cost_label'),
                'hint' => $request->get('_control_cargo_cost_hint'),
            ];
        }

        if($request->get('_control_payment_checkbox') === "on"){
            $fields['payment'] = [
                'show' => true
            ];
        }

        if($request->get('_control_courier_transport_checkbox') === "on"){
            $fields['courier_transport'] = [
                'show' => true
            ];
        }

        $_control_description_placeholder = $request->get('_control_description_placeholder');
        $_control_description_hint = $request->get('_control_description_hint');
        $fields['description'] = [
            'placeholder' => (!empty($_control_description_placeholder) ? $_control_description_placeholder : ''),
            'hint' => (!empty($_control_description_hint) ? $_control_description_hint : ''),
        ];

        if($category != null){

            $category->parent_id = $request->get('parent_id');
            $category->name = $request->get('name');
            $category->slug = $request->get('slug');
            $category->description = $request->get('description');
            $category->fields = json_encode($fields);
            $category->save();

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
