<div class="pt-5">
    {{-- here is the feed--}}
    @forelse($tweets as $tweet)
        @include('_tweet')

        @empty
        <p class="text-gray-600"> go ahead and say somethign your timeline is empty </p>
    @endforelse
    {{$tweets->links()}}

</div>

