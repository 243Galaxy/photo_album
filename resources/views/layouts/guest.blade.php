<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Album</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-900">
  <nav class="absolute z-10 w-full astro-UY3JLCBK">
    <div class="px-6 mx-auto max-w-7xl md:px-12 xl:px-6">
      <div class="relative flex flex-wrap items-center justify-between gap-6 py-2 md:py-4 md:gap-0 astro-UY3JLCBK">
          <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer astro-UY3JLCBK">
          <div class="relative z-20 flex justify-between w-full lg:w-max md:px-0 astro-UY3JLCBK">
              <a href="#" aria-label="logo" class="flex items-center space-x-2 astro-UY3JLCBK">
                  <div aria-hidden="true" class="flex space-x-1 astro-UY3JLCBK">
                      <div class="w-6 h-6 bg-indigo-600 rounded-full astro-UY3JLCBK"></div>
                      <div class="w-2 h-6 bg-primary astro-UY3JLCBK"></div>
                  </div>
                  <span class="text-2xl font-bold text-gray-900 dark:text-white astro-UY3JLCBK">CODOBA '98</span>
              </a>
              <div class="relative flex items-center lg:hidden max-h-10 astro-UY3JLCBK">
                  <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative p-6 -mr-6 astro-UY3JLCBK">
                      <div aria-hidden="true" id="line" class="m-auto h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300 astro-UY3JLCBK"></div>
                      <div aria-hidden="true" id="line2" class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300 astro-UY3JLCBK"></div>
                  </label>
              </div>
          </div>
          <div aria-hidden="true" class="fixed inset-0 z-10 w-screen h-screen transition duration-500 origin-bottom scale-y-0 bg-white/70 backdrop-blur-2xl peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70 astro-UY3JLCBK"></div>
          <div class="absolute left-0 z-20 flex-col flex-wrap justify-end invisible w-full gap-6 p-8 transition-all duration-300 origin-top scale-95 translate-y-1 bg-white border border-gray-100 shadow-2xl opacity-0 rounded-3xl shadow-gray-600/10 top-full lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none dark:shadow-none dark:bg-gray-800 dark:border-gray-700 astro-UY3JLCBK">
              <div class="w-full text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto lg:pt-0 astro-UY3JLCBK">
                  <ul class="flex flex-col gap-6 font-medium tracking-wide lg:text-sm lg:flex-row lg:gap-0 astro-UY3JLCBK">
                      <li class="astro-UY3JLCBK">
                          <a href="/" class="block transition md:px-4 hover:text-primary astro-UY3JLCBK">
                              <span class="text-xl font-extrabold astro-UY3JLCBK">Home</span>
                          </a>
                      </li>
                      <li class="astro-UY3JLCBK">
                          <a href="{{ route('about') }}" class="block transition md:px-4 hover:text-primary astro-UY3JLCBK">
                              <span class="text-xl font-extrabold astro-UY3JLCBK">About</span>
                          </a>
                      </li>
                      <li class="astro-UY3JLCBK">
                          <a href="{{ route('contact') }}" class="block transition md:px-4 hover:text-primary astro-UY3JLCBK">
                              <span class="text-xl font-extrabold astro-UY3JLCBK">Contact</span>
                          </a>
                      </li>
                      <li class="astro-UY3JLCBK">
                          <a href="{{ route('signin') }}" class="block transition md:px-4 hover:text-primary astro-UY3JLCBK">
                              <span class="text-xl font-extrabold astro-UY3JLCBK">Sign In</span>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="mt-12 lg:mt-0 astro-UY3JLCBK">
                  <a href="#" class="relative flex items-center justify-center w-full px-4 h-9 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max astro-UY3JLCBK">
                      <span class="relative text-xl font-extrabold text-white astro-UY3JLCBK">Register</span>
                  </a>
              </div>
          </div>
      </div>
    </div>
  </nav>
</header>
{{ $slot }}

@livewireScripts
</body>
</html>