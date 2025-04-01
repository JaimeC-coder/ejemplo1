<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return "Hola mundo";
        $products =  product::all();
        $products = ProductResource::collection($products);

        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $title = 'Crear nuevo producto';
        $categories = category::pluck('catName', 'id');

        /**
         * [
         * 1 => 'categoria 1',
         * ]
         *
         * {
         *[
         * name => 'hola'
         * id => 1
         * ]
         * }
         */
        //$categories = category::select('name', 'id')->get();
        //return $categories;
        return view('products.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {

        $product =product::create([
            'prodName' => $request['prodName'],
            'price' => $request['price'],
            'category_id' => $request['category_id'],
        ]);

        $product = new ProductResource($product);

        return response()->json(
            [
                'message' => 'Producto creado correctamente',
                'data' => $product
            ], 201);



    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
        $title = 'Detalle del producto';
        return view('products.show', compact('product', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
        $title = 'Editar producto';
        $categories = category::select('catName', 'id')->get();
        return view('products.edit', compact('product', 'title', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
        $validate = $request->validate([
            'prodName' => 'required',
            'price' => 'required|decimal:0,2',
            'category_id' => 'required',
        ]);

        $product->update($validate);

        return redirect()->route('products.index')->with('success', 'El producto se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        $product->delete();
        return response()->json([
            'message' => 'Producto eliminado correctamente'
        ], 200);
        // return redirect()->route('products.index')->with('success', 'El producto se elimino con exito');
    }


    public function subtractPrice(Request $request, $id)
    {
        $product = product::find($id);
        $product->price = $product->price - $request->subtract;
        $product->save();

        $product = new ProductResource($product);
        return response()->json([
            'message' => 'Precio actualizado',
            'data' => $product
        ],200);

    }
}
