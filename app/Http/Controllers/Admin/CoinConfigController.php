<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coin;
use Illuminate\Http\Request;

class CoinConfigController extends Controller 
{

    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create', 'store');
        $this->middleware('can:admin.roles.edit')->only('edit', 'update');
        $this->middleware('can:admin.roles.destroy')->only('destroy'); 
    } 

    public function index()
    {
        $coins = Coin::all();
        return view('admin.coins.index', compact('coins'));
    }

    /**
     * Muestra el formulario para crear una nueva moneda.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coins.create');
    }

    /**
     * Guarda una nueva moneda en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'symbol' => 'required',
            'exchange_rate' => 'required|numeric',
        ]);

        Coin::create($request->all());

        return redirect()->route('admin.coins.index')
                         ->with('success', 'Moneda creada exitosamente.');
    }

    /**
     * Muestra la moneda especificada.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function show(Coin $coin)
    {
        return view('admin.coins.show', compact('coin'));
    }

    /**
     * Muestra el formulario para editar la moneda especificada.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function edit(Coin $coin)
    {
        return view('admin.coins.edit', compact('coin'));
    }

    /**
     * Actualiza la moneda especificada en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coin $coin)
    {
        $request->validate([
            'name' => 'required',
            'symbol' => 'required',
            'exchange_rate' => 'required|numeric',
        ]);

        $coin->update($request->all());

        return redirect()->route('admin.coins.index')
                         ->with('success', 'Moneda actualizada exitosamente.');
    }

    /**
     * Elimina la moneda especificada de la base de datos.
     *
     * @param  \App\Models\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coin $coin)
    {
        $coin->delete();

        return redirect()->route('admin.coins.index')
                         ->with('success', 'Moneda eliminada exitosamente.');
    }
}
