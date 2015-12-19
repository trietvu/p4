<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'WelcomeController@getIndex');

# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');

# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');

# Process logout
Route::get('/logout', 'Auth\AuthController@getLogout');

# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');

# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');



Route::group(['middleware' => 'auth'], function() {

    Route::get('/addresses','AddressController@getIndex');

    Route::get('/info/{id}','InfoController@getEdit');
    Route::post('/info','InfoController@postEdit');

    Route::get('/addresses/create', 'AddressController@getCreate');
    Route::post('/addresses/create', 'AddressController@postCreate');

    Route::get('/addresses/edit', 'AddressController@getEdit');
    Route::post('/addresses/edit', 'AddressController@postEdit');

    Route::get('/accounts','AccountController@getIndex');

    Route::get('/accounts/create', 'AccountController@getCreate');
    Route::post('/accounts/create', 'AccountController@postCreate');

    Route::get('/accounts/edit/{id}', 'AccountController@getEdit');
    Route::post('/accounts/edit', 'AccountController@postEdit');

    Route::get('/accounts/confirm-delete/{id}', 'AccountController@getConfirmDelete');
    Route::get('/accounts/delete/{id}', 'AccountController@getDelete');

    Route::get('/transactions/{id}','TransactionController@getIndex');

    Route::get('/transactions/create/{id}', 'TransactionController@getCreate');
    Route::post('/transactions/create', 'TransactionController@postCreate');

    Route::get('/transactions/edit/{id}', 'TransactionController@getEdit');
    Route::post('/transactions/edit', 'TransactionController@postEdit');

    Route::get('/transactions/confirm-delete/{id}', 'TransactionController@getConfirmDelete');
    Route::get('/transactions/delete/{id}', 'TransactionController@getDelete');

});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
