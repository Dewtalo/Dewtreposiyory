<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>

    {{-- 検索機能ここから --}}
    <div class="search">
        <form action="{{ route('index') }}" method="GET">
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

    <table>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Place</th>
            <th>About Me</th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->category }}</td>
            <td>{{ $user->place }}</td>
            <td>{{ $user->about_me }}</td>
            {{--mediaテーブルとcategoriesテーブルを結合しているので、この記述でアクセスできる--}}
        </tr>
        @endforeach
    </table>

</body>
</html>


