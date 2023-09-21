<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Access\Response as AccessResponse;
use Illuminate\Support\Facades\Gate;

class ApiUserController extends Controller
{
    public function show(User $user)
    {
        if (Gate::allows('user-api')) {
            $uUIdUser = $user->uuid;
            $user = User::where('uuid', $uUIdUser)->first();

            return response()->json($user, 200);
        }

        return AccessResponse::deny('Acesso não autorizado!', 403);
    }
}