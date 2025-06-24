    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\DoctorMiddleware;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Models\Appointment;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorAvailabilityController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});
Route::get('/news/{slug}', function ($slug) {
    // You can fetch the article from the database here if needed
    return view('news-details', ['slug' => $slug]);
});

Route::post('/appointment', [AppointmentController::class, 'store']);


//These routes are for the user (patient)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
      if(Auth::user()->role == 'admin') {
           return view('Admin.index');
        } else if(Auth::user()->role == 'doctor') {
             return redirect('/DoctorDashboard');
        } else {
            return view('dashboard');
        }
    })->name('dashboard');

    Route::get('/Status', function () {
        return view('User.Status');
    });

    Route::get('/becomeadoctor', function () {
        return view('becomeadoctor');
    });
    Route::post('requestfordoctor',[UserController::class, 'requestForDoctor'])->name('requestfordoctor');
});


//Admin Middleware Routes
Route::middleware([AdminMiddleware::class])->group(function(){

// Route::get('/widget', function () {
//     $doctors = \App\Models\User::where('role', 'doctor')->get();
//     return view('Admin.widget', compact('doctors'));
// });




// Route::get('/homepage', function () {
//     return view('Admin.index');
// });
Route::get('/forms', function () {
    return view('Admin.form');
});
Route::get('/table',function () {
    return view('Admin.table');

});
Route::get('/signin',function () {
    return view ('Admin.signin');
});
Route::get('/signup',function () {
    return view ('Admin.signup');
});
Route::get('/button', function () {
    return view('Admin.button');
});
Route::get('/typography', function () {
    return view('Admin.typography');
});
Route::get('/element', function () {
    return view('Admin.element');
});

Route::get('/doctors',[AdminController::class, 'getdoctors']);

Route::post('/doctoraccept/{doctor}/',[AdminController::class, 'doctorAccept'])->name('doctoraccept');
Route::post('/doctorreject/{doctor}/',[AdminController::class, 'doctorReject'])->name('doctorreject');

Route::get('/approveddoctors',[AdminController::class, 'approvedDoctors'])->name('approveddoctors');
});

//Doctor Middleware Routes
Route::middleware([DoctorMiddleware::class])->group(function(){
Route::get('/DoctorDashboard', [DoctorController::class, 'appointmentRequest']);
Route::post('/doctor/availability', [DoctorAvailabilityController::class, 'store']);

  Route::get('/doctor/profile', [DoctorController::class, 'profile'])->name('doctor.profile');
    Route::post('/doctor/profile', [DoctorController::class, 'updateProfile'])->name('doctor.profile.update');
});
