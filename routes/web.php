<?php
// Route::get('/', function(){
//     return view('welcome');
// });
Route::get('/','frontEnd\HomeController@index');
Route::get('/about-cilt','frontEnd\AboutusController@index');
Route::get('/cilt-board','frontEnd\AboutusController@ciltboardindex');
Route::get('ciltboardsingleinfo/{id}','frontEnd\AboutusController@ciltboardsingleinfo');
Route::get('member-overview','frontEnd\MembershipController@index');
Route::get('member-wilet','frontEnd\MembershipController@wiletindex');
Route::get('member-yp','frontEnd\MembershipController@ypindex');
Route::get('member-corporate','frontEnd\MembershipController@corporateindex');

Route::get('education-course','frontEnd\EducationController@index');
Route::get('education-knowledge','frontEnd\EducationController@knowledgeindex');
Route::get('education-download','frontEnd\EducationController@downloadindex');

Route::get('single-course/{id}','frontEnd\EducationController@singlecourseindex');

Route::get('news','frontEnd\NewsController@index');
Route::get('single-news/{id}','frontEnd\NewsController@singlenews');
Route::get('event','frontEnd\EventController@index');
Route::get('single-event/{id}','frontEnd\EventController@singleevent');

Route::resource('contact','frontEnd\ContactController');

 Route::get('contact-us','frontEnd\ContactController@index');
 Route::post('contactmessage/','frontEnd\ContactController@store')->name('contact.store');
 Route::post('subscribe/','frontEnd\ContactController@subscribe');

 


Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'authorize']], function(){
    Route::get('/welcome', function(){
        return view('backEnd.welcome');
    });

    Route::group(['prefix' => 'home'], function(){
        Route::resource('cilthome','backEnd\HomeController');
        Route::post('sociallinkupdate','backEnd\HomeController@sociallinkupdate');
        Route::resource('main-sliders','backEnd\MainsliderController');
        Route::get('sliderimgedit/{id}','backEnd\MainsliderController@show');
        Route::post('updatemainslider','backEnd\MainsliderController@update');
        Route::get('deletesliderimg/{id}','backEnd\MainsliderController@destroy');
        Route::resource('cilt-bangladesh','backEnd\CiltbangladeshController');
        Route::post('updatecltibangladesh','backEnd\CiltbangladeshController@update');
        Route::get('cilt-bd-bottom','backEnd\CiltbangladeshController@ciltbottomshow')->name('cilt-bangladesh.ciltbottom');
        Route::post('cilt-bd-bottom','backEnd\CiltbangladeshController@storeciltbottom')->name('cilt-bangladesh.store');
        Route::get('cltibottomedit/{id}','backEnd\CiltbangladeshController@edit');
        Route::post('updatecltibottom','backEnd\CiltbangladeshController@updatecltibottomimg');
        Route::get('deletecltbottomimg/{id}','backEnd\CiltbangladeshController@destroy');
        Route::resource('professional','backEnd\ProfessionalforumController');
        Route::post('updateprofessionalforum','backEnd\ProfessionalforumController@updateprofessionalforum');
        Route::post('updatelogisticforum','backEnd\ProfessionalforumController@updatelogisticforum');
        Route::get('footerlogo/','backEnd\ProfessionalforumController@footerlogo')->name('footer.footerlogo');
        Route::post('footerlogoupdate/','backEnd\ProfessionalforumController@footerlogoupdate');
        });
        Route::group(['prefix' => 'aboutus'], function(){
            Route::resource('aboutcilt','backEnd\AboutciltController');
            Route::post('corevalueupdate','backEnd\AboutciltController@corevalueUpdate');
            Route::post('whoweareupdate','backEnd\AboutciltController@whoweareUpdate');
            Route::post('whyjoin','backEnd\AboutciltController@whyjoinUpdate');
            Route::post('createpartner','backEnd\AboutciltController@createPartner');
            Route::get('editpartner/{id}','backEnd\AboutciltController@editPartner');
            Route::post('updatepartner','backEnd\AboutciltController@updatePartner');
            Route::get('deletepartner/{id}','backEnd\AboutciltController@deletePartner');
            Route::post('updatehistory','backEnd\AboutciltController@updateHistory');
            Route::post('createwhattodo','backEnd\AboutciltController@createWhattodo');
            Route::get('editwhatwedo/{id}','backEnd\AboutciltController@editWhatwedo');
            Route::post('updatewhattodo','backEnd\AboutciltController@updateWhatdo');
            Route::get('deletewhatwedo/{id}','backEnd\AboutciltController@deleteWhatwedo');
        });
        Route::group(['prefix' => 'ciltboard'], function(){
            Route::resource('ciltboard','backEnd\CiltboardController');
            Route::post('storeboardmember','backEnd\CiltboardController@storeboardMember');
            Route::get('editmyBoard/{id}','backEnd\CiltboardController@editmemberinfo');
            Route::post('updateboardmember','backEnd\CiltboardController@updateBoardmember');
            Route::get('deletemember/{id}','backEnd\CiltboardController@deleteMember');
            Route::post('updatepresedentmsg','backEnd\CiltboardController@updatepresidentmsg');
        });
        Route::group(['prefix' => 'ciltnews'], function(){
           Route::resource('news','backEnd\NewsController');
           Route::get('editnews/{id}','backEnd\NewsController@editNews');
           Route::post('updatenews','backEnd\NewsController@update');
           Route::get('deletenews/{id}','backEnd\NewsController@destroy');
 
        });
         Route::group(['prefix' => 'ciltevent'], function(){
           Route::resource('event','backEnd\EventController');
           Route::get('editevent/{id}','backEnd\EventController@editEvent');
           Route::post('updateevent','backEnd\EventController@update');
           Route::get('deleteevent/{id}','backEnd\EventController@destroy');

        });
        Route::group(['prefix' => 'courses'], function(){
            Route::resource('ciltcourses','backEnd\CourseController');
            Route::resource('download','backEnd\DownloadController');
            Route::resource('knowledge','backEnd\KnowledgeController');
            Route::post('overviewupdate','backEnd\CourseController@overviewupdate');
            Route::get('editcourse/{id}','backEnd\CourseController@editcourse');
            Route::post('updatecourse','backEnd\CourseController@updatecourse');
            Route::get('deletecourse/{id}','backEnd\CourseController@destroy');
            Route::post('knowledgeupdate','backEnd\CourseController@knowledgeupdate');
            Route::post('logisticupdate','backEnd\CourseController@logisticupdate');
            Route::post('broucherupdate','backEnd\CourseController@broucherupdate');
            Route::post('downloadtop','backEnd\CourseController@downloadtop');
            Route::post('storedownload','backEnd\CourseController@storedownload');
            Route::get('editdownload/{id}','backEnd\CourseController@editdownload');
            Route::post('updateDownload','backEnd\CourseController@updateDownload');
            Route::get('deletedownload/{id}','backEnd\CourseController@deletedownload');
        });
        Route::group(['prefix' => 'membership'], function(){
            Route::resource('ciltmembership','backEnd\MembershipController');
            Route::resource('wiletmembership','backEnd\WiletController');
            Route::resource('ypmembership','backEnd\YpController');
            Route::resource('corporate','backEnd\CorporateController');
            Route::post('membertopupdate','backEnd\MembershipController@membertopupdate');
            Route::post('updategrade','backEnd\MembershipController@updategrade');
            Route::post('updatebenifit','backEnd\MembershipController@updatebenifit');
            Route::post('updateconduct','backEnd\MembershipController@updateconduct');
            Route::post('updatefee','backEnd\MembershipController@updatefee');
            Route::post('updategovtfee','backEnd\MembershipController@updategovtfee');
            Route::post('updatenongovtfee','backEnd\MembershipController@updatenongovtfee');
            Route::post('updatecorporateov','backEnd\MembershipController@updatecorporateov');
            Route::post('updatecpmember','backEnd\MembershipController@updatecpmember');
            Route::post('updatecorporatemid','backEnd\MembershipController@updatecorporatemid');
            Route::post('updatewomenoverview','backEnd\MembershipController@updatewomenoverview');

            Route::post('storemission','backEnd\MembershipController@storemission');
            Route::get('editmission/{id}','backEnd\MembershipController@editmission');
            Route::post('updatemission','backEnd\MembershipController@updatemission');
            Route::get('deletemission/{id}','backEnd\MembershipController@deletemission');
            Route::post('updatejoinwilet','backEnd\MembershipController@updatejoinwilet');
            Route::post('broucherupdate','backEnd\MembershipController@broucherupdate');
            Route::post('updategroup','backEnd\MembershipController@updategroup');

            Route::post('storergforum','backEnd\MembershipController@storergforum');
            Route::post('rgforumupdate','backEnd\MembershipController@rgforumupdate');
            Route::get('editrgforum/{id}','backEnd\MembershipController@editrgforum');
            Route::get('deletergforum/{id}','backEnd\MembershipController@deletergforum');

            Route::post('storebdforum','backEnd\MembershipController@storebdforum');
            Route::post('bdforumupdate','backEnd\MembershipController@bdforumupdate');
            Route::get('editbdforum/{id}','backEnd\MembershipController@editbdforum');
            Route::get('deletebdforum/{id}','backEnd\MembershipController@deletebdforum');

            Route::post('storeypbdforum','backEnd\MembershipController@storeypbdforum');
            Route::post('ypbdforumupdate','backEnd\MembershipController@ypbdforumupdate');
            Route::get('editypbdforum/{id}','backEnd\MembershipController@editypbdforum');
            Route::get('deleteypbdforum/{id}','backEnd\MembershipController@deleteypbdforum');

            Route::post('storeyprgforum','backEnd\MembershipController@storeyprgforum');
            Route::post('yprgforumupdate','backEnd\MembershipController@yprgforumupdate');
            Route::get('edityprgforum/{id}','backEnd\MembershipController@edityprgforum');
            Route::get('deleteyprgforum/{id}','backEnd\MembershipController@deleteyprgforum');
            
            Route::post('ypbroucherupdate','backEnd\MembershipController@ypbroucherupdate');
            Route::post('updateypgroup','backEnd\MembershipController@updateypgroup');
            Route::post('updateypbenifit','backEnd\MembershipController@updateypbenifit');
            Route::post('ypwjoinupdate','backEnd\MembershipController@ypwjoinupdate');
            Route::post('updateyptop','backEnd\MembershipController@updateyptop');
        });
        Route::group(['prefix' => 'contact'], function(){
            Route::resource('contactus','backEnd\ContactController');

        });
    
});