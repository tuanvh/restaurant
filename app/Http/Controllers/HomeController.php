<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSendMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = 1;
        $b = '1';
        $c = $a + $b;
        return view('home');
    }

    public function getContact()
    {

        return view('contact');

    }

    public function postContact(ContactFormRequest $request)
    {
        $validated = $request->validated();
        Mail::to($request->input('txtEmail'))
            ->send(new ContactSendMail($request));
        die('OK');

        /*Mail::send('mail', $data, function ($message) {
            $message->form('tuanvh99bn@gmail.com', 'Huy Tuan');
            $message->to('tuanvh99bn@gmail.com', 'Connan vu')->subject('Day la email test');
        });
        */

    }
}
