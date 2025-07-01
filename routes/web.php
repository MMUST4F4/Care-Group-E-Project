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
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Models\cities;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ComplaintController;

Route::get('/', [HomeController::class, 'index']);


Route::get('/news/{news}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
Route::post('/appointment', [AppointmentController::class, 'store'])->middleware('auth:sanctum')->name('appointment.store');


//These routes are for the user (patient)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
            
      if(Auth::user()->role == 'admin') {
            $appointments = Appointment::get();
            return view('Admin.index', compact('appointments'));
        } else if(Auth::user()->role == 'doctor') {
             return redirect('/DoctorDashboard');
        } else {
            return view('dashboard');
        }
    })->name('dashboard');

    Route::get('/Status', function () {
        return view('User.Status');
    });

   Route::get('/testimonials',function(){
    return view('User.testimonial');
   });
   Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

    Route::get('/becomeadoctor', function () {
        $cities = cities::get();

        return view('becomeadoctor',compact('cities'));
    });
    Route::post('requestfordoctor',[UserController::class, 'requestForDoctor'])->name('requestfordoctor');
  Route::get('/complaint', [ComplaintController::class, 'create'])->name('complaint.create');
   Route::post('/complaint', [ComplaintController::class, 'store'])->name('complaint.store');
Route::get('/myappointments',[AppointmentController::class,('myappointments')])->name('myappointments');
Route::get('/downloadPDF',[AppointmentController::class,('downloadPDF')])->name('downloadPDF');

});

 
//Admin Middleware Routes
Route::middleware([AdminMiddleware::class])->group(function(){

Route::get('/widget', function () {
    $doctors = \App\Models\User::where('role', 'doctor')->get();
    return view('Admin.widget', compact('doctors'));
});
Route::get('/complainsec', [ComplaintController::class, 'index'])->name('complaint.index');


Route::resource('news', \App\Http\Controllers\NewsController::class)->except(['show']);

Route::get('/cities', [AdminController::class, 'getCities']);

Route::delete('/deleteCity/{city}', [AdminController::class, 'deleteCity'])->name('admin.deleteCity');


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

Route::get('/addcities',function(){
    return view('admin.addcities');

});

Route::post('/addcity',[AdminController::class,('addcity')]);

});

//Doctor Middleware Routes
Route::middleware([DoctorMiddleware::class])->group(function(){
Route::get('/DoctorDashboard', [DoctorController::class, 'appointmentRequest']);
Route::post('/doctor/availability', [DoctorAvailabilityController::class, 'store']);

  Route::get('/doctor/profile', [DoctorController::class, 'profile'])->name('doctor.profile');
    Route::post('/doctor/profile', [DoctorController::class, 'updateProfile'])->name('doctor.profile.update');
Route::post('/appointment/accept/{appointment}', [DoctorController::class, 'acceptAppointment'])->name('appointment.accept');
Route::post('/appointment/reject/{appointment}', [DoctorController::class, 'rejectAppointment'])->name('appointment.reject');


});



Route::post('/getdoctors',[UserController::class,('getdoctorsoncity')]);

Route::get('/viewallappointments', [AppointmentController::class, 'viewAllAppointments'])->name('view.all.appointments');