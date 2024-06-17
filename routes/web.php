<?php

use App\Livewire\About;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\BecomeExpert;
use App\Livewire\ContactUs;
use App\Livewire\Gemini\Test;
use App\Livewire\Home;
use App\Livewire\User\AddPlans;
use App\Livewire\User\ComputePlan;
use App\Livewire\User\Dashboard;
use App\Livewire\User\PlanDetails;
use App\Livewire\User\Save;
use App\Livewire\User\Savings;
use App\Livewire\User\SavingsGoalComponent;
use App\Livewire\User\ViewPlans;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', Home::class)->name('index');
Route::get('/about', About::class)->name('about-us');
Route::get('/contact', ContactUs::class)->name('contact-us');
Route::get('/become-expert', BecomeExpert::class)->name('become.expert');
Route::get('/account/login', Login::class)->name('login');
Route::get('/account/register', Register::class)->name('signup');


Route::get('/gemini', Test::class)->name('gemini');



// Define Authoried User Roles
Route::middleware(['role:user'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('user.dashboard');

    // Plans
    Route::get('/plans', ViewPlans::class)->name('plans');
    Route::get('/add-plan', AddPlans::class)->name('add.plan');
    Route::get('/plan/{id}', PlanDetails::class)->name('plan.details');

    // Compute Itinerary
    Route::get('/compute/plan/{id}', ComputePlan::class)->name('compute');


    Route::get('/logout', [Dashboard::class, 'logout'])->name('user.logout');

    Route::get('savings/goals/{id}/create', SavingsGoalComponent::class)->name('savings.create');
    Route::get('savings', Savings::class)->name('savings');
    Route::get('savings/{id}/add', Save::class)->name('save');
});
