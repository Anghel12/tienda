<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderCoin;
use App\Models\Profile;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class OrderCoinController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create', 'store');
        $this->middleware('can:admin.roles.edit')->only('edit', 'update');
        $this->middleware('can:admin.roles.destroy')->only('destroy'); 
    } 
    
     // Método para listar las órdenes de monedas
     public function index()
     {
         $orders = OrderCoin::all();
         return view('admin.order_coins.index', compact('orders'));
     }
 
     // Método para mostrar el formulario de creación de una nueva orden
     public function create()
     {
         return view('admin.order_coins.create');
     }
 
     // Método para almacenar una nueva orden
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'user_id' => 'required|exists:users,id',
             'transaction_id' => 'nullable|exists:transactions,id',
             'name' => 'required|string|max:255',
             'email' => 'required|email|max:255',
             'amount' => 'required|integer|min:1',
             'payment_method' => 'required|string|max:50',
         ]);
 
         $order = OrderCoin::create($validatedData);
 
         return redirect()->route('admin.order_coins.index')->with('success', 'Orden de monedas creada exitosamente.');
     }
 
     // Método para mostrar una orden específica
     public function show(OrderCoin $orderCoin)
     {
           // Obtener el usuario que envió la orden
           $user = $orderCoin->user;
         return view('admin.order_coins.show', compact('orderCoin', 'user'));
     }
 
     // Método para editar una orden
     public function edit(OrderCoin $orderCoin)
     {
         // Obtener el usuario que envió la orden
         $user = $orderCoin->user;

      
         return view('admin.order_coins.edit', compact('orderCoin', 'user'));
     }
 
     public function update(Request $request, OrderCoin $orderCoin)
     {
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|max:255',
             'amount' => 'required|integer|min:1',
             'payment_method' => 'required|string|max:50',
             'status' => 'required|string',
         ]);
     
         // Obtener la wallet del usuario
         $wallet = Wallet::firstOrCreate(
             ['user_id' => $orderCoin->user_id],
             ['name' => 'Wallet for ' . $orderCoin->name, 'currency' => 'USD', 'balance' => 0]
         );
     
         // Verificar si el estado cambia de no "complete" a "complete" para añadir el monto
         if ($orderCoin->status !== 'complete' && $validatedData['status'] === 'complete') {
             $wallet->balance += $orderCoin->amount;
             $wallet->save();
     
             $orderCoin->update($validatedData);  // Actualizar el estado de la orden a "complete"
             return redirect()->route('admin.order_coins.edit', $orderCoin->id)
                 ->with('success', 'Orden completada y coins añadidas a la wallet del usuario.');
         }
     
         // Verificar si el estado cambia de "complete" a "pending", "Denegado" o "Reenviar"
         if ($orderCoin->status === 'complete' && in_array($validatedData['status'], ['pending', 'Denegado', 'Reenviar'])) {
             // Restar el monto de la wallet del usuario solo si tiene saldo suficiente
             if ($wallet->balance >= $orderCoin->amount) {
                 $wallet->balance -= $orderCoin->amount;
                 $wallet->save();
             }
     
             $orderCoin->update($validatedData);  // Actualizar el estado de la orden
             return redirect()->route('admin.order_coins.edit', $orderCoin->id)
                 ->with('success', 'Orden actualizada y coins deducidas de la wallet del usuario.');
         }
     
         // Actualizar los demás datos de la orden si no hay cambio de "complete"
         $orderCoin->update($validatedData);
     
         return redirect()->route('admin.order_coins.edit', $orderCoin->id)
             ->with('success', 'Orden actualizada exitosamente.');
     }
     
     
 
     // Método para eliminar una orden
     public function destroy(OrderCoin $orderCoin)
     {
         $orderCoin->delete();
         return redirect()->route('admin.order_coins.index')->with('success', 'Orden de monedas eliminada exitosamente.');
     }
}
