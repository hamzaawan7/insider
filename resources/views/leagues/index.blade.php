@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 pl-lg-0">
                <div class="left-aside-wrapper">
                    <!-- Tours Teams -->
                    <section class="tournaments-header">
                        <div class="row">
                            <div class="col-lg-3">
                                <h3>
                                    <img src="{{ $league->logo_path }}"
                                         alt="Egyptian league" width="40px">
                                    {{ $league->name }}
                                </h3>
                            </div>
                            <div class="col-lg-9">
                                <nav class="tourNav">
                                    <a href="{{ route('home') }}">Reset All</a>
                                    @if($league->current_week_id != 6)
                                        <a href="{{ route('next-week') }}">
                                            {{ Route::currentRouteName() == "home" ? "Simulate" : "Next" }} Week
                                        </a>
                                        <a href="{{ route('league', true) }}">Play All</a>
                                    @endif
                                </nav>
                            </div>
                        </div>
                        <div class="tourTeams">
                            <div class="row">
                                <div class="col-lg-10 mx-auto">
                                    <ul class="owl owl-carousel" id="tourTeams">
                                        @foreach($league->teams as $team)
                                            <li>
                                                <img src="{{ $team->logo_path }}">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Tours Results -->
                <section class="tournaments results mb-0">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="section-title">Fixture Results</h6>
                        </div>
                        <div class="col-12" id="matches">
                            @include('includes.matches', ['league' => $league])
                        </div>

                        <div class="col-12">
                            <h6 class="section-title">Standings</h6>
                        </div>
                        <div class="col-12" id="standings">
                            @include('includes.standings', ['league' => $league])
                        </div>
                    </div>
                </section>
            </div>
            <!--! Left Aside Sections -->

            <!--! col-->
            <!-- UPDATES WRAPPER -->
            <section class="updates-wrapper col-xl-3 col-lg-4">
                <!-- current cricket -->
                <section class="current-cricket">
                    <div class="section-header">
                        <p class="section-subheading">LIVE<a href="#" class="btn btn-view-all float-right">View
                                All</a></p>
                        <h4 class="section-heading">Predictions</h4>
                    </div>
                    <div class="card p-0">
                        <div id="currCric" class="carousel slide" data-interval="false" data-ride="carousel"
                             data-pause="true">
                            <div class="carousel-inner">
                                <!-- one slide -->
                                <div class="carousel-item active">
                                    <div class="img-wrap">
                                        <img src="{{ asset('img/newsdetail-thumbnails.jpg') }}">
                                    </div>
                                    <div id="predictions">
                                        @include('includes.predictions', ['league' => $league])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--! current cricket -->
                <!-- our blogs -->
                <section class="our-blogs">
                    <div class="section-header">
                        <p class="section-subheading">RECENT<a href="#" class="btn btn-view-all float-right">View
                                All</a></p>
                        <h4 class="section-heading">Our Blogs</h4>
                    </div>
                    <div class="card p-0">
                        <div class="card-header mt-3">
                            <img class="img-fluid" src="{{ asset('img/our-blog.jpg') }}">
                        </div>
                        <div class="card-body">
                            <p class="blog-title">2018 FIFA World Cup<sup>TM</sup></p>
                            <p class="blog-subtitle">Closing Press Conference for the 2018 FIFA World Cup Russia</p>
                        </div>
                    </div>

                </section>
                <!--! our blogs -->
            </section>
            <!--! UPDATES WRAPPER -->
        </div>
        <!--! row-->
    </main>
@endsection

@if(!empty($play_all))
@section('scripts')
    <script type="text/javascript">
        var i = 0;
        var auto_refresh1 = setInterval(
            function () {
                var url = "{{ route('simulate') }}";
                $.ajax({
                    url: url,
                    success: function () {
                        i++;
                    }
                });
            }, 5000
        );
        var auto_refresh2 = setInterval(
            function () {
                var matches_url = "{{ route('update-matches') }}";
                var standings_url = "{{ route('update-standings') }}";
                var predictions_url = "{{ route('update-predictions') }}";
                $('#matches').fadeOut("fast");
                $('#matches').load(matches_url, function () {
                    $('#matches').fadeIn();
                });
                $('#predictions').fadeOut("fast");
                $('#predictions').load(predictions_url, function () {
                    $('#predictions').fadeIn();
                });
                $('#standings').fadeOut("fast");
                $('#standings').load(standings_url, function () {
                    $('#standings').fadeIn();
                });
            }, 5000
        );
    </script>
@endsection
@endif
