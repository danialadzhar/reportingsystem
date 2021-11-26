@extends('layouts.app')

@section('css')
<style>
    .special-card-red{
        background-color: #FE5F5F;
        border-radius: 20px;
    }

    .special-card-blue{
        background-color: #4649fa;
        border-radius: 20px;
    }

    .special-card-green{
        background-color: #28d65c;
        border-radius: 20px;
    }

    .special-card-yellow{
        background-color: #ebb92f;
        border-radius: 20px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>

        {{-- Marketing --}}
        @if (Auth::User()->dept == 'MARKETING')
            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/like-marketing') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fas fa-thumbs-up"></i> Like Marketing</h2>
                            <p>Average total like, total spending & cost per like</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/followers') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fas fa-users"></i> Followers</h2>
                            <p>Total new and reach for Facebook & Instagram</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/engagement') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fas fa-grin-hearts"></i> Engagement</h2>
                            <p>Total engagement & reaction on Facebook by Daily</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/facebook-group') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fas fa-users"></i> Facebook Group</h2>
                            <p>Total new member & active member in Facebook Group by Daily</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/blog-traffic') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fas fa-traffic-light"></i> Blog Traffic</h2>
                            <p>Total new session or viewer in blog everyday</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/telegram-subscriber') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fab fa-telegram"></i> Telegram</h2>
                            <p>Report total new subscriber in telegram everyday</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/post-reach') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fas fa-chart-line"></i> Post Reach</h2>
                            <p>Total average post reach everyday on Facebook</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/podcast') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fas fa-podcast"></i> Podcast</h2>
                            <p>Report total daily download & total download</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/youtube-subscriber') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fab fa-youtube"></i> Youtube</h2>
                            <p>Report total new subscriber in Youtube by daily</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-3">
                <a href="{{ url('home/marketing/tiktok') }}" class="text-decoration-none">
                    <div class="card special-card-red">
                        <div class="card-body text-light py-4 px-5">
                            <h2><i class="fab fa-tiktok"></i> Tiktok</h2>
                            <p>Report total new followers & views everyday</p>
                        </div>
                    </div>
                </a>
            </div>
        @endif

        {{-- Research & Development --}}
        @if (Auth::User()->dept == 'R&D')
            <div class="col-md-4 mb-3">
                <div class="card special-card-blue">
                    <div class="card-body text-light py-4 px-5">
                        <h2><i class="fas fa-user-plus"></i> Report RPM</h2>
                        <p>Total register to <b>Roket Pemasaran Momentum</b> and track by daily</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card special-card-blue">
                    <div class="card-body text-light py-4 px-5">
                        <h2><i class="fas fa-angle-double-up"></i> Traffic Minisite</h2>
                        <p>Report total traffic every hours user visit in minisite</p>
                    </div>
                </div>
            </div>
        @endif

        {{-- Sales --}}
        @if (Auth::User()->dept == 'SALES')
            <div class="col-md-4 mb-3">
                <div class="card special-card-green">
                    <div class="card-body text-dark py-4 px-5">
                        <h2><i class="fas fa-user-plus"></i> ARB Registration</h2>
                        <p>Report total ARB registration, total collection & new registration</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card special-card-green">
                    <div class="card-body text-dark py-4 px-5">
                        <h2><i class="fas fa-hand-holding-usd"></i> Daily Sales</h2>
                        <p>Report total sales any program that related to Momentum Internet</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card special-card-green">
                    <div class="card-body text-dark py-4 px-5">
                        <h2><i class="fas fa-user-tag"></i> Platinum</h2>
                        <p>Report total collection & new platinum registration by daily</p>
                    </div>
                </div>
            </div>
        @endif

        {{-- Account & Finance --}}
        @if (Auth::User()->dept == 'A&F')
            <div class="col-md-4 mb-3">
                <div class="card special-card-yellow">
                    <div class="card-body text-dark py-4 px-5">
                        <h2><i class="fas fa-exchange-alt"></i> Transactions</h2>
                        <p>Report total money in & money out every day in Momentum Internet</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card special-card-yellow">
                    <div class="card-body text-dark py-4 px-5">
                        <h2><i class="fas fa-exchange-alt"></i> RPM Transactions</h2>
                        <p>Report total event RPM transaction & collection everyday</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card special-card-yellow">
                    <div class="card-body text-dark py-4 px-5">
                        <h2><i class="fas fa-dollar-sign"></i> Collection MBM</h2>
                        <p>Report total collection Ultimate Plus & Platinum everyday</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
