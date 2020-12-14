<?php

namespace App\Http\Controllers;

use App\Mobileuser;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Redirect,Response;

class ApplicationcourierController extends Controller
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
$courier = Application::where('type','Courier')->get();
return view('applicationcouriers',['courier' => $courier]);
}



/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function show($id)
{
$courier = Application::find($id);
return view('applicationcouriers',['courier' => $courier]);
//return view('couriers.show',compact('courier'));
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function edit($id)
{
    $find = Application::where('id', $id)->first(); //select the row with the given id
    $type = $find->user_id;

    $edit = Mobileuser::where('id',$type)->first();
    $edit->user_type = 'Courier';
    $edit->save();
    $find->delete();

    return redirect('applicationcouriers');

    // $data = DB::table('mobile_users')
    // ->join('applications','mobile_users.id','applications.user_id')
    // ->where('mobile_users.id',$id)
    // ->get();
    // print_r($data);
    // $set = 'Courier';
    // $data->user_type = $set;
    // $data->save();
    // return redirect('applicationcouriers');
}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function destroy($id)
{
    $courier = Application::find($id);
    $courier->delete();
    return redirect('applicationcouriers');
//return redirect()->route('couriers.index');
}

}