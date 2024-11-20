<div>
    <h1>Login</h1>

    @if($message = session()->get('message'))
    <span>{{$message}}</span>
    @endif

    <form action="{{ route('login') }}" method="post">
        @csrf

        <div>
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" />
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="password" name="password" placeholder="Senha" />
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Logar</button>
    </form>
</div>
