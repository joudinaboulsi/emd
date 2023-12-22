<?php
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| FrontEnd
|--------------------------------------------------------------------------
*/

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/product-details-{id}', [PagesController::class, 'productsDetails'])->name('product-details');
Route::get('/marketing', [PagesController::class, 'marketing'])->name('marketing');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/catalogs', [PagesController::class, 'catalogs'])->name('catalogs');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');



/*
|--------------------------------------------------------------------------
| Backend CMs
|--------------------------------------------------------------------------
*/

Auth::routes();
/*******  Home Page Content  *********/
Route::get('/cms/home-page', 'HomePageController@index')->name('cms_home_page');
Route::post('/cms/home-page-store', 'HomePageController@store')->name('cms_home_page_store');
/*******  Home Page Content Ending *********/



/*******  Client Section*********/
Route::get('/cms/clients', 'ClientController@index')->name('cms_clients');
Route::get('/cms/client-create', 'ClientController@create')->name('cms_client_create');
Route::post('/cms/client-store', 'ClientController@store')->name('cms_client_store');
Route::get('/cms/client-edit-{id}', 'ClientController@edit')->name('cms_client_edit');
Route::post('/cms/client-update-{id}', 'ClientController@update')->name('cms_client_update');
Route::delete('/cms/client-delete-{id}', 'ClientController@delete')->name('cms_client_delete');
/*******  Client  Section Ending */

/*******  Slider Text Section*********/
Route::get('/cms/slider-text', 'SliderTextController@index')->name('cms_slider_text');
Route::get('/cms/slider-text-create', 'SliderTextController@create')->name('cms_slider_text_create');
Route::post('/cms/slider-text-store', 'SliderTextController@store')->name('cms_slider_text_store');
Route::get('/cms/slider-text-edit-{id}', 'SliderTextController@edit')->name('cms_slider_text_edit');
Route::post('/cms/slider-text-update-{id}', 'SliderTextController@update')->name('cms_slider_text_update');
Route::delete('/cms/slider-text-delete-{id}', 'SliderTextController@delete')->name('cms_slider_text_delete');
/*******  Slider Text  Section Ending */


/*******  Slider Images Section*********/
Route::get('/cms/slider-image', 'SliderImageController@index')->name('cms_slider_image');
Route::get('/cms/slider-image-create', 'SliderImageController@create')->name('cms_slider_image_create');
Route::post('/cms/slider-image-store', 'SliderImageController@store')->name('cms_slider_image_store');
Route::get('/cms/slider-image-edit-{id}', 'SliderImageController@edit')->name('cms_slider_image_edit');
Route::post('/cms/slider-image-update-{id}', 'SliderImageController@update')->name('cms_slider_image_update');
Route::delete('/cms/slider-image-delete-{id}', 'SliderImageController@delete')->name('cms_slider_image_delete');
/*******  Slider Images  Section Ending */


/*******  News Section*********/
Route::get('/cms/news', 'NewsController@index')->name('cms_news');
Route::get('/cms/news-create', 'NewsController@create')->name('cms_news_create');
Route::post('/cms/news-store', 'NewsController@store')->name('cms_news_store');
Route::get('/cms/news-edit-{id}', 'NewsController@edit')->name('cms_news_edit');
Route::post('/cms/news-update-{id}', 'NewsController@update')->name('cms_news_update');
Route::delete('/cms/news-delete-{id}', 'NewsController@delete')->name('cms_news_delete');
/*******  News  Section Ending */

/*******  About Page  *********/
Route::get('/cms/about', 'AboutController@index')->name('cms_about');
Route::post('/cms/about-header-store', 'AboutController@storePage')->name('cms_about_store_page');
Route::post('/cms/about-store', 'AboutController@store')->name('cms_about_store');
/*******  About Page Ending *********/

/*******  Products  Section  *********/
Route::get('/cms/products', 'ProductController@index')->name('cms_products');
Route::get('/cms/product-create', 'ProductController@create')->name('cms_product_create');
Route::post('/cms/product-store', 'ProductController@store')->name('cms_product_store');
Route::get('/cms/product-edit-{id}', 'ProductController@edit')->name('cms_product_edit');
Route::post('/cms/product-update-{id}', 'ProductController@update')->name('cms_product_update');
Route::delete('/cms/product-delete-{id}', 'ProductController@delete')->name('cms_product_delete');

