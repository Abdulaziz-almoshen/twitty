@extends('components.app')

@section('content')
    <form method="POST" action="{{ route('register') }}">
                @csrf
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                        {{ __('Name') }}
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                           id="name"
                           name="name"
                           type="text"
                           placeholder="your name">
                    @error('name')
                    <span class="invalid-feedback text-red-500" role="alert">
                           <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                        {{ __('nickname') }}
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                           id="name"
                           type="text"
                           name="nickname"
                           placeholder="your awesome @nickname">
                    <p class="text-gray-500 text-xs italic">we encurage you to have something unique.</p>
                    @error('nickname')
                    <span class="invalid-feedback text-red-500" role="alert">
                           <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                </div>
            </div>
            <div class="flex -mx-3">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                        {{ __('E-Mail Address') }}
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 @error('email') is-invalid @enderror"
                        id="email"
                        type="email"
                        name="email"
                        placeholder="your email">
                    @error('email')
                    <span class="invalid-feedback text-red-500" role="alert">
                           <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                        {{ __('Password') }}
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 @error('password') is-invalid @enderror"
                           id="password"
                           type="password"
                           name="password"
                           placeholder="******************"

                    required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="md:w-full px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="password-confirm">
                        {{ __('Confirm Password') }}
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 @error('password') is-invalid @enderror"
                           id="password-confirm"
                           type="password"
                           name="password_confirmation"
                    required autocomplete="new-password">
                    <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
                    @error('password_confirmation')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="-mx-3 md:flex mb-2">
                <div class="md:flex-1 mt-2 mb:mt-0 md:px-3">
                    <textarea class="w-full shadow-inner p-4 border-0" placeholder="We build fine acmes." rows="3" name="info"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button class="bg-blue-500 hover:bg-black-dark text-white font-bold py-2 px-4 rounded-full" type="submit">
                    {{ __('Register') }}
                </button>
            </div>
        </div>

    </form>
    @endsection
