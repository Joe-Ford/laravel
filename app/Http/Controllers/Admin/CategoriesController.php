<?php

namespace App\Http\Controllers\Admin;


use App\Entities\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CategoriesController extends Controller
{
    public function index()
    {
        $objCategory = new Category();
        $categories = $objCategory->get();
        return view('admin.categories.index', ['categories' => $categories]);
    }
    public function addCategory()
    {
        return view('admin.categories.add');
    }
    public function addRequestCategory(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|string|min:4|max:25'
            ]);
            $objCategory = new Category();
            $objCategory = $objCategory->create([
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]);
            if($objCategory) {
                return back()->with('success', 'Category was added');
            }
            return back()->with('error', 'Category was not added');
        }
        catch (ValidationException $e) {
            // \log::error($e->getMessage());
            return back()->with('error', 'Category was not added');
        }
    }
    public function editCategory(int $id)
    {
        $category = Category::find($id);
        if(!$category) {
            return abort(404);
        }
        return view('admin.categories.edit', ['category' => $category]);
    }

    /**
     * @param Request $request
     */
    public function editRequestCategory(Request $request, int $id) {
        try {
            $this->validate($request, [
                'title' => 'required|string|min:4|max:25'
            ]);
            $objCategory = Category::find($id);
            if(!$objCategory) {
                return abort(404);
            }

            $objCategory->title = $request->input('title');
            $objCategory->description = $request->input('description');

            if($objCategory->save()) {
                return redirect()->route('categories')->with('success', 'Category was edited');
            }
            return back()->with('error', 'Category was not edited');
        }
        catch (ValidationException $e) {
            // \log::error($e->getMessage());
            return back()->with('error', 'Category was not added');
        }
    }
    public function deleteCategory(Request $request)
    {
        if($request->ajax()) {

        }
    }
}
