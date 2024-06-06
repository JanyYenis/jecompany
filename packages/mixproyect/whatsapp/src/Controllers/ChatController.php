<?php

namespace Mixproyect\Whatsapp\Controllers;;

use App\Exceptions\ErrorException;

class ChatController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('whatsapp::chats.index');
    }
}
