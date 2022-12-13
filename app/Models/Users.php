<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends \TCG\Voyager\Models\User
{
    protected $table = "users";
    protected $timestamp = false;
}
