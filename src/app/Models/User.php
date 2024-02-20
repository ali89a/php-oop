<?php

namespace App\Models;

use App\Abstracts\UserAbstract;

class User extends UserAbstract
{
    public function get()
    {
        return "Get Function";
    }

    public function getUser()
    {
        return "getUser Function";

    }   public function getStaff()
    {
        return "getStaff Function";

    }
}