<?php

namespace App\Http\Controllers;
use App\extra;
use App\foodcategory;
use App\itemadd;
use Illuminate\Http\Request;

class AddNewCat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    { if ($request->menu_category=="") 
{
   $request->validate([
'menu_item_title'=> 'required',
'menu_item_description'=> 'required',
'menu_item_title_price'=> 'required|numeric',
'price1'=> '|numeric',
 'extra1'=> '',
]);


$item = new itemadd;
$item->Name=$request->menu_item_title;
$item->Description=$request->menu_item_description;
$item->Price=$request->menu_item_title_price;
$value=$request->oldCat;
$item->CategoryID=$value;
$item->save();

return redirect()->intended('/admin');
}
elseif($request->oldCat=="") {
   $request->validate([
'menu_item_title'=> 'required',
'menu_item_description'=> 'required',
'menu_item_title_price'=> 'required|numeric',
'price1'=> 'required|numeric',
 'extra1'=> 'required',
'menu_category'=>'required',
]);
$cat = new foodcategory;
$cat->Name = $request->menu_category;
$cat->Description = 'hello';
$cat->save();


$item = new itemadd;
$item->Name=$request->menu_item_title;
$item->Description=$request->menu_item_description;
$item->Price=$request->menu_item_title_price;
$item->CategoryID=$cat->id;
$item->save();



        $extra1 = new extra;
$extra1->Name=$request->extra1;
$extra1->Price=$request->price1;
$extra1->itemID=$item->id;
$extra1->save(); }


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
    public function edit(Request $request)
    {$value=$request->PreviousItem;

       
$id=$value;

$f =itemadd::find($id);
$f->Name=$request->updateItemName;
$f->Price=$request->updateItemPrice;
$f->save();
return redirect()->intended('/admin');
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
