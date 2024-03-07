<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //store
   public function store(Request $request){
    Admin::create($request->all());
    return redirect()->route('view');
   }
   //view
   public function view(){
    $amount = Admin::get();
    return view('view',compact('amount'));
}

//edit
public function edit($id){
    $amount=Admin::findOrFail($id);
    return view('edit',compact('amount'));
}

//update
public function update(Request $request, $id){
    $amount = Admin::findOrFail($id);
    $amount->update($request->all());
    return redirect()->route('view');
}

//delete
public function destroy($id){
    $amount=Admin::findOrFail($id);
    $amount->delete();
    return back();
}
}
