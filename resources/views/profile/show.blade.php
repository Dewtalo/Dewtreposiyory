<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Your Profile</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="Name">
            {{ $user->name }}
        </h1>
        <div class="content">
            <div class="content__user">
                <h3>Gender</h3>
                <p>{{ $user->gneder }}</p>    
            </div>
        </div>
        <div class="content">
            <div class="content__user">
                <h3>Categoty</h3>
                <p>{{ $user->category }}</p>    
            </div>
        </div>
        
        <h1 class='nationality'>{{ $user->nationality->name }}</h1>
        @foreach($user->languages as $language)
        <p>{{$language->name}}</p>
        @endforeach
        
        @foreach($user->places as $place)
        <p>{{$place->name}}</p>
        @endforeach
        
        <div class="footer">
        <div class="content">
            <div class="content__user">
                <h3>About me</h3>
                <p>{{ $user->about_me }}</p>    
            </div>
        </div>
        <div class="edit"><a href="/profile/edit">edit</a></div>     
        <a href="/">back</a>
        </div>
        
    </body>

</html>