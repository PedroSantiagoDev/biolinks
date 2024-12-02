<div>
    <img src="/storage/{{ $user->photo }}" alt="Photo Profile">
    <h2>{{ $user->name }}</h2>
    <h3>{{ $user->description }}</h3>
    <ul>
        @foreach ($user->links as $link)
            <li>
                <a href="{{ $link->link }}" target="_blank">
                    {{ $link->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
