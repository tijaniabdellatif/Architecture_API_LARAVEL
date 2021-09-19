
<div>
    <ul>
        @foreach($users as $user)
        <li>
            {{ $user->name  }}
            <p>{{ optional($user->address)->country }}</p>
        </li>
        @endforeach
    </ul>
</div>
