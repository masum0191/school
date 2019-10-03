<?php

namespace App\Http\Controllers;

use App\PClass;
use Illuminate\Http\Request;

class PClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('class.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('class.create');
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
     * @param  \App\PClass  $pClass
     * @return \Illuminate\Http\Response
     */
    public function show(PClass $pClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PClass  $pClass
     * @return \Illuminate\Http\Response
     */
    public function edit(PClass $pClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PClass  $pClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PClass $pClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PClass  $pClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(PClass $pClass)
    {
        //
    }
}