/*******  Products  Section Ending *********/

/******* Product Images Slider  *********/
    Route::prefix('/product-images-{id}')->group(function() {
    Route::get("/image", "ProductImagesController@index")->name("cms_product_images");
    Route::get("/create", "ProductImagesController@create")->name("cms_product_image_create");
    Route::post("/store", "ProductImagesController@store")->name("cms_product_image_store");
    Route::get("/edit-{image_id}", "ProductImagesController@edit")->name("cms_product_image_edit");
    Route::post("/{image_id}-update", "ProductImagesController@update")->name("cms_product_image_update");
    Route::delete("/{image_id}-delete", "ProductImagesController@delete")->name("cms_product_image_delete");
    });
/*******  Product  Images Slider End  *********/


/*******  Components  Section  *********/
Route::prefix('/product-components-{id}')->group(function() {
Route::get('/component', 'ComponentController@index')->name('cms_components');
Route::get('/component-create', 'ComponentController@create')->name('cms_component_create');
Route::post('/component-store', 'ComponentController@store')->name('cms_component_store');
Route::get('/editt-{id_comp}', 'ComponentController@edit')->name('cms_component_edit');
Route::post('/update-{id_comp}', 'ComponentController@update')->name('cms_component_update');
Route::delete('/delete-{id_comp}', 'ComponentController@delete')->name('cms_component_delete');
});
/*******  Components  Section Ending *********/

/*******  Components  Section 2  *********/
Route::prefix('/product-components-two-{id}')->group(function() {
    Route::get('/component-two', 'ComponentTwoController@index')->name('cms_components_two');
    Route::get('/component-two-create', 'ComponentTwoController@create')->name('cms_component_two_create');
    Route::post('/component-two-store', 'ComponentTwoController@store')->name('cms_component_two_store');
    Route::get('/cms-{id_compon}-edit', 'ComponentTwoController@edit')->name('cms_component_two_edit');
    Route::post('/cms-{id_compon}-update', 'ComponentTwoController@update')->name('cms_component_two_update');
    Route::delete('/cms-{id_compon}-delete', 'ComponentTwoController@delete')->name('cms_component_two_delete');
    });
    /*******  Components  Section 2 Ending *********/

/*******  Product Info  *********/
Route::get('/cms/products-info', 'ProductController@info')->name('cms_product_info');
Route::post('/cms/product-infostore', 'ProductController@storePageProduct')->name('cms_product_info_store');
/*******  Product Info Ending *********/





/*******  Marketing Header Page *********/
Route::post('/cms/header-marketingstore', 'MarketingController@storePage')->name('header_marketing_store');
/*******  Marketing Header Page Ending */

/*******  Marketing Page*********/
 Route::get('/cms/marketing', 'MarketingController@index')->name('cms_marketing');
 Route::get('/cms/marketing-create', 'MarketingController@create')->name('cms_marketing_create');
 Route::post('/cms/marketing-store', 'MarketingController@store')->name('cms_marketing_store');
 Route::get('/cms/marketing-edit-{id}', 'MarketingController@edit')->name('cms_marketing_edit');
 Route::post('/cms/marketing-update-{id}', 'MarketingController@update')->name('cms_marketing_update');
 Route::delete('/cms/marketing-delete-{id}', 'MarketingController@delete')->name('cms_marketing_delete');
/*******  Marketing  Page Ending */

/*******  Slider Marketing Text Section*********/
Route::get('/cms/marketing-text', 'MarketingSLiderTextController@index')->name('cms_marketing_text');
Route::get('/cms/marketing-text-create', 'MarketingSLiderTextController@create')->name('cms_marketing_text_create');
Route::post('/cms/marketing-text-store', 'MarketingSLiderTextController@store')->name('cms_marketing_text_store');
Route::get('/cms/marketing-text-edit-{id}', 'MarketingSLiderTextController@edit')->name('cms_marketing_text_edit');
Route::post('/cms/marketing-text-update-{id}', 'MarketingSLiderTextController@update')->name('cms_marketing_text_update');
Route::delete('/cms/marketing-text-delete-{id}', 'MarketingSLiderTextController@delete')->name('cms_marketing_text_delete');
/*******  Slider Marketing Text  Section Ending */


/*******  Slider Marketing Text 2 Section*********/
Route::get('/cms/marketing-text-two', 'MarketingSLiderText2Controller@index')->name('cms_text');
Route::get('/cms/marketing-text-two-create', 'MarketingSLiderText2Controller@create')->name('cms_text_create');
Route::post('/cms/marketing-text-two-store', 'MarketingSLiderText2Controller@store')->name('cms_text_store');
Route::get('/cms/marketing-text-two-edit-{id}', 'MarketingSLiderText2Controller@edit')->name('cms_text_edit');
Route::post('/cms/marketing-text-two-update-{id}', 'MarketingSLiderText2Controller@update')->name('cms_text_update');
Route::delete('/cms/marketing-text-two-delete-{id}', 'MarketingSLiderText2Controller@delete')->name('cms_text_delete');
/*******  Slider Marketing Text  2 Section Ending */











/*******  Gallery Header Page *********/
Route::post('/cms/header-gallery-store', 'GalleryController@storePage')->name('header_gallery_store');
/*******  Gallery Header Page Ending */
/*******  Gallery Page*********/
 Route::get('/cms/gallery', 'GalleryController@index')->name('cms_gallery');
 Route::get('/cms/gallery-create', 'GalleryController@create')->name('cms_gallery_create');
 Route::post('/cms/gallery-store', 'GalleryController@store')->name('cms_gallery_store');
 Route::get('/cms/gallery-edit-{id}', 'GalleryController@edit')->name('cms_gallery_edit');
 Route::post('/cms/gallery-update-{id}', 'GalleryController@update')->name('cms_gallery_update');
 Route::delete('/cms/gallery-delete-{id}', 'GalleryController@delete')->name('cms_gallery_delete');
/*******  Gallery  Page Ending */


/*******  Catalog Header Page *********/
Route::post('/cms/header-catalog-store', 'CatalogController@storePage')->name('header_catalog_store');
/*******  Catalog Header Page Ending */
/*******  Catalog Page*********/
 Route::get('/cms/catalogs', 'CatalogController@index')->name('cms_catalog');
 Route::get('/cms/catalog-create', 'CatalogController@create')->name('cms_catalog_create');
 Route::post('/cms/catalog-store', 'CatalogController@store')->name('cms_catalog_store');
 Route::get('/cms/catalog-edit-{id}', 'CatalogController@edit')->name('cms_catalog_edit');
 Route::post('/cms/catalog-update-{id}', 'CatalogController@update')->name('cms_catalog_update');
 Route::delete('/cms/catalog-delete-{id}', 'CatalogController@delete')->name('cms_catalog_delete');
/*******  Catalog  Page Ending */
Route::get('/cms/settings', 'SettingsController@index')->name('settingsCms');


/*******  Contact Header Page *********/
Route::post('/cms/header-contact-store', 'ContactController@storePage')->name('header_contact_store');
/*******  Contact Header Page Ending */
/*******  Contact Page  *********/
 Route::get('/cms/contact', 'ContactController@index')->name('cms_contact');
 Route::post('/cms/contact-store', 'ContactController@storeContact')->name('cms_contact_store');
/*******  Contact Page Ending *********/

/*******  Settings  *********/
Route::get('/cms/settings', 'SettingsController@index')->name('cms_settings');
Route::post('/cms/settings-store', 'SettingsController@store')->name('cms_settings_store');
/*******  Settings Ending *********/

/*******  Seo Pages *********/
Route::get('/cms/seo', 'SeoPageController@index')->name('seoCms');
Route::get('/cms/seo-edit-{id}', 'SeoPageController@edit')->name('seoEdit');
Route::post('/cms/seo-update-{id}', 'SeoPageController@update')->name('seoUpdate');
/*******  Seo Pages Ending */