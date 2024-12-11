<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminCertificateController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home.index');


// Group untuk rute admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::resource('/dashboard/about', AdminAboutController::class);
    Route::get('/about', [AdminAboutController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.about');
    Route::get('/about/create', [AdminAboutController::class, 'create'])->middleware(['auth', 'admin'])->name('admin.about.create');
    Route::get('/about/{id}', [AdminAboutController::class, 'show'])->middleware(['auth', 'admin'])->name('admin.about.show');
    Route::post('/about', [AdminAboutController::class, 'store'])->middleware(['auth', 'admin'])->name('admin.about.store');
    Route::delete('/about/{id}', [AdminAboutController::class, 'destroy'])->middleware(['auth', 'admin'])->name('admin.about.destroy');
    Route::get('/about/{id}/edit', [AdminAboutController::class, 'edit'])->middleware(['auth', 'admin'])->name('admin.about.edit');
    Route::put('/about/{id}', [AdminAboutController::class, 'update'])->middleware(['auth', 'admin'])->name('admin.about.update');
    
    Route::get('/skill', [AdminSkillController::class, 'index'])->name('admin.skill');
    Route::get('/skill/create', [AdminSkillController::class, 'create'])->name('admin.skill.create');
    Route::post('/skill', [AdminSkillController::class, 'store'])->name('admin.skill.store');
    Route::get('/skill/{id}/edit', [AdminSkillController::class, 'edit'])->name('admin.skill.edit');
    Route::put('/skill/{id}', [AdminSkillController::class, 'update'])->name('admin.skill.update');
    Route::delete('/skill/{id}', [AdminSkillController::class, 'destroy'])->name('admin.skill.destroy');

    Route::get('/contact', [AdminContactController::class, 'index'])->name('admin.contact');
    Route::get('/contact/create', [AdminContactController::class, 'create'])->name('admin.contact.create');
    Route::get('/contact/{id}', [AdminContactController::class, 'show'])->name('admin.contact.show');
    Route::post('/contact', [AdminContactController::class, 'store'])->name('admin.contact.store');
    Route::get('/contact/{id}/edit', [AdminContactController::class, 'edit'])->name('admin.contact.edit');
    Route::put('/contact/{id}', [AdminContactController::class, 'update'])->name('admin.contact.update');
    Route::delete('/contact/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.destroy');
  
    Route::get('/certificate', [AdminCertificateController::class, 'index'])->name('admin.certificate.index');
    Route::get('/certificate/create', [AdminCertificateController::class, 'create'])->name('admin.certificate.create');
    Route::post('/certificate/store', [AdminCertificateController::class, 'store'])->name('admin.certificate.store');
    Route::get('/certificate/{id}/edit', [AdminCertificateController::class, 'edit'])->name('admin.certificate.edit');
    Route::put('/certificate/{id}', [AdminCertificateController::class, 'update'])->name('admin.certificate.update');
    Route::delete('/certificate/{id}', [AdminCertificateController::class, 'destroy'])->name('admin.certificate.destroy');

    Route::get('/project', [AdminProjectController::class, 'index'])->name('admin.project.index');
    Route::get('/project/create', [AdminProjectController::class, 'create'])->name('admin.project.create');
    Route::get('/project/{id}', [AdminProjectController::class, 'show'])->name('admin.project.show');
    Route::post('/project/store', [AdminprojectController::class, 'store'])->name('admin.project.store');
    Route::delete('/project/{id}', [AdminProjectController::class, 'destroy'])->name('admin.project.destroy');
    Route::get('/project/{id}/edit', [AdminProjectController::class, 'edit'])->name('admin.project.edit');
    Route::put('/project/{id}', [AdminProjectController::class, 'update'])->name('admin.project.update');
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/aboutt', function () {
    return view('aboutt');
})->middleware(['auth', 'verified'])->name('aboutt');

// Rute untuk profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard',[AdminController::class, 'index'])->middleware('auth', 'admin');
Route::resource('admin/dashboard/skill', AdminSkillController::class);
Route::resource('admin/dashboard/contact', AdminContactController::class);
Route::resource('admin/dashboard/certificate', AdminCertificateController::class);
Route::resource('admin/dashboard/Project', AdminProjectController::class);



require __DIR__ . '/auth.php';

