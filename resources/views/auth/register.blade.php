<div>
    <h1>Register</h1>

    @if($message = session()->get('message'))
        <span>{{$message}}</span>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>
            <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}"/>
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"/>
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="text" name="email_confirmation" placeholder="Email confirmação"/>
        </div>

        <div>
            <input type="password" name="password" placeholder="Senha"/>
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Registar</button>
    </form>
</div>
