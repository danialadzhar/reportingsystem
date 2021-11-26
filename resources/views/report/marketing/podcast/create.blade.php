@extends('layouts.app')

@section('css')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Marketing</li>
                    <li class="breadcrumb-item active" aria-current="page">Podcast</li>
                </ol>
            </nav>
        </div>

        @if(session('success'))
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successful!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        <div class="col-md-12">
            <form action="{{ url('home/marketing/podcast/store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" value="daily_download" name="report_option[]" required>
                        <input type="text" class="form-control" placeholder="Daily Download" name="report_value[]" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" value="total_download" name="report_option[]" required>
                        <input type="text" class="form-control" placeholder="Total Download" name="report_value[]" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger float-end"><i class="fas fa-save"></i> Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection