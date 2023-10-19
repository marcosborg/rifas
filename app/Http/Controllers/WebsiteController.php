<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContentPage;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public function terms()
    {
        $terms = ContentPage::find(4);
        return view('terms', compact('terms'));
    }

    public function privacy()
    {
        $privacy = ContentPage::find(3);
        return view('privacy', compact('privacy'));
    }

    public function forgetMe()
    {
        return view('forget_me');
    }

    public function accountDelete(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        return redirect()->back()->with('message', 'Pedido enviado com sucesso.');
    }
}