
<div class="px-3 py-3 justify-center border border-blue-250 rounded-lg">
    <form action="/tweets" method="post" enctype="multipart/form-data" >
        @csrf
                        <textarea name="body"
                                  id=""
                                  class="w-full"
                                  rows="5"
                                  placeholder="type youyr keywords here "
                                  res>
                        </textarea>
        <hr class="my-2">
        <footer class="flex justify-between h-12">
            <img
                src="{{auth()->user()->image}}"
                width="60"
                height="60"
                alt=""
                class="rounded-full pr-2">
            <div class="flex justify-between">
                <label for="file-input"
                       class="flex">
                    <input id="file-input" type="file"
                           style="visibility: hidden"
                           type="file"
                           name="image" />
                    <svg viewBox="0 0 20 20" id="preview_img" class="text-gray-400 w-10 pr-2 pt-2 hover:text-blue-600">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path d="M11,13 L8,10 L2,16 L11,16 L18,16 L13,11 L11,13 Z M0,3.99406028 C0,2.8927712 0.898212381,2 1.99079514,2 L18.0092049,2 C19.1086907,2 20,2.89451376 20,3.99406028 L20,16.0059397 C20,17.1072288 19.1017876,18 18.0092049,18 L1.99079514,18 C0.891309342,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z M15,9 C16.1045695,9 17,8.1045695 17,7 C17,5.8954305 16.1045695,5 15,5 C13.8954305,5 13,5.8954305 13,7 C13,8.1045695 13.8954305,9 15,9 Z"
                                 id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                </label>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 shadow p-2 text-white rounded-full">shoot</button>
            </div>
        </footer>
    </form>
        @error('body')
            <p class="text-red-500">{{$message}}</p>
        @enderror
    </div>
