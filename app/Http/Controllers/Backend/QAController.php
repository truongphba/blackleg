<?php

namespace App\Http\Controllers\Backend;

use App\QA;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class QAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $list = QA::orderBy('created_at', 'desc')
            ->where('name', 'like', '%' . $keyword . '%')
            ->paginate(10)
            ->appends($request->only('keyword'));
        return view('backend.qa.index')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.qa.create');
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
        $qa = new Category();
        $qa->name = $request->name;
        $qa->thumbnail = $request->thumbnail;
        $qa->description = $request->description;
        $qa->save();

        return redirect()->route('backend.categories.show', $qa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $qa = Category::find($id);
        return view('backend.category.detail', ['category' => $qa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qa = Category::find($id);
        return view('backend.category.edit', ['category' => $qa]);
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
        $qa = QA::find($id);
        $qa->quest = $request->quest;
        $qa->answer = $request->answer;
        $qa->save();

        return redirect()->route('backend.q_a_s.show', $qa->id);
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
