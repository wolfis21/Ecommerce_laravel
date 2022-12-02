<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Zona;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleado = new Empleado();
        $zona = Zona::all();
        return view('empleado.create', compact('empleado'))->with([
            'zonas'=> $zona
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
        $request->validate([
            'cedula' => 'required|integer',
            'pname' =>'required|string',
            'psubname' =>'required|string',
            'fecha_n' =>'required|date',
            'direccion' =>'required|string',
            'telefono' =>'required|integer|min:8',
            'cargo' =>'required|string',
            'zona_id' => 'required',
        ]);

        $empleado = Empleado::create($request->all());

        return redirect()->route('empleado.index')
            ->with('success', 'empleado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $empleado_zona = Zona::find($zona->);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  empleado $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'cedula' => 'required|integer',
            'pname' =>'required|string',
            'psubname' =>'required|string',
            'fecha_n' =>'required|date',
            'direccion' =>'required|string',
            'telefono' =>'required|integer|min:8',
            'cargo' =>'required|string',
            'zona_id' => 'required',
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleado.index')
            ->with('success', 'empleado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id)->delete();

        return redirect()->route('empleado.index')
            ->with('success', 'empleado deleted successfully');
    }
}
