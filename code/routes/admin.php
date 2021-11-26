<?php

    Route::prefix('/admin')->group(function(){ 

        //Dashboard
        Route::get('/','Admin\DashboardController@getDashboard')->name('dashboard');

        //Municipalities
        Route::get('/municipalities','Admin\MunicipalitiesController@getMunicipality')->name('municipalities');

        //Units
        Route::post('/unit/add', 'Admin\UnitsController@postUnitAdd')->name('unit_add');
        Route::get('/units/{type}', 'Admin\UnitsController@getHome')->name('units');        
        Route::get('/unit/{id}/edit', 'Admin\UnitsController@getUnitEdit')->name('unit_edit');
        Route::post('/unit/{id}/edit', 'Admin\UnitsController@postUnitEdit')->name('unit_edit');
        Route::get('/unit/{id}/delete', 'Admin\UnitsController@getUnitDelete')->name('unit_delete');

        //Diet Requests
        Route::get('/diet_requests/{status}', 'Admin\DietRequestsController@getHome')->name('diet_requests');
        Route::get('/diet_request/add', 'Admin\DietRequestsController@getDietRequestAdd')->name('diet_request_add');  
        Route::post('/diet_request/add', 'Admin\DietRequestsController@postDietRequestAdd')->name('diet_request_add');  
        Route::get('/diet_request/{id}/view', 'Admin\DietRequestsController@getDietRequestView')->name('diet_request_view');
        Route::get('/diet_request/{id}/pdf', 'Admin\DietRequestsController@getDietRequestPdf')->name('diet_request_view');


        //Services
        Route::get('/services', 'Admin\ServicesController@getHome')->name('services'); 
        Route::post('/service/add', 'Admin\ServicesController@postServiceAdd')->name('service_add');
        Route::get('/service/{id}/edit', 'Admin\ServicesController@getServiceEdit')->name('service_edit');
        Route::post('/service/{id}/edit', 'Admin\ServicesController@postServiceEdit')->name('service_edit');
        Route::get('/service/{id}/delete', 'Admin\ServicesController@getServiceDelete')->name('service_delete');

        //Journeys
        Route::get('/journeys', 'Admin\JourneysController@getHome')->name('journeys'); 
        Route::post('/journey/add', 'Admin\JourneysController@postJourneyAdd')->name('journey_add');
        Route::get('/journey/{id}/edit', 'Admin\JourneysController@getJourneyEdit')->name('journey_edit');
        Route::post('/journey/{id}/edit', 'Admin\JourneysController@postJourneyEdit')->name('journey_edit');
        Route::get('/journey/{id}/delete', 'Admin\JourneysController@getJourneyDelete')->name('journey_delete');

        //Diets
        Route::get('/diets', 'Admin\DietsController@getHome')->name('diets'); 
        Route::post('/diet/add', 'Admin\DietsController@postDietAdd')->name('diet_add');
        Route::get('/diet/{id}/edit', 'Admin\DietsController@getDietEdit')->name('diet_edit');
        Route::post('/diet/{id}/edit', 'Admin\DietsController@postDietEdit')->name('diet_edit');
        Route::get('/diet/{id}/delete', 'Admin\DietsController@getDietDelete')->name('diet_delete');
        
        //Reports
        Route::get('/reports','Admin\ReportController@getReport')->name('reports');
        Route::get('/report_bitacora','Admin\ReportController@getReportBitacora')->name('report_bitacora');
        Route::get('/report_listado_extensiones','Admin\ReportController@getReportUser')->name('report_user');        
        Route::get('/report_informatica','Admin\ReportController@getReporInformatica')->name('report_informatica');

        //Bitacora
        Route::get('/bitacoras','Admin\BitacoraController@getBitacora')->name('bitacoras');

        //Users
        Route::get('/users/add', 'Admin\UserController@getUserAdd')->name('user_add');
        Route::post('/users/add', 'Admin\UserController@postUserAdd')->name('user_add');
        Route::get('/users/{status}', 'Admin\UserController@getUsers')->name('user_list');
        Route::get('/user/{id}/edit', 'Admin\UserController@getUserEdit')->name('user_edit');
        Route::post('/user/{id}/edit', 'Admin\UserController@postUserEdit')->name('user_edit');
        Route::post('/user/{id}/reset_password','Admin\UserController@postResetPassword')->name('user_reset_password');
        Route::get('/user/{id}/banned', 'Admin\UserController@getUserBanned')->name('user_banned');
        Route::get('/user/{id}/permissions', 'Admin\UserController@getUserPermissions')->name('user_permissions');
        Route::post('/user/{id}/permissions', 'Admin\UserController@postUserPermissions')->name('user_permissions');
        Route::get('/user/account/info','Admin\UserController@getAccountInfo')->name('user_info');
        Route::post('/user/account/chance/password','Admin\UserController@postAccountChangePassword')->name('user_change_password');
        

    });