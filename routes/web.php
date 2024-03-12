<?php

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

Route::get('/', function () {
    return view('home');
});


// Organization Links
Route::get('/organization/about-us', function(){
    return view('organization.about');
});

Route::get('/organization/faq', function(){
    return view('organization.faq');
});

Route::get('/organization/contact', function(){
    return view('organization.contact');
});

//Services Pages
Route::get('/services/community-participation', function(){
    return view('services.community-participation');
});

Route::get('/services/support-coordination', function(){
    return view('services.support-coordination');
});

Route::get('/services/group-center-activities', function(){
    return view('services.group-center-activities');
});

Route::get('/services/daily-household-task-assistance', function(){
    return view('services.daily-household-task-assistance');
});

Route::get('/services/travel-transport-assistance', function(){
    return view('services.travel-transport-assistance');
});

Route::get('/services/life-skills-development', function(){
    return view('services.life-skills-development');
});

Route::get('/services/assistance-with-personal-care', function(){
    return view('services.assistance-with-personal-care');
});

Route::get('/services/assisting-life-stage-transitions', function(){
    return view('services.assisting-life-stage-transitions');
});

Route::get('/services/supported-independent-living', function(){
    return view('services.supported-independent-living');
});

Route::get('/services/specialist-disability-accommodation', function(){
    return view('services.specialist-disability-accommodation');
});

Route::get('/services/community-nursing', function(){
    return view('services.community-nursing');
});

Route::get('/services/mental-health-support', function(){
    return view('services.mental-health-support');
});

Route::get('/services/respite-care', function(){
    return view('services.respite-care');
});