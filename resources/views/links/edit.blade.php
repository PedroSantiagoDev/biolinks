<div>
    <h1>Editar um link :: {{ $link->name }}</h1>

    @if($message = session()->get('message'))
        <span>{{$message}}</span>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="post">
        @csrf
        @method('put')

        <div>
            <input type="text" name="link" placeholder="Link" value="{{ old('link', $link->link) }}"/>
            @error('link')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="text" name="name" placeholder="Nome" value="{{ old('name', $link->name) }}"/>
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <a href="{{ route('dashboard') }}">Cancelar</a>
        <button>Salvar</button>
    </form>
</div>

