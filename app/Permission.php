<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded=[];
    protected $casts=[
       'name'=>'array',
       'created_at' => 'd/m/Y',
       'updated_at' => 'd/m/Y',


    ];


   public function role()
   {
      return $this->belongsTo(Role::class);
    }
}
