<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Venta;
use App\Models\Zona;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();

        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $zona= Zona::all();
        return view('product.create', compact('product'))->with([
            'zonas' => $zona
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate(Product::$rules);
 /*        // agg de img
        /*$imageName = time().'.'.$request->image->extension();  
        
        $request->image->move(public_path('images'), $imageName);
        */ //
        /* if($request->hasfile('image')){
            $path = $request->image->store('public'); 
        } */ 
        $entrada=$request->all();

        if($archivo = $request->file('image')){

            $nombre = $archivo->getClientOriginalName();

            $archivo->move('images/products', $nombre);

            $entrada['image'] = $nombre;
        }


        //
        Product::create($entrada);

        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $zona_product = Zona::find($product->zona_id);
        
        $zonas = Zona::all();

       
        return view('product.edit', compact('product'))->with([
            'zonas' => $zonas,
            'zonas_product' =>$zona_product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        /* request()->validate(Product::$rules); */
        // agg de img
        /*$imageName = time().'.'.$request->image->extension();  
        
        $request->image->move(public_path('images'), $imageName);
        */ //
        /* if($request->hasfile('image')){
            $path = $request->image->store('public'); 
        } */
        $entrada=$request->all();

        if($archivo = $request->file('image')){

            $nombre = $archivo->getClientOriginalName();

            $archivo->move('images/products', $nombre);

            $entrada['image'] = $nombre;
        }


        //
        /* Product::create($entrada); */
        $product->update($entrada);

        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('product.index')
            ->with('success', 'Product deleted successfully');
    }
}
