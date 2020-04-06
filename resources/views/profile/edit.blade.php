@extends('components.app')
@section('content')
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <form method="post" action="{{route('update-profile', $user)}}">
        @csrf
        <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col">
            <div class="relative h-24 ">
                <img
                    src="{{auth()->user()->getpravatar()}}"
                    alt=""
                    style="left: 40%"
                    class="absolute transform -translate-y-6 h-auto rounded-full pr-2 "
                    width="100"
                    height="100"
                >
                @error('image')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="relative h-10">
                <input type="file" name="image" class=" absolute h-auto rounded-full pr-2 mt-2 text-base leading-normal"
                       style="left: 40%">
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-grey-darker" name="name"
                       type="text" placeholder="{{$user->name}}">
            </div>
            @error('name')
            <p>{{$message}}</p>
            @enderror
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                    nickname
                </label>
                <input class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-grey-darker" name="nickname"
                       type="text" placeholder="{{$user->nickname? : 'your awesome nickname'}}">
            </div>
            @error('nickname')
            <p>{{$message}}</p>
            @enderror
            <div class="mb-6">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                    change current Password
                </label>
                <input
                    class="shadow appearance-none border border-red rounded-lg w-full py-2 px-3 text-grey-darker mb-3"
                    id="password" type="password" placeholder="******************">
                <p class="text-red text-xs italic">Please choose a nice password.</p>
            </div>

            <div class="mb-6">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                    Tell them about you
                </label>
                <textarea name="info"
                          class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-grey-darker"
                          id="" cols="30"
                          rows="2"
                          placeholder="{{$user->info? : ' tell me more abnout you please!'}}"
                          style="resize: none"></textarea>
            </div>
            @error('info')
            <p>{{$message}}</p>
            @enderror
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue hover:bg-blue-dark text-black font-bold py-2 px-4 rounded-lg border border-gray-200"
                    type="submit">
                    Save
                </button>
            </div>

        </div>
    </form>
@endsection
