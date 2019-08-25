@foreach($league->currentMatchWeek->matches as $match)
    <div class="col-xl-12">
        <div class="card card-match-between">
            <div class="team">
                <div class="team-thumbnail-wrap">
                    <div class="img-wrap">
                        <img src="{{ $match->homeTeam->logo_path }}">
                    </div>
                    <p>{{ $match->homeTeam->name }}</p>
                </div>
            </div>
            <div class="card-center">
                <p class="team-goals">
                    <span class="goals">{{ $match->home_team_score }}</span>
                    -
                    <span class="goals">{{ $match->visitor_team_score }}</span>
                </p>
                <a href="javascript:void(0)" class="btn">Match Week {{ $league->currentMatchWeek->week }}</a>
                <p class="match-date"><span class="date">{{ date('d M y') }}</span></p>
            </div>
            <div class="team">
                <div class="team-thumbnail-wrap">
                    <div class="img-wrap">
                        <img src="{{ $match->visitorTeam->logo_path }}">
                    </div>
                    <p>{{ $match->visitorTeam->name }}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach
