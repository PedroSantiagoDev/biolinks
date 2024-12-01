<div>
    <h1>Dashboard</h1>

    @if($message = session()->get('message'))
    <span>{{$message}}</span>
    @endif

    <a href="{{ route('profile') }}">Atualizar Profile</a>

    <ul>
        @foreach ($links as $link)
        <li style="display: flex;">
            @unless ($loop->last)
            <form action="{{ route('links.down', $link) }}" method="post">
                @csrf
                @method('patch')
                <button>↓</button>
            </form>
            @endunless

            <a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a>

            @unless($loop->first)
            <form action="{{ route('links.up', $link) }}" method="post">
                @csrf
                @method('patch')
                <button>↑</button>
            </form>
            @endunless

            <form action="{{ route('links.destroy', $link) }}" method="post" onsubmit="return confirm('Tem certeza?')">
                @csrf
                @method('delete')
                <button>deletar</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>