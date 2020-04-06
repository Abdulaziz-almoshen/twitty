@extends('components.app')
@section('content')
            <header class="mb-2 relative border border-gray-400 rounded-lg">
                <div class="">
                    <img
                        src="https://pbs.twimg.com/profile_banners/322606204/1434268170/1500x500"
                        class="mb-2 "
                        style="display: inline-block; margin: auto; position: sticky; width: 100%; position: relative"
                        alt="">

                    <img src="{{$user->getpravatar()}}"
                         class="absolute transform -translate-y-1/2 rounded-full "
                         alt=""
                         style="left: 45%"
                         width="120"
                    >
                </div>

                <div class="flex justify-between p-2">
                    <div>
                        <h1 class="font-bold text-lg">{{$user->name}}</h1>
                        <h2 class="text-gray-400">{{$user->nickname}}</h2>
                    </div>
                    <div class="justify-between mt-3">
                        @can('edit',$user)
                        <div>
                                    <a  href="{{route('edit-profile',$user)}}"
                                       class="rounded-full py-2 bold shadow bg-gray-200 text-sm p-3 content-center">Edit Profile
                                    </a>
                            </div>
                        @endcan
                        <form method="post" action="{{route('follow', $user)}}">
                            @csrf
                            <div>
                                @if(auth()->user() != $user)
                                    <button type="submit" value="follow" name="action"
                                            class="bg-blue-500 text-white bold shadow py-2 rounded-full text-sm p-3">{{ auth()->user()->following($user) ? 'unfollow me' : 'follow me' }}</button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-md text-gray-600 font-sans" style="text-align:center"> {{$user->info? : ' '}}</p>
                </div>
            </header>
            <div>
                @include('_timeline', ['tweets' => $user->tweets])
            </div>
@endsection

