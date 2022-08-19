<?php

use Illuminate\Support\Facades\Route;
use App\Model\Notes;
use App\Model\Syllabus;
use App\Models\Timetable;
use App\Models\Exampaper;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\ExampaperController;

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
Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/assignment', function () {
    return view('assignment');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/events', function () {
    return view('events');
});


//Route::get('/notes', function () {
   // $notes = Notes::all();
   //echo "<pre>";
   //print_r($notes->toArray());

//});

{
Route::get('/notesform',[NotesController::class,'notesform'])->name('notes.form');
Route::get('/notesform/view',[NotesController::class,'view'])->name('notes.view');
Route::post('/notesform/view',[NotesController::class,'store'])->name('notes.store');
Route::get('/notes/delete/{id}',[NotesController::class,'delete'])->name('notes.delete');
Route::get('/notes/edit/{id}',[NotesController::class,'edit'])->name('notes.edit');
Route::get('/notes/update/{id}',[NotesController::class,'update'])->name('notes.update');
Route::get('/notes.show', [NotesController::class,'show'])->name('notes.show');
Route::get('/download/{file}', [NotesController::class,'download'])->name('notes.download');
//Route::post('/get/{fileNam}', [NotesController::class,'get'])->name('notes.get');
}

{
Route::get('/syllabusform',[SyllabusController::class,'syllabusform'])->name('syllabus.form');
Route::get('/syllabusform-view',[SyllabusController::class,'view'])->name('syllabus.view');
Route::post('/syllabusform-view',[SyllabusController::class,'store'])->name('syllabus.store');
Route::get('/syllabus/delete/{id}',[SyllabusController::class,'delete'])->name('syllabus.delete');
Route::get('/syllabus/edit/{id}',[SyllabusController::class,'edit'])->name('syllabus.edit');
Route::get('/syllabus.show', [SyllabusController::class,'show'])->name('syllabus.show');
Route::get('/download{syllabusfile}', [SyllabusController::class,'download'])->name('syllabus.download');
}

{
Route::get('/timetableform',[TimetableController::class,'timetableform'])->name('timetable.form');
Route::get('/timetableform-view',[TimetableController::class,'view'])->name('timetable.view');
Route::post('/timetableform-view',[TimetableController::class,'store'])->name('timetable.store');
Route::get('/timetable/delete/{id}',[TimetableController::class,'delete'])->name('timetable.delete');
Route::get('/timetable/edit/{id}',[TimetableController::class,'edit'])->name('timetable.edit');
Route::get('/timetable.show', [TimetableController::class,'show'])->name('timetable.show');
Route::get('/download{timetablefile}', [TimetableController::class,'download'])->name('timetable.download');
}

{
Route::get('/exampaperform',[ExampaperController::class,'exampaperform'])->name('exampaper.form');
Route::get('/exampaperform-view',[ExampaperController::class,'view'])->name('exampaper.view');
Route::post('/exampaperform-view',[ExampaperController::class,'store'])->name('exampaper.store');
Route::get('/exampaper/delete/{id}',[ExampaperController::class,'delete'])->name('exampaper.delete');
Route::get('/exampaper/edit/{id}',[ExampaperController::class,'edit'])->name('exampaper.edit');
Route::get('/exampaper.show', [ExampaperController::class,'show'])->name('exampaper.show');
Route::get('/download{exampaper_file}', [ExampaperController::class,'download'])->name('exampaper.download');
}


Route::get('/semester', function () {
    return view('semester');
});


Route::get('/semester', function () {
    return view('semester');
});


Route::get('/semester', function () {
    return view('semester');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/course-single', function () {
    return view('course-single');
});

Route::get('/notes', function () {
    return view('notes');
});






Route::get('/syllabus', function () {
    return view('syllabus');
});

Route::get('/exampaper', function () {
    return view('exampaper');
});

Route::get('/timetable', function () {
    return view('timetable');
});




Route::get('/login', function () {
    return view('login');
});





Route::get('/admin', function () {
    return view('admin');
});






Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/test', function () {
    return view('notestest');
});


Route::get('/login', function () {
    return view('auth.login');
});

