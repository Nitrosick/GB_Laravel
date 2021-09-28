<?php declare(strict_types=1);

namespace App\Services;

use App\Contract\Social;
use App\Models\User as Model;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\User;

class SocialService implements Social
{
   public function socialLogin(User $user): string
   {
	   $checkUser = Model::where('email', $user->getEmail())->first();

	   if($checkUser) {
		   $checkUser->name = $user->getName();
		   $checkUser->avatar = $user->getAvatar();

		   if($checkUser->save()) {
			   Auth::loginUsingId($checkUser->id);
			   return route('account');
		   }
	   } else {
           $newUser = Model::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => password_hash($this->generatePassword(), PASSWORD_BCRYPT),
                'avatar' => $user->getAvatar()
           ]);

           Auth::loginUsingId($newUser->id);
           return route('account');
       }

	   throw new \Exception("Error social login");
   }

   private function generatePassword($length = 8): string
   {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = mb_strlen($chars);

        for ($i = 0, $result = ''; $i < $length; $i++) {
            $index = rand(0, $count - 1);
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
    }
}
