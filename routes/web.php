<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Display Report Controller
|--------------------------------------------------------------------------
|
*/

Route::get('report/marketing', 'DisplayReportController@display_report');

/*
|--------------------------------------------------------------------------
| Report Marketing Controller
|--------------------------------------------------------------------------
|
*/

// Like Marketing
Route::get('home/marketing/like-marketing', 'ReportMarketingController@like_marketing');
Route::post('home/marketing/like-marketing/store', 'ReportMarketingController@like_marketing_store');

// Followers
Route::get('home/marketing/followers', 'ReportMarketingController@followers');
Route::post('home/marketing/followers/store', 'ReportMarketingController@followers_store');

// Engagement
Route::get('home/marketing/engagement', 'ReportMarketingController@engagement');
Route::post('home/marketing/engagement/store', 'ReportMarketingController@engagement_store');

// Facebook Group
Route::get('home/marketing/facebook-group', 'ReportMarketingController@facebook_group');
Route::post('home/marketing/facebook-group/store', 'ReportMarketingController@facebook_group_store');

// Facebook Reach
Route::get('home/marketing/post-reach', 'ReportMarketingController@post_reach');
Route::post('home/marketing/post-reach/store', 'ReportMarketingController@post_reach_store');

// Podcast
Route::get('home/marketing/podcast', 'ReportMarketingController@podcast');
Route::post('home/marketing/podcast/store', 'ReportMarketingController@podcast_store');

// Blog Traffic
Route::get('home/marketing/blog-traffic', 'ReportMarketingController@blog_traffic');
Route::post('home/marketing/blog-traffic/store', 'ReportMarketingController@blog_traffic_store');

// Telegram Subscriber
Route::get('home/marketing/telegram-subscriber', 'ReportMarketingController@telegram_subscriber');
Route::post('home/marketing/telegram-subscriber/store', 'ReportMarketingController@telegram_subscriber_store');

// Youtube Subscriber
Route::get('home/marketing/youtube-subscriber', 'ReportMarketingController@youtube_subscriber');
Route::post('home/marketing/youtube-subscriber/store', 'ReportMarketingController@youtube_subscriber_store');

// Tiktok
Route::get('home/marketing/tiktok', 'ReportMarketingController@tiktok');
Route::post('home/marketing/tiktok/store', 'ReportMarketingController@tiktok_store');