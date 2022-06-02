<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Klient;
use App\Models\Korsina;
use App\Models\Tovar;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    //функция ресурс-контроллера отображения главной страницы админки
    public function index() {

        $tovar_count = Tovar::all()->count();
        $klient_count = Klient::all()->count();
        $basket_count = Korsina::select('id_klient')->distinct()->count();

        return view('admin.index', [
            'tovar_count' => $tovar_count,
            'klient_count' => $klient_count,
            'basket_count' => $basket_count,
        ]);
    }
}
