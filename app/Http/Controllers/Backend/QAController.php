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
        return view('backend.qa.index')->with('list', $list);
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
        $request->validate([
            'selected' => 'required'
        ],
            [
                'selected.required' => 'You did not select any!!'
            ]);
        $q_a_s = $request->input('selected');

        QA::whereIn('id',$q_a_s)->update(['status'=> 0]);

        return redirect()->back();
    }
}
