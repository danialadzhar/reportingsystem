<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container pb-5 pt-5">
        <div class="row mb-3">
            <div class="col-md-12">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Marketing</li>
                    </ol>
                </nav>
            </div>
        </div>

        {{-- Row 1 --}}
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class="card-body px-5 py-5">
                        <h4>Like Marketing</h4>
                        <hr>
                        <p><b>Cost Per Like : </b> RM {{ $report_like_marketing_cost_per_like->report_value }}</p>
                        <p><b>Total Spending : </b> RM {{ number_format($report_like_marketing_total_spending->report_value) }}</p>
                        <p><b>Total Like : </b> {{ number_format($report_like_marketing_total_like->report_value) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="card shadow">
                    <div class="card-body px-5 py-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Followers</h4>
                                <hr>
                            </div>
                            <div class="col-md-5">
                                <h4 class="text-primary">Facebook</h4>
                                <p><b>New : </b>{{ number_format($report_followers_new_followers_facebook->report_value) }}</p>
                                <p><b>Total : </b> {{ number_format($report_followers_total_followers_facebook->report_value) }}</p>
                            </div>
                            <div class="col-md-5">
                                <h4 class="text-danger">Instagram</h4>
                                <p><b>New : </b> {{ number_format($report_followers_new_followers_instagram->report_value) }}</p>
                                <p><b>Total : </b> {{ number_format($report_followers_total_followers_instagram->report_value) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 2 --}}
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="card shadow">
                    <div class="card-body px-5 py-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Facebook Group</h4>
                                <hr>
                            </div>
                            <div class="col-md-5">
                                <p><b>New Members : </b>{{ number_format($report_new_members->report_value) }}</p>
                                <p><b>Active Members : </b> {{ number_format($report_active_members->report_value) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class="card-body text-center px-5 py-5">
                        <h4>Facebook <br> Engagement</h4>
                        @if ($report_engagement->status_value == 'up')
                            <h1 class="text-success mt-4"><i class="fas fa-angle-double-up"></i> {{ number_format($report_engagement->report_value) }}</h1>
                        @endif

                        @if ($report_engagement->status_value == 'down')
                            <h1 class="text-danger mt-4"><i class="fas fa-angle-double-down"></i> {{ number_format($report_engagement->report_value) }}</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 3 --}}
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class="card-body text-center px-5 py-5">
                        <h4>Post <br> Reach</h4>
                        @if ($report_post_reach->status_value == 'up')
                            <h1 class="text-success mt-4"><i class="fas fa-angle-double-up"></i> {{ number_format($report_post_reach->report_value) }}</h1>
                        @endif

                        @if ($report_post_reach->status_value == 'down')
                            <h1 class="text-danger mt-4"><i class="fas fa-angle-double-down"></i> {{ number_format($report_post_reach->report_value) }}</h1>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="card shadow">
                    <div class="card-body px-5 py-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Podcast</h4>
                                <hr>
                            </div>
                            <div class="col-md-5">
                                <p><b>Daily Download : </b>{{ number_format($report_daily_download->report_value) }}</p>
                                <p><b>Total Download : </b> {{ number_format($report_total_download->report_value) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 4 --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card shadow">
                    <div class="card-body text-center px-5 py-5">
                        <h4>Blog <br> Traffic</h4>
                        @if ($report_blog_traffic->status_value == 'up')
                            <h1 class="text-success mt-4"><i class="fas fa-angle-double-up"></i> {{ number_format($report_blog_traffic->report_value) }}</h1>
                        @endif

                        @if ($report_blog_traffic->status_value == 'down')
                            <h1 class="text-danger mt-4"><i class="fas fa-angle-double-down"></i> {{ number_format($report_blog_traffic->report_value) }}</h1>
                        @endif
                    </div>
                </div>
            </div>
             <div class="col-md-6 mb-3">
                <div class="card shadow">
                    <div class="card-body text-center px-5 py-5">
                        <h4>Telegram <br> Subscriber</h4>
                        @if ($report_telegram_subscriber->status_value == 'up')
                            <h1 class="text-success mt-4"><i class="fas fa-angle-double-up"></i> {{ number_format($report_telegram_subscriber->report_value) }}</h1>
                        @endif

                        @if ($report_telegram_subscriber->status_value == 'down')
                            <h1 class="text-danger mt-4"><i class="fas fa-angle-double-down"></i> {{ number_format($report_telegram_subscriber->report_value) }}</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 5 --}}
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="card shadow">
                    <div class="card-body px-5 py-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Tiktok</h4>
                                <hr>
                            </div>
                            <div class="col-md-5">
                                <p><b>Total Views : </b>{{ number_format($report_tiktok_total_views->report_value) }}</p>
                                <p><b>Total Followers : </b> {{ number_format($report_tiktok_total_followers->report_value) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class="card-body text-center px-5 py-5">
                        <h4>Youtube <br> Subscriber</h4>
                        @if ($report_youtube_subscriber->status_value == 'up')
                            <h1 class="text-success mt-4"><i class="fas fa-angle-double-up"></i> {{ number_format($report_youtube_subscriber->report_value) }}</h1>
                        @endif

                        @if ($report_youtube_subscriber->status_value == 'down')
                            <h1 class="text-danger mt-4"><i class="fas fa-angle-double-down"></i> {{ number_format($report_youtube_subscriber->report_value) }}</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 6 --}}
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card shadow">
                    <div class="card-body px-5 py-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Zeepicks</h4>
                                <hr>
                            </div>
                            <div class="col-md-3">
                                <p><b>Total Subscriber : </b>{{ number_format($zeepicks_subscriber) }}</p>
                                <p><b>Total Sales(Annualy) : </b> {{ number_format($zeepicks_payment_history_yearly) }}</p>
                            </div>
                            <div class="col-md-3">
                                <p><b>Total Transactions : </b>{{ number_format($zeepicks_total_transactions) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/5c12e9bac7.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>