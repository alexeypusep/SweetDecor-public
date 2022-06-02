<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use Illuminate\Http\Request;

class TovarController extends Controller
{
    //функция отображения товаров категории Сахарная мастика
    public function tovarsview($category, $pole, $sort, $title) {

        session([
            'category' => $category,
            'sort' => $sort,
            'pole' => $pole,
            'title' => $title,
        ]);

        $tovars = Tovar::orderBy($pole, $sort)->where('category', 'like', '%'.$category.'%')->where('del', '0')->paginate(15);

        return view('catalog.sah_mast.sah_mast', [
            'tovars' => $tovars,
        ]);
    }

    //функция отображения товаров категории Изомальт
    public function tovarsisomalt($category, $pole, $sort, $title) {

        session([
            'category' => $category,
            'sort' => $sort,
            'pole' => $pole,
            'title' => $title,
        ]);

        $tovars = Tovar::orderBy($pole, $sort)->where('category', 'like', '%'.$category.'%')->where('del', '0')->paginate(15);

        return view('catalog.isomalt.isomalt', [
            'tovars' => $tovars,
        ]);
    }

    //функция отображения товаров категории Безе
    public function tovarsbeze($category, $pole, $sort, $title) {

        session([
            'category' => $category,
            'sort' => $sort,
            'pole' => $pole,
            'title' => $title,
        ]);

        $tovars = Tovar::orderBy($pole, $sort)->where('category', 'like', '%'.$category.'%')->where('del', '0')->paginate(15);

        return view('catalog.beze.beze', [
            'tovars' => $tovars,
        ]);
    }

    //функция отображения товаров категории Маршмэллоу
    public function tovarsmarshm($category, $pole, $sort, $title) {

        session([
            'category' => $category,
            'sort' => $sort,
            'pole' => $pole,
            'title' => $title,
        ]);

        $tovars = Tovar::orderBy($pole, $sort)->where('category', 'like', '%'.$category.'%')->where('del', '0')->paginate(15);

        return view('catalog.marshm.marshm', [
            'tovars' => $tovars,
        ]);
    }

    //функция отображения акционных товаров
    public function saletovars(){
        $tovars = Tovar::orderBy('created_at', 'desc')->where('sale', '!=', null)->where('del', '0')->paginate(15);

        return view('main.sale', [
            'tovars' => $tovars,
        ]);
    }

    //функция отображения товаров-бестселлеров
    public function besttovars(){
        $tovars = Tovar::orderBy('created_at', 'desc')->where('best', '1')->where('del', '0')->paginate(15);

        return view('main.best', [
            'tovars' => $tovars,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера отображения всех товаров
    public function index()
    {
        $sale_tovars = Tovar::orderBy('created_at', 'desc')->where('sale', '!=', null)->where('del', '0')->get();
        $sale_tovars_count = $sale_tovars->count();
        $best_tovars = Tovar::orderBy('created_at', 'desc')->where('best', '1')->where('del', '0')->get();
        $best_tovars_count = $best_tovars->count();

        return view('index', ['sale_tovars' => $sale_tovars, 'best_tovars' => $best_tovars, 'sale_tovars_count' => $sale_tovars_count, 'best_tovars_count' => $best_tovars_count]);
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
     * @param  \App\Models\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    //функция ресур-контроллера отображения одного товара
    public function show(Tovar $tovar)
    {
        return view('product', ['tovar' => $tovar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    public function edit(Tovar $tovar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tovar $tovar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tovar $tovar)
    {
        //
    }
}
