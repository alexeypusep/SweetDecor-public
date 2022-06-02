<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Korsina;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера отображения всех позиций корзины в админке
    public function index()
    {
        return view('admin.basket.index');
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
     * @param  \App\Models\Korsina  $korsina
     * @return \Illuminate\Http\Response
     */
    public function show(Korsina $korsina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Korsina  $korsina
     * @return \Illuminate\Http\Response
     */
    public function edit(Korsina $korsina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Korsina  $korsina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Korsina $korsina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Korsina  $korsina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Korsina $korsina)
    {
        //
    }
}
