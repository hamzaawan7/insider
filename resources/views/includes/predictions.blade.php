<div class="scorecard" data-animation="animated bounceInUp">
    <small>This is how the positions might be according to Week {{ $league->currentMatchWeek->week }} </small>
    <br/>
    <table class="table">
        <tbody>
        @foreach($league->teams as $team)
            <tr>
                <td class="column-team">
                    <img src="{{ $team->logo_path }}"> {{ $team->name }}
                </td>
                <td class="column-score">{{ round($team->teamPrediction->percentage, 2) }}%</td>
                <td class="column-over">{{ $team->standing->position }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
