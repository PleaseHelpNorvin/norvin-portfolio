<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectAdminController;
use App\Http\Controllers\AuthController;

use App\Livewire\Pages\Home;
use App\Livewire\Auth\Login;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Projects;
use App\Livewire\Pages\ProjectShow;
use App\Livewire\Pages\Contact;

use App\Livewire\Admin\Projects as AdminProjects;
use App\Livewire\Admin\ProjectCreateForm;
use App\Livewire\Admin\ProjectEditForm;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (no auth)
|--------------------------------------------------------------------------
*/

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/projects/{project}', ProjectShow::class)->name('projects.show');
Route::get('/Contact', Contact::class)->name('contact');
/*
|--------------------------------------------------------------------------
| AUTH ROUTES (excluded in AdminOnly middleware)
|--------------------------------------------------------------------------
*/

Route::get('/login', Login::class)->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (AUTO-PROTECTED by GLOBAL AdminOnly middleware)
|--------------------------------------------------------------------------
*/

Route::middleware(['admin'])->prefix('admin')->group(function () {
    // Admin Livewire UI
    Route::get('/projects', AdminProjects::class)->name('admin.projects');
    Route::get('/projects/create', ProjectCreateForm::class)->name('admin.projects.create');
    Route::get('/projects/edit/{1}', ProjectEditForm::class)->name('admin.projects.edit');

    // Admin backend actions
    Route::post('/projects', [ProjectAdminController::class, 'store']);
    Route::put('/projects/{project}', [ProjectAdminController::class, 'update']);
    Route::delete('/projects/{project}', [ProjectAdminController::class, 'destroy']);
});