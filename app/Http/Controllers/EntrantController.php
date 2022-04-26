<?php

namespace App\Http\Controllers;

use App\Entrant;
use Illuminate\Http\Request;

class EntrantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //作成日の新しい順でページネーション
        return Entrant::latest()->pagenate();
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //リクエストパラメータから取得した値を元にEntrantを作成する
        return Entrant::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Entrant $entrant)
    {
        //Eloquentオブジェクトを返す
        return $entrant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrant $entrant)
    {
        //リクエストパラメータから取得した値をもとにEntrantを更新する
        $entrant->update($request->all());
        return $entrant;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrant $entrant)
    {
        //Eloquentオブジェクトを削除する
        $deleted = $entrant->delete();
        return compact('deleted');
    }
}
