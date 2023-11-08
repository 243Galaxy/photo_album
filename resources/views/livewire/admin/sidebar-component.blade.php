<div>
    <div class="block m-2 md:hidden">
        <svg class="w-6 h-6 text-white" id="ham" style="cursor: pointer" onclick="open()" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </div>
    <div class="hidden border-r-2 md:block" id="menu">
        <div class="m-2">
            <img src="{{ asset('imgs/uploads') }}/{{ Auth::user()->picture }}" class="w-20 h-20 ml-6 rounded-full" alt="">
            <h2 class="mx-2 text-sm font-bold text-white uppercase">
                {{ Auth::user()->name }}
            </h2>
        </div>
        <nav class="border-gray-700">
            <a href="" class="block px-4 py-2 font-semibold text-white rounded-md shadow-xl">Hello</a>
            <a href="" class="block px-4 py-2 font-semibold text-white rounded-md shadow-xl">Hello</a>
            <a href="" class="block px-4 py-2 font-semibold text-white rounded-md shadow-xl">Hello</a>
            <a href="" class="block px-4 py-2 font-semibold text-white rounded-md shadow-xl">Hello</a>
            <a href="" class="block px-4 py-2 font-semibold text-white rounded-md shadow-xl">Hello</a>
        </nav>
    </div>

</div>
