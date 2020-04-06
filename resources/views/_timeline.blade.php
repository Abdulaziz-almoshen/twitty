<div class="pt-5">
    {{-- here is the feed--}}
    @foreach($tweets as $tweet)
        @include('_tweet')
    @endforeach
</div>
