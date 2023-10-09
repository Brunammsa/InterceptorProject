<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Access\Response as AccessResponse;
use Illuminate\Support\Facades\Gate;

class ApiUserController extends Controller
{
    public function show($user)
    {
        if (Gate::allows('user-api')) {
            $user = User::where('uuid', $user)->first();
            if ($user) {
                $data = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'providers' => $user->providers
                ];
        
                return response()->json($data, 200);
            }
            return response()->json($user, 200);
        }

        return AccessResponse::deny('Acesso não autorizado!', 403);
    }
}