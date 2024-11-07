<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AdminsController extends Controller
{
    public function create(Request $request)
    {
        Admins::create([
           'login' => $request->login,
           'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'message' => 'Админ успешно создан'
        ]);
    }

    public function login(Request $request)
    {
        $admin = Admins::where('login', $request->login)->first();

        if(!$admin || !Hash::check($request->password, $admin->password)){
            return response()->json([
               'message' => 'Ошибка в логине или пароле'
            ],401);
        }else{
            return response()->json([
               'message' => 'Успешная авторизация'
            ]);
        }
    }
}
