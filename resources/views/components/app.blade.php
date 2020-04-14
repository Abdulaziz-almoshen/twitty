@component('components.master')
<section class="px-8">
    <main class="container mx-auto">
        <div class="lg:flex pt-6 lg:justify-center">
            @auth()
                <div class="w-32">
                    @include('_side_bar_links')
                </div>
            @endauth
            <div class="lg:flex-1 lg:mx-10 mp-10 ">
                @yield('content')
            </div>
            @auth()
                <div class="lg:w-1/6 w-1/6 ">
                    @include('_friends-lists')
                </div>
            @endauth
        </div>
    </main>
</section>
@endcomponent
