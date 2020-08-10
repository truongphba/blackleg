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
            ->where('answer', 'like', '%' . $keyword . '%')
            ->where('quest', 'like', '%' . $keyword . '%')
            ->paginate(10)
            ->appends($request->only('keyword'));
        return view('backend.QA.index')->with('list', $list);
    }
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function deleteSelected(Request $request)
    {
        $ids = $request->get('ids');
        QA::whereIn('id', $ids)->update(['status' => 0]);
        return $ids;
    }
    public function activeSelected(Request $request)
    {
        $ids = $request->get('ids');
        QA::whereIn('id', $ids)->update(['status' => 1]);
        return $ids;
    }
}
