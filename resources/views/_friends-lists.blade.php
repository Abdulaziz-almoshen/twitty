<h2 class="font-bold text-lg pb-3 ">Friends</h2>
<ul class="p-4 bg-gray-100 rounded-lg ">
    @forelse( auth()->user()->follows as $user)
    <li class="{{$loop->last ? '' :'p-2'}} " >
        <div class="flex items-center text-sm ">
            <a href="{{route('profile',$user)}}"><img
                    src="{{$user->image}}"
                    alt=""
                    class="rounded-full pr-2"
                    width="50"
                    height="50"
                ></a>
            <h1>{{$user->name}}</h1>
        </div>
    </li>
        @empty
        <p class="text-xs"> try to be more friendly and add friends :)</p>
     @endforelse
</ul>


