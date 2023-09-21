<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Ramsey\Uuid\Uuid;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginSocialiteController extends Controller
{
    public function validator($driver)
    {
        Validator::validate(compact('driver'), ['driver' => 'required|in:google,facebook']);

        return Socialite::driver($driver)->redirect();
    }

    public function callbackSocialite($driver)
    {
        $socialUser = Socialite::driver($driver)->stateless()->user();

        $passwordCrypto = random_bytes(10);
        $randomPassword = base64_encode($passwordCrypto);
        $passwordHashed = password_hash($randomPassword, PASSWORD_BCRYPT);
    
    
        $user = User::updateOrCreate([
            'provider_id' => $socialUser->id,
        ], [
            'uuid' => Uuid::uuid4(),
            'name' => $socialUser->name,
            'provider' => $driver,
            'email' => $socialUser->email,
            'password' => $passwordHashed,
        ]);
    
        Auth::login($user);
    
        return redirect()->route('search.search');
    }
}
