<?php

namespace App\Http\Controllers;

use App\Cancion;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cancion::with("albums")->get();
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
     * @param  \App\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function show(Cancion $cancion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancion $cancion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $cancion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancion $cancion)
    {
        //
    }
}
