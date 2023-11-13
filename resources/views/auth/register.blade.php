<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('birthdate')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="text" name="birthdate" :value="old('birthdate')" required autocomplete="username" placeholder="2000.01.01" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>          
        <div class="mt-4">
            <x-input-label for="select_your_category" :value="__('Select Category')"/>
            <select class="block mt-1 w-20" name="category">
                <option value="guide">Guide</option>
                <option value="tourist">Tourist</option>
            </select>
        </div>
            
        <div class="mt-4">
            <x-input-label for="select_your_gender" :value="__('Select Gender')"/>
            <select class="block mt-1 w-20" name="gender">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
        </div>
        
        
        
        
        
        
        <div class="nationality">
            <h2>Nationality</h2>
            <select name="nationality">
                @foreach($nationalities as $nationality)
                    <option value="{{ $nationality->id }}">{{ $nationality->name }}</option>
                @endforeach
            </select>
        </div>
        
        
        
          
        
        <h2>Language</h2>
        <h3>Select languages you speak up to 3</h3>
        <div class="scrollable-list">
            @foreach ($languages as $language)
                <label>
                    <input type="checkbox" name='language[]' class="language_select" value="{{ $language->id }}">
                    {{ $language->name }}
                </label><br>
            @endforeach
        </div>
        
        
        <h2>Place</h2>
        <div class="scrollable-list">
            @foreach ($places as $place)
                <label>
                    <input type="checkbox" class="place_select" name='place[]' value="{{ $place->id }}">
                    {{ $place->name }}
                </label><br>
            @endforeach
        </div>
        
        
        
        
        
        
        <div class="mt-4">
            <x-input-label for="about_me" :value="__('about_me')" />
            <x-text-input id="about_me" class="block mt-1 w-full" type="about_me" name="about_me" :value="old('about_me')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('about_me')" class="mt-2" />
        </div>
        
        
        
    
 

    



            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    
    <script>
    $(function () {
    $(".language_select").click(function(){
            var $count = $(".language_select:checked").length;
            var $not = $('.language_select').not(':checked')
            
            if($count >= (3)) {
                $not.attr("disabled",true);
            }
            if($count >= (3)) {
                $not.attr("disabled",true);
            }
            else{
                $not.attr("disabled",false);
            }
        });
    });
    
    
    
     
      // チェックボックスをチェックしたら発動
      
        
    </script>
    <script>
    $(function () {
    $(".place_select").click(function(){
            var $count = $(".place_select:checked").length;
            var $not = $('.place_select').not(':checked')
        
            if($count >= (3)) {
                $not.attr("disabled",true);
            }
            if($count >= (3)) {
                $not.attr("disabled",true);
            }
            else{
                $not.attr("disabled",false);
            }
        });
    });
    
  
 
    </script>
</x-guest-layout>
