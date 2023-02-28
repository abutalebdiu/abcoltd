<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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





Route::get('/clear', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});





Route::get('/','FrontendController@index')->name('frontend');





Route::get('client/register','FrontendController@clientregister')->name('client.user.register');
Route::post('client/register/store','FrontendController@clientregisterstore')->name('client.user.register.store');
Route::get('client/login','FrontendController@clientlogin')->name('client.user.login');
Route::post('client/user/login/dashboard','FrontendController@clientLogindeshboard')->name('client.user.dashboard');


Route::get('client/password/forgot','FrontendController@passwordforgot')->name('client.password.forgot');

Route::post('client/password/reset','FrontendController@passwordreset')->name('client.password.reset');




Route::get('logout','HomeController@logout')->name('logout');




/* =========== about route ============= */


Route::get('management','FrontendController@management')->name('management');
Route::get('companyprofile','FrontendController@companyprofile')->name('companyprofile');
Route::get('branches','FrontendController@branches')->name('branches');


Route::get('notices','FrontendController@notices')->name('notices');
Route::get('careers','FrontendController@careers')->name('careers');
route::post('career/store','FrontendController@careerstore')->name('career.store');
Route::get('contact','FrontendController@contact')->name('contact');
Route::post('message/contact/store','FrontendController@contactmessagestore')->name('message.contact.store');
Route::post('complain/message/store','FrontendController@complainmessagestore')->name('complain.message.store');
Route::get('single.bo.opening','FrontendController@singleboopening')->name('single.bo.open');
Route::get('link','FrontendController@link')->name('link');
Route::post('link/post','FrontendController@link_post')->name('link.post');

Route::get('bo-closer','FrontendController@boCloser')->name('bo.closer');
Route::post('bo-closer/post','FrontendController@boCloserPost')->name('bo.closer.post');



Route::get('fees','FrontendController@fees')->name('fees');

Route::get('balance/inquery/show','FrontendController@balanceinqueryform')->name('balance.inquery.form');
Route::get('deposit/show','FrontendController@depositshow')->name('deposit.show');
Route::post('deposit/post','FrontendController@depositpost')->name('deposit.post');
Route::get('withdraw/request/show','FrontendController@withdrawshow')->name('withdraw.request.show');
Route::post('withdraw/request/post','FrontendController@withdrawpost')->name('withdraw.request.post');


Route::get('ipo','FrontendController@ipo')->name('ipo');
Route::get('apply/ipo','FrontendController@applyipo')->name('apply.ipo');
Route::post('apply/child/ipo/post','FrontendController@childipopost')->name('child.ipo.post');
Route::post('apply/ipo/post','FrontendController@applyipopost')->name('apply.ipo.post');

Route::get('galllery','FrontendController@gallery')->name('gallery');


Route::get('bomodify','FrontendController@bomodify')->name('bomodify');
// Route::post('bomodify/store/front','FrontendController@bomodifystore')->name('bocloser.store.front');
Route::post('bomodify/store/front','FrontendController@bomodifystore')->name('bomodify.store.front');




Route::get('dse/mobile/application','FrontendController@des_mobile_application')->name('mobile.application');
Route::post('dse/mobile/application/store','FrontendController@des_mobile_applicationstore')->name('mobile.application.store');




Route::get('single/boopening','FrontendController@singleboopening')->name('boopening.single');
Route::post('single/boopening/store','FrontendController@boopeningstore')->name('boopening.single.store');

Route::get('joint/boopening','FrontendController@jointboopening')->name('boopening.joint');



Route::get('blog','FrontendController@blog')->name('blog');
Route::get('blog/details','FrontendController@blog_details')->name('blog.details');

Route::get('investor/login','FrontendController@investorlogin')->name('investorlogin');


Route::get("/blog/all", "FrontendController@blogall")->name("blog.all");
Route::get("/blog/category/{slug}", "FrontendController@blog_category")->name("blog.category");
Route::get("/blog/details/{slug}", "FrontendController@blogdetails")->name("blog.details");


Route::get("/notiv/view/{id}", "FrontendController@noticeview")->name("notice.view");






/* ===========================================================
                this is for clients
  ===========================================================*/

 Route::get('client/logout','Clients\DashboardController@logout')->name('client.logout');

