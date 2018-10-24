<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        {{--<tr>--}}
        {{--<th>{{ __('labels.frontend.user.profile.avatar') }}</th>--}}
        {{--<td><img src="{{ $logged_in_user->picture }}" class="user-profile-image" /></td>--}}
        {{--</tr>--}}
        <tr>
            <th>{{ __('labels.frontend.user.profile.name') }}</th>
            <td>{{ $logged_in_user->name }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.email') }}</th>
            <td>{{ $logged_in_user->email }}</td>
        </tr>
        <tr>
            <th>Balance</th>
            <td>£{{ $logged_in_user->balance }}</td>
        </tr>
        <tr>
            <th>Date Registered</th>
            <td>{{ $logged_in_user->created_at->timezone(get_user_timezone()) }}
                ({{ $logged_in_user->created_at->diffForHumans() }})
            </td>
        </tr>
    </table>
</div>