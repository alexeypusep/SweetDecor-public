<?php

namespace App\Http\Controllers;

use App\Models\Klient;
use App\Models\Korsina;
use App\Models\Orders;
use App\Models\Tovar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KorsinaController extends Controller
{
    //функция отображения формы регистрации заказа
    public function shoregorder(){
        return view('regorder');
    }

    //функция регистрации заказа
    public function regorder(Request $request){

        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $middleName = $request->middleName;
        $email = $request->email;
        $phone = $request->phone;
        $total = session('total');

        $baskets = Korsina::where('id_klient', session('id_klient'))->get();
        $klient = Klient::where('id_klient', session('id_klient'))->get();

        //
        $to = 'alexeypusep@yandex.ru, oskanka@yandex.ru, sweetdecor.spb@yandex.ru';
        $subjectmail = "Новый заказ!";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers  .= "Content-type: text/html; charset=utf-8 \r\n";

        // Текст письма
        $textmail = '<html>
                            <head>
                                <style>
                                    table {
                                       border-collapse: collapse;
                                       border: 1px solid grey;
                                       width: 100%;
                                    }
                                    th {
                                       border: 1px solid grey;
                                    }
                                    td {
                                       border: 1px solid grey;
                                    }
                                </style>
                            </head>
                            <body>';
        $textmail .= "      <h3>Клиент {$lastName} {$firstName} {$middleName} (email: {$email}, телефон: {$phone}) сделал заказ на следующие товары</h3>
                            <br>";
        $textmail .= '      <table>
                                    <tr>
                                        <th>Артикул товара</th>
                                        <th>Наименование</th>
                                        <th>Цена, руб.</th>
                                        <th>Количество</th>
                                        <th>Примечание</th>
                                        <th>Стоимость</th>
                                    </tr>';

        if (session()->exists('id_klient')){ //регистрация заказа для авторизованного пользователя
            $new_order = new Orders();
            $id = Str::uuid();
            $new_order->number = null;
            $new_order->id_order = $id;
            $new_order->id_klient = session('id_klient');
            $new_order->total = $total;
            $new_order->email = $email;

            foreach ($baskets as $basket){
                if ($basket->tovars->sale != null){
                    $tovar_price = $basket->tovars->sale;
                }
                else{
                    $tovar_price = $basket->tovars->price;
                }
                $textmail .= "<tr><td>" . $basket->tovars->code . "</td><td>" . $basket->tovars->naim . "</td><td>" . $tovar_price . "₽</td><td>" . $basket->amount . "</td><td>" . $basket->comment . "</td><td>" . (int)$basket->tovars->price * (int)$basket->amount . "</td></tr>";

                $new_order->info .= "<strong>Артикул товара:</strong> " . $basket->tovars->code . ", <strong>Наименование товара:</strong> " . $basket->tovars->naim . ", <strong>Стоимость товара:</strong> " . $tovar_price . "₽, <strong>Количество:</strong> " . $basket->amount . " <strong>Примечание:</strong> " . $basket->comment . ", <strong>Сумма:</strong> " . (int)$basket->tovars->price * (int)$basket->amount . "₽<hr>";
            }
            Korsina::where('id_klient', '=', session('id_klient'))->delete();
            $new_order->save();
            session(['cart_count' => 0]);
        }
        else{ //регистрация заказа для неавторизованного пользователя

            $new_order = new Orders();
            $id = Str::uuid();
            $new_order->number = null;
            $new_order->id_order = $id;
            $new_order->id_klient = '';
            $new_order->total = $total;
            $new_order->email = $email;

            for($i = 0; $i < session('cart_count_guest'); $i++){
                $textmail .= "<tr><td>" . session('guestcartcode')[$i] . "</td><td>" . session('guestcartnaim')[$i] . "</td><td>" . session('guestcartprice')[$i] . "₽</td><td>" . session('guestcartkol')[$i] . "</td><td>" . session('guestcartprim')[$i] . "</td><td>" . (int)session('guestcartprice')[$i] * (int)session('guestcartkol')[$i] . "</td></tr>";

                $new_order->info .= "<strong>Артикул товара:</strong> " . session('guestcartcode')[$i] . ", <strong>Наименование товара:</strong> " . session('guestcartnaim')[$i] . ", <strong>Стоимость товара:</strong> " . session('guestcartprice')[$i] . "₽, <strong>Количество:</strong> " . session('guestcartkol')[$i] . " <strong>Примечание:</strong> " . session('guestcartprim')[$i] . ", <strong>Сумма:</strong> " . (int)session('guestcartprice')[$i] * (int)session('guestcartkol')[$i] . "₽<hr>";
            }

            $new_order->save();

            session()->pull('guestcartidtovar');
            session()->pull('guestcartcode');
            session()->pull('guestcartphoto');
            session()->pull('guestcartnaim');
            session()->pull('guestcartcategory');
            session()->pull('guestcartprim');
            session()->pull('guestcartmass');
            session()->pull('guestcartprice');
            session()->pull('guestcartkol');
            session()->pull('cart_count_guest');
        }

        if (isset($klient[0]['discount']) and $klient[0]['discount'] == 1){
            $str = 'Итоговая сумма с учётом 10% скидки';
            Klient::where('id_klient', '=', session('id_klient'))->update(['discount' => 0]);
        }
        else{
            $str = 'Итоговая сумма';
        }

        $textmail .= '          <tr>
                                        <td colspan="5" style="text-align:right">' . $str . ':</td><td>' . $total . '</td>
                                    </tr>
                                 </table>
                              </body>
                           </html>';
        // Отправка письма
        mail($to, $subjectmail, $textmail, $headers);

        // отправка письма на электронный ящик
        $to = $email;
        $subjectmail = "Вы оформили заказ!";
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        // Текст письма
        $textmail1 = "<html><h2>{$firstName} {$middleName}, спасибо за оформление заказа на нашем сайте!</h2>
                        <p>Ваш заказ:</p>
                        <p>{$textmail}</p>
                     </html>";
        // Отправка письма
        mail($to, $subjectmail, $textmail1, $headers);

        return redirect('/catalog')->withSuccess('Ваш заказ успешно формлен! Для подтверждения заказа, ожидайте ответа на вашу почту или звонка оператора.');
    }

    //функция добавления товара в корзину
    public function addcart(Request $request, $id) {

        if (session()->exists('id_klient')){ //добавления товара в корзину для авторизованного пользователя
            $id_basket = Str::uuid();

            if (empty($request->primechanie)) {$primechanie = "";} else {$primechanie = $request->primechanie;}
            if (empty($request->kolichestvo)) {$kolichestvo = 1;} else {$kolichestvo = $request->kolichestvo;}

            $new_basket = new Korsina();

            $new_basket->id_korsin = $id_basket;
            $new_basket->id_tovar = $id;
            $new_basket->id_klient = session('id_klient');
            $new_basket->amount = $kolichestvo;
            $new_basket->comment = $primechanie;
            $new_basket->del = 0;

            $new_basket->save();

            $cart_count = Korsina::where('id_klient', '=', session('id_klient'))->count();
            session(['cart_count' => $cart_count]);

            if (session('uri') == '/saletovars') {
                return redirect('/saletovars')->withSuccess('Товар успешно добавлен в корзину!');
            }
            else{
                return redirect('/tovarsview/'.session('category').'/'.session('pole').'/'.session('sort').'/'.session('title'))->withSuccess('Товар успешно добавлен в корзину!');
            }
        }
        else { //добавления товара в корзину для неавторизованного пользователя
            $tovar = Tovar::where('id_tovar', '=', $id)->get();
            if ($tovar[0]['sale'] != null){
                $tovar_price = (string)$tovar[0]['sale'];
            }
            else{
                $tovar_price = (string)$tovar[0]['price'];
            }

            if (empty($request->primechanie)) {$primechanie = " ";} else {$primechanie = $request->primechanie;}
            if (empty($request->kolichestvo)) {$kolichestvo = 1;} else {$kolichestvo = $request->kolichestvo;}

            if (session()->exists('guestcartidtovar')) {$arr = []; for($i = 0; $i < session('cart_count_guest'); $i++) {$arr[] = session('guestcartidtovar')[$i];} $arr[] = $id; session(['guestcartidtovar' => $arr]);}
            else {$arr = [$id]; session(['guestcartidtovar' => $arr]);}

            if (session()->exists('guestcartcode')) {$arr = []; for($i = 0; $i < session('cart_count_guest'); $i++) {$arr[] = session('guestcartcode')[$i];} $arr[] = $tovar[0]['code']; session(['guestcartcode' => $arr]);}
            else {$arr = [$tovar[0]['code']]; session(['guestcartcode' => $arr]);}

            if (session()->exists('guestcartphoto')) {$arr = []; for($i = 0; $i < session('cart_count_guest'); $i++) {$arr[] = session('guestcartphoto')[$i];} $arr[] = $tovar[0]['photo1']; session(['guestcartphoto' => $arr]);}
            else {$arr = [$tovar[0]['photo1']]; session(['guestcartphoto' => $arr]);}

            if (session()->exists('guestcartnaim')) {$arr = []; for($i = 0; $i < session('cart_count_guest'); $i++) {$arr[] = session('guestcartnaim')[$i];} $arr[] = $tovar[0]['naim']; session(['guestcartnaim' => $arr]);}
            else {$arr = [$tovar[0]['naim']]; session(['guestcartnaim' => $arr]);}

            if (session()->exists('guestcartcategory')) {$arr = []; for($i = 0; $i < session('cart_count_guest'); $i++) {$arr[] = session('guestcartcategory')[$i];} $arr[] = $tovar[0]['category']; session(['guestcartcategory' => $arr]);}
            else {$arr = [$tovar[0]['category']]; session(['guestcartcategory' => $arr]);}

            if (session()->exists('guestcartprim')) {$arr = []; for($i = 0; $i < session('cart_count_guest'); $i++) {$arr[] = session('guestcartprim')[$i];} $arr[] = (string)$primechanie; session(['guestcartprim' => $arr]);}
            else {$arr = [$primechanie]; session(['guestcartprim' => $arr]);}

            if (session()->exists('guestcartmass')) {$arr = []; for($i = 0; $i < session('cart_count_guest'); $i++) {$arr[] = session('guestcartmass')[$i];} $arr[] = $tovar[0]['mass']; session(['guestcartmass' => $arr]);}
            else {$arr = [$tovar[0]['mass']]; session(['guestcartmass' => $arr]);}

            if (session()->exists('guestcartprice')) {$arr = []; for($i = 0; $i < session('cart_count_guest'); $i++) {$arr[] = session('guestcartprice')[$i];} $arr[] = $tovar_price; session(['guestcartprice' => $arr]);}
            else {$arr = [$tovar_price]; session(['guestcartprice' => $arr]);}

            if (session()->exists('guestcartkol')) {$arr = []; for($i = 0; $i < session('cart_count_guest'); $i++) {$arr[] = session('guestcartkol')[$i];} $arr[] = $kolichestvo; session(['guestcartkol' => $arr]);}
            else {$arr = [(string)$kolichestvo]; session(['guestcartkol' => $arr]);}

            if (session()->exists('cart_count_guest')) {$count = session('cart_count_guest') + 1; session(['cart_count_guest' => $count]);}
            else {session(['cart_count_guest' => 1]);}

            if (session('uri') == '/saletovars') {
                return redirect('/saletovars')->withSuccess('Товар успешно добавлен в корзину!');
            }
            else{
                return redirect('/tovarsview/'.session('category').'/'.session('pole').'/'.session('sort').'/'.session('title'))->withSuccess('Товар успешно добавлен в корзину!');
            }
        }
    }

    //функция удаления позиций из корзины неавторизованного пользователя
    public function deleteposgu($numb) {

        if (!empty(session('guestcartidtovar')[$numb])){
            unset(session('guestcartidtovar')[$numb]);
            unset(session('guestcartphoto')[$numb]);
            unset(session('guestcartnaim')[$numb]);
            unset(session('guestcartcategory')[$numb]);
            unset(session('guestcartprim')[$numb]);
            unset(session('guestcartmass')[$numb]);
            unset(session('guestcartprice')[$numb]);
            unset(session('guestcartkol')[$numb]);
            session(['cart_count_guest' => session('cart_count_guest') - 1]);

            return redirect('/basket')->withSuccess('Позиция успешно удалена!');;
        }
        return redirect('/basket')->withSuccess('Позиция успешно удалена!');;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //функция ресур-контроллера отображения всех позиций корзины
    public function index()
    {
        if (session()->exists('id_klient')){ //для авторизованного пользователя
            $baskets = Korsina::where('id_klient', session('id_klient'))->get();
            $klient = Klient::where('id_klient', session('id_klient'))->get();

            return view('basket', [
                'baskets' => $baskets,
                'klient' => $klient,
            ]);
        }
        else { //для неавторизованного пользователя
            if (session()->exists('guestcartidtovar')){
                return view('basketguest');
            }
            else {
                return redirect()->back();
            }
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
    //функция ресур-контроллера удаления товара из корзины
    public function destroy(Korsina $korsina, $id)
    {
        $korsina->where('id_korsin', '=', $id)->delete();

        session(['cart_count' => session('cart_count') - 1]);

        return redirect()->back()->withSuccess('Позиция успешно удалена!');
    }
}
