@extends('components.app')
@section('content')

    <form method="post" action="{{route('update-profile', $user)}}" enctype="multipart/form-data" id="upload_image_form" >
        @csrf
        @method('PATCH')
        <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col">
            <div class="relative h-24 ">
                <img
                    src="{{$user->image}}"
                    alt=""
                    id="preview_img"
                    style="left: 40%"
                    class="absolute transform -translate-y-6 h-auto rounded-full pr-2 "
                    width="100"
                    height="100"
                >

            </div>
            <div class="relative h-10">
                <input class=" absolute h-auto rounded-full pr-2 mt-2 text-base leading-normal"
                       style="left: 40%"
                       type="file"
                       name="image">
                @error('image')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-grey-darker"
                       name="name"
                       type="text"
                       value="{{$user->name}}"
                       placeholder="{{$user->name}}">

            </div>
            @error('name')
            <p>{{$message}}</p>
            @enderror
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                    nickname
                </label>
                <input class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-grey-darker" name="nickname"
                       type="text" placeholder="{{$user->nickname? : 'your awesome nickname'}}"
                       value="{{$user->nickname}}"
                >
            </div>
            @error('nickname')
            <p>{{$message}}</p>
            @enderror
            <div class="mb-6">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                     current Password
                </label>
                <input
                    class="shadow appearance-none border border-red rounded-lg w-full py-2 px-3 text-grey-darker mb-3"
                    id="current_password" type="password" placeholder="******************" name="current_password">
                <p class="text-red text-xs italic">Please choose a nice password.</p>
                @error('current_password')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="new_password">
                    new Password
                </label>
                <input
                    class="shadow appearance-none border border-red rounded-lg w-full py-2 px-3 text-grey-darker mb-3"
                    id="new_password" type="password" placeholder="******************" name="new_password">
                <p class="text-red text-xs italic">Please choose a nice password.</p>
                @error('new_password')
                <p>{{$message}}</p>
                @enderror
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
                          style="resize: none">{{$user->info? : ''}}</textarea>
            </div>
            @error('info')
            <p>{{$message}}</p>
            @enderror
            <div class="flex items-center">
                <button
                    class="bg-blue hover:bg-blue-dark text-black font-bold py-2 px-4 rounded-lg border border-gray-200"
                    type="submit">
                    Save
                </button>
                <a href="{{route('profile', $user)}}" class="ml-6 underline"> cancel</a>
            </div>

        </div>
    </form>
@endsection

