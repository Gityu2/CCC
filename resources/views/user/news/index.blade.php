@extends('layouts.app')

@section('style')
<link href="{{ mix('css/top.css') }}" rel="stylesheet">
<link href="{{ mix('css/news_list.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <h1 class="header-top-news">Top news from world regions</h1>
    @foreach ($news_list as $country_name => $country_news)
        @isset($country_news['latest']) <!-- tentative condition -->
            <section class="country-section">
                <div class="text-center my-4">
                    <h2 class="country-top fw-bold">{{ $country_name }}</h2>
                    <hr class="country-top-line">
                </div>

                <div class="row">
                    <!-- news area -->
                    <div class="col-12 col-lg-9">
                        <!-- latest news -->
                        <div class="row top-news">
                            @include('user.news.layouts.top_news')
                        </div>
                        <!-- sub news -->
                        <div class="row mt-md-5 news-list">
                            @foreach ($country_news['list'] as $news)
                                @include('user.news.layouts.news_list')
                            @endforeach
                        </div>
                    </div>

                    <aside class="d-none d-lg-block col-lg-3">
                        <!-- what's hot -->
                        <h3 class="aside-title pb-2 mb-4">What's hot</h3>
                        <ol class="hot-news-content">
                            @foreach ($whats_hot_news[$country_name] as $news)
                                @include('user.news.layouts.detail_side_content')
                            @endforeach
                        </ol>
                    </aside>
                </div>
            </section>
        @endisset
    @endforeach
</div>
@endsection
