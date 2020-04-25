@extends('components.app')
@section('content')
    {{-- here is the text box--}}
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="text-gray-600"> go ahead and say somethign your timeline is empty </p>
    @endforelse
@endsection
