<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::destroy('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//Test
Route::get('test', function () {
    $category = Category::create([
        'name' => 'jm',
    ]);
    sleep(1);

    Category::where('id', $category->id)->update([
        'name' => 'manon',
    ]);
    sleep(1);

    Category::where('id', $category->id)->delete();
});
