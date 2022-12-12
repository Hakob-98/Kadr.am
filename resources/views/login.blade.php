<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite([
        'resources/scss/login.scss',
    ])
</head>
<body>
    <div>
        <a href="{{ url('/') }}">Kadr</a>
    </div>
    <div>
        <h1>Մուտք</h1>
        <form action="{{ '/do-login' }}" method="post">
            @csrf
            <div>
                <h3>{{ $errors->first('active') }}</h3>
            </div>
            <input type="text" name="email" value="{{ old('email') }}" id="email" placeholder="Email"> <br><br>
            <p class="errorText">{{ $errors->first('email') }}</p>
            <input type="password" name="password" value="{{ old('password') }}" id="password" placeholder="Գաղտնաբառ">
            <input type="checkbox" id="showPassword"> <br><br>
            <p class="errorText">{{ $errors->first('password') }}</p>
            <input type="checkbox" name="check" id="check">
            <label for="check">Հիշել</label>
            <a href="{{ url('/restore-password') }}">Մոռացե՞լ եք</a> <br><br>
            <button>Մուտք</button>
        </form>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    @vite([
        'resources/js/jquery-3.6.1.min.js',
        'resources/js/login.js',
    ])
</body>
</html>