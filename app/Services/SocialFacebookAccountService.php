<?php

namespace App\Services;

use App\Repositories\Admin\UserRepository;
use App\SocialFacebookAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialFacebookAccountService
{
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    public function createOrGetUser(ProviderUser $providerUser)
    {
        $fblogin = $this->userRepository->facebookLogin($providerUser);
        return $fblogin;
    }
}