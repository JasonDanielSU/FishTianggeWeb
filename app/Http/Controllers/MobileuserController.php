<?php

namespace App\Http\Controllers;

use App\Mobileuser;
use Illuminate\Http\Request;
use DataTables;
use Redirect,Response;

class MobileuserController extends Controller
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
$data = Mobileuser::get(['id','first_name','last_name']);
return Datatables::of($data)
->addColumn('action', function($row){

$action = '<a class="btn btn-danger" id="show-mobileuser" data-toggle="modal" data-id='.$row->id.'>Show</a>
<meta name="csrf-token" content="{{ csrf_token() }}">
<a id="delete-mobileuser" data-id='.$row->id.' class="btn btn-danger delete-mobileuser">Delete</a>';

return $action;

})
->rawColumns(['action'])
->make(true);
}

return view('mobileusers');
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
$mobileuser = Mobileuser::where($where)->get(['img','first_name','last_name','email','phone_number','address'])->first();
return Response::json($mobileuser);
//return view('mobileusers.show',compact('mobileuser'));
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
$mobileuser = Mobileuser::where('id',$id)->delete();
return Response::json($mobileuser);
//return redirect()->route('mobileusers.index');
}

}