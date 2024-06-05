<?php

namespace Modules\Admin\Http\Controllers;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $viewData = [
            'categories' => $categories
        ];
        return view('admin::category.index', $viewData);

    }

    public function create()
    {
    	return view ('admin::category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->c_name = $request->name;
        $category->c_icon =  $request->icon;
        $category->c_slug =  str_slug($request->name);
        if (!$request->active) {
            $category->c_active = 0;
        }
        $category->save();

        return redirect('admin/category')->with('status', 'Thêm danh mục thành công');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        
        return view('admin::category.update', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, $c_id)
    {
        $category = Category::find($c_id);
        $category->c_name = $request->name;
        $category->c_icon =  $request->icon;
        $category->c_slug =  str_slug($request->name);
        if (!$request->active) {
            $category->c_active = 0;
        }
        $category->save();

        return redirect('admin/category')->with('status', 'Sửa danh mục thành công');
    }

    public function detroyX($id)
    {
        Category::find($id)->delete();

        return redirect()->back()->with('status', 'Xoá danh mục thành công');
    }
}
