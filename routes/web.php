<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\examplecontroller;
use App\Http\Controllers\placeController;
use App\Http\Controllers\CarControler;
use App\Http\Controllers\newsController;
use App\Http\Controllers\newController;
use App\Http\Controllers\addcarController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('test', function () {
 //  return 'welcome to my first ';
//});
//Route::get('/user/{name}/{age?}', function ($name, $age=0) {
   // if($age==0){
   // return 'the user name is:'.$name ;}
    //else{
  //  return 'the user name is:'.$name .'<br>'.'the age is : '.$age;}
    

//})->whereIn('name',['hana' ,'mahmoud']);


//Route::prefix('webStructure')-> group(function (){
//Route::get('/',function(){
 //   return' home page';
//});
//Route::get('About',function(){
   // return'about page';
//});
//Route::get('ContactUs',function(){
  //  return'contact Us page';
//});

//Route::prefix('Support')-> group(function (){
  //  Route::get('/',function(){
    //    return' support page';
   // });
//Route::get('chat',function(){
 //   return'chat page';
//});
//Route::get('call',function(){
 //   return'call page';
//});
//Route::get('Ticket',function(){
  //  return'Ticket page';
//});});

//Route::prefix('Training')->group(function(){
  //  Route::get('/',function(){
    //    return' Training page';
    //});
    //Route::get('HR',function(){
      //  return'HR page';
   // });
    //Route::get('ICT',function(){
    //    return'ICT page';
   // });
   // Route::get('Marketing',function(){
     //   return'marketing page';
    //});
    //Route::get('Logistics',function(){
      //  return'Logistics page';
    //});
//});
//});
//Route::fallback(function(){
 //  return redirect('/'); 
//});
Route::get('cv',function(){
   return  view ('cv');
});

Route::get('login',function(){
   return  view ('login');
});
Route::post('receive', function(){
return 'data received';
})->name('receive');


////
Route::get('addPlace',function(){
  return view ('addPlace');
 }); 
Route::get('place',[examplecontroller::class,'place']);
//Route::post('add',[placeController::class,'add']);
Route::post('addPlace',[placeController::class,'store'])->name('addPlace');
Route::get('placeList',[placeController::class,'index'])->name('placeList');
Route::get('placeList/{id}',[placeController::class,'destroy']);

////
Route::get('upload',[examplecontroller::class,'showUpload']);
Route::post('upload',[examplecontroller::class,'Insert'])->name('upload');

Route::get('session',[examplecontroller::class,'mysession']);

//Route::get('addnews',function(){
// return view ('addnews');
//});
Route::post('newshow', function(){
return 'data received';
})->name('newshow');
//Route::get('news',[newsController::class,'news']);
//Route::post('newshow',[newsController::class,'showNews'])->name('newshow');
//Route::post('news',[newController::class,'store'])->name('news');
Route::get('NEWS',[newController::class,'index']);
Route::get('editNews/{id}',[newController::class,'edit']);
Route::put('UpdateNews/{id}',[newController::class,'update'])->name('UpdateNews');
Route::get('NewsDetails/{id}',[newController::class,'show'])->name('NewsDetails');
Route::get('deleteNews/{id}',[newController::class,'destroy']);
Route::get('trashedNews',[newControler::class,'trashed']);
Route::get('test',[DataController::class,'test']);

//cars table
  Route::get('addCar',function(){
  return view ('addCar');
     });
  Route::post('input', function(){
  return 'data received';
   })->name('input');
   Route::get('Car',[Car::class,'Car']) ->name('Car');
   Route::get('CARS',[CarControler::class,'index'])->middleware('verified');
   Route::post('input',[CarControler::class,'store']) ->name('input');
   Route::get('editCars/{id}',[carControler::class,'edit']);
   Route::put('UpdateCar/{id}',[carControler::class,'update'])->name('UpdateCar');
   Route::get('carDetails/{id}',[carControler::class,'show'])->name('CarDetails');
   Route::get('deleteCar/{id}',[carControler::class,'destroy']);
   Route::get('trashed',[CarControler::class,'trashed']);
   Auth::routes(['verify'=>true]);
   Route::get ('mail',[MailController::class,'mailform']);
  Route::post('sendMail',[MailController::class,'maildata'])->name('sendMail');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// routes/web.php
Route::group(
  [

'prefix' => LaravelLocalization::setLocale(),
      'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){  
      Route::get('addnews',function(){
        return view ('addnews');
       });
        
      Route::get('news',[newsController::class,'news']);
      Route::post('newshow',[newsController::class,'showNews'])->name('newshow');
      Route::post('news',[newController::class,'store'])->name('news');
      Route::get('addCar',function(){
        return view ('addCar');
           });
        Route::post('input', function(){
        return 'data received';
         })->name('input');
         Route::get('Car',[Car::class,'Car']) ->name('Car');
         Route::get('CARS',[CarControler::class,'index'])->middleware('verified');
         Route::post('input',[CarControler::class,'store']) ->name('input');
      
    });



/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
