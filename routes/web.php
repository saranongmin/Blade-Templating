<?php

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

Route::get('/', 'FrontendController@welcome')->name('welcome');
Route::get('/blogs', 'FrontendController@blog')->name('blogs');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::post('/contact', 'FrontendController@postContact')->name('post_contact');

Route::get('/products/{category}/{subCategory?}', 'FrontendController@products')->name('products.list');

//Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
//    //
//});

Route::get('/product-details/{product}/', 'FrontendController@productDetails')->name('product.details');
Route::post('/place-order', 'OrderController@store')->name('place_order');
//Route::post('/place-order/{product}', 'OrderController@store')->name('place_order');
Route::post('/add_to_cart', 'CartController@addToCart')->name('add_to_cart');
Route::post('/remove_from_cart', 'CartController@removeFromCart');
Route::get('/shopping-bag', 'CartController@getProductsFromCart')->name('shopping_bag');

Route::post('/checkout', 'CartController@checkout')->name('checkout');

//Route::post('/payment-test', 'CartController@sslTest')->name('payment_test');
//Route::post('/place-order', 'CartController@sslTest')->name('payment_test');

Route::post('/success', 'CartController@success')->name('payment.success');
Route::post('/failed', 'CartController@failed')->name('payment.failed');
Route::post('/canceled', 'CartController@canceled')->name('payment.canceled');

Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('products.checkout');

Auth::routes();
//Auth::routes(['register' => false]);
//Route::prefix('admin')->group(function () {

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {

    Route::get('/my-profile', 'ProfileController@myProfile')->name('my_profile');
    Route::get('/profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
    Route::put('/profile/{id}', 'ProfileController@update')->name('profile.update');

//    Route::get('', 'HomeController@index')->name('home');

//    Route::get('/categories', 'CategoryController@index')->name('categories.index');
//
//    Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
//
//    Route::post('/categories', 'CategoryController@store')->name('categories.store');
//
//    Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
//
//    Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
//
//    Route::put('/categories/{category}', 'CategoryController@update')->name('categories.update');
//
//    Route::delete('/categories/{category}', 'CategoryController@destroy')->name('categories.destroy');

    Route::get('/categories/pdf', 'PdfController@categories')->name('categories.pdf');
    Route::get('/categories/excel', 'ExcelController@categories')->name('categories.excel');

    Route::get('/categories/trash', 'CategoryController@trash')->name('categories.trash');
    Route::get('/categories/trash/{id}', 'CategoryController@showTrash')->name('categories.show_trash');
    Route::put('/categories/trash/{id}', 'CategoryController@restoreTrash')->name('categories.restore_trash');
    Route::delete('/categories/trash/{id}', 'CategoryController@deleteTrash')->name('categories.delete_trash');

    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('sub-categories', 'SubCategoryController');
    Route::post('products/{product}/comment', 'CommentController@productComment')->name('products.comment');
    Route::get('products/{product}/notification/{notificationId}', 'ProductController@show')->name('products.notification');
    Route::resource('products', 'ProductController');
    Route::resource('colors', 'ColorController');
    Route::resource('sizes', 'SizeController');
    Route::resource('brands', 'BrandController');
    Route::resource('tags', 'TagController');
    Route::resource('blogs', 'BlogController');
    Route::resource('orders', 'OrderController');
});

//Route::get('/home', 'HomeController@index')->name('home');
