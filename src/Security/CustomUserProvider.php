<?php

namespace App\Security;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;

class CustomUserProvider extends \Pimcore\Security\User\UserProvider
{
    public function refreshUser(UserInterface $user): UserInterface
    {
        if (!str_starts_with($user->getUser()->getName(), 'admin')) {
            throw new UnsupportedUserException();
        }
        return parent::refreshUser($user);
    }
}
