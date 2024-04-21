<?php
// src/EventListener/OverrideUserSaveListener.php

namespace App\EventSubscriber;

use Pimcore\Event\Model\UserRoleEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Pimcore\Model\User;

class OverrideUserSaveListener
{
    public function onPreUpdate(UserRoleEvent $event)
    {
        $user = $event->getUserRole();
        $this->overrideSave($user);
    }

    public function onPreCreate(UserRoleEvent $event)
    {
        $user = $event->getUserRole();
        if ($user instanceof \Pimcore\Model\User) {
            $user->setFirstName('setFirstName');
        }
        $this->overrideSave($user);
    }

    private function overrideSave(\Pimcore\Model\ModelInterface $user)
    {
        if ($user instanceof \Pimcore\Model\User) {
            $user->setFirstname($user->getFirstname(). rand(1,10**3));
        }
    }
}
