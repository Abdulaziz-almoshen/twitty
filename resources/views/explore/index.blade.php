@extends('components.app')
@section('content')
    <div class="my-1">
        <div class="flex justify-center">
                <div class=" m-3 ">
                    @foreach($users as $user)
                    <div class="my-3 bg-white shadow p-4 rounded-full ">
                        <a href="{{route('profile',$user->name)}}">
                            <div class="text-center mt-2">
                                <p class="text-gray-600 font-bold">{{$user->name}}
                                </p>
                                <p class="text-sm font-hairline text-gray-600 mt-1">{{$user->nickname}}
                                </p>
                            </div>
                        </a>
                        <div class="flex justify-center mt-4">
                            <img class="shadow sm:w-12 sm:h-12 w-10 h-10 rounded-full"
                                 src="{{$user->image}}"
                                 alt=""/>
                        </div>
                        <div class="mt-6 flex justify-between text-center">
                            <div>
                                <p class="text-gray-700 font-bold ">{{$user->tweets->count()}}
                                </p>
                                <p class="text-xs m-2 text-gray-600 font-hairline">tweet number
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-700 font-bold">{{$user->follows->count()}}
                                </p>
                                <p class="text-xs m-2 text-gray-600 font-hairline">Followers
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-700 font-bold ">{{ Carbon\Carbon::parse($user->created_at)->diffForHumans()}}
                                </p>
                                <p class="text-xs mt-2 text-gray-700 font-hairline">Join date
                                </p>
                            </div>
                        </div>
                        @if(auth()->user() == $user)
                                fuck
                            @endif
                        @if(auth()->user() != $user)
                        <div class="mt-6 m-6">
                            <form method="post" action="{{route('follow', $user)}}">
                                @csrf
                                <div>
                                        <button type="submit" value="follow" name="action"
                                                class="rounded-full shadow-md w-full items-center shadow bg-blue-500 px-4 py-2 text-white hover:bg-blue-400 "
                                                type="submit">{{ auth()->user()->following($user) ? 'unfollow me' : 'follow me' }}
                                        </button>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                    @endforeach
                        {{$users->links()}}

                </div>

        </div>
    </div>
@endsection

