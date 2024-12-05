<x-layout.app>
    <div class="mx-auto max-w-screen-md flex items-center justify-center py-20">
        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h1 class="card-title">Login</h1>
                @if ($message = session()->get('message'))
                    <span>{{ $message }}</span>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div>
                        <input class="input input-bordered" type="text" name="email" placeholder="Email"
                            value="{{ old('email') }}" />
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <input class="input input-bordered" type="password" name="password" placeholder="Senha" />
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Logar</button>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>
