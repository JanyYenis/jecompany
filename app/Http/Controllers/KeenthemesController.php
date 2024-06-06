<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeenthemesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $usuarios = Usuario::whereNot('id', auth()->user()->id)->get();
        // $info['usuarios'] = $usuarios;
        // return view('home', $info);
    }

    public function aboutUs()
    {
        return view('keenthemes.pages.aboutus');
    }

    public function invoice()
    {
        return view('keenthemes.pages.invoice');
    }

    public function pricing()
    {
        return view('keenthemes.pages.pricing');
    }

    public function seguridad()
    {
        return view('keenthemes.account.seguridad');
    }
}
