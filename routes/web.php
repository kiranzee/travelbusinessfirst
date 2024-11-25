<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\FlightDestinationController;
use App\Http\Controllers\TicketEnquiryController;
use App\Http\Controllers\HotelEnquiryController;
use App\Http\Controllers\TopThingsToDoController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\ExploreDestinationController;
use App\Http\Controllers\BestOfActivityController;
use App\Http\Controllers\ClientSayController;
use App\Http\Controllers\FlightPartnerController;
use App\Http\Controllers\FlightEnquiryController;
use App\Http\Controllers\HolidayEnquiryController;



Route::get('/', [App\Http\Controllers\HomepageController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/hotel', [App\Http\Controllers\HomepageController::class, 'hotel'])->name('hotel');
Route::get('/aboutus', [App\Http\Controllers\HomepageController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [App\Http\Controllers\HomepageController::class, 'contactus'])->name('contactus');
Route::get('/termscondition', [App\Http\Controllers\HomepageController::class, 'termscondition'])->name('termscondition');
Route::get('/privacypolicy', [App\Http\Controllers\HomepageController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/foreigntraveladvice', [App\Http\Controllers\HomepageController::class, 'foreigntraveladvice'])->name('foreigntraveladvice');
Route::get('/emirates-airlines',[App\Http\Controllers\HomepageController::class, 'emirates'])->name('emirates-airlines');
Route::get('/etihad-airways',[App\Http\Controllers\HomepageController::class, 'etihad'])->name('etihad-airways');
Route::get('/qatar-airways',[App\Http\Controllers\HomepageController::class, 'qatar'])->name('qatar-airways');
Route::get('/british-airways',[App\Http\Controllers\HomepageController::class, 'british'])->name('british-airways');
Route::get('/singapore-airlines',[App\Http\Controllers\HomepageController::class, 'singapore'])->name('singapore-airlines');
Route::get('/virgin-atlantic',[App\Http\Controllers\HomepageController::class, 'virgin'])->name('virgin-atlantic');

Route::get('/typeahead_destination',[App\Http\Controllers\HomepageController::class,'typeahead_destination'])->name('typeahead_destination');
Auth::routes();
Route::get('/search-results', [App\Http\Controllers\FlightController::class, 'index'])->name('search-results.index');
// Route to display flight details
Route::get('/flight-detail/{flightId}', [App\Http\Controllers\FlightController::class, 'showFlightDetails'])->name('flight-detail');
Route::get('/holiday-deals/{cityname}/{holidayId}', [App\Http\Controllers\BestOfActivityController::class, 'showHolidayDeals'])->name('holiday-deal');
Route::get('/flight', [App\Http\Controllers\FlightController::class, 'flightpage'])->name('flight');

Route::get('/{cityname}',[App\Http\Controllers\FlightCitySearchController::class, 'citySearch'])->name('flight-city-search.citySearch');

Route::post('/submit-query', [FlightEnquiryController::class, 'submitQuery'])->name('submit-query');
Route::post('/holiday-enquiry', [HolidayEnquiryController::class, 'index'])->name('holiday-enquiry');
Route::post('/thankyou-ticketflightequiry', [TicketEnquiryController::class, 'ticketFlightEnquiry'])->name('thankyou.ticketflightequiry');
Route::get('/thankyou-ticketflightequiry', [TicketEnquiryController::class, 'index'])->name('thankyou.flightequiry');
Route::post('/thankyou', [HotelEnquiryController::class, 'hotelEnquiry'])->name('thankyou.hotelenquiry');
Route::get('/thank-you',[App\Http\Controllers\TicketEnquiryController::class, 'index'])->name('thank-you.index');


Route::middleware('auth')->group(function (){

    Route::get('/dashboard/index',[App\Http\Controllers\DashboardController::class, 'topsales'])->name('dashboard');
    
    
 // Route to display the form
Route::get('/flight-destination/create', [App\Http\Controllers\FlightDestinationController::class, 'create'])->name('flight-destination.create');
Route::get('/flight-destination/list', [App\Http\Controllers\FlightDestinationController::class, 'index'])->name('flight-destinations.index');
Route::resource('flightdestination', FlightDestinationController::class);
// Route to handle form submission
Route::post('/flight-destination', [App\Http\Controllers\FlightDestinationController::class, 'store'])->name('flight-destination.store');   

Route::get('/topthingstodo/create', [App\Http\Controllers\TopThingsToDoController::class, 'create'])->name('topthingstodo.create');
Route::get('/topthings/list', [App\Http\Controllers\TopThingsToDoController::class, 'index'])->name('topthingstodo.index');
// Route to handle form submission
Route::post('/topthingstodo', [App\Http\Controllers\TopThingsToDoController::class, 'store'])->name('topthingstodo.store');
Route::resource('topthingstodo', TopThingsToDoController::class);

Route::get('/hero/create', [App\Http\Controllers\HeroSectionController::class, 'create'])->name('hero.create');
Route::post('/hero', [App\Http\Controllers\HeroSectionController::class, 'store'])->name('hero.store');
Route::get('/hero/list', [App\Http\Controllers\HeroSectionController::class, 'index'])->name('hero.index');
Route::resource('herosection', HeroSectionController::class);


Route::get('/exploredestination/create', [App\Http\Controllers\ExploreDestinationController::class, 'create'])->name('exploredestination.create');
Route::post('/exploredestination', [App\Http\Controllers\ExploreDestinationController::class, 'store'])->name('exploredestination.store');
Route::get('/exploredestination/list', [App\Http\Controllers\ExploreDestinationController::class, 'index'])->name('exploredestination.index');
Route::resource('exploredestination', ExploreDestinationController::class);

Route::get('/bestofactivity/create', [App\Http\Controllers\BestOfActivityController::class, 'create'])->name('bestofactivity.create');
Route::post('/bestofactivity', [App\Http\Controllers\BestOfActivityController::class, 'store'])->name('bestofactivity.store');
Route::get('/bestofactivity/list', [App\Http\Controllers\BestOfActivityController::class, 'index'])->name('bestofactivity.main');
Route::resource('bestofactivity', BestOfActivityController::class);

Route::get('/clientsay/create', [App\Http\Controllers\ClientSayController::class, 'create'])->name('clientsay.create');
Route::post('/clientsay', [App\Http\Controllers\ClientSayController::class, 'store'])->name('clientsay.store');
Route::get('/clientsay/list', [App\Http\Controllers\ClientSayController::class, 'index'])->name('clientsay.index');
Route::resource('clientsay', ClientSayController::class);

Route::get('/flightpartner/create', [App\Http\Controllers\FlightPartnerController::class, 'create'])->name('flightpartner.create');
Route::post('/flightpartner', [App\Http\Controllers\FlightPartnerController::class, 'store'])->name('flightpartner.store');
Route::get('/flightpartner/list', [App\Http\Controllers\FlightPartnerController::class, 'index'])->name('flightpartner.index');
Route::resource('flightpartner', FlightPartnerController::class);

Route::get('/ticketenquiry/index',[App\Http\Controllers\CustomerEnquiryController::class, 'ticket'])->name('ticketenquiry');

Route::post('/update-ticket-status', [App\Http\Controllers\CustomerEnquiryController::class, 'updateStatus'])->name('update.ticket.status');
Route::post('/update-ticket-sales', [App\Http\Controllers\CustomerEnquiryController::class, 'updateSalesAmount'])->name('update.ticket.sales');




Route::get('/cityflightenquiry/index',[App\Http\Controllers\CustomerEnquiryController::class, 'cityflight'])->name('cityflightenquiry');
Route::get('/holidaydealenquiry/index',[App\Http\Controllers\CustomerEnquiryController::class, 'holidaydeal'])->name('holidaydealenquiry');
Route::get('/hotelenquiry/index',[App\Http\Controllers\CustomerEnquiryController::class, 'hotel'])->name('hotelenquiry');
});
