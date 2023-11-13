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
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            
            <body>
            <h1 class="about_me">edit</h1>
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
                        <h2>About me</h2>
                        <input type='text' name='about_me' value="{{ $user->about_me }}">
                    </div>
                    
                        <input type="submit" value="Update">
                    </form>
                </div>
            </body>
            
            <h2>Language</h2>
            <div id="langDIV">
                @foreach($user->languages as $language) 
                <form action="{{ route('profile.delete' , ['language_id'=>$language->id, 'user_id'=>Auth::id()]) }}" method="post">  
                    @csrf
                    @method('DELETE')
                    <button type="submit">{{$language->name}}✕</button> 
                </form>
                @endforeach
            </div>
            <form action="/profile/language" method="POST">
                @csrf
                    @method('PUT')
                    
            <div class="scrollable-list" id="LangDIV">
                    @foreach($languages as $language)
                        <label>
                        <input type="checkbox" name='language[]' class="language_select" value="{{ $language->id }}">
                        {{ $language->name }}
                        </label><br>
                    @endforeach
                </select>
            </div>
            <button type="submit">update</button>
            </form>
            
            <h2>Place</h2>
            <div id="placeDIV">
                @foreach($user->places as $place) 
                <form action="{{ route('profile.delete_place' , ['place_id'=>$place->id, 'user_id'=>Auth::id()]) }}" method="post">  
                    @csrf
                    @method('DELETE')
                    <button type="submit">{{$place->name}}✕</button> 
                </form>
                @endforeach
            </div>
            <form action="/profile/place" method="POST">
                @csrf
                    @method('PUT')
                    
            <h2>Place</h2>
            <div class="scrollable-list" id="placesDIV">
                    @foreach($places as $place)
                        <label>
                        <input type="checkbox" name='place[]' class="place_select" value="{{ $place->id }}">
                        {{ $place->name }}
                        </label><br>
                    @endforeach
                </select>
            </div>
            <button type="submit">update</button>
            </form>
        
        </div>
    </div>
    <script>
    $(function () {
        
    
    $(".language_select").click(function(){
            var $count = $(".language_select:checked").length;
            var $not = $('.language_select').not(':checked')
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
            var $count = $(".place_select:checked").length;
            var $not = $('.place_select').not(':checked')
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
