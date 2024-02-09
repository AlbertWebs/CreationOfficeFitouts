<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'company'])->name('company');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/center-of-excellence', [App\Http\Controllers\HomeController::class, 'center_of_excellences'])->name('center-of-excellence');
Route::get('/center-of-excellence/{slung}', [App\Http\Controllers\HomeController::class, 'center_of_excellence'])->name('center-of-excellence');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{single}', [App\Http\Controllers\HomeController::class, 'folio'])->name('portfolio');
Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/blog/{slung}', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::post('/submitMessage', [App\Http\Controllers\HomeController::class, 'submitMessage'])->name('submitMessage');


// Auth::routes();

Route::group(['prefix'=>'admin'], function(){

//Login route
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', [App\Http\Controllers\AdminsController::class,'index'])->name('admin.index');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//reset password
Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

//Testimonial
Route::get('/addTestimonial', [App\Http\Controllers\AdminsController::class,'addTestimonial']);
Route::post('/add_Testimonial', [App\Http\Controllers\AdminsController::class,'add_Testimonial']);
Route::get('/testimonials',[App\Http\Controllers\AdminsController::class,'testimonials']);
Route::get('/editTestimonial/{id}', [App\Http\Controllers\AdminsController::class,'editTestimonial']);
Route::get('/deleteTestimonial/{id}', [App\Http\Controllers\AdminsController::class,'deleteTestimonial']);
Route::post('/edit_Testimonial/{id}', [App\Http\Controllers\AdminsController::class,'edit_Testimonial']);

//Clients
Route::get('/addClient', [App\Http\Controllers\AdminsController::class,'addClient']);
Route::post('/add_Client', [App\Http\Controllers\AdminsController::class,'add_Client']);
Route::get('/clients',[App\Http\Controllers\AdminsController::class,'clients']);
Route::get('/editClient/{id}', [App\Http\Controllers\AdminsController::class,'editClient']);
Route::get('/deleteClient/{id}', [App\Http\Controllers\AdminsController::class,'deleteClient']);
Route::post('/edit_Client/{id}', [App\Http\Controllers\AdminsController::class,'edit_Client']);

//Terms Privacy copyright
//copyright
Route::get('/copyright',[App\Http\Controllers\AdminsController::class,'copyright']);
Route::post('/edit_copyright', [App\Http\Controllers\AdminsController::class,'edit_copyright']);
//Privacy
Route::get('/privacy',[App\Http\Controllers\AdminsController::class,'privacy']);
Route::get('/addPrivacy', [App\Http\Controllers\AdminsController::class,'addPrivacy']);
Route::get('/editPrivacy/{id}', [App\Http\Controllers\AdminsController::class,'editPrivacy']);
Route::post('/add_privacy', [App\Http\Controllers\AdminsController::class,'add_privacy']);
Route::get('/delete_privacy/{id}',[App\Http\Controllers\AdminsController::class,'delete_privacy']);
Route::post('/edit_privacy/{id}', [App\Http\Controllers\AdminsController::class,'edit_privacy']);
//Terms
Route::get('/terms',[App\Http\Controllers\AdminsController::class,'terms']);
Route::get('/addTerms', [App\Http\Controllers\AdminsController::class,'addTerms']);
Route::get('/editTerm/{id}', [App\Http\Controllers\AdminsController::class,'editTerm']);
Route::post('/add_term', [App\Http\Controllers\AdminsController::class,'add_term']);
Route::post('/edit_term/{id}', [App\Http\Controllers\AdminsController::class,'edit_term']);
Route::get('/delete_term/{id}',[App\Http\Controllers\AdminsController::class,'delete_term']);
//About
Route::get('/about',[App\Http\Controllers\AdminsController::class,'about']);
Route::post('/about_save', [App\Http\Controllers\AdminsController::class,'about_save']);
//Services
Route::get('/services',[App\Http\Controllers\AdminsController::class,'services']);
Route::get('/deleteService/{id}',[App\Http\Controllers\AdminsController::class,'deleteService']);
Route::post('/edit_Services/{id}', [App\Http\Controllers\AdminsController::class,'edit_Services']);
Route::get('/editServices/{id}', [App\Http\Controllers\AdminsController::class,'editServices']);
Route::get('/addService', [App\Http\Controllers\AdminsController::class,'addService']);
Route::post('/add_Service', [App\Http\Controllers\AdminsController::class,'add_Service']);

//Pricing
Route::get('/pricing',[App\Http\Controllers\AdminsController::class,'pricing']);
Route::get('/deletePricing/{id}',[App\Http\Controllers\AdminsController::class,'deletePricing']);
Route::post('/edit_Pricing/{id}', [App\Http\Controllers\AdminsController::class,'edit_Pricing']);
Route::get('/editPricing/{id}', [App\Http\Controllers\AdminsController::class,'editPricing']);
Route::get('/addPricing', [App\Http\Controllers\AdminsController::class,'addPricing']);
Route::post('/add_Pricing', [App\Http\Controllers\AdminsController::class,'add_Pricing']);

//Porfolio
Route::get('/portfolio',[App\Http\Controllers\AdminsController::class,'portfolio']);
Route::get('/deletePortfolio/{id}',[App\Http\Controllers\AdminsController::class,'deletePortfolio']);
Route::post('/edit_Portfolio/{id}', [App\Http\Controllers\AdminsController::class,'edit_Portfolio']);
Route::get('/editPortfolio/{id}', [App\Http\Controllers\AdminsController::class,'editPortfolio']);
Route::get('/addPortfolio', [App\Http\Controllers\AdminsController::class,'addPortfolio']);
Route::post('/add_Portfolio', [App\Http\Controllers\AdminsController::class,'add_Portfolio']);

//Gallery
Route::get('/gallery',[App\Http\Controllers\AdminsController::class,'gallery']);
Route::get('/editGallery/{id}',[App\Http\Controllers\AdminsController::class,'editGallery']);
Route::get('/deleteGallery/{id}',[App\Http\Controllers\AdminsController::class,'deleteGallery']);
Route::post('/save_gallery/{id}', [App\Http\Controllers\AdminsController::class,'save_gallery']);
Route::get('/addGallery', [App\Http\Controllers\AdminsController::class,'addGallery']);
Route::get('/galleryList', [App\Http\Controllers\AdminsController::class,'galleryList']);
Route::post('/add_Gallery', [App\Http\Controllers\AdminsController::class,'add_Gallery']);

//Slider
Route::get('/slider',[App\Http\Controllers\AdminsController::class,'slider']);
Route::get('/editSlider/{id}',[App\Http\Controllers\AdminsController::class,'editSlider']);
Route::get('/deleteSlider/{id}',[App\Http\Controllers\AdminsController::class,'deleteSlider']);
Route::post('/edit_Slider/{id}', [App\Http\Controllers\AdminsController::class,'edit_Slider']);
Route::get('/addSlider', [App\Http\Controllers\AdminsController::class,'addSlider']);
Route::post('/add_Slider', [App\Http\Controllers\AdminsController::class,'add_Slider']);

//Banner
Route::get('/banner',[App\Http\Controllers\AdminsController::class,'banners']);
Route::get('/editBanner/{id}',[App\Http\Controllers\AdminsController::class,'editBanner']);
Route::post('/edit_Banner/{id}', [App\Http\Controllers\AdminsController::class,'edit_Banner']);

//Pages
Route::get('/pages',[App\Http\Controllers\AdminsController::class,'pages']);
Route::get('/editPage/{id}',[App\Http\Controllers\AdminsController::class,'editPage']);
Route::get('/deletePage/{id}',[App\Http\Controllers\AdminsController::class,'deletePage']);
Route::post('/edit_Page/{id}', [App\Http\Controllers\AdminsController::class,'edit_Page']);
Route::get('/addPage', [App\Http\Controllers\AdminsController::class,'addPage']);
Route::post('/add_Page', [App\Http\Controllers\AdminsController::class,'add_Page']);
Route::post('/set_Page/{name}', [App\Http\Controllers\AdminsController::class,'set_Page']);
Route::get('/setPage/{name}', [App\Http\Controllers\AdminsController::class,'setPage']);

//Files Control
Route::get('/files',[App\Http\Controllers\AdminsController::class,'files']);
Route::get('/editFile/{id}',[App\Http\Controllers\AdminsController::class,'editFile']);
Route::post('/edit_File/{id}',[App\Http\Controllers\AdminsController::class,'edit_File']);

//Priducts
Route::get('/products',[App\Http\Controllers\AdminsController::class,'products']);
Route::get('/editProduct/{id}',[App\Http\Controllers\AdminsController::class,'editProduct']);
Route::get('/deleteProduct/{id}',[App\Http\Controllers\AdminsController::class,'deleteProduct']);
Route::post('/edit_Product/{id}', [App\Http\Controllers\AdminsController::class,'edit_Product']);
Route::get('/addProduct', [App\Http\Controllers\AdminsController::class,'addProduct']);
Route::post('/add_Product', [App\Http\Controllers\AdminsController::class,'add_Product']);


//Admin
Route::get('/admins',[App\Http\Controllers\AdminsController::class,'admins']);
Route::get('/editAdmin/{id}',[App\Http\Controllers\AdminsController::class,'editAdmin']);
Route::get('/deleteAdmin/{id}',[App\Http\Controllers\AdminsController::class,'deleteAdmin']);
Route::post('/edit_Admin/{id}', [App\Http\Controllers\AdminsController::class,'edit_Admin']);
Route::get('/addAdmin', [App\Http\Controllers\AdminsController::class,'addAdmin']);
Route::post('/add_Admin', [App\Http\Controllers\AdminsController::class,'add_Admin']);

//User
Route::get('/users',[App\Http\Controllers\AdminsController::class,'users']);
Route::get('/editUser/{id}',[App\Http\Controllers\AdminsController::class,'editUser']);
Route::get('/deleteUser/{id}',[App\Http\Controllers\AdminsController::class,'deleteUser']);
Route::post('/edit_User/{id}', [App\Http\Controllers\AdminsController::class,'edit_User']);
Route::get('/addUser', [App\Http\Controllers\AdminsController::class,'addUser']);
Route::post('/add_User', [App\Http\Controllers\AdminsController::class,'add_User']);

//Blog Controls
Route::get('/blog',[App\Http\Controllers\AdminsController::class,'blog']);
Route::get('/editBlog/{id}',[App\Http\Controllers\AdminsController::class,'editBlog']);
Route::get('/delete_Blog/{id}',[App\Http\Controllers\AdminsController::class,'delete_Blog']);
Route::post('/edit_Blog/{id}', [App\Http\Controllers\AdminsController::class,'edit_Blog']);
Route::get('/addBlog', [App\Http\Controllers\AdminsController::class,'addBlog']);
Route::post('/add_Blog', [App\Http\Controllers\AdminsController::class,'add_Blog']);
//Categories Control
Route::get('/categories',[App\Http\Controllers\AdminsController::class,'categories']);
Route::get('/editCategories/{id}',[App\Http\Controllers\AdminsController::class,'editCategories']);
Route::get('/deleteCategory/{id}',[App\Http\Controllers\AdminsController::class,'deleteCategory']);
Route::post('/edit_Category/{id}', [App\Http\Controllers\AdminsController::class,'edit_Category']);
Route::get('/addCategory', [App\Http\Controllers\AdminsController::class,'addCategory']);
Route::post('/add_Category', [App\Http\Controllers\AdminsController::class,'add_Category']);

//Service Renreded Control
Route::get('/service_rendered',[App\Http\Controllers\AdminsController::class,'service_rendered']);
Route::get('/editService_rendered/{id}',[App\Http\Controllers\AdminsController::class,'editService_rendered']);
Route::get('/deleteService_rendered/{id}',[App\Http\Controllers\AdminsController::class,'deleteService_rendered']);
Route::post('/edit_Service_rendered/{id}', [App\Http\Controllers\AdminsController::class,'edit_Service_rendered']);
Route::get('/addService_rendered', [App\Http\Controllers\AdminsController::class,'addService_rendered']);
Route::post('/add_Service_rendered', [App\Http\Controllers\AdminsController::class,'add_Service_rendered']);

//Daily
Route::get('/daily',[App\Http\Controllers\AdminsController::class,'daily']);
Route::get('/editDaily/{id}',[App\Http\Controllers\AdminsController::class,'editDaily']);
Route::get('/deleteDaily/{id}',[App\Http\Controllers\AdminsController::class,'deleteDaily']);
Route::post('/edit_Daily/{id}', [App\Http\Controllers\AdminsController::class,'edit_Daily']);
Route::get('/addDaily', [App\Http\Controllers\AdminsController::class,'addDaily']);
Route::post('/add_Daily', [App\Http\Controllers\AdminsController::class,'add_Daily']);


//Sub Categories
Route::get('/subCategories',[App\Http\Controllers\AdminsController::class,'subCategories']);
Route::get('/editSubCategories/{id}',[App\Http\Controllers\AdminsController::class,'editSubCategories']);
Route::get('/deleteSubCategory/{id}',[App\Http\Controllers\AdminsController::class,'deleteSubCategory']);
Route::post('/edit_SubCategory/{id}', [App\Http\Controllers\AdminsController::class,'edit_SubCategory']);
Route::get('/addSubCategory', [App\Http\Controllers\AdminsController::class,'addSubCategory']);
Route::post('/add_SubCategory', [App\Http\Controllers\AdminsController::class,'add_SubCategory']);

//Active Services
Route::get('/traceServices',[App\Http\Controllers\AdminsController::class,'traceServices']);
Route::get('/editTraceServices/{id}',[App\Http\Controllers\AdminsController::class,'editTraceServices']);
Route::get('/deleteTraceServices/{id}',[App\Http\Controllers\AdminsController::class,'deleteTraceServices']);
Route::post('/edit_TraceServices/{id}', [App\Http\Controllers\AdminsController::class,'edit_TraceServices']);
Route::get('/addTraceServices', [App\Http\Controllers\AdminsController::class,'addTraceServices']);
Route::post('/add_TraceServices', [App\Http\Controllers\AdminsController::class,'add_TraceServices']);

// Generic Routes
Route::get('/form',[App\Http\Controllers\AdminsController::class,'form']);
Route::get('/list',[App\Http\Controllers\AdminsController::class,'list']);
Route::get('/formfile',[App\Http\Controllers\AdminsController::class,'formfile']);
Route::get('/formfiletext',[App\Http\Controllers\AdminsController::class,'formfiletext']);

//Payments
Route::get('/payments',[App\Http\Controllers\AdminsController::class,'payments']);

//Notifications
Route::get('/notifications',[App\Http\Controllers\AdminsController::class,'notifications']);
Route::get('/notification/{id}',[App\Http\Controllers\AdminsController::class,'notification']);

//Service Requests
Route::get('/requests',[App\Http\Controllers\AdminsController::class,'quoterequeste']);
Route::get('/markRequest/{id}/{status}/{type}',[App\Http\Controllers\AdminsController::class,'markRequest']);

//Comments
Route::get('/comments',[App\Http\Controllers\AdminsController::class,'comments']);
Route::get('/approve/{id}',[App\Http\Controllers\AdminsController::class,'approve']);
Route::get('/decline/{id}',[App\Http\Controllers\AdminsController::class,'decline']);

// Error Pages
Route::get('/403',[App\Http\Controllers\AdminsController::class,'error403']);
Route::get('/404',[App\Http\Controllers\AdminsController::class,'error404']);
Route::get('/405',[App\Http\Controllers\AdminsController::class,'error405']);
Route::get('/500',[App\Http\Controllers\AdminsController::class,'error500']);
Route::get('/503',[App\Http\Controllers\AdminsController::class,'error503']);

//Updates
Route::get('/updates',[App\Http\Controllers\AdminsController::class,'updates']);
Route::get('/update/{id}',[App\Http\Controllers\AdminsController::class,'update']);
Route::get('/mark/{id}',[App\Http\Controllers\AdminsController::class,'mark']);

// Gallery
Route::get('/gallery',[App\Http\Controllers\AdminsController::class,'gallery']);

//Under Contruction
Route::get('/under_construction',[App\Http\Controllers\AdminsController::class,'under_construction']);

//Wizard
Route::get('/wizard',[App\Http\Controllers\AdminsController::class,'wizard']);

//Maps
Route::get('/maps',[App\Http\Controllers\AdminsController::class,'maps']);
// SiteSettings
Route::get('/sitesettings',[App\Http\Controllers\AdminsController::class,'sitesettings']);
Route::post('/savesitesettings',[App\Http\Controllers\AdminsController::class,'savesitesettings']);
//Messages
Route::get('/allMessages', [App\Http\Controllers\AdminsController::class,'allMessages']);
Route::get('/unread', [App\Http\Controllers\AdminsController::class,'unread']);
Route::get('/read/{id}', [App\Http\Controllers\AdminsController::class,'read']);
Route::post('/reply/{id}', [App\Http\Controllers\AdminsController::class,'reply']);
Route::get('/deleteMessage/{id}', [App\Http\Controllers\AdminsController::class,'deleteMessage']);

//Subscribers
Route::get('/subscribers', [App\Http\Controllers\AdminsController::class,'subscribers']);
Route::get('/mailSubscribers/{email}', [App\Http\Controllers\AdminsController::class,'mailSubscribers']);
Route::get('/mailSubscriber/{email}', [App\Http\Controllers\AdminsController::class,'mailSubscriber']);
Route::get('/deleteSubscriber/{id}', [App\Http\Controllers\AdminsController::class,'deleteSubscriber']);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
