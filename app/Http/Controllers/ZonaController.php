<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Zona;

use Illuminate\Http\Request;

class ZonaController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonas = Zona::paginate();

        return view('zona.index', compact('zonas'))
            ->with('i', (request()->input('page', 1) - 1) * $zonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zona = new Zona();
        $empresa = Empresa::all();
     
        return view('zona.create', compact('zona'))->with([
            'empresas' => $empresa
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
        
        $zona = Zona::create($request->all());

        return redirect()->route('zona.index')
            ->with('success', 'zona created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idzona)
    {
        $zona = Zona::find($idzona);

        return view('zona.show', compact('zona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idzona)
    {
        $zona = Zona::find($idzona);

        return view('zona.edit', compact('zona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  zona $zona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zona $zona)
    {
        request()->validate(Zona::$rules);

        $zona->update($request->all());

        return redirect()->route('zona.index')
            ->with('success', 'zona updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($idzona)
    {
        $zona = Zona::find($idzona)->delete();

        return redirect()->route('zona.index')
            ->with('success', 'zona deleted successfully');
    }
}
