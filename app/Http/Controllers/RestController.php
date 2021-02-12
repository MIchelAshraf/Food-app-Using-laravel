<?php

namespace App\Http\Controllers;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\foodcategory;
use DB;
use App\selectedfood2;
use App\itemadd;
use App\order;
class RestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { //$selectedfood= new selectedfood2;
        //return view('admin');
//$data['foodcategroy']=foodcategory::all();
//$data['orderID']=selectedfood2::all();
//$data['hey']=itemadd::all();
//die(var_dump($data));
//return view('admin',['data'=>$data]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//die('hery controller');
        //$rest= new Restaurant;
$rest =Restaurant::find(1);
          $request->validate([
'restaurant_name'=> 'required',
'Description'=> 'required',
'Telephone'=> 'required|numeric',
'Email'=> 'required',
 'city_booking'=> 'required',
'country'=>'required',

'street_1'=>'required',
'street_2'=>'required',
'state_booking'=>'required',
'postal_code'=>'required|numeric',








]);
$rest->restaurant_name = $request->restaurant_name;
$rest->Description= $request->Description;
$rest->Telephone = $request->Telephone;
$rest->Email = $request->Email;
$rest->country = $request->country;
$rest->street_1 = $request->street_1;
$rest->street_2 = $request->street_2;
$rest->city_booking = $request->city_booking;
$rest->state_booking = $request->state_booking;
$rest->postal_code = $request->postal_code;
$rest->adminID = Auth::user()->id;
$rest->save();
return redirect()->intended('/admin');
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
