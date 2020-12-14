<?php

namespace App\Http\Controllers;

use App\Mobileuser;
use Illuminate\Http\Request;
use DataTables;
use Redirect,Response;

class MobilesellerController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function __construct()
{
    $this->middleware('auth');
}


public function index(Request $request)
{
if ($request->ajax()) {
$data = Mobileuser::where('user_type','Seller')->get(['id','first_name','last_name']);
return Datatables::of($data)
->addColumn('action', function($row){

$action = '<a class="btn btn-danger" id="show-mobileseller" data-toggle="modal" data-id='.$row->id.'>Show</a>
<meta name="csrf-token" content="{{ csrf_token() }}">
<a id="delete-mobileseller" data-id='.$row->id.' class="btn btn-danger delete-mobileseller">Delete</a>';

return $action;

})
->rawColumns(['action'])
->make(true);
}

return view('mobilesellers');
}

public function store(Request $request)
{

}

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function show($id)
{
$where = array('id' => $id);
$mobileseller = Mobileuser::where($where)->get(['img','first_name','last_name','email','phone_number','address'])->first();
return Response::json($mobileseller);
//return view('mobilesellers.show',compact('mobileseller'));
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function edit($id)
{

}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function destroy($id)
{
    $edit = Mobileuser::where('id',$id)->first();
    $edit->user_type = 'General User';
    $edit->save();
    return redirect('mobilesellers');
//return redirect()->route('mobilesellers.index');
}

}