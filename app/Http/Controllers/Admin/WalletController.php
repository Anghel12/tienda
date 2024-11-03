<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wallet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletController extends Controller
{ 
    public function index()
    {
        // Obtener todas las wallets
        $userWallet = Wallet::all();
        return view('admin.wallet.index', compact('userWallet')); 
    }

    /**
     * Show the form for creating a new wallet.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mostrar formulario para crear una nueva wallet
        return view('admin.wallet.create');
    }

    /**
     * Store a newly created wallet in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'currency' => 'required|string|max:255',
            'balance' => 'required|numeric|min:0',
            'user_id' => 'required|exists:users,id'
        ]);

        // Crear una nueva wallet
        Wallet::create($request->all());

        return redirect()->route('admin.wallet.index')->with('success', 'Wallet creada exitosamente.');
    }

    /**
     * Display the specified wallet.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet $wallet)
    {
        // Mostrar detalles de una wallet específica
        return view('admin.wallet.show', compact('wallet'));
    }

    /**
     * Show the form for editing the specified wallet.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet $wallet)
    {
        // Mostrar formulario de edición de wallet
        return view('admin.wallet.edit', compact('wallet'));
    }

    /**
     * Update the specified wallet in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wallet $wallet)
    {
        // Validar los datos actualizados del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'currency' => 'required|string|max:255',
            'balance' => 'required|numeric|min:0',
            'is_active' => 'required|boolean'
        ]);

        // Actualizar la wallet
        $wallet->update($request->all());

        return redirect()->route('admin.wallet.index')->with('success', 'Wallet actualizada exitosamente.');
    }

    /**
     * Remove the specified wallet from storage.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet $wallet)
    {
        // Eliminar la wallet
        $wallet->delete();
        return redirect()->route('admin.wallet.index')->with('success', 'Wallet eliminada exitosamente.');
    }
}
