<div class="px-3 py-3 justify-center border border-blue-250 rounded-lg">
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
        <footer class="flex justify-between h-12">
            <img
                src="{{auth()->user()->image}}"
                width="60"
                height="60"
                alt=""
                class="rounded-full pr-2"
            >
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 shadow p-2 text-white rounded-full"> shoot  </button>

        </footer>
    </form>
    @error('body')
        <p class="text-red-500">{{$message}}</p>
    @enderror
</div>
