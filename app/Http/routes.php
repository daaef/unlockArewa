<?php



Route::get('/', 'FormController@index');
Route::get('/map/me', 'FormController@map');
Route::post('/search/map', 'FormController@searchmap');
Route::get('/create/new/business', 'FormController@showbuss');
Route::get('/manage/biz', 'FormController@allbiz');
Route::get('/create/new/item', 'StoreController@showitem');
Route::get('/showtest', 'StoreController@showtest');
Route::get('home', 'HomeController@index');
Route::get('/products', 'HomeController@products');

Route::get('/item/list', 'ItemController@itemlist');

//order list
Route::get('/order/list', 'ItemController@orderlist');
//order received
Route::get('/order/received', 'ItemController@received');

//add to cart
Route::get('/add/cart/{id}', 'ProductController@addToCart');
//
Route::get('/cart/del/{id}', 'ProductController@delete');
//product detail
Route::get('/products/{id}', 'ProductController@detail');
//to show seaching results
Route::get('/showsearch', 'HomeController@showsearch');
//to show product details
Route::get('/showdetail', 'HomeController@showdetail');
//to show contact us
Route::get('/contact', 'HomeController@showcontact');

//to show cart
Route::get('/cart', 'HomeController@showcart');
//to show checkout info
Route::get('/checkoutinfo', 'HomeController@showcheckoutinfo');
//to show address
Route::get('/address', 'HomeController@showadd');

//to show ack
Route::get('/ack', 'HomeController@showack');

//to show ack
Route::get('/about', 'HomeController@showabout');
//to show faq
Route::get('/faq', 'HomeController@showfaq');

Route::get('gologin', 'LoginController@showlogin');
Route::get('/user/post', 'LoginController@postme');
Route::get('dashboard', 'FormController@showblog');
Route::get('register', 'FormController@register');
Route::get('logout', 'LoginController@logout');
Route::get('user/login', 'LoginController@showlogin');
Route::get('/developer', 'LoginController@developer');
//post
Route::post('/user_signin', 'LoginController@login');
Route::post('/user_signup', 'LoginController@signup');
Route::post('/post', 'FormController@create');
Route::post('/new/buzz', 'FormController@createBuzz');
//create new item
Route::post('/new/item', 'StoreController@createitem');

Route::post('/new/tv', 'ProductController@newTv');

//start search
Route::post('/start/search', 'SearchController@search');
//start search
Route::post('/add/c', 'ProductController@addToCart');

Route::post('/register/new', 'FormController@create');
Route::post('/coment/show/{id}', 'FormController@coment');


