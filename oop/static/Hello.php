<?php

class Hello
{
    public function __construct()
    {
        /** @var User $user */
        $user = Storage::get('user');
        echo "{$user->name}: {$user->age}";
    }
}