<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/postSelection',function() {
    return view('postSelection');
});

//ログイン
Route::get('/login', function() {return view('login');});
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users/store', [UserController::class, 'store'])->name('user.store');

//質問
Route::get('/questions', [QuestionController::class, 'index'])->name('question.index');
Route::get('/questions/create', [QuestionController::class, 'create'])->name('question.create');
Route::post('/questions/store', [QuestionController::class, 'store'])->name('question.store');

//記事
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('article.store');

//レシピ
Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipe.create');
Route::post('/recipes/store', [RecipeController::class, 'store'])->name('recipe.store');


