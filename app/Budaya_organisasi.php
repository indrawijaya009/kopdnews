<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budaya_organisasi extends Model
{
     // protected $fillable = [
    //     'name', 'datasatu', 'datadua','datatiga','user_id',
    // ];
    protected $guarded =[];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}