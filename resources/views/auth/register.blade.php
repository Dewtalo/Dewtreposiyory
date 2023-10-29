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
            <x-text-input id="birthdate" class="block mt-1 w-full" type="birthdate" name="birthdate" :value="old('birthdate')" required autocomplete="username" />
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
            
        <div class="mt-4">
            <x-input-label for="select_your_category" :value="__('Select Gender')"/>
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
        
        <div class="language">
            <h2>Language</h2>
            <select name="language[]" multiple>
                @foreach($languages as $language)
                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="place">
            <h2>Place</h2>
            <select name="place[]" multiple>
                @foreach($places as $place)
                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mt-4">
            <x-input-label for="about_me" :value="__('about_me')" />
            <x-text-input id="about_me" class="block mt-1 w-full" type="about_me" name="about_me" :value="old('about_me')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('about_me')" class="mt-2" />
        </div>
        
        
        
    
 

    <x-input-error :messages="$errors->get('nationality')" class="mt-2" />
</div>


            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    
    <script>
    $(function () {
        $('select').multipleSelect({
            width: 200,
            formatSelectAll: function() {
                return 'すべて';
            },
            formatAllSelected: function() {
                return '全て選択されています';
            }
        });
    });
    </script>
</x-guest-layout>
