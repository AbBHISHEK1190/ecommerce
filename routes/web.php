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
use App\Productcategorie;

Route::get('/', function () {
      $categories['categories'] = Productcategorie::select('category_id','category_name','category_description')
                           ->where('status', '=', '1')
                 ->get();

    return view('customer.index',$categories);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'customer\Cart@index')->name('cart');
Route::post('/categorymenu','HomeController@categorymenu')->name('categorymenu');
Route::post('/proructbyid','HomeController@proructbyid');
Route::get('/add_to_cart/{id}', 'customer\Cart@add_to_cart');
Route::get('/delete_cart/{id}', 'customer\Cart@delete_cart');
Route::get('/product_description/{id}', 'customer\Productdesc@index');
Route::get('/contact_us','customer\Contactus@index');
Route::get('/about_us','customer\Aboutus@index');
Route::get('/category/{id}','customer\Categoriesdata@index');
Route::post('/getcategoriesdata','customer\Categoriesdata@getcategoriesdata');
Route::post('/update_quantity','customer\Quantity@index');
Route::post('/apply_coupon','customer\Apply_coupon@index');
Route::post('/check_coupon','customer\Apply_coupon@check_coupon');
Route::get('/mailsend','customer\Emailsenderclass@index');
Route::post('/mailsend','customer\Emailsenderclass@index');
Route::get('/logout','HomeController@logout');
Route::get('/checkout','customer\Checkoutmanager@index');
Route::post('/add_address','customer\Checkoutmanager@add_address');
Route::get('/add_address','customer\Checkoutmanager@add_address');
Route::get('/search','customer\Searchmanager@index');
Route::post('/search','customer\Searchmanager@index');

//for admin
Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
		
		Route::get('dashboard', 'Adminc@index');
                Route::get('all_category', 'Product_categories@index');
            Route::post('add_categories', 'Product_categories@add_categories'); 
            Route::get('add_categories', 'Product_categories@add_categories');
            Route::get('delete_categories/{id}/{status}', 'Product_categories@delete_categories');
            Route::get('edit_category/{id}', 'Product_categories@edit_category');
            Route::post('save_edit_category', 'Product_categories@save_edit_category');
            Route::get('save_edit_category', 'Product_categories@save_edit_category');
           
             Route::get('all_product', 'Productmanager@index');
              Route::get('add_product', 'Productmanager@add_product');
               Route::post('add_product', 'Productmanager@add_product');
           Route::get('edit_product/{id}', 'Productmanager@edit_product');
            Route::post('save_edit_product', 'Productmanager@save_edit_product');
            Route::get('save_edit_product', 'Productmanager@save_edit_product');
           Route::get('all_active_product', 'Productmanager@all_active_product');
           Route::get('all_inactive_product', 'Productmanager@all_inactive_product');
           Route::get('delete_product/{id}/{status}', 'Productmanager@delete_product');
           
           
            Route::get('all_coupons', 'Createcoupons@index');
            
            Route::get('add_coupons', 'Createcoupons@add_coupons');
            Route::post('add_coupons', 'Createcoupons@add_coupons');
           Route::get('delete_coupons/{id}/{status}', 'Createcoupons@delete_coupons');
            Route::get('edit_coupon/{id}/', 'Createcoupons@edit_coupon');
           Route::get('all_users', 'Usersmanager@index');
});
    
