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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

Route::get("/lienhe", function(){ return view('lienhe'); });

use App\Mail\GuiEmail;
Route::post("/guilienhe", function(Illuminate\Http\Request $request){ 
  $arr = request()->post(); 
  $ht = trim(strip_tags( $arr['ht'] ));
  $em = trim(strip_tags( $arr['em'] ));
  $nd = trim(strip_tags( $arr['nd'] ));
  $adminEmail = 'địachỉAdmin@gmail.com'; //Gửi thư đến ban quản trị
  Mail::mailer('smtp')->to( $adminEmail )
  ->send( new GuiEmail($ht, $em, $nd) );

   $request->session()->flash('thongbao', "Đã gửi mail");
   return redirect("thongbao"); 
});

Route::get("/thongbao", function(Illuminate\Http\Request $request){ 
    $tb = $request->session()->get('thongbao');
    return view('thongbao',['thongbao'=> $tb]); 
  });
// Route::get('/lienhe', function() {
//     return view('landing');
// });

// Route::post('/guilienhe', function(Illuminate\Http\Request $request) {
//     $ht = $request->input('ht');
//     $em = $request->input('em');
//     $nd = $request->input('nd');
    
//     $adminEmail = 'madlife06112001@gmail.com';
    
//     Mail::to($adminEmail)->send(new ContactMail($ht, $em, $nd));
    
//     $request->session()->flash('thongbao', "Đã gửi mail");
    
//     return redirect('/thongbao');
// });
Route::get('/', function () {
    return view('welcome');
});

