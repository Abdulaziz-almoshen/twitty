<div class=" pb-2 border border-gray-200 rounded-lg ">
    <div class="flex p-3 ">
        <div class="flex-shrink-0 mr-3">
            <a href="{{route('profile',$tweet->user->name)}}"><img
                src="{{$tweet->user->getpravatar()}}"
                alt=""
                class="rounded-full pr-2"
                width="50"
                height="50"
            ></a>
        </div>
        <div>
            <strong><h2><a href="{{route('profile',$tweet->user->name)}}">{{$tweet->user->name}}</a></h2></strong>
            <div class="p-0 text-sm text-gray-400">
                {{ Carbon\Carbon::parse($tweet->created_at)->diffForHumans()}}
            </div>
            <p class="text-md">
                {{$tweet->body}}
            </p>
        </div>
    </div>
</div>
