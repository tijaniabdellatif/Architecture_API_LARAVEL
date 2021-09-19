
<div>
    <ul>
        @foreach($addresses as $adr)
            <li>
                {{ $adr->country  }}

                <p>{{ $adr->owner->name }}</p>
            </li>
        @endforeach
    </ul>
</div>
