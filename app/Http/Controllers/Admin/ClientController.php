<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Klient;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера отображения всех пользователей в админке
    public function index()
    {
        $clients = Klient::orderBy('created_at', 'asc')->paginate(10);

        return view('admin.clients.index', ['clients' => $clients]);
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
     * @param  \App\Models\Klient  $klient
     * @return \Illuminate\Http\Response
     */
    public function show(Klient $klient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klient  $klient
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера отображения формы редактирования пользователя в админке
    public function edit(Klient $klient, $id)
    {
        return view('admin.clients.edit', ['client' => $klient->where('id_klient', '=', $id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klient  $klient
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера обновления данных пользователя в админке
    public function update(Request $request, Klient $klient, $id)
    {

        if (empty($request->avatar)){
            if ($request->has('dellavatar')){
                $avatar = "";
            }
            else {
                $avatar = $klient->select('avatar')->where('id_klient', '=', $id)->get();
                $avatar = $avatar[0]['avatar'];
            }
        }
        else {
            $avatar = 'storage/'.$request->file('avatar')->store('img', 'public');
        }

        $klient
            ->where('id_klient', '=', $id)
            ->update(['firstname'=>$request->firstname, 'lastname'=>$request->lastname, 'middlename'=>$request->middlename, 'email'=>$request->email, 'avatar'=>$avatar , 'phone'=>$request->phone, 'status'=>$request->status, 'discount'=>$request->discount, 'del'=>$request->del]);

        return redirect()->back()->withSuccess('Клиент успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klient  $klient
     * @return \Illuminate\Http\Response
     */
    //функция ресурс-контроллера пометки на удаление клиента в админке
    public function destroy(Klient $klient, $id)
    {
        $klient->where('id_klient', '=', $id)->update(['del' => 1]);

        return redirect()->back()->withSuccess('Клиент успешно помечен на удаление!');
    }
}
