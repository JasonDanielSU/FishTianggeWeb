<?php

namespace App\Http\Controllers;

use App\Mobileuser;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Redirect,Response;

class ApplicationsellerController extends Controller
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
$seller = Application::where('type','Seller')->get();
return view('applicationsellers',['seller' => $seller]);
}



/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function show($id)
{
$seller = Application::find($id);
return view('applicationsellers',['seller' => $seller]);
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
    $edit->user_type = 'Seller';
    $edit->save();
    $find->delete();
    return redirect('applicationsellers');

    // $data = DB::table('mobile_users')
    // ->join('applications','mobile_users.id','applications.user_id')
    // ->where('mobile_users.id',$id)
    // ->get();
    // print_r($data);
    // $set = 'Seller';
    // $data->user_type = $set;
    // $data->save();
    // return redirect('applicationsellers');
}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function destroy($id)
{
    $seller = Application::find($id);
    $seller->delete();
    return redirect('applicationsellers');
//return redirect()->route('couriers.index');
}

}