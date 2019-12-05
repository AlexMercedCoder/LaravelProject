<?php

namespace App\Http\Controllers;

use App\DataList;
use Illuminate\Http\Request;

class DataListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataList::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataList  $list
     * @return \Illuminate\Http\Response
     */
    public function show(DataList $list)
    {
        return DataList::Find($list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataList  $list
     * @return \Illuminate\Http\Response
     */
    public function edit(DataList $list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataList  $list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataList $list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataList  $list
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataList $list)
    {
        //
    }
}
