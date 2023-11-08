<div>
    <main class="mb-40 space-y-40">
        <div class="relative">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
        </div>
        <div class="px-6 mx-auto max-w-7xl md:px-12 xl:px-6">
        <div class="relative ml-auto pt-36">
            <div class="mx-auto text-center lg:w-2/4">
                <h1 class="text-5xl font-bold text-gray-900 dark:text-white md:text-6xl xl:text-7xl">SIGN <span class="text-primary dark:text-white">IN</span></h1>
                @if (Session::has('error'))
                    <div class="card-body">
                        <div class="px-2 py-2 text-white bg-red-700 rounded-md" role="alert">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
                <form wire:submit.prevent="login">
                    <div class="flex flex-wrap justify-start p-8 mt-16 bg-white rounded-md shadow-lg gap-y-2 gap-x-2">
                        <label for="email" class="block text-lg font-bold text-gray-900">Email</label>
                        <input type="email" class="block w-full p-2 text-gray-900 bg-gray-300 border border-gray-300 rounded-lg md:text-md focus:bg-gray-50 focus:border-blue-600" wire:model="email">
                        <label for="email" class="block text-lg font-bold text-gray-900">Password</label>
                        <input type="password" class="block w-full p-2 text-gray-900 bg-gray-300 border border-gray-300 rounded-lg md:text-md focus:bg-gray-50 focus:border-blue-600" wire:model="password">
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center mb-2">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </main>
</div>
