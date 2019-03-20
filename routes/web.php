<?php

Auth::routes();


// OAuth Routes
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/', 'Info\InfoController@home')->name('home');

Route::get('/lang/{language}', 'LanguageController@change')->name('language.change');


Route::group(['middleware' => ['auth', 'subscription.active']], function () {
    Route::get('/dashboard', 'DashboardController@index');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login/twofactor', 'Auth\TwoFactorLoginController@index')->name('login.twofactor.index');
    Route::post('/login/twofactor', 'Auth\TwoFactorLoginController@verify')->name('login.twofactor.verify');
});

/*
 * Account
 */
Route::group(['prefix' => 'account', 'middleware' => ['auth'], 'as' => 'account.', 'namespace' => 'Account'], function () {
    Route::get('/', 'AccountController@index')->name('index');

    Route::get('/download-invoice/{id}', 'AccountController@downloadInvoice')->name('download-invoice');

    /*
     * Profile
     */
    Route::get('profile', 'ProfileController@index')->name('profile.index');
    Route::post('profile', 'ProfileController@store')->name('profile.store');

    Route::group(['middleware' => 'subscription.customer'], function () {

        Route::get('users', 'UsersController@index')->name('users.index');

        Route::post('users/u/get/{id}', 'UsersController@axiosGetUser')->name('users.get');
        Route::post('users/u/list', 'UsersController@axiosListUsers')->name('users.list');
        Route::post('users/u/save', 'UsersController@axiosSaveUser')->name('users.save');
        Route::post('users/u/delete', 'UsersController@axiosDeleteUser')->name('users.delete');
    });
    /*
     * Password
     */
    Route::get('password', 'PasswordController@index')->name('password.index');
    Route::post('password', 'PasswordController@store')->name('password.store');

    /*
     * Deactivate
     */
    Route::get('deactivate', 'DeactivateController@index')->name('deactivate.index');
    Route::post('deactivate', 'DeactivateController@store')->name('deactivate.store');

    /*
     * Two factor
     */
    Route::group([], function () {
        Route::get('/twofactor', 'TwoFactorController@index')->name('twofactor.index');
        Route::post('/twofactor', 'TwoFactorController@store')->name('twofactor.store');
        Route::post('/twofactor/verify', 'TwoFactorController@verify')->name('twofactor.verify');
        Route::delete('/twofactor', 'TwoFactorController@destroy')->name('twofactor.destroy');
    });

    /*
     * Subscription
     */
    Route::group(['prefix' => 'subscription', 'namespace' => 'Subscription', 'middleware' => []], function () {
        /*
         * Cancel
         */
        Route::group(['middleware' => 'subscription.notcancelled'], function () {
            Route::get('/cancel', 'SubscriptionCancelController@index')->name('subscription.cancel.index');
            Route::post('/cancel', 'SubscriptionCancelController@store')->name('subscription.cancel.store');
        });

        /*
         * Resume
         */
        Route::group(['middleware' => 'subscription.cancelled'], function () {
            Route::get('/resume', 'SubscriptionResumeController@index')->name('subscription.resume.index');
            Route::post('/resume', 'SubscriptionResumeController@store')->name('subscription.resume.store');
        });

        /*
         * Swap
         */
        Route::group(['middleware' => 'subscription.notcancelled'], function () {
            Route::get('/swap', 'SubscriptionSwapController@index')->name('subscription.swap.index');
            Route::post('/swap', 'SubscriptionSwapController@store')->name('subscription.swap.store');
        });

        /*
         * Card
         */
        Route::group(['middleware' => 'subscription.customer'], function () {
            Route::get('/card', 'SubscriptionCardController@index')->name('subscription.card.index');
            Route::post('/card', 'SubscriptionCardController@store')->name('subscription.card.store');
        });


    });
});

/*
 * Account activation.
 */
Route::group(['prefix' => 'activation', 'as' => 'activation.', 'middleware' => ['guest']], function () {
    Route::get('/resend', 'Auth\ActivationResendController@index')->name('resend');
    Route::post('/resend', 'Auth\ActivationResendController@store')->name('resend.store');
    Route::get('/{confirmation_token}', 'Auth\ActivationController@activate')->name('activate');
});

/*
 * Subscription plans.
 */
Route::group(['prefix' => 'plans', 'as' => 'plans.', 'middleware' => 'subscription.inactive'], function () {
    Route::get('/', 'Subscription\PlanController@index')->name('index');

});

/*
 * Subscription
 */
Route::group(['prefix' => 'subscription', 'as' => 'subscription.', 'middleware' => ['auth.register', 'subscription.inactive']], function () {
    Route::get('/', 'Subscription\SubscriptionController@index')->name('index');
    Route::post('/', 'Subscription\SubscriptionController@store')->name('store');
});

/// Info section
Route::group(['prefix' => 'info', 'as' => 'info.', 'middleware' => []], function () {
    Route::get('/features', 'Info\InfoController@features')->name('features');

    Route::get('/about-us', 'Info\InfoController@aboutUs')->name('about_us');
    Route::get('/terms', 'Info\InfoController@terms')->name('terms');
    Route::get('/pricing', 'Info\InfoController@pricing')->name('pricing');

    Route::get('/case-studies', 'Info\InfoController@caseStudies')->name('case_studies');
    Route::get('/help-center', 'Info\InfoController@helpCenter')->name('help_center');
    Route::get('/careers', 'Info\InfoController@careers')->name('careers');
    Route::get('/faq', 'Info\InfoController@faq')->name('faq');
    Route::get('/testimonials', 'Info\InfoController@testimonials')->name('testimonials');
    Route::get('/contact', 'Info\InfoController@contact')->name('contact');
    Route::post('/contact', 'Info\InfoController@store')->name('contact.store');
    Route::get('/policy', 'Info\InfoController@policy')->name('policy');
});


// Webook
Route::post('/webhooks/stripe', 'Webhooks\StripeWebhookController@handleWebhook');

// Newsletter
Route::post('/newsletter/register', 'NewsletterController@register')->name('newsletter.register');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
