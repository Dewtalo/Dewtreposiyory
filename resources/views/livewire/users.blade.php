<div class="max-w-6xl mx-auto my-16">

    <h5 class="text-center text-5xl font-bold py-3">Users</h5>

    <div class="search">
        <form action="{{ route('users') }}" method="GET">
            @csrf

            <div class="form-group">
                <div>
                    <label for="">Type a destination
                    <div>
                        <input type="text" name="about_me" value="{{ $search_about_me }}">
                    </div>
                    </label>
                </div>

                <div>
                    <label for="">Category
                    <div>
                        <select name="category" data-toggle="select">
                            <option value="guide" @if($search_category == "guide") selected @endif>Guide</option>
                            <option value="tourist" @if($search_category == "tourist") selected @endif>Tourist</option>
                        </select>
                    </div>
                    </label>
                </div>

                <div>
                    <label for="">
                    <div>
                        <select name="place" data-toggle="select">
            
                        @foreach($places as $place)
                            <option value="{{ $place->id }}" @if($search_place == $place->id) selected @endif>{{ $place->name }}</option>
                        @endforeach
                        
                        </select>
                    </div>
                    </label>
                </div>

                <div>
                    <input type="submit" class="btn" value="検索">
                </div>
            </div>
        </form>
    </div>
    {{-- 検索機能ここまで --}}

    

    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 p-2 ">

        @foreach ($items as $key=> $user)
            


        {{-- child --}}
        <div class="w-full bg-white border border-gray-200 rounded-lg p-5 shadow">

            <div class="flex flex-col items-center pb-10">

                <img src="https://source.unsplash.com/500x500?face-{{$key}}" alt="image" class="w-24 h-24 mb-2 5 rounded-full shadow-lg">

                <h5 class="mb-1 text-xl font-medium text-gray-900 " >
                    {{$user->name}}
                </h5>
                <span class="text-sm text-gray-500">{{$user->email}} </span>
                <span class="text-sm text-gray-500">{{$user->category}} </span>
                <span class="text-sm text-gray-500">{{$user->gneder}} </span>
                <span class="text-sm text-gray-500">{{$user->birthdate}} </span>
                Nationality
                <span class="text-sm text-gray-500">{{ $user->nationality->name }}</span>
                <div class="flex items-center">
                     Language
                    <div class="flex ml-2">
                        @foreach($user->languages as $language)
                        <span class="text-sm text-gray-500 ml-1">{{$language->name}}</span>
                        @endforeach
                    </div>
                    
                </div>
               
                Place
                    @foreach($user->places as $place)
                    <span class="text-sm text-gray-500">{{$place->name}}</span>
                    @endforeach
                <span class="text-sm text-gray-500">{{$user->about_me}} </span>
                
                

                <div class="flex mt-4 space-x-3 md:mt-6">

                    <x-secondary-button>
                        Add Friend
                    </x-secondary-button>

                    <x-primary-button wire:click="message({{$user->id}})" >
                        Message
                    </x-primary-button>

                </div>

            </div>


        </div>

        @endforeach
    </div>




</div>