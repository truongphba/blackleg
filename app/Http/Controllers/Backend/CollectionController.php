<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Collection;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $list = Collection::orderBy('created_at', 'desc')
            ->where('name', 'like', '%' . $keyword . '%')
            ->paginate(10)
            ->appends($request->only('keyword'));
        return view('backend.collection.index')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.collection.create');
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
        $collection = new Collection();
        $collection->name = $request->name;
        $collection->thumbnail = $request->thumbnail;
        $collection->description = $request->description;
        $collection->save();

        return redirect()->route('backend.collections.show', $collection->id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = Collection::find($id);
        return view('backend.collection.detail', ['collection' => $collection]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collection = Collection::find($id);
        return view('backend.collection.edit', ['collection' => $collection]);
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
        $collection = Collection::find($id);
        $collection->name = $request->name;
        $collection->thumbnail = $request->thumbnail;
        $collection->description = $request->description;
        $collection->status = $request->status;
        $collection->save();

        return redirect()->route('backend.collections.show', $collection->id);
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
        $ids = $request->get('ids');
        Collection::whereIn('id', $ids)->update(['status' => 0]);
        return $ids;
    }
    public function activeSelected(Request $request)
    {
        $ids = $request->get('ids');
        Collection::whereIn('id', $ids)->update(['status' => 1]);
        return $ids;
    }
}
