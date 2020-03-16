<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use App\SocialFacebookAccount;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        // only allow people with @company.com to login
//        if (explode("@", $user->email)[1] !== 'company.com') {
//            return redirect()->to('/');
//        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if ($existingUser) {
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser = [];
            $newUser['name'] = $user->name;
            $newUser['email'] = $user->email;
            $newUser['password'] = rand(1, 1000000);
            $users = User::create($newUser);
            $detail = [];
            $detail['user_id'] = $users->id;
            $detail['image'] = $user->avatar;
            UserDetail::create($detail);
            $social = [];
            $social['user_id'] = $users->id;
            $social['provider_user_id'] = $user->id;
            $social['provider'] = 'google';
            SocialFacebookAccount::create($social);
            auth()->login($users, true);
        }
        return redirect()->to('/home');
    }
}
