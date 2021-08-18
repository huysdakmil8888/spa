<?php
namespace App\Traits;
use Illuminate\Support\Facades\Route;

trait permissionTrait{
   public function hasPermission()
   {
      if(!isset(auth()->user()->role->permission['name']['department']['can-edit']) && Route::is('department.edit') ){
         return abort(401);
      }
      if(!isset(auth()->user()->role->permission['name']['department']['can-list']) && Route::is('department.index') ){
         return abort(401);
      }
      if(!isset(auth()->user()->role->permission['name']['department']['can-add']) && Route::is('department.create') ){
         return abort(401);
      }

   }
}