Route::group(['prefix'=>'client','namespace'=>'Clients','middleware'=>['auth','client']],function(){

    Route::get('dashboard','DashboardController@index')->name('client.dashboard');


    Route::get('profile','ProfileController@index')->name('client.profile');
    Route::get('profile/edit','ProfileController@edit')->name('client.profile.edit');
    Route::post('profile/update','ProfileController@update')->name('client.profile.update');


    Route::get('balance/inquery','ProfileController@balanceinquery')->name('balance.inquery');
    Route::get('withdraw/request','ProfileController@withdrawrequest')->name('withdraw.request');

    Route::get('deposit','ProfileController@deposit')->name('deposit');
    Route::post('deposit/store','ProfileController@depositstore')->name('deposit.store');


    Route::get('clients/child/code','DashboardController@clientcode')->name('client.child.code');



});




/* ============================================================
                this is for admin
  =============================================================*/

Route::group(['middleware'=>['auth','admin']],function(){
  Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['prefix'=>'client','middleware'=>['auth','admin']],function(){

    Route::get('list','ClientController@index')->name('client.list');
    Route::post('client/import','ClientController@balanceimport')->name('client.import');
    Route::get('client/balance/reports','ClientController@clientreport')->name('client.balance.reports');
    Route::get('admin/bo/closer','ClientController@adminBoCloser')->name('admin.bo.closer');
    Route::get('borequest/download/{id}','ClientController@boRequestDonload')->name('borequest.download');

});


Route::group(['prefix'=>'balance','middleware'=>['auth','admin']],function(){

    Route::get('list','BalanceController@index')->name('balance.list');
    Route::post('balance/import','BalanceController@balanceimport')->name('balance.import');

});



Route::group(['prefix'=>'deposit','middleware'=>['auth','admin']],function(){

  Route::get('index','DepositController@index')->name('deposit.index');
  Route::get('request','DepositController@request')->name('deposit.request');
  Route::get('approve','DepositController@approve')->name('deposit.approve');
  Route::get('reject','DepositController@reject')->name('deposit.reject');
  Route::get('show/{id}','DepositController@show')->name('backend.deposit.show');
  Route::post('change/status/{id}','DepositController@changestatus')->name('deposit.change.status');
  Route::get('deposit/destroy/{id}','DepositController@destroy')->name('deposit.destroy');
  
  Route::get('deposit/export','DepositController@deposit')->name('deposit.deposit');

});



Route::group(['prefix'=>'withdraw','middleware'=>['auth','admin']],function(){



  Route::get('index','WithdrawController@index')->name('withdraw.index');
  
  route::get('/request','WithdrawController@withdrawrequest')->name('withdraw.request');
  Route::get('complect','WithdrawController@complect')->name('withdraw.complect');
  Route::get('/accept','WithdrawController@accept')->name('withdraw.accept');
  Route::get('/reject','WithdrawController@reject')->name('withdraw.reject');
  Route::post('/change/status/{id}','WithdrawController@changestatus')->name('withdraw.change.status');
  Route::get('destroy/{id}','WithdrawController@destroy')->name('withdraw.destroy');
  Route::get('show/{id}','WithdrawController@show')->name('withdraw.show');
  Route::get('preview/{id}','WithdrawController@preview')->name('withdraw.preview');
  

});

Route::group(['prefix'=>'sms','namespace'=>'Backend\Sms','middleware'=>['auth','admin']],function(){
  Route::get('custom/message','SmsController@custommessage')->name('custom.message');
  Route::get('custom/message/bo','SmsController@custommessagebo')->name('custom.message.bo');

});















Route::group(['prefix'=>'admin/user','namespace'=>'Backend\User','middleware'=>['auth','admin']],function(){
      Route::get('index','UserController@index')->name('user.index');
      Route::get('create','UserController@create')->name('user.create');
      Route::post('store','UserController@store')->name('user.store');
      Route::get('show/{id}','UserController@show')->name('user.show');
      Route::get('edit/{id}','UserController@edit')->name('user.edit');
      Route::post('update/{id}','UserController@update')->name('user.update');
      Route::get('destroy/{id}','UserController@destroy')->name('user.destroy');
      
      
      Route::get('hard/delete/{id}','UserController@harddelete')->name('user.delete');
      
      
       Route::get('request/index','UserController@userrequest')->name('user.request.index');
       Route::get('request/approve','UserController@userapprove')->name('user.request.approve');
       Route::get('request/reject','UserController@userreject')->name('user.request.reject');
       Route::post('request/change/{id}','UserController@adminuserrequestchange')->name('admin.user.request.change');
      


      Route::get('profile','ProfileController@index')->name('user.profile');
      Route::get('profile/edit','ProfileController@edit')->name('user.profile.edit');
      Route::post('profile/update','ProfileController@update')->name('user.profile.update');
      Route::get('setting','ProfileController@setting')->name('user.setting');
      Route::post('setting/update','ProfileController@changepassword')->name('user.setting.update');

});




Route::group(['prefix'=>'division','namespace'=>'Backend\Area','middleware'=>['auth','admin']],function()
	{
  		Route::get('index','DivisionController@index')->name('division.index');
  		Route::get('create','DivisionController@create')->name('division.create');
  		Route::post('store','DivisionController@store')->name('division.store');
  		Route::get('show/{id}','DivisionController@show')->name('division.show');
  		Route::get('edit/{id}','DivisionController@edit')->name('division.edit');
  		Route::post('update/{id}','DivisionController@update')->name('division.update');
  		Route::get('destroy/{id}','DivisionController@destroy')->name('division.destroy');
});


Route::group(['prefix'=>'district','namespace'=>'Backend\Area','middleware'=>['auth','admin']],function()
	{
  		Route::get('index','DistrictController@index')->name('district.index');
  		Route::get('create','DistrictController@create')->name('district.create');
  		Route::post('store','DistrictController@store')->name('district.store');
  		Route::get('show/{id}','DistrictController@show')->name('district.show');
  		Route::get('edit/{id}','DistrictController@edit')->name('district.edit');
  		Route::post('update/{id}','DistrictController@update')->name('district.update');
  		Route::get('destroy/{id}','DistrictController@destroy')->name('district.destroy');
});


Route::group(['prefix'=>'thana','namespace'=>'Backend\Area','middleware'=>['auth','admin']],function()
	{
  		Route::get('index','ThanaController@index')->name('thana.index');
  		Route::get('create','ThanaController@create')->name('thana.create');
  		Route::post('store','ThanaController@store')->name('thana.store');
  		Route::get('show/{id}','ThanaController@show')->name('thana.show');
  		Route::get('edit/{id}','ThanaController@edit')->name('thana.edit');
  		Route::post('update/{id}','ThanaController@update')->name('thana.update');
  		Route::get('destroy/{id}','ThanaController@destroy')->name('thana.destroy');
});



Route::group(['prefix'=>'website','namespace'=>'Backend\Setting','middleware'=>['auth','admin']],function()
  {
      Route::get('index','WebsiteSettingController@index')->name('website.setting.index');
      Route::get('create','WebsiteSettingController@create')->name('website.setting.create');
      Route::post('store','WebsiteSettingController@store')->name('website.setting.store');
      Route::get('show/{id}','WebsiteSettingController@show')->name('website.setting.show');
      Route::get('edit/','WebsiteSettingController@edit')->name('website.setting.edit');
      Route::post('update','WebsiteSettingController@update')->name('website.setting.update');
      Route::get('destroy/{id}','WebsiteSettingController@destroy')->name('website.setting.destroy');
      
      
      Route::get('management/index','WebsiteSettingController@management')->name('website.management.index');
      Route::get('management/edit','WebsiteSettingController@managementedit')->name('website.management.edit');
      Route::post('management/update','WebsiteSettingController@managementupdate')->name('website.management.update');
      
});


 Route::group([ 'prefix' => '/slider','middleware'=>['auth','admin']], function() {

    Route::get('view','SliderController@index')->name('slider.index');
    Route::get('create','SliderController@create')->name('slider.create');
    Route::post('store','SliderController@store')->name('slider.store');
    Route::get('edit/{id}','SliderController@edit')->name('slider.edit');
    Route::post('update/{id}','SliderController@update')->name('slider.update');
    Route::get('destroy/{id}','SliderController@destroy')->name('slider.destroy');

});



Route::group([ 'prefix' => '/gallery','middleware'=>['auth','admin']], function() {
    Route::get('view','GalleryController@index')->name('gallery.index');
    Route::get('create','GalleryController@create')->name('gallery.create');
    Route::post('store','GalleryController@store')->name('gallery.store');
    Route::get('edit/{id}','GalleryController@edit')->name('gallery.edit');
    Route::post('update/{id}','GalleryController@update')->name('gallery.update');
    Route::get('destroy/{id}','GalleryController@destroy')->name('gallery.destroy');

});

Route::group([ 'prefix' => '/gallery'], function() {
    Route::get('show','GalleryController@show')->name('gallery.show');


});





Route::group(['prefix'=>'social-media','namespace'=>'Backend\Setting','middleware'=>['auth','admin']],function()
  {
      Route::get('index','SocialMediaController@index')->name('social.index');
      Route::get('create','SocialMediaController@create')->name('social.create');
      Route::post('store','SocialMediaController@store')->name('social.store');
      Route::get('show/{id}','SocialMediaController@show')->name('social.show');
      Route::get('edit/{id}','SocialMediaController@edit')->name('social.edit');
      Route::post('update/{id}','SocialMediaController@update')->name('social.update');
      Route::get('destroy/{id}','SocialMediaController@destroy')->name('social.destroy');

});



  Route::group(['prefix'=>'contact','middleware'=>['auth','admin']],function (){
        Route::get('index','ContactController@index')->name('contact.index');
        Route::get('show/{id}','ContactController@show')->name('contact.show');
        Route::get('destroy/{id}','ContactController@destroy')->name('contact.destroy');
  });

  Route::group(['prefix'=>'notice','middleware'=>['auth','admin']],function (){
        Route::get('index','NoticeController@index')->name('notice.index');
        Route::get('create','NoticeController@create')->name('notice.create');
        Route::post('store','NoticeController@store')->name('notice.store');
        Route::get('edit/{id}','NoticeController@edit')->name('notice.edit');
        Route::get('show/{id}','NoticeController@show')->name('notice.show');
        Route::post('update/{id}','NoticeController@update')->name('notice.update');
        Route::get('destroy/{id}','NoticeController@destroy')->name('notice.destroy');
  });


  Route::group(['prefix'=>'job','middleware'=>['auth','admin']],function (){
        Route::get('index','JobController@index')->name('job.index');
        Route::get('create','JobController@create')->name('job.create');
        Route::post('store','JobController@store')->name('job.store');
        Route::get('edit/{id}','JobController@edit')->name('job.edit');
        Route::get('show/{id}','JobController@show')->name('job.show');
        Route::post('update/{id}','JobController@update')->name('job.update');
        Route::get('destroy/{id}','JobController@destroy')->name('job.destroy');
  });


  Route::group(['prefix'=>'ipo','middleware'=>['auth','admin']],function (){
        Route::get('index','IPOController@index')->name('ipo.index');
        Route::get('create','IPOController@create')->name('ipo.create');
        Route::post('admin/store','IPOController@store')->name('ipo.admin.store');
        Route::get('edit/{id}','IPOController@edit')->name('ipo.admin.edit');
        Route::get('show/{id}','IPOController@show')->name('ipo.show');
        Route::post('update/{id}','IPOController@update')->name('ipo.admin.update');
        Route::get('destroy/{id}','IPOController@destroy')->name('ipo.admin.destroy');
  });

   Route::group(['prefix'=>'bomodify','middleware'=>['auth','admin']],function (){
        Route::get('index','BOModifyController@index')->name('bomodify.index');
        Route::get('create','BOModifyController@create')->name('bomodify.create');
        Route::post('store','BOModifyController@store')->name('ipo.store');
        Route::get('edit/{id}','BOModifyController@edit')->name('ipo.edit');
        Route::get('show/{id}','BOModifyController@show')->name('ipo.show');
        Route::post('update/{id}','BOModifyController@update')->name('ipo.update');
        Route::get('destroy/{id}','BOModifyController@destroy')->name('bomodify.destroy');


        Route::get('download/{id}','BOModifyController@downloadpdf')->name('bomodify.download');
  });




  Route::group(['prefix'=>'mobile/app','middleware'=>['auth','admin']],function (){
        Route::get('index','MobileAppController@index')->name('mobile.app.index');
        Route::get('create','MobileAppController@create')->name('mobile.app.create');
        Route::post('store','MobileAppController@store')->name('mobile.app.store');
        Route::get('edit/{id}','MobileAppController@edit')->name('mobile.app.edit');
        Route::get('show/{id}','MobileAppController@show')->name('mobile.app.show');
        Route::post('update/{id}','MobileAppController@update')->name('mobile.app.update');
        Route::get('destroy/{id}','MobileAppController@destroy')->name('mobile.app.destroy');

        Route::get('download/{id}','MobileAppController@downloadpdf')->name('mobile.app.download');
  });




  Route::group(['prefix'=>'complain','middleware'=>['auth','admin']],function (){
        Route::get('index','ComplainController@index')->name('complain.index');
        Route::get('show/{id}','ComplainController@show')->name('complain.show');
        Route::get('destroy/{id}','ComplainController@destroy')->name('complain.destroy');
  });

//bokul


  Route::group(['prefix'=>'boo/open/list','middleware'=>['auth','admin']],function (){
        Route::get('index','BOOpenController@index')->name('booopenlist.index');
        Route::get('show/{id}','BOOpenController@show')->name('booopenlist.show');
        Route::get('change/status/{id}','BOOpenController@show')->name('booopenlist.change.status');
        Route::get('download/{id}','BOOpenController@boopenddownload')->name('booopenlist.download');
        Route::get('destroy/{id}','BOOpenController@destroy')->name('booopenlist.destroy');

  });





        //blog category
    Route::group(['prefix'=>'admin/blog/category','namespace'=>'Backend\Blogs','middleware'=>['auth','admin']],function (){
        Route::get("/index", "BlogCategoryController@index")->name("blog.category.index");
        Route::get("/create", "BlogCategoryController@create")->name("blog.category.create");
        Route::get("/edit/{id}", "BlogCategoryController@edit")->name("blog.category.edit");
        Route::post("/update/{id}", "BlogCategoryController@update")->name("blog.category.update");
        Route::post("/create/post", "BlogCategoryController@store")->name("blog.category.store");
        Route::get("/destroy/{id}", "BlogCategoryController@destroy")->name("blog.category.destroy");
    });
    //blog
        Route::group(['prefix'=>'admin/blog','namespace'=>'Backend\Blogs','middleware'=>['auth','admin']],function (){
        Route::get("/index", "BlogController@index")->name("admin.blog.index");
        Route::get("/show/{id}", "BlogController@show")->name("admin.blog.show");
        Route::get("/create", "BlogController@create")->name("admin.blog.create");
        Route::get("/edit/{id}", "BlogController@edit")->name("admin.blog.edit");
        Route::post("/update/{id}", "BlogController@update")->name("admin.blog.update");
        Route::post("/create/post", "BlogController@store")->name("admin.blog.store");
        Route::get("/destroy/{id}", "BlogController@destroy")->name("admin.blog.destroy");
    });
    
    
    Route::group(['prefix'=>'sms','namespace'=>'Backend\Customnumber','middleware'=>['auth','admin']],function (){
      Route::post("/post", "CustomNumberController@store")->name("sms.custom.number.store");
      Route::post("/mobile/import", "CustomNumberController@mobileimport")->name("mobile.import");
      Route::get("/destroy/{id}", "CustomNumberController@destroy")->name("sms.custom.number.destroy");
 
    });


    Route::group(['prefix'=>'admin/child-ipo','middleware'=>['auth','admin']],function (){
      Route::get("/index", "ChildIpoController@index")->name("admin.child-ipo.index");
      Route::get("/approve", "ChildIpoController@approve")->name("admin.child-ipo.approve");
      Route::get("/reject", "ChildIpoController@reject")->name("admin.child-ipo.reject");
      Route::post("/change/update/{id}", "ChildIpoController@changeupdate")->name("admin.child-ipo.status.update");

    });


      Route::group(['prefix'=>'admin/apply-ipo','middleware'=>['auth','admin']],function (){
      Route::get("/index", "ApplyIpoController@index")->name("admin.apply-ipo.index");
      Route::get("/approve", "ApplyIpoController@approve")->name("admin.apply-ipo.approve");
      Route::get("/reject", "ApplyIpoController@reject")->name("admin.apply-ipo.reject");



      Route::post("/apply-ipo/export", "ApplyIpoController@applyipoexport")->name("admin.apply-ipo.export");



      Route::post("/change/update/{id}", "ApplyIpoController@changeupdate")->name("admin.apply-ipo.status.update");


});




    Route::group(['prefix'=>'sms','namespace'=>'Backend\Customnumber','middleware'=>['auth','admin']],function (){
      Route::post("/post", "CustomNumberController@store")->name("sms.custom.number.store");
      Route::get("/destroy/{id}", "CustomNumberController@destroy")->name("sms.custom.number.destroy");

      Route::post('custom/number/import','CustomNumberController@numberimport')->name('custom.number.import');
     

    });



Route::group(['namespace'=>'Backend','middleware'=>['auth','admin']], function() {
    Route::get('trading/time','TradingTimeController@index')->name('trading.time.index');
    Route::get('trading/time/create','TradingTimeController@create')->name('trading.time.create');
    Route::get('trading/time/edit/{id}','TradingTimeController@edit')->name('trading.time.edit');
    Route::post('trading/time/update/{id}','TradingTimeController@update')->name('trading.time.update');
    Route::get('trading/time/destroy/{id}','TradingTimeController@destroy')->name('trading.time.destroy');
    Route::post('trading/time/post','TradingTimeController@store')->name('trading.time.store');

});


