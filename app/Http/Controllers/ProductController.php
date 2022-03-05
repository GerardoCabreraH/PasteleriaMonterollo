<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // space that we can use the repository from
    protected $model;

    public function __construct(Product $producto)
    {
        // set the model
        $this->model = new Repository($producto);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Product::all();
        $sabores = Product::where('type', "Sabor")->latest()->paginate(5);
        $adornos = Product::where('type', "Adorno")->latest()->paginate(5);
        return view('admin.products.index', compact('productos', 'sabores', 'adornos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = $this->model->getModel();
        return view('admin.products.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $input = $request->all();
        $this->model->create($input);
        return redirect()->route('products.index')->with('status', 'Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $producto)
    {
        return view('admin.products.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $producto)
    {
        return view('admin.products.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $producto)
    {
        $input = $request->all();
        $producto->update($input);
        return redirect()->route('products.index')->with('status', 'Producto modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $producto)
    {
        $producto->delete();
        return redirect()->route('products.index')->with('status', 'Producto eliminado con éxito');
    }
}
