<?php

use App\Http\Controllers\CreateContentController;
use App\Http\Controllers\updateController;
use App\Models\createContent;
use Illuminate\Support\Facades\Route;

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

    return view('allContent' , [
        'allContent' => createContent::paginate(5),
    ]);
});

Route::get('/manage/content', function () {

    return view('contentManage' , [
        'allContent' =>  createContent::paginate(5)
    ]);
});



Route::get('/create/content', function () {
    return view('createContent');
});


Route::post('create/content' , [CreateContentController::class , 'create'])->name('create/content');

Route::get('/delete/content/{id}', function ($id) {

    createContent::find($id)->delete();
    return redirect()->back() ;
});

Route::get('/edit/content/{id}', function ($id) {

    $content = createContent::find($id);
    return view('updateConten' , [
        'content' => $content
    ]) ;
});

Route::post('update/content/{id}' , function($id)
{
    $title   = request()->title ;
    $message = request()->message ;

    $findContent = createContent::find($id);
    $findContent->title = $title ;
    $findContent->message = $message ;
    $findContent->save();

    return redirect('/manage/content');
});
