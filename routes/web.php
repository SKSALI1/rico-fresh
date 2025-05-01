<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Portfolio;
use App\Livewire\Pages\Services;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\Test;

//frontend groups
Route::get('/', function () {
    return view('livewire.pages.home');
});


Route::get('/about',About::class)->name('about.index');
Route::get('/services', Services::class)->name('service.index');
Route::get('/portfolio', Portfolio::class)->name('portfolio.index');
Route::get('/blog', Blog::class)->name('blog.index');
Route::get('/contact', Contact::class)->name('contact.index');
//frontend groups



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
