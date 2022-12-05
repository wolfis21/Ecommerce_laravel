<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Venta;
use Illuminate\Http\Request;


class VentaController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::paginate();
        $producto = Product::all();
        return view('venta.index', compact('ventas'))
            ->with('i', (request()->input('page', 1) - 1) * $ventas->perPage())->with([
                'products'=> $producto 
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venta = new Venta();
        //traerme todos los productos para seleccionarlos
        $producto = Product::all();

        return view('venta.create', compact('venta'))->with([
            'products'=> $producto 
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
        //request()->validate(Venta::$rules);
        //$venta = Venta::create($request->all());

        $venta= new Venta();
        $venta->date_vent = $request ->date_vent;
        $venta->client_ref = $request ->client_ref;
        $venta->cant_product = $request ->cant_product;
        //sacar precio y multiplicarlo por cantidad a comprar 
        $venta->precio_total = $request ->product_img * $request ->cant_product;
        
        $venta->save();
        //decremento de stock
        $decremento = $request->cant_product;
        
        $producto = Product::find($request->product);
        $producto->cant_stock -= $decremento;
        $producto->saveOrfail();  

        //
        
        $opciones = $request->product;

        foreach ($opciones as $key => $opci) {
            # code...
            $venta->products()->attach($opci);

        }
        return redirect()->route('venta.index')
            ->with('success', 'Venta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idVenta)
    {
        $venta = Venta::find($idVenta);

        return view('venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = Venta::find($id);
       
        return view('venta.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Venta $Venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        request()->validate(Venta::$rules);

        $venta->update($request->all());

        return redirect()->route('venta.index')
            ->with('success', 'Venta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($idVenta)
    {
        $venta = Venta::find($idVenta)->delete();

        return redirect()->route('venta.index')
            ->with('success', 'Venta deleted successfully');
    }
}
