<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
Route::get('/postSelection',function() {
    return view('postSelection');
});

//質問
Route::get('/questions', [QuestionController::class, 'index'])->name('question.index');
Route::get('/questions/create', [QuestionController::class, 'create'])->name('question.create');
Route::post('/questions/store', [QuestionController::class, 'store'])->name('question.store');

//記事
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');