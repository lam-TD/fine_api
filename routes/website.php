<?php




Route::get('/','pageController@getindex')->name('/');


// ====== LOGIN ======


Route::get('registerW','pageController@getregister')->name('registerW');
Route::get('registersuccess','pageController@getregisterSuccess')->name('registersuccess');
Route::get('logoutW','pageController@LogoutSession')->name('logoutW'); // logout
Route::get('loginW','pageController@getlogin')->name('loginW');

Route::get('loginpost/user={u}&pass={pass}','pageController@LoginSession')->name('loginpost');
Route::post('registerWpost','loginController@registerW')->name('registerWpost');
// login facebook
Route::get('login/facebook/redirect', 'loginController@redirectToProvider')->name('loginfacebook');
Route::get('login/facebook/callback', 'loginController@handleProviderCallback');

//user
Route::get('user','pageController@getuser');

// load detail
Route::get('detail/id={id}&type={type}','pageController@getdetail')->name("detail");
Route::get('detail/s','pageController@getServiceTypeVicinity');

Route::get('ThemVaCapNhatLike/{idserivce}&user={id}','publicDetail@ThemVaCapNhatLike'); //

// load addplace
Route::get('addplace','pageController@getaddplace')->name('addplace');
Route::post('addplace', 'pageController@postPlace');
//  load addservice
Route::get('addservice','pageController@getaddservice');

Route::get('city','pageController@getcount_place_city');

Route::get('lam/type={type}','pageController@findservicetocity');

Route::get('d/f={f}','pageController@typelam');

Route::get('lamdv/type={type}','pageController@getlam');

Route::get('count_place_Allcity','pageController@count_place_Allcity');
Route::get('count_place_display','pageController@count_place_display');

Route::get('lamindex/id={id}','publicDetail@get_service_id');



// detail service
Route::get('detail-service/id={id}','publicDetail@get_service_id');

Route::get('detail/id={id}&type={type}','publicDetail@get_detail');

Route::get('diadiem2/id={id}','publicDetail@dichvu_lancan');



//search public
Route::get('p_search','publicSearchController@get_search');

// place_city
// Route::get('city/{id}','publicSearchController@get_place_city');

Route::get('count_ser/{id}','publicSearchController@count_servies_type');
Route::get('get_all_place_city_type/{id}&type={t}','publicSearchController@get_all_place_city_type');

Route::get('image_city/{id}','pageController@image_city');


//================================= TEST ======================================
Route::get('count_city_service_all_image','pageController@count_city_service_all_image');
Route::get('searchServices_All/keyword={k}','pageController@searchServices_All');
Route::get('getlam/id={id}&l={l}','pageController@getServicesTake');
Route::get('likelam/{idser}','publicDetail@count_service_all_and_type');

Route::get('count_service_all_and_type/{id}','publicCityController@count_service_all_and_type');//test add view service
Route::get('phantrang/{id}','publicCityController@checkPaginate');

Route::get('getServicesTake/type={t}&id={i}','pageController@getServicesTake');

//================================ NEW ========================================

//get num service of city all
Route::get('count_city_service_all','pageController@count_city_service_all');



//================== add place ================
Route::get('addplace','publicaddplaceController@getaddplace')->name('addplace');

Route::get('loadDistrict/{idcity}','publicaddplaceController@loadDistrict');
Route::get('loadWard/{id}','publicaddplaceController@loadWard');





//================== search header =============
Route::get('searchServices_All/keyword={k}','pageController@searchServices_All');

Route::get('searchService_City_AllType/idcity={id}&keyword={k}','pageController@searchService_City_AllType');

Route::get('searchService_City_Type/idcity={id}&type={t}&keyword={k}','pageController@searchService_City_Type');

Route::get('searchServices_AllCity_idType/type={t}&keyword={k}','pageController@searchServices_AllCity_idType');




//================= detail ==================
Route::get('checkLogin','pageController@checkLogin');

//============ check like
Route::get('checkLike/userid={d}&svid={s}','publicDetail@checkLike');


// ================ serviece city ==============
Route::get('city/{id}&type={type}&page={p}','publicCityController@getCity');

Route::get('city-all/id={id}&district={dis}&type={type}&fil={fil}&page={page}&li={li}','publicCityController@get_service_city_fillter');




// =============== user info ===========
Route::get('info','accountController@get_info_account')->name('info');

Route::get('check_login','accountController@check_login');
Route::get('get_info_user/{id}','accountController@get_info_user');

Route::post('edituser/{id}',['as'=>'edituser','uses'=>'accountController@edit_user']);

Route::get('get_quyen_dangky/{id}','accountController@get_quyen_dangky');


// index

Route::get('checklogin','pageController@checkLogin');
Route::get('count_city_service_all_image','pageController@count_city_service_all_image');


//detail

Route::get('add-view/{id}','publicDetail@addview');

Route::get('get_service_id/{id}&type={t}','publicDetail@get_service_id');
Route::get('dichvu_lancan/idcity={c}&id={id}&limit={limit}','publicDetail@dichvu_lancan');



// serach web

Route::get('search-all/keyword={key}','pageController@searchServices_All_ghe');
Route::get('search-city-alltype/{idcity}&keyword={key}','pageController@searchService_City_AllType_ghe');
Route::get('search-allcity-type/type={type}&keyword={key}','pageController@searchServices_AllCity_idType');
Route::get('search-city-type/{idcity}&type={type}&keyword={key}','pageController@searchService_City_Type_ghe');


























































?>
