<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubjectController;
use App\Models\Question;
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
    return view('welcome');
});

//Subject

Route::post('/createSubject', [SubjectController::class, 'CreateSubject']);

Route::post('/updateSubject', [SubjectController::class, 'Update']);

Route::post('/DeleteSubject', [SubjectController::class, 'DeleteSubject']);

Route::get('/SubjectList', [SubjectController::class, 'SubjectList']);


//Chapter
Route::post('/createChapter', [ChapterController::class, 'createChapter']);

Route::post('/updateChapter', [ChapterController::class, 'updateChapter']);
