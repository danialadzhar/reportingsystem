<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporting;

class ReportMarketingController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Marketing
    |--------------------------------------------------------------------------
    |
    */

    public function like_marketing()
    {
        return view('report.marketing.like_marketing.create');
    }

    public function like_marketing_store(Request $request)
    {   

        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'LIKE_MARKETING',
                'status_value' => 0,
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report like marketing updated!');
    }

    public function followers()
    {
        return view('report.marketing.followers.create');
    }

    public function followers_store(Request $request)
    {
        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'FOLLOWERS',
                'status_value' => 0,
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report followers updated!');

    }

    public function engagement()
    {
        return view('report.marketing.engagement.create');
    }

    public function engagement_store(Request $request)
    {
        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'ENGAGEMENT',
                'status_value' => $request->status_value,
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report engagement updated!');

    }

    public function facebook_group()
    {
        return view('report.marketing.facebook_group.create');    
    }

    public function facebook_group_store(Request $request)
    {
        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'FACEBOOK_GROUP',
                'status_value' => 0,
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report facebook group updated!');

    }

    public function post_reach()
    {
        return view('report.marketing.facebook_reach.create');
    }

    public function post_reach_store(Request $request)
    {
        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'POST_REACH',
                'status_value' => $request->status_value,
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report post reach updated!');

    }

    public function podcast()
    {
        return view('report.marketing.podcast.create');
    }

    public function podcast_store(Request $request)
    {
        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'PODCAST',
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report podcast updated!');

    }

    public function blog_traffic()
    {
        return view('report.marketing.blog_traffic.create');
    }

    public function blog_traffic_store(Request $request)
    {
        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'BLOG_TRAFFIC',
                'status_value' => $request->status_value,
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report blog traffic updated!');

    }

    public function telegram_subscriber()
    {
        return view('report.marketing.telegram_subscriber.create');
    }

    public function telegram_subscriber_store(Request $request)
    {
        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'TELEGRAM_SUBSCRIBER',
                'status_value' => $request->status_value,
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report telegram subscriber updated!');

    }

    public function youtube_subscriber()
    {
        return view('report.marketing.youtube.create');
    }

    public function youtube_subscriber_store(Request $request)
    {
        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'YOUTUBE_SUBSCRIBER',
                'status_value' => $request->status_value,
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report youtube subscriber updated!');

    }

    public function tiktok()
    {
        return view('report.marketing.tiktok.create');
    }

    public function tiktok_store(Request $request)
    {
        foreach ($request->report_value as $key => $value) {

            Reporting::create([
                'report_option' => $request->report_option[$key],
                'report_value' => $value,
                'report_section' => 'TIKTOK',
                'dept' => 'MARKETING',
            ]);

        }

        return redirect()->back()->with('success', 'New report tiktok updated!');

    }
}
