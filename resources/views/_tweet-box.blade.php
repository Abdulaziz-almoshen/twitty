<div class="px-3 py-3 border border-blue-250 rounded-lg">
    <form action="/tweets"method="post">
        @csrf
                        <textarea name="body"
                                  id=""
                                  class="w-full"
                                  rows="5"
                                  placeholder="type youyr keywords here "
                                  res
        >
                        </textarea>
        <hr class="my-2">
        <footer class="flex justify-between">
            <img
                src="{{auth()->user()->getpravatar()}}"
                width="50"
                height="50"
                alt=""
                class="rounded-full pr-2"
            >
            <button type="submit" class="bg-blue-500 shadow p-2 text-white rounded-full"> shoot  </button>

        </footer>
    </form>
    @error('body')
        <p class="text-red-500">{{$message}}</p>
    @enderror
</div>
