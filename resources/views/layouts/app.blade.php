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
<div class="flex flex-wrap">
    <div class="w-1/4">
        @livewire('admin.sidebar-component')
    </div>
    {{ $slot }}
</div>

@livewireScripts
</body>
</html>