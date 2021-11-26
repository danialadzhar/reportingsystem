<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporting;
use Illuminate\Support\Facades\Http;

class DisplayReportController extends Controller
{
    public function index()
    {
        //
    }

    public function display_report()
    {   
        // Like Marketing
        $report_like_marketing_cost_per_like = Reporting::where('dept', 'MARKETING')->where('report_section', 'LIKE_MARKETING')->where('report_option', 'cost_per_like')->latest()->first();
        $report_like_marketing_total_spending = Reporting::where('dept', 'MARKETING')->where('report_section', 'LIKE_MARKETING')->where('report_option', 'total_spending')->latest()->first();
        $report_like_marketing_total_like = Reporting::where('dept', 'MARKETING')->where('report_section', 'LIKE_MARKETING')->where('report_option', 'total_like')->latest()->first();

        // Followers
        $report_followers_new_followers_facebook = Reporting::where('dept', 'MARKETING')->where('report_section', 'FOLLOWERS')->where('report_option', 'new_followers_facebook')->latest()->first();
        $report_followers_new_followers_instagram = Reporting::where('dept', 'MARKETING')->where('report_section', 'FOLLOWERS')->where('report_option', 'new_followers_instagram')->latest()->first();
        $report_followers_total_followers_facebook = Reporting::where('dept', 'MARKETING')->where('report_section', 'FOLLOWERS')->where('report_option', 'total_followers_facebook')->latest()->first();
        $report_followers_total_followers_instagram = Reporting::where('dept', 'MARKETING')->where('report_section', 'FOLLOWERS')->where('report_option', 'total_followers_instagram')->latest()->first();

        // Engagement
        $report_engagement = Reporting::where('dept', 'MARKETING')->where('report_section', 'ENGAGEMENT')->where('report_option', 'total_engagement')->latest()->first();

        // Facebook Group
        $report_new_members = Reporting::where('dept', 'MARKETING')->where('report_section', 'FACEBOOK_GROUP')->where('report_option', 'new_members')->latest()->first();
        $report_active_members = Reporting::where('dept', 'MARKETING')->where('report_section', 'FACEBOOK_GROUP')->where('report_option', 'active_members')->latest()->first();

        // Post Reach
        $report_post_reach = Reporting::where('dept', 'MARKETING')->where('report_section', 'POST_REACH')->where('report_option', 'total_reach')->latest()->first();

        // Podcast
        $report_daily_download = Reporting::where('dept', 'MARKETING')->where('report_section', 'PODCAST')->where('report_option', 'daily_download')->latest()->first();
        $report_total_download = Reporting::where('dept', 'MARKETING')->where('report_section', 'PODCAST')->where('report_option', 'total_download')->latest()->first();

        // Blog Traffic
        $report_blog_traffic = Reporting::where('dept', 'MARKETING')->where('report_section', 'BLOG_TRAFFIC')->where('report_option', 'total_traffic')->latest()->first();

        // Telegram Subscriber
        $report_telegram_subscriber = Reporting::where('dept', 'MARKETING')->where('report_section', 'TELEGRAM_SUBSCRIBER')->where('report_option', 'total_subscriber')->latest()->first();

        // Youtube Subscriber
        $report_youtube_subscriber = Reporting::where('dept', 'MARKETING')->where('report_section', 'YOUTUBE_SUBSCRIBER')->where('report_option', 'total_subscriber')->latest()->first();

        // Tiktok
        $report_tiktok_total_views = Reporting::where('dept', 'MARKETING')->where('report_section', 'TIKTOK')->where('report_option', 'total_views')->latest()->first();
        $report_tiktok_total_followers = Reporting::where('dept', 'MARKETING')->where('report_section', 'TIKTOK')->where('report_option', 'total_followers')->latest()->first();

        // Zeepicks
        $zeepicks_subscriber = Http::get('http://app.zeepicks.com/api/total-subscriber')->json();
        $zeepicks_payment_history_yearly = Http::get('http://app.zeepicks.com/api/payment-history-yearly')->json();
        $zeepicks_total_transactions = Http::get('http://app.zeepicks.com/api/total-transactions')->json();

        return view('display.report', compact('report_like_marketing_cost_per_like', 'report_like_marketing_total_spending','report_like_marketing_total_like','report_followers_new_followers_facebook',
        'report_followers_new_followers_instagram', 'report_followers_total_followers_facebook','report_followers_total_followers_instagram', 'report_engagement', 'report_new_members', 'report_active_members',
        'report_post_reach', 'report_daily_download', 'report_total_download', 'report_blog_traffic', 'report_telegram_subscriber', 'report_youtube_subscriber', 'report_tiktok_total_views', 'report_tiktok_total_followers',
        'zeepicks_subscriber', 'zeepicks_total_transactions', 'zeepicks_payment_history_yearly'));
    }
}
