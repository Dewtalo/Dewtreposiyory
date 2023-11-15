<?php
$count_language = 0;
$count_place = 0;
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            
     
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">       
            <body>
            <h2 class="text-lg font-medium text-gray-900">
            {{ __('About Me') }}
            </h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="content">
                <form action="/profile/about_me/{{$user->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='content__title'>
                        <input type='text' name='about_me' value="{{ $user->about_me }}">
                    </div>
                        <x-primary-button class='my-4'>{{ __('Save') }}</x-primary-button>
                        
                    </form>
                </div>
            </body>
            </div>
            
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg"> 
                <body>
                    <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Language') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600">{{ __('You can hit the languages displayed here to delete them:)') }}</p>
                    <div id="langDIV">
                        @foreach($user->languages as $language) 
                        <form action="{{ route('profile.delete' , ['language_id'=>$language->id, 'user_id'=>Auth::id()]) }}" method="post">  
                            @csrf
                            @method('DELETE')
                            <button type="submit">{{$language->name}}✕</button> 
                        </form>
                        <?php
                        $count_language ++;
                        ?>
                        @endforeach
                    </div>
                    @if($count_language < 3)
                    <form action="/profile/language" method="POST">
                    @csrf
                    @method('PUT')
                        <p class="mt-1 text-sm text-gray-600">{{ __('Add more languages you speak!') }}</p>
                        <div id="langDIV">
                            <div class="scrollable-list" id="LangDIV">
                                @foreach($languages as $language)
                                    <label>
                                    <input type="checkbox" name='language[]' class="language_select" value="{{ $language->id }}">
                                    {{ $language->name }}
                                    </label><br>
                                @endforeach
                
                            </div>
                        </div>
                        <x-primary-button>{{ __('Update') }}</x-primary-button>
                    </form>
                    @else
                    <p class="mt-1 text-sm text-gray-600">{{ "You can not choose more than 3 languages:(" }}</p>
                    @endif
                </body>
            </div>
            
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">   
                <body>
                    <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Place') }}
                    </h2>
                    <p class="mt-1 text-sm text-gray-600">{{ __('You can hit the places displayed here to delete them:)') }}</p>
                    <div id="placeDIV">
                        @foreach($user->places as $place) 
                        <form action="{{ route('profile.delete_place' , ['place_id'=>$place->id, 'user_id'=>Auth::id()]) }}" method="post">  
                            @csrf
                            @method('DELETE')
                            <button type="submit">{{$place->name}}✕</button> 
                        </form>
                        <?php
                        $count_place ++;
                        ?>
                        @endforeach
                    </div>
                    @if($count_place < 3)
                    <form action="/profile/place" method="POST">
                    @csrf
                    @method('PUT')
                    
                        <p class="mt-1 text-sm text-gray-600">{{ __('Add more places you wanna go or show around!') }}</p>
                        <div class="scrollable-list" id="placesDIV">
                                @foreach($places as $place)
                                    <label>
                                    <input type="checkbox" name='place[]' class="place_select" value="{{ $place->id }}">
                                    {{ $place->name }}
                                    </label><br>
                                @endforeach
                            
                        </div>
                        <x-primary-button>{{ __('Update') }}</x-primary-button>
                    </form>
                    @else
                    <p class="mt-1 text-sm text-gray-600">{{ "You can not choose more than 3 places:(" }}</p>
                    @endif
                </body>
            </div>
        
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            
        </div>
    </div>
    <script>
    $(function () {
        
    
    $(".language_select").click(function(){
            let $count = $(".language_select:checked").length;
            let $not = $('.language_select').not(':checked')
            let numLang = $("#langDIV")[0].childElementCount 
        
            if($count >= (3-numLang)) {
                $not.attr("disabled",true);
            }
            if($count >= (3-numLang)) {
                $not.attr("disabled",true);
            }
            else{
                $not.attr("disabled",false);
            }
        });
    });
    
  
 
    </script>
    
    <script>
    $(function () {
        
    
    $(".place_select").click(function(){
            let $count = $(".place_select:checked").length;
            let $not = $('.place_select').not(':checked')
            let numplace = $("#placesDIV")[0].childElementCount 
        
            if($count >= (3-numplace)) {
                $not.attr("disabled",true);
            }
            if($count >= (3-numplace)) {
                $not.attr("disabled",true);
            }
            else{
                $not.attr("disabled",false);
            }
        });
    });
    
  
 
    </script>
</x-app-layout>
