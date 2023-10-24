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
            <div>
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
            <button type="submit">update</button>
            </form>
        
        </div>
    </div>
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
</x-app-layout>
