<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manajemen_resiko extends Model
{
    // protected $fillable = [
    //     'name', 'datasatu', 'datadua','datatiga','user_id',
    // ];
    protected $guarded =[];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
