<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sabores = Product::where([['type', "Sabor"], ['stock', ">", 0]])->get();
        $adornos = Product::where([['type', "Adorno"], ['stock', ">", 0]])->get();
        return view('index', compact('sabores', 'adornos'));
    }

    public function admin()
    {
        if (Auth::check()) {
            $productos = Product::all();
            $sabores = Product::where('type', "Sabor")->paginate(5);
            $adornos = Product::where('type', "Adorno")->paginate(5);
            $pedidos = Order::latest()->paginate(5);
            return view('admin.dashboard', compact('productos', 'sabores', 'adornos', 'pedidos'));
        } else {
            return view('admin.login');
        }
    }
}
