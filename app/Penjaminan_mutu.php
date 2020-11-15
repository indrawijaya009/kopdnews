<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjaminan_mutu extends Model
{
    // protected $fillable = [
    //     'name', 'datasatu', 'datadua','datatiga','user_id',
    // ];
    protected $guarded =[];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
