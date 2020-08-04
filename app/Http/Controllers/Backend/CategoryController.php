<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $list = Category::orderBy('created_at', 'desc')
            ->where('name', 'like', '%' . $keyword . '%')
            ->paginate(10)
            ->appends($request->only('keyword'));
        return view('backend.category.index')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->thumbnail = $request->thumbnail;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('backend.categories.show', $category->id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('backend.category.detail', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required'
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->thumbnail = $request->thumbnail;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();

        return redirect()->route('backend.categories.show', $category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function deleteSelected(Request $request)
    {
        $request->validate([
            'selected' => 'required'
        ],
            [
                'selected.required' => 'You did not select any!!'
            ]);
        $categories = $request->input('selected');

        Category::whereIn('id',$categories)->update(['status'=> 0]);

        return redirect()->back();
    }
}
