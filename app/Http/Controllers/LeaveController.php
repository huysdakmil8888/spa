<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{

    public function index()
    {
       $leaves=Leave::latest()->get();
       return view('admin.leave.index',compact('leaves'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.leave.create');

    }


    public function store(Request $request)
    {
        $data=$request->all();
        $data['user_id']=Auth::user()->id;
       Leave::create($data);
       return redirect()->route('leaves.index')->with(['message'=>'insert successfully']);
    }
    public function status(Request $request,$id)
    {
       $leave = Leave::find($id);
      $data=[
         'status'=>$request->status,
         'message'=>$request->message,
      ];
       $leave->update($data);
       return redirect()->route('leaves.index')->with(['message'=>'updated status successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
