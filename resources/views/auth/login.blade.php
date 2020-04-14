@extends('components.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
                    {{ __('E-Mail Address') }}
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker  @error('email') is-invalid @enderror" required autocomplete="email" autofocus
                       id="email"
                       type="email"
                       placeholder="email"
                       name="email"
                       value="{{ old('email') }}">
                @if ($errors->has('email'))
                <span class="invalid-feedback text-red-400 text-sm" role="alert">
                       <strong>{{ $errors->first('email') }}</strong>
                 </span>
                @endif
            </div>
            <div class="mb-6">
                <label class="block text-grey-darker text-sm font-bold mb-2 @error('password') is-invalid @enderror" for="password">
                    {{ __('Password') }}
                </label>
                <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3"
                       id="password"
                       type="password"
                       placeholder="******************"
                       name="password"
                       required autocomplete="current-password">
                <p class="text-red text-xs italic">Please choose a password.</p>
            </div>
            @error('password')
            <span class="invalid-feedback text-red-400 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
             </span>
            @enderror
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-black hover:bg-blue-dark text-white font-bold py-2 px-4 rounded-full my-4" type="submit">
                    {{ __('Login') }}
                </button>
                @if (Route::has('password.request'))
                    <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
@endsection
