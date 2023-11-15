<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
        <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        @livewireStyles
    </head>
    <body>
        
        <div class="edit"><a href="/profile/edit">edit</a></div>     
        <a href="/home">back</a>
        </div>
        
<div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 p-2">
<div class="w-full bg-white border border-gray-200 rounded-lg p-5 shadow">

            <div class="flex flex-col items-center pb-10">

                

                <h5 class="mb-1 text-xl font-medium text-gray-900 " >
                    {{$user->name}}
                </h5>
                <span class="text-sm text-gray-500">{{$user->email}} </span>
                <span class="text-sm text-gray-500">{{$user->category}} </span>
                <span class="text-sm text-gray-500">{{$user->gneder}} </span>
                <span class="text-sm text-gray-500">{{$user->birthdate}} </span>
                <div class="flex items-center">
                Nationality
                <div class="flex ml-2">
                <span class="text-sm text-gray-500">{{ $user->nationality->name }}</span>
                </div>
                </div>
                <div class="flex items-center">
                     Language
                    <div class="flex ml-2">
                        @foreach($user->languages as $language)
                        <span class="text-sm text-gray-500 ml-1">{{$language->name}}</span>
                        @endforeach
                    </div>
                    
                </div>
                    <div class="flex items-center">
                    Place
                    <div class="flex ml-2">
                        @foreach($user->places as $place)
                        <span class="text-sm text-gray-500 ml-1">{{$place->name}}</span>
                        @endforeach
                    </div>
                    </div>
                <span class="text-sm text-gray-500">{{$user->about_me}} </span>
            </div>
</div>
</div>

</body>
</html>
