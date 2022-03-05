<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Http\Requests\OrderRequest;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // space that we can use the repository from
    protected $model;

    public function __construct(Order $pedido)
    {
        // set the model
        $this->model = new Repository($pedido);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Order::latest()->paginate(5);
        return view('admin.orders.index', compact('pedidos'));
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
    public function store(OrderRequest $request)
    {
        $input = $request->all();
        $pedido = Order::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'description' => $input['description'],
            'total' => $input['total']
        ]);
        $pedido->productos()->attach($input['products']);
        foreach ($input['products'] as $value) {
            $producto = Product::find($value);
            $stock = $producto->stock - 1;
            $producto->update(['stock' => $stock]);
        }
        return redirect()->route('index')->with('status', 'Pedido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $pedido)
    {
        $pedidoSabores = $pedido->productos()->where('type', "Sabor")->get();
        $pedidoAdornos = $pedido->productos()->where('type', "Adorno")->get();
        return view('admin.orders.show', compact('pedido', 'pedidoSabores', 'pedidoAdornos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $pedido)
    {
        $sabores = Product::where([['type', "Sabor"], ['stock', ">", 0]])->get();
        $adornos = Product::where([['type', "Adorno"], ['stock', ">", 0]])->get();
        $pedidoSabores = $pedido->productos()->where('type', "Sabor")->get();
        $pedidoAdornos = $pedido->productos()->where('type', "Adorno")->get();
        /*$arrayFlavors = [];
        $arrayToppings = [];
        foreach (Order::pluck('flavors') as $flavors) {
            $arrayFlavors = [$flavors];
        }
        foreach ($pedido->toppings as $value) {
            $arrayToppings = [$value];
        }*/
        return view('admin.orders.edit', compact('pedido', 'sabores', 'adornos', 'pedidoSabores', 'pedidoAdornos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(OrderRequest $request, Order $pedido)
    {
        $input = $request->all();
        $pedido->update([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'description' => $input['description'],
            'total' => $input['total']
        ]);
        $pedido->productos()->sync($input['products']);
        return redirect()->route('orders.index')->with('status', 'Pedido modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $pedido)
    {
        $pedido->delete();
        return redirect()->route('products.index')->with('status', 'Producto eliminado con éxito');
    }
}
