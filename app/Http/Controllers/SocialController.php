<?php

namespace App\Http\Controllers;

use App\Contract\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function vkStart()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function vkCallback(Social $service)
    {
        try {
            return redirect($service->socialLogin(Socialite::driver('vkontakte')->user()));
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }

    public function googleStart()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(Social $service)
    {
        try {
            return redirect($service->socialLogin(Socialite::driver('google')->user()));
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }
}
