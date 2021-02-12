<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/Admin', 'test@show');
Route::get('/about',function (){

    return view ('about',['description'=>DB::table( 'abouts' )->get()]);
    
    
});

route::get('/tester','OrderController@index');
Route::get('/cart/finish',function (){

        return view ('finish');
        
        
});

Route::get('/faq',function (){

        return view ('faq',['faq'=>DB::table( 'faqs' )->get()]);
        
        
});
Route::get('/testSMS/create','testnexmo@store');
Route::get('/cart/create','AddressControler@create');
Route::post('/cart','AddressControler@store')->name('cart');
Route::get('/cart/create',function (){
$user=App\user::find(Auth::user()->id);


            
    return view ('/cart/create',['address'=> $user->address ] );

});


//Route::post('/testSMS','testnexmo@store')->name('testSMS');



       Route::get('/payment',function (){

            return view ('payment',['restaurant'=>DB::table( 'restaurants' )->get()]);
            
            
});
Route::get('/menu',function (){


            
    return view ('menu',['item'=>DB::table( 'items' )->get(),'restaurant'=>DB::table( 'restaurants' )->get(),'foodcategory'=>DB::table( 'foodcategory' )->get(),'extra'=>DB::table('extra')->get() ] );

});


Route::get('/changestatus/{order_id}','ChangeStatusController@index')->name('change_status');
Route::get('/additem/{item}','OrderController@add')->name('addtocart');
Route::get('/removeitem/{item}','OrderController@remove')->name('removefromcart');

Route::get('/payment1','PaymentController@store')->name('gopayment');


            Route::get('/cart',function (){

                return view ('cart');
                
                
 });
 Route::get('/finish',function (){

                return view ('finish');
                
                
 });
 Route::get('/items/{id}','test@show');
 
Route::get('/',function (){

return view ('index',['restaurant'=>DB::table( 'restaurants' )->get()]);


});
//Route::get('/admin','RestController@create');
Route::get('/admin',function (){


            
    return view ('admin',['hey'=>DB::table( 'items' )->get(),'foodcategory'=>DB::table( 'foodcategory' )->get(),'order'=>DB::table('selectedfoods')->get(),'order1'=>DB::table('orders')->get() ] );

});
Route::post('/RestInfo','RestController@store')->name('RestInfo');
Route::post('/AddItem','AddNewCat@store')->name('AddItem');
Route::post('/addfaq','faqController@store')->name('addfaq');
Route::post('/AboutInfo','AbouController@store')->name('AboutInfo');
Route::get('/UpdateCat','AddNewCat@edit')->name('UpdateCat');

/*Route::get('/profile/{name}', function () {

    $name=request('name');
   
    return view('login',['name'=>$name]);

});
*/

Route::get('/login/facebook', 'SocialAuthFacebookController@redirect');
Route::get('/login/facebook/callback', 'SocialAuthFacebookController@callback');

Auth::routes();
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'LogoutController@index')->name('logout');
