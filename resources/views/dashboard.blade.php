<div>
    <h1>Dashboard</h1>

    @if($message = session()->get('message'))
        <span>{{$message}}</span>
    @endif

    <a href="{{ route('links.create') }}">Criar</a>

    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a>
                <form action="{{ route('links.destroy', $link) }}" method="post" onsubmit="return confirm('Tem certeza?')">
                    @csrf
                    @method('delete')
                    <button>deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
