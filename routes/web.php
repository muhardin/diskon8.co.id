<?php

use App\Product;
use App\User;
use App\Order;
use App\Wallet;
use App\Frontslide;
use App\FooterDetail;

/*
|----------------------------- ---------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('syaratdanketentuan', function () {
  return view('fronts.syaratdanketentuan');
});
Route::get('kebijakanprivacy', function () {
  return view('fronts.kebijakanprivacy');
});
Route::get('/cart','FrontController@cart')->name('cart');

Route::get('/getCity', 'FrontController@getCity')->name('rajaOngkir.getCity');
Route::get('/getSubdistrict', 'FrontController@getSubdistrict')->name('rajaOngkir.getSubdistrict');
Route::get('/getCost', 'FrontController@getCost')->name('rajaOngkir.getCost');

Route::post('/paid', 'FrontController@paid');
Route::get('/success', 'FrontController@success');

Route::post('/donation/addtocart', 'FrontController@addtocart')->name('donation.addtocart');
Route::get('/addedcart', 'FrontController@addedcart');
Route::get('/cart', 'FrontController@cart');
Route::get('/cartdelete/{id}', 'FrontController@cartdelete');

Route::post('/donation/store', 'FrontController@submitDonation')->name('donation.store');
Route::post('/donation/storecod', 'FrontController@submitPaidCod')->name('donation.storecod');

Route::post('/notification/handler', 'FrontController@notificationHandler')->name('notification.handler');
Route::get('/test/test', 'FrontController@test');

Route::post('/loginfront', 'FrontController@loginfront')->name('loginfront');

Route::prefix('/member')->group(function (){
  Route::resource('/', 'MemberController');
    Route::get('/home', 'MemberController@index');
    Route::get('/catalog', 'MemberController@catalog');
    Route::get('/product', 'MemberController@product');

    Route::get('/productdetail/{id}', 'MemberController@productdetail');
    Route::get('/productdetail/{id}/productasset', 'MemberController@productasset');
    Route::get('/detailproduct/{id}', 'MemberController@detailproduct');
    Route::get('/setting', 'MemberController@setting');
    Route::get('/setting/profile', 'MemberController@profile');
    Route::get('/setting/password', 'MemberController@password');
    Route::get('/setting/bank', 'MemberController@bank');
    Route::get('/setting/profiletoko', 'MemberController@profiletoko');
    Route::get('/setting/logo', 'MemberController@logo');
    
    Route::get('/setting/mainfooter', 'MemberController@mainfooter');

    Route::get('/setting/frontslide', 'MemberController@frontslide');

    Route::post('/setting/frontslidepost', 'MemberController@frontslidepost');

    Route::get('/setting/frontslidel/{id}', function($id){
      $data = Frontslide::findOrFail($id);
      File::delete('images/slides/' . @$data->picture);
      $data->delete();
      return redirect()->back()->with('success','B erhasil Delete Data');
      });
    Route::post('/setting/footerdetailpost', 'MemberController@footerdetailpost');
    Route::get('/setting/footerdetaildel/{id}', function($id){
      $data = FooterDetail::findOrFail($id);
      File::delete('images/footer/' . @$data->picture);
      $data->delete();
      return redirect()->back()->with('success','Berhasil Delete Data');
      });

    Route::post('/setting/logoupdate', 'MemberController@logoupdate')->name('logoupdate');
    
    Route::get('/team', 'MemberController@team');

    Route::get('/teamadd', 'MemberController@teamadd');

    Route::get('/gajian', 'MemberController@gajian');
    Route::get('/gajianout', 'MemberController@gajianout');

    Route::get('/request', 'MemberController@request');

    Route::get('/coupon', 'MemberController@coupon');
    Route::get('/order', 'MemberController@order');
    Route::get('/landingpage', 'MemberController@landingpage');
    Route::get('/apps', 'MemberController@apps');

    Route::prefix('/order')->group(function (){
      Route::resource('/', 'MemberOrderController');
        Route::get('/prospek', 'MemberOrderController@prospek');
        Route::get('/catalog', 'MemberOrderController@catalog');
        Route::get('/detail/{id}', 'MemberOrderController@detail');


       });
   });
Route::prefix('/admin')->group(function (){
  Route::resource('/', 'AdminController');
    Route::get('/home', 'MemberController@index');
    Route::get('/catalog', 'MemberController@catalog');
    Route::get('/product', 'MemberController@product');

    Route::get('/productdetail/{id}', 'MemberController@productdetail');

    Route::get('/detailproduct/{id}', 'MemberController@detailproduct');
    Route::get('/setting', 'MemberController@setting');
    Route::get('/team', 'MemberController@team');

    Route::get('/teamadd', 'MemberController@teamadd');

    Route::get('/gajian', 'MemberController@gajian');
    Route::get('/coupon', 'MemberController@coupon');
    Route::get('/order', 'MemberController@order');
    Route::get('/landingpage', 'MemberController@landingpage');
    Route::get('/apps', 'MemberController@apps');

    Route::prefix('/order')->group(function (){
      Route::resource('/', 'AdminOrderController');
        Route::get('/prospek', 'AdminOrderController@prospek');
        Route::get('/catalog', 'AdminOrderController@catalog');
        Route::get('/detail/{id}', 'AdminOrderController@catalog');


       });
   });


Route::prefix('/')->group(function (){
   Route::resource('/','FrontController');
   Route::get('/productdetail/{id}', 'FrontController@productdetail');
   Route::get('/front/category/{id}', 'FrontController@productcategory');

   /*
   Route::prefix('product')->group(function (){
            Route::resource('/','AdminProductController');
        });
        */
   });

Route::prefix('/test')->group(function (){
   Route::resource('/','TestController');
   Route::get('/create', 'TestController@create');
   });

Route::get('/admin', function () {
    return view('auth.login');
});


Route::get('/home', 'HomeController@index')->name('home');



Route::get('/wallet/reseller/{id}', 'WalletController@resellerWallet')->name('wallet.reseller');
Route::get('/wallet/admin', 'WalletController@adminWallet')->name('wallet.admin');
Route::get('/wallet/history', 'WalletController@historyWallet')->name('wallet.history');
Route::post('/wallet/update-status/{id}', 'WalletController@statusWallet')->name('wallet.status');
Route::get('/order/prospect', 'OrderController@prospect')->name('order.prospect');
Route::get('/order/confirm', 'OrderController@confirm')->name('order.confirm');
Route::get('/order/packing', 'OrderController@packing')->name('order.packing');
Route::get('/order/delivering', 'OrderController@delivering')->name('order.delivering');
Route::get('/order/success', 'OrderController@success')->name('order.success');
Route::get('/order/tracking', 'OrderController@tracking')->name('order.tracking');

Route::get('/order/detail/{id}', 'OrderController@detail')->name('order.detail');

Route::post('/order/track', 'OrderController@trackOrder')->name('order.trackOrder');
Route::get('/orders','OrderController@index')->name('order.sell');
Route::get('/product/destroy/{id}','ProductController@destroy');
Route::get('/reseller/destroy/{id}','ResellerController@destroy');

Route::resource('/product', 'ProductController');

Route::resource('/reseller', 'ResellerController');
Route::resource('/wallet', 'WalletController');
Route::resource('/resellerPackage', 'ResellerPackageController');
Route::resource('/order', 'OrderController');
Route::resource('/category', 'CategoryController');
Route::resource('/catalog', 'CatalogController');
Route::resource('/coupon', 'CouponController');
Route::resource('/resellerDashboard', 'ResellerDashboardController');
Route::resource('/user', 'UserController');
Route::resource('/bank', 'BankAccountController');
Route::resource('/asset', 'AssetController');
Route::resource('/stock', 'StockController');


Route::get('logout', function(){
  Auth::logout();
  return redirect()->back();
});
Route::get('/disable-product/{id}', function($id){
  $product = Product::findOrFail($id);
  $product->status = 'inactive';
  $product->save();
  return redirect()->back();
});

Route::get('/enable-product/{id}', function($id){
  $product = Product::findOrFail($id);
  $product->status = 'active';
  $product->save();
  return redirect()->back();
});

Route::get('/disable-user/{id}', function($id){
  $user = User::findOrFail($id);
  $user->status = 'inactive';
  $user->save();
  return redirect()->back();
});

Route::get('/enable-user/{id}', function($id){
  $user = User::findOrFail($id);
  $user->status = 'active';
  $user->save();
  return redirect()->back();
});

Route::get('/prospect/{id}', function($id){
  $order = Order::findOrFail($id);
  $user->order_status = 'prospect';
  $order->save();
  return redirect()->save();
});

Route::get('/pending/{id}', function($id){
  $order = Order::findOrFail($id);
  $order->order_status = 'pending';
  $order->save();
  return redirect()->back();
});

Route::get('/konfirmasi/{id}', function($id){
  $order = Order::findOrFail($id);
  $order->order_status = 'processing';
  $order->save();
  // dd($order);

  return redirect()->back();
});

Route::get('/pembayaranDiterima/{id}', function($id){
  $order = Order::findOrFail($id);
  $order->order_status = 'paid';
  $order->save();
  return redirect()->back();
});

Route::get('/packing/{id}', function($id){
  $order = Order::findOrfail($id);
  $order->order_status = 'packing';
  $order->save();
  return redirect()->back();
});

Route::get('/pengiriman/{id}', function($id){
  $order = Order::findOrFail($id);
  $order->order_status = 'delivering';
  $order->save();
  return redirect()->back();
});

Route::get('/diTerima/{id}', function($id){

  $order = Order::findOrFail($id);
  $order->order_status = 'success';
  $order->save();

  $orderdetail = \DB::table('order_details')->where('order_id',$id)->sum('profit');
  $wallet = New Wallet();
  $wallet->user_id = $order->reseller_id;
  $wallet->balanced = $orderdetail;
  $wallet->type = 'Credit';
  $wallet->desc = "Profit Dari Penjualan Barang";
  $wallet->order_id = @$order->id;
  $wallet->save();

  return redirect()->back();

});


