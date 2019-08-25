<div class="col-xl-12">
    <table class="table table-hover table-responsive-md">
        <thead>
        <tr>
            <th class="column-serial">#</th>
            <th class="column-team">Teams</th>
            <th class="column-play">Games Played</th>
            <th class="column-winover"> Wins</th>
            <th class="column-draw">Drawn</th>
            <th class="column-defeat">Lost</th>
            <th class="column-forhim">GF</th>
            <th class="column-onhim">GA</th>
            <th class="column-onhim">GD</th>
            <th class="column-points">Points</th>
        </tr>
        </thead>
        <tbody>
        @foreach($league->standings as $standing)
            <tr>
                <td class="column-serial">{{ $loop->iteration }}</td>
                <td class="column-team">
                    <a href="javascript:void(0)">
                        <img src="{{ $standing->team->logo_path }}"> {{ $standing->team->name }}
                    </a>
                </td>
                <td class="column-play">{{ $standing->games_played }}</td>
                <td class="column-winover">{{ $standing->wins }}</td>
                <td class="column-draw">{{ $standing->draws }}</td>
                <td class="column-defeat">{{ $standing->lost }}</td>
                <td class="column-forhim">{{ $standing->goals_scored }}</td>
                <td class="column-onhim">{{ $standing->goals_against }}</td>
                <td class="column-points">{{ ($standing->goal_difference > 0) ? "+".$standing->goal_difference : $standing->goal_difference   }}</td>
                <td class="column-points">{{ $standing->points }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
