<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tovar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TovarController extends Controller
{
    //функция поиска товаров по артикулу и названию в админке
    public function search(Request $request){
        if ($request->selectsearch == 'code'){
            $tovars = Tovar::orderBy('code', 'asc')->where($request->selectsearch, $request->search)->paginate(10);
        }
        else{
            $tovars = Tovar::orderBy('code', 'asc')->where($request->selectsearch, 'like', '%'.$request->search.'%')->paginate(10);
        }

        session([
            'search' => $request->search,
            'selectsearch' => $request->selectsearch
        ]);

        return view('admin.tovars.index', [
            'tovars' => $tovars,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера отображения всех товаров в админке
    public function index()
    {
        $tovars = Tovar::orderBy('code', 'asc')->paginate(10);

        return view('admin.tovars.index', [
            'tovars' => $tovars,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера отображения формы добавления товара в админке
    public function create()
    {
        return view('admin.tovars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера добавления нового товара в админке
    public function store(Request $request)
    {
        $new_tovar = new Tovar();

        if (empty($request->photo1)){$photo1 = "";}else{$photo1 = 'storage/app/public/'.$request->file('photo1')->store('img', 'public');}
        if (empty($request->photo2)){$photo2 = "";}else{$photo2 = 'storage/app/public/'.$request->file('photo2')->store('img', 'public');}
        if (empty($request->photo3)){$photo3 = "";}else{$photo3 = 'storage/app/public/'.$request->file('photo3')->store('img', 'public');}
        if (empty($request->photo4)){$photo4 = "";}else{$photo4 = 'storage/app/public/'.$request->file('photo4')->store('img', 'public');}

        $id = Str::uuid();

        $new_tovar->id_tovar = $id;
        $new_tovar->code = $request->code;
        $new_tovar->naim = $request->naim;
        $new_tovar->price_comm = $request->price_comm;
        $new_tovar->price = $request->price;
        $new_tovar->category = $request->category;
        $new_tovar->photo1 = $photo1;
        $new_tovar->photo2 = $photo2;
        $new_tovar->photo3 = $photo3;
        $new_tovar->photo4 = $photo4;
        $new_tovar->size = $request->size;
        $new_tovar->indexsize = $request->indexsize;
        $new_tovar->mass = $request->mass;
        $new_tovar->material = $request->material;
        $new_tovar->colorant = $request->colorant;
        $new_tovar->carcass = $request->carcass;
        $new_tovar->storage = $request->storage;

        $new_tovar->save();

        return redirect()->back()->withSuccess('Товар успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    public function show(Tovar $tovar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера отображения формы редактирования товара в админке
    public function edit(Tovar $tovar, $id)
    {
        return view('admin.tovars.edit', ['tovar' => $tovar->where('id_tovar', '=', $id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера редактирования данных товара в админке
    public function update(Request $request, Tovar $tovar, $id)
    {
        if (empty($request->sale)){
            $sale = null;
        }
        else{
            $sale = $request->sale;
        }

        if (empty($request->photo1)){
            if ($request->has('dellphoto1')){
                $photo1 = "";
            }
            else{
                $photo1 = $tovar->select('photo1')->where('id_tovar', '=', $id)->get();
                $photo1 = $photo1[0]['photo1'];
            }
        }
        else {
            $photo1 = 'storage/app/public/'.$request->file('photo1')->store('img', 'public');
        }

        if (empty($request->photo2)){
            if ($request->has('photo2')){
                $photo2 = "";
            }
            else{
                $photo2 = $tovar->select('photo2')->where('id_tovar', '=', $id)->get();
                $photo2 = $photo2[0]['photo2'];
            }
        }
        else {
            $photo2 = 'storage/app/public/'.$request->file('photo2')->store('img', 'public');
        }

        if (empty($request->photo3)){
            if ($request->has('photo3')){
                $photo3 = "";
            }
            else{
                $photo3 = $tovar->select('photo3')->where('id_tovar', '=', $id)->get();
                $photo3 = $photo3[0]['photo3'];
            }
        }
        else {
            $photo3 = 'storage/app/public/'.$request->file('photo3')->store('img', 'public');
        }

        if (empty($request->photo4)){
            if ($request->has('photo4')){
                $photo4 = "";
            }
            else{
                $photo4 = $tovar->select('photo4')->where('id_tovar', '=', $id)->get();
                $photo4 = $photo4[0]['photo4'];
            }
        }
        else {
            $photo4 = 'storage/app/public/'.$request->file('photo4')->store('img', 'public');
        }
        $tovar
            ->where('id_tovar', '=', $id)
            ->update(['code'=>$request->code, 'naim'=>$request->naim, 'best'=>$request->best, 'price_comm'=>$request->price_comm, 'price'=>$request->price, 'sale'=>$sale, 'category'=>$request->category, 'photo1'=>$photo1, 'photo2'=>$photo2, 'photo3'=>$photo3, 'photo4'=>$photo4, 'size'=>$request->size, 'indexsize'=>$request->indexsize, 'mass'=>$request->mass, 'material'=>$request->material, 'colorant'=>$request->colorant, 'carcass'=>$request->carcass, 'storage'=>$request->storage, 'del'=>$request->del]);

        return redirect()->back()->withSuccess('Товар успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tovar  $tovar
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера пометки на удаление товара
    public function destroy(Tovar $tovar, $id)
    {
        $tovar->where('id_tovar', '=', $id)->update(['del' => 1]);

        return redirect()->back()->withSuccess('Товар успешно помечен на удаление!');
    }
}
