<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /* public function index($empleado_id)
    {   
        $usuario = User::find($empleado_id);

        $existencia = DB::table('empleados')
            ->select('cargo')
            ->where('cargo', '=', $cargoingresado)
             ->get();

             if($existencia == 1){ //en el caso que sea admin
                 return view('home');

             } else if ($existencia == 0){ //en el caso que sea jefe de venta
                return view('home-jefe');
             } 
    } */
}
