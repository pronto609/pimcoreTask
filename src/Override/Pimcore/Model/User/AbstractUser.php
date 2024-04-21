<?php

namespace App\Override\Pimcore\Model\User;

abstract class AbstractUser extends \Pimcore\Model\User\AbstractUser
{
    public static function create(array $values = []): static
    {
        return parent::create($values);
    }
}
