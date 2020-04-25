<ul>
    <li><a
        class="font-bold text-lg mb-4 block" href="/tweets"
        >home
        </a></li>

    <li><a
        class="font-bold text-lg mb-4 block" href="/explore"
        >Explore
        </a></li>
    <li><a
        class="font-bold text-lg mb-4 block" href="{{route('liked',auth()->user())}}"
    >Reactions
    </a></li>

    <li><a
        class="font-bold text-lg mb-4 block" href="{{route('profile',auth()->user())}}"
        >Profile
        </a></li>
    <form method="POST" action="{{ route('logout') }}" >
        @csrf
        <li><button  class="font-bold text-lg mb-4 block" type="submit">Logout</button>
        </li>
    </form>
    </ul>

