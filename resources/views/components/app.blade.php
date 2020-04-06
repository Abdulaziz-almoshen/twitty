@component('components.master')
<section class="px-8">
    <main class="mx-auto">
        <div class="flex pt-6 justify-center">
            @auth()
                <div class="w-1/7">
                    @include('_side_bar_links')
                </div>
            @endauth
            <div class="lg:flex-1 lg:mx-10 p-8 ">
                @yield('content')
            </div>
            @auth()
                <div class="lg:w-1/5 ">
                    @include('_friends-lists')
                </div>
            @endauth
        </div>
    </main>
</section>
@endcomponent
