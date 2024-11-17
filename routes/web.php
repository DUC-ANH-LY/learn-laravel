<?php

use Illuminate\Support\Facades\Route;


// with url helper
/*<a href="<?php echo url('/'); ?>">*/
//// Outputs <a href="http://myapp.com/">


// Defining a route with name() in routes/web.php:
Route::get('members/{id}', 'MembersController@show')->name('members.show');
// Linking the route in a view using the route() helper:
// on view blade template
/*<a href="<?php echo route('members.show', ['id' => 14]); ?>">*/
