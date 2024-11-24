<div>
    <h1>Criar um link</h1>

    @if($message = session()->get('message'))
        <span>{{$message}}</span>
    @endif

    <form action="{{ route('links.create') }}" method="post">
        @csrf

        <div>
            <input type="text" name="link" placeholder="Link" value="{{ old('link') }}"/>
            @error('link')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}"/>
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Salvar</button>
    </form>
</div>

