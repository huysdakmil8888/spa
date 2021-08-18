<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function create()
   {
      return view('admin.mail.create');
   }

   public function store(Request $request)
   {
      $detail=[
         'body'=>$request->body,
         'file'=>$request->file,
      ];
      if ($request->department) {
         //gui cho tat ca nhan vien trong 1 phong
         $users=User::where('department_id',$request->department)->get();
         foreach ($users as $user) {
            Mail::to($user->email)->send(new SendMail($detail));
         }
      }elseif($request->user){
         //gui cho tung ca nhan
         $email=User::find($request->user)->email;
         Mail::to($email)->send(new SendMail($detail));

      }else{
         //gui cho tat ca
         $users=User::all();
         foreach ($users as $user) {
            Mail::to($user->email)->send(new SendMail($detail));
         }
      }
      return back()->with('success','mail-sent');

   }
}
