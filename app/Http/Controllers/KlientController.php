<?php

namespace App\Http\Controllers;

use App\Mail\KlientConfirm;
use App\Models\Klient;
use App\Models\Korsina;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class KlientController extends Controller
{
    //функция для подтверждения почты пользователя
    public function activation($hash){

        $clients = Klient::orderBy('created_at', 'asc')->where('keyactiv', '=', $hash)->get(); //получение пользователя по hash

        if (empty($clients[0]['id_klient'])) { //проверка на существование пользователя
            return redirect('signin')->withSuccess('Пользователь с таким email еще не регистрировался!'); //переход на страницу авторизации с сообщением
        }
        Klient::where('id_klient', '=', $clients[0]['id_klient'])->update(['status'=>1]); //активация пользователя

        // отправка письма на электронный ящик
        $to = $clients[0]['email'];
        $name = $clients[0]['firstname'];
        $middlename = $clients[0]['middlename'];
        $subjectmail = "Успешная регистрация!";
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        // Текст письма
        $textmail = "<html><h3>{$name} {$middlename}, благодарим за регистрацию!</h3>
                        <p>В подарок за регистрацию у вас действует скидка 10% на первый заказ на сайте!</p>
                     </html>";
        // Отправка письма
        mail($to, $subjectmail, $textmail, $headers);

        return redirect('signin')->withSuccess('Ваша почта подтверждена!'); //переход на страницу авторизации с сообщением
    }

    //функция для входа в аккаунт
    public function accaunt(Request $request) {

        if (session()->exists('id_klient')) { //проверка существования сессии с id клиента (создается при авторизации)
            $orders = Orders::where('id_klient', session('id_klient'))->get(); //получение данных пользователя
            return view('cabinet.cabinet', ['orders' => $orders]); //переход в личный кабинет
        }
        else {
            return view('signin'); //переход на авторизацию
        }
    }

    //функция авторизации пользователя
    public function signin(Request $request) {

        $clients = Klient::where('email', '=', $request->email)->where('password', '=', md5($request->password))->get();

        if (empty($clients[0]['email'])) {
            return redirect()->back()->withSuccess('Неверный email или пароль!');
        }

        $cart_count = Korsina::where('id_klient', '=', $clients[0]['id_klient'])->count();

        session([
            'id_klient' => $clients[0]['id_klient'],
            'admin' => $clients[0]['admin'],
            'firstName' => $clients[0]['firstname'],
            'lastName' => $clients[0]['lastname'],
            'middleName' => $clients[0]['middlename'],
            'avatar' => $clients[0]['avatar'],
            'email' => $clients[0]['email'],
            'phone' => $clients[0]['phone'],
            'cart_count' => $cart_count,
        ]);

        return redirect('/accaunt');
    }

    //функция отправки сообщения для восстановления пароля пользователя
    public function recovery_msg(Request $request) {

        $clients = Klient::where('email', '=', $request->email)->get();

        if (empty($clients[0]['email'])) {
            return redirect()->back()->withSuccess('Неверный email!');
        }

        // отправка письма на электронный ящик
        $to = $clients[0]['email'];
        $id = $clients[0]['id_klient'];
        $name = $clients[0]['firstname'];
        $middlename = $clients[0]['middlename'];
        $subjectmail = "Восстановление пароля!";
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        // Текст письма
        $textmail = "<html><h3>Здравствуйте, {$name} {$middlename}!</h3>
                        <p>Восстановления пароля на сайте https://sweetdecor.spb.ru/</p>
                        <p>Для восстановления пароля перейдите по ссылке:</p>
                        <a href='https://sweetdecor.spb.ru/recovery_pass?list={$id}'>ссылка для сброса пароля</a>
                     </html>";
        // Отправка письма
        mail($to, $subjectmail, $textmail, $headers);

        return redirect('/accaunt')->withSuccess('На вашу почту отправлено письмо с инструкцией по восстановлению пароля!');
    }

    //функция восстановления пароля пользователя
    public function recovery_pass(Request $request, $id) {

        $clients = Klient::where('id_klient', $id)->get();

        if (empty($clients[0]['email'])) {
            return redirect()->back()->withSuccess('Пользователь не найден!');
        }

        if ($request->password != $request->password_confirmation){
            return redirect()->back()->withSuccess('Пароли не совпадают!');
        }

        Klient::where('id_klient', $id)->update(['password'=>md5($request->password)]);

        // отправка письма на электронный ящик
        $to = $clients[0]['email'];
        $name = $clients[0]['firstname'];
        $middlename = $clients[0]['middlename'];
        $subjectmail = "Изменение пароля!";
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        // Текст письма
        $textmail = "<html><h3>Здравствуйте, {$name} {$middlename}!</h3>
                        <p>Ваш пароль на сайте https://sweetdecor.spb.ru/ был изменен!</p>
                        <p>Если смену пароля осуществили не вы, обратитесь к администратору!</p>
                     </html>";
        // Отправка письма
        mail($to, $subjectmail, $textmail, $headers);

        return redirect('/accaunt')->withSuccess('Ваш пароль был упешно изменен!');
    }

    //функция выхода из аккаунта
    public function exit() {
        session()->flush();
        return redirect('/');
        /*if (session()->exists('email')) {
            session()->pull('id_klient');
            session()->pull('firstName');
            session()->pull('lastName');
            session()->pull('middleName');
            session()->pull('email');
            session()->pull('phone');
            session()->pull('cart_count');
            return redirect('/');
        }
        else {
            return redirect('/');
        }*/
    }

    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

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
    //функция ресур-контроллера регистрации пользователя
    public function store(Request $request)
    {
        $new_client = new Klient();
        $check = Klient::where('email', '=', $request->email)->get();

        if (isset($check[0]['email'])) {
            if ($check[0]['email'] == $request->email) {
                return redirect()->back()->withSuccess('Пользователь с таким email уже существует!');
            }
        }
        if ($request->password != $request->password_confirmation) {
            return redirect()->back()->withSuccess('Пароли должны совпадать!');
        }

        $id = Str::uuid();

        if (empty($request->lastName)) {$lastname = "";} else {$lastname = $request->lastName;}
        if (empty($request->middleName)) {$middlename = "";} else {$middlename = $request->middleName;}
        if (empty($request->phone)) {$phone = "";} else {$phone = $request->phone;}

        $hash = md5($request->email . time());

        $new_client->id_klient  = $id;
        $new_client->firstname = $request->firstName;
        $new_client->lastname = $lastname;
        $new_client->middlename = $middlename;
        $new_client->email = $request->email;
        $new_client->password = md5($request->password);
        $new_client->phone = $phone;
        $new_client->keyactiv = $hash;
        $new_client->admin = 0;
        $new_client->del = 0;

        $new_client->save();

        $email = $request->email;
        $name = $request->firstName;

        // отправка письма на электронный ящик
        $to = $email;
        $subjectmail = "Подтверждение почты!";
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        // Текст письма
        $textmail = "<html><h2>Здравствуйте, {$name} {$middlename}!</h2>
                        <p>Пожалуйста, подтвердите адрес вашей электронной почты для сайта <a href='https://sweetdecor.spb.ru/'>sweetdecor.spb.ru</a></p>
                        <p>Для подтверждения перейдите по ссылке:</p>
                        <a href='https://sweetdecor.spb.ru/activation/{$hash}'>Ссылка для подтверждения</a></html>";
        // Отправка письма
        mail($to, $subjectmail, $textmail, $headers);

        return redirect('signin')->withSuccess('Регистрация прошла успешно! На вашу почту отправлено письмо с подтверждением!');
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
    public function edit(Klient $klient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klient  $klient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klient $klient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klient  $klient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klient $klient)
    {
        //
    }
}
