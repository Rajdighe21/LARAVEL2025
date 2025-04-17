<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\OneToManyRelationController;
use App\Http\Controllers\OneToOneRelationCotroller;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StandardController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/main', 'learn-blade.app');
Route::view('/jstemplateInheritance', 'learn-blade.inheritanceJs');

// --------------------------------------------------------------------------------------------------------------------
// LEARN QUERY BUILDER
Route::get('/showStates', [StateController::class, 'index'])->name('showState');

// ADD STATE USING QUERY BUILDER
Route::get('/addStates', [StateController::class, 'addStates'])->name('addStates');


// STORE STATE USING QUERY BUILDER
Route::post('/storeStates', [StateController::class, 'storeStates'])->name('storeStates');

// EDIT BUTTON USING QUERY BUILDER
Route::get('/editStates/{id}', [StateController::class, 'edit'])->name('editState');

// UPDATE VALUES USING POST METHODS
Route::post('/updateStates', [StateController::class, 'updateStates'])->name('updateStates');


// DELETE VALUES USING QUERY BUILDER
Route::delete('/deleteStates/{id}', [StateController::class, 'deleteStates'])->name('deleteStates');

// LEARN JOIN IN QUERY BUILDER
Route::get('/showStudent', [BookController::class, 'index'])->name('showStudent');

// UNION IN QUERY BUILDER
Route::get('/unionMethod', [BookController::class, 'unionMethod'])->name('unionMethod');

// WHEN METHOD USE IN QUERY BUILDER
Route::get('/whenMethod', [BookController::class, 'whenMethod'])->name('whenMethod');


// ---------------------------------------------------------------------------------------------------------------------

// RAW SQL QUERIES IN LARAVEL
Route::get('/showStandards', [StandardController::class, 'index'])->name('showStandards');


// RAW QUERIES WITH QUERY BUILDER
Route::get('/viewStandars', [StandardController::class, 'view'])->name('viewStandars');


// -----------------------------------------------------------------------------------------------------------------------


// CREATE RESOURCE CONTROLLER

Route::resource('/subject', SubjectController::class);


// -----------------------------------------------------------------------------------------------------------------------


// LEARN ELOQUENT ORM

Route::resource('/division', DivisionController::class);


// ONE TO ONE RELATIONSHIP
Route::resource('/One-To-One', OneToOneRelationCotroller::class);


// ONE TO MANY RELATION
Route::get('/One-To-Many', [OneToManyRelationController::class,'index'])->name('One-To-Many.index');
Route::get('/One-To-Many/create', [OneToManyRelationController::class,'create'])->name('One-To-Many.create');


// MANY TO MANY RELATION
Route::resource('/many-to-many',ManyToManyController::class);
