<div>
    <h1>Profile</h1>
    @if ($message = session('message'))
        <div>{{ $message }}</div>
    @endif
    <form action="{{ route('profile') }}" method="post">
        @csrf
        @method('put')
        <div>
            <input name="name" placeholder="Nome" value="{{ old('name', $user->name) }}" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <textarea name="description" placeholder="Breve Resumo">
            {{ old('description', $user->description) }}
            </textarea>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <span>biolinks.com.br</span>
            <input name="handler" placeholder="@seulink" value="{{ old('handler', $user->handler) }}" />
            @error('handler')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <a href="{{ route('dashboard') }}">cancelar</a>
        <button>update</button>
    </form>
</div>