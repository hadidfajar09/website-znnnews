<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProvinceController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Frontend\ExtraController;
use App\Http\Controllers\Backend\AdvertisementController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\ComponentController;
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

Route::get('/', function () {
    return view('main.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

//admin logout
Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');


//admin category alll route
Route::get('/categories', [CategoryController::class, 'Index'])->name('categories');
Route::get('/add/category', [CategoryController::class, 'AddCategory'])->name('add.category');
Route::post('/store/category', [CategoryController::class, 'StoreCategory'])->name('store.category');
Route::get('/edit/category/{id}', [CategoryController::class, 'EditCategory'])->name('edit.category');
Route::post('/update/category/{id}', [CategoryController::class, 'UpdateCategory'])->name('update.category');
Route::get('/delete/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');

//admin SubCategory alll route

Route::get('/subcategories', [SubCategoryController::class, 'Index'])->name('subcategories');
Route::get('/add/subcategory', [SubCategoryController::class, 'AddSubCategory'])->name('add.subcategory');
Route::post('/store/subcategory', [SubCategoryController::class, 'StoreSubCategory'])->name('store.subcategory');
Route::get('/edit/subcategory/{id}', [SubCategoryController::class, 'EditSubCategory'])->name('edit.subcategory');
Route::post('/update/subcategory/{id}', [SubCategoryController::class, 'UpdateSubCategory'])->name('update.subcategory');
Route::get('/delete/subcategory/{id}', [SubCategoryController::class, 'DeleteSubCategory'])->name('delete.subcategory');

//admin Province alll route
Route::get('/provinces', [ProvinceController::class, 'Index'])->name('provinces');
Route::get('/add/province', [ProvinceController::class, 'AddProvince'])->name('add.province');
Route::post('/store/province', [ProvinceController::class, 'StoreProvince'])->name('store.province');
Route::get('/edit/province/{id}', [ProvinceController::class, 'EditProvince'])->name('edit.province');
Route::post('/update/province/{id}', [ProvinceController::class, 'UpdateProvince'])->name('update.province');
Route::get('/delete/province/{id}', [ProvinceController::class, 'DeleteProvince'])->name('delete.province');

//admin City alll route
Route::get('/citys', [CityController::class, 'Index'])->name('citys');
Route::get('/add/city', [CityController::class, 'AddCity'])->name('add.city');
Route::post('/store/city', [CityController::class, 'StoreCity'])->name('store.city');
Route::get('/edit/city/{id}', [CityController::class, 'EditCity'])->name('edit.city');
Route::post('/update/city/{id}', [CityController::class, 'UpdateCity'])->name('update.city');
Route::get('/delete/city/{id}', [CityController::class, 'DeleteCity'])->name('delete.city');



//Json Data Category dan PRovince
Route::get('/get/subcategory/{category_id}', [PostController::class, 'GetSubCategory']);
Route::get('/get/city/{province_id}', [PostController::class, 'GetCity']);


//admin post all route
Route::get('/allpost', [PostController::class, 'Index'])->name('all.post');
Route::get('/createpost', [PostController::class, 'Create'])->name('create.post');
Route::post('/store/post', [PostController::class, 'StorePost'])->name('store.post');
Route::get('/edit/post/{id}', [PostController::class, 'EditPost'])->name('edit.post');
Route::post('/update/post/{id}', [PostController::class, 'UpdatePost'])->name('update.post');
Route::get('/delete/post/{id}', [PostController::class, 'DeletePost'])->name('delete.post');




//socials media setting
Route::get('/social/setting', [SettingController::class, 'SocialSetting'])->name('social.setting');
Route::post('/social/update/{id}', [SettingController::class, 'UpdateSocial'])->name('social.update');

//seo setting
Route::get('/seo/setting', [SettingController::class, 'SeoSetting'])->name('seo.setting');
Route::post('/seo/update/{id}', [SettingController::class, 'UpdateSeo'])->name('seo.update');

//pray setting
Route::get('/prayer/setting', [SettingController::class, 'PrayerSetting'])->name('prayer.setting');
Route::post('/prayer/update/{id}', [SettingController::class, 'UpdatePrayer'])->name('prayer.update');

//live setting
Route::get('/live/setting', [SettingController::class, 'LiveSetting'])->name('live.setting');
Route::post('/live/update/{id}', [SettingController::class, 'UpdateLive'])->name('live.update');
Route::get('/live/active/{id}', [SettingController::class, 'LiveActive'])->name('live.active');
Route::get('/live/inactive/{id}', [SettingController::class, 'LiveInactive'])->name('live.inactive');


//notice setting
Route::get('/notice/setting', [SettingController::class, 'NoticeSetting'])->name('notice.setting');
Route::post('/notice/update/{id}', [SettingController::class, 'UpdateNotice'])->name('notice.update');
Route::get('/notice/active/{id}', [SettingController::class, 'NoticeActive'])->name('notice.active');
Route::get('/notice/inactive/{id}', [SettingController::class, 'NoticeInactive'])->name('notice.inactive');


//website add
Route::get('/website/add', [SettingController::class, 'WebsiteAddSetting'])->name('add.website');
Route::get('/website/all', [SettingController::class, 'WebsiteAllSetting'])->name('all.website');
Route::post('/store/website', [SettingController::class, 'StoreWebsite'])->name('store.website');
Route::get('/edit/website/{id}', [SettingController::class, 'EditWebsite'])->name('edit.website');
Route::post('/update/website/{id}', [SettingController::class, 'UpdateWebsite'])->name('update.website');
Route::get('/delete/website/{id}', [SettingController::class, 'DeleteWebsite'])->name('delete.website');


//gallery photo routes

Route::get('/photo/gallery', [GalleryController::class, 'PhotoGallery'])->name('photo.gallery');
Route::get('/add/photo', [GalleryController::class, 'AddPhoto'])->name('add.photo');
Route::post('/store/photo', [GalleryController::class, 'StorePhoto'])->name('store.photo');
Route::get('/edit/photo/{id}', [GalleryController::class, 'EditPhoto'])->name('edit.photo');
Route::post('/update/photo/{id}', [GalleryController::class, 'UpdatePhoto'])->name('update.photo');
Route::get('/delete/photo/{id}', [GalleryController::class, 'DeletePhoto'])->name('delete.photo');

//gallery video routers
Route::get('/video/gallery', [GalleryController::class, 'VideoGallery'])->name('video.gallery');
Route::get('/add/video', [GalleryController::class, 'AddVideo'])->name('add.video');
Route::post('/store/video', [GalleryController::class, 'StoreVideo'])->name('store.video');
Route::get('/edit/video/{id}', [GalleryController::class, 'EditVideo'])->name('edit.video');
Route::post('/update/video/{id}', [GalleryController::class, 'UpdateVideo'])->name('update.video');
Route::get('/delete/video/{id}', [GalleryController::class, 'DeleteVideo'])->name('delete.video');





//FRONTEND MULTILANG ROUTES
Route::get('/lang/en', [ExtraController::class, 'English'])->name('lang.english');
Route::get('/lang/ind', [ExtraController::class, 'Indonesia'])->name('lang.bahasa');



//SINGLE POST
Route::get('/view/post/{id}', [ExtraController::class, 'SinglePost']);
Route::get('/poto/gallery', [ExtraController::class, 'PhotoGallery']);
Route::get('/pidio/gallery', [ExtraController::class, 'VideoGallery']);

//Post Category dan SUbcategory PAGES
Route::get('/catpost/{id}/{category_en}', [ExtraController::class, 'CategoryPost']);
Route::get('/subcatpost/{id}/{subCategory_en}', [ExtraController::class, 'SubCategoryPost']);


//Search District
Route::get('/get/city/frontend/{province_id}', [ExtraController::class, 'GetSubProvince']);
Route::get('/search/province', [ExtraController::class, 'SearchProvince'])->name('search.provinces');
Route::get('/search/post', [ExtraController::class, 'SearchPost'])->name('search.posts');


// Ads Backend Routes
Route::get('/list/advertisement', [AdvertisementController::class, 'ListAdvertisement'])->name('list.advertisement');
Route::get('/add/advertisement', [AdvertisementController::class, 'AddAdvertisement'])->name('add.advertisement');
Route::post('/store/advertisement', [AdvertisementController::class, 'StoreAdvertisement'])->name('store.advertisement');
Route::get('/delete/advertisement/{id}', [AdvertisementController::class, 'DeleteAdvertisement'])->name('delete.advertisement');


// KOLUMNIS ROUTES
Route::get('/add/kolumnis', [RoleController::class, 'AddKolumnis'])->name('add.kolumnis');
Route::post('/store/kolumnis', [RoleController::class, 'StoreKolumnis'])->name('store.kolumnis');
Route::get('/all/kolumnis', [RoleController::class, 'AllKolumnis'])->name('all.kolumnis');
Route::get('/edit/kolumnis/{id}', [RoleController::class, 'EditKolumnis'])->name('edit.kolumnis');
Route::post('/update/kolumnis/{id}', [RoleController::class, 'UpdateKolumnis'])->name('update.kolumnis');
Route::get('/delete/kolumnis/{id}', [RoleController::class, 'DeleteKolumnis'])->name('delete.kolumnis');


//Component Setting
Route::get('/component/setting', [ComponentController::class, 'MainWebSetting'])->name('component.setting');
Route::post('/update/component/{id}', [ComponentController::class, 'UpdateComponent'])->name('update.component');


//account setting
Route::get('/account/setting', [AdminController::class, 'AccountSetting'])->name('account.setting');
Route::get('/account/edit/', [AdminController::class, 'AccountEdit'])->name('account.edit');
Route::post('/account/update/{id}', [AdminController::class, 'AccountUpdate'])->name('account.update');


//change password
Route::get('/show/password', [AdminController::class, 'ShowPassword'])->name('show.password');
Route::post('/change/password/', [AdminController::class, 'ChangePassword'])->name('change.password');
