<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Post;

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

Route::get('/', function () {
    $posts = Post::join('categories', 'categories.id', '=', 'posts.category_id')
        ->get(['posts.id', 'posts.title', 'posts.image', 'categories.created_at as date', 'categories.name as category']);
    return view('index', compact('posts'));
})->name('/');
Route::get('/categories', function () {
    return view('categories');
})->name('categories');
Route::get('/blog/category', function () {
    return view('blog');
})->name('categories');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('signin', function () {
    return view('signin');
})->name('signin');

Route::get('signup', function () {
    return view('signup');
})->name('signup');

Route::prefix('admin')->group(function () {
    Route::get('/',function ()
    {
        return redirect()->route('dashboard');
    });
    Route::get('dashboard', function () {
        return view('admin/index');
    })->name('dashboard');
    Route::prefix('category')->group(function () {
        Route::get('list', [CategoryController::class, 'index'])->name('list_category');
        Route::get('add', [CategoryController::class, 'create'])->name('add_category');
        Route::post('store', [CategoryController::class, 'store'])->name('store_category');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit_category');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('update_category');
        Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy_category');
    });
    Route::prefix('tag')->group(function () {
        Route::get('add', function () {
            return view('admin/add_tags');
        })->name('add_tags');
        Route::get('list', function () {
            return view('admin/list_tags');
        })->name('list_tags');
    });
    Route::prefix('post')->group(function () {
        Route::get('add', function () {
            return view('admin/add_post');
        })->name('add_post');
        Route::get('list', function () {
            return view('admin/list_post');
        })->name('list_post');
    });
});

// Route::get('/signup', [StudentController::class, 'signup'])->name('signup');
// Route::get('/signin', [StudentController::class, 'signin'])->name('signin');

Route::get('/newstudent', [StudentController::class, 'newstudent'])->name('newstudent');
Route::post('/addstudent', [StudentController::class, 'add'])->name('addstudent');
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
Route::get('/update/{id}', function () {
    return redirect('/');
});
