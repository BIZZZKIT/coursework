<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use http\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function create(Request $request)
    {
        $client = Clients::create([
            'nameClient' => $request->nameClient,
            'phone' => $request->phone,
            'email' => $request->email,
            'whatuneed' => $request->whatuneed,
            'final_price' => $request->final_price
        ]);

        return response()->json([
           'message' => 'клиент добавлен',
        ]);
    }

    public function getClients(Request $request)
    {
        $clients = Clients::get();

        return response()->json([
           'message' => 'Успешный вывод',
            'client' => $clients
        ]);
    }
}
