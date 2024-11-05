<?php

namespace App\Http\Controllers\UserActions;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\OrderCoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrderVoucherController extends Controller
{
      // Muestra todas las órdenes del usuario autenticado
    public function index()
    {
        $userId = Auth::id();
        $orders = OrderCoin::where('user_id', $userId)->get();
        
        return view('user_actions.order_vouchers.index', compact('orders'));
    }

    // Muestra el formulario para crear una nueva orden
    public function create()
    {
        return view('user_actions.order_vouchers.create');
    }

    // Almacena una nueva orden en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'amount' => 'required|integer',
            'payment_method' => 'required|string',
        ]);

        // Crear la orden con el user_id del usuario autenticado
        OrderCoin::create([
            'user_id' => Auth::id(),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'amount' => $request->input('amount'),
            'payment_method' => $request->input('payment_method'),
            'status' => 'pending',
        ]);

        return redirect()->route('user_actions.order_vouchers.index')
            ->with('success', 'Orden creada exitosamente.');
    }

    // Muestra los detalles de una orden específica, solo si pertenece al usuario autenticado
    public function show($id)
    {
        $order = OrderCoin::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        
        return view('user_actions.order_vouchers.show', compact('order'));
    }

    // Muestra el formulario para editar una orden, solo si pertenece al usuario autenticado
    public function edit($id)
    {
        $order = OrderCoin::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        
        return view('user_actions.order_vouchers.edit', compact('order'));
    }

    // Actualiza una orden existente en la base de datos, solo si pertenece al usuario autenticado
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'amount' => 'required|integer',
            'payment_method' => 'required|string',
            'status' => 'required|string',
        ]);

       

        $order = OrderCoin::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $order->update($request->all());


         // Procesar nuevas imágenes si se han subido
         if ($request->hasFile('voucher_images')) {
            foreach ($request->file('voucher_images') as $file) {
                $url = Storage::put('public/OrderVoucher', $file);

            $image = new Image([
                'url' => $url,
                'imageable_id' => $order->id,
                'imageable_type' => OrderCoin::class,
                'created_by' => Auth::id(),
            ]);

            $order->images()->save($image);
        }
    }

        return redirect()->back()
            ->with('success', 'Orden actualizada exitosamente.');
    }

    // Elimina una orden de la base de datos, solo si pertenece al usuario autenticado
    public function destroy($id)
    {
        $order = OrderCoin::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $order->delete();

        return redirect()->route('user_actions.order_vouchers.index')
            ->with('success', 'Orden eliminada exitosamente.');
    }
}
