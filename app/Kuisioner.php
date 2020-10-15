<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Kuisioner extends Authenticatable
{
    use Notifiable,HasRoles;

    protected $fillable = [
        'tingkat_I', 'tingkat_II', 'tingkat_III','tingkat_IV',
    ];
}
