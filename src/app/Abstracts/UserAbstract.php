<?php

namespace App\Abstracts;

abstract class UserAbstract
{
    abstract public function getUser();
    abstract public function getStaff();

    public function getUserName()
    {
         return "Non-Abstract-getUserName";
    }
}