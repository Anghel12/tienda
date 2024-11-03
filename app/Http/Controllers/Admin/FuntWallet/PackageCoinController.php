<?php

namespace App\Http\Controllers\Admin\FuntWallet;

use App\Http\Controllers\Controller;
use App\Models\Admin\FuntWallet\PackageCoin;
use Illuminate\Http\Request;

class PackageCoinController extends Controller
{
  // Muestra una lista de los recursos
  public function index()
  {
      $packageCoins = PackageCoin::all();
      return view('admin.funt_wallet.package_coins.index', compact('packageCoins'));
  }

  // Muestra el formulario para crear un nuevo recurso
  public function create()
  {
      return view('admin.funt_wallet.package_coins.create');
  }

  // Almacena un recurso recién creado en la base de datos
  public function store(Request $request)
  {
/*       $request->validate([
          'titulo' => 'required|string|max:255',
          'body' => 'required|string',
          'numero' => 'required|integer',
          'title_button' => 'required|string|max:255',
          'sub_titulo' => 'required|string|max:255',
          'etiquetas' => 'required|json',
      ]); */

      PackageCoin::create($request->all());

      return redirect()->route('admin.funt_wallet.package_coins.index')
                       ->with('success', 'PackageCoin creado exitosamente.');
  }

  // Muestra un recurso específico
  public function show(PackageCoin $packageCoin)
  {
      return view('admin.funt_wallet.package_coins.show', compact('packageCoin'));
  }

  // Muestra el formulario para editar un recurso específico
  public function edit(PackageCoin $packageCoin)
  {
      return view('admin.funt_wallet.package_coins.edit', compact('packageCoin'));
  }

  // Actualiza un recurso específico en la base de datos
  public function update(Request $request, PackageCoin $packageCoin)
  {
/*       $request->validate([
          'titulo' => 'required|string|max:255',
          'body' => 'required|string',
          'numero' => 'required|integer',
          'title_button' => 'required|string|max:255',
          'sub_titulo' => 'required|string|max:255',
          'etiquetas' => 'required|json',
      ]); */

      $packageCoin->update($request->all());

      return redirect()->route('admin.funt_wallet.package_coins.index')
                       ->with('success', 'PackageCoin actualizado exitosamente.');
  }

  // Elimina un recurso específico de la base de datos
  public function destroy(PackageCoin $packageCoin)
  {
      $packageCoin->delete();

      return redirect()->route('admin.funt_wallet.package_coins.index')
                       ->with('success', 'PackageCoin eliminado exitosamente.');
  }
}
