<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{

    public function index()
    {
       $notices=Notice::latest()->get();
       return view('admin.notice.index',compact('notices'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.notice.create');

    }


    public function store(Request $request)
    {
        $data=$request->all();
       Notice::create($data);
       return redirect()->route('notices.index')->with(['message'=>'insert successfully']);
    }
    public function status(Request $request,$id)
    {
       $notice = Notice::find($id);
      $data=[
         'status'=>$request->status,
         'message'=>$request->message,
      ];
       $notice->update($data);
       return redirect()->route('notices.index')->with(['message'=>'updated status successfully']);
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
