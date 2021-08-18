<?php
namespace App\Traits;
use Illuminate\Support\Facades\Route;

trait permissionTrait{
   public function hasPermission()
   {
      if(!isset(auth()->user()->role->permission['name']['department']['can-edit']) && Route::is('permissions.edit') ){
         return abort(401);
      }
      if(!isset(auth()->user()->role->permission['name']['department']['can-list']) && Route::is('permissions.index') ){
         return abort(401);
      }
      if(!isset(auth()->user()->role->permission['name']['department']['can-add']) && Route::is('permissions.create') ){
         return abort(401);
      }

   }
}
