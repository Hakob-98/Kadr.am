<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{ url('/') }}">Kadr</a>
    </div>
    <div>
        <form action="{{ '/new-password' }}" method="post">
            @csrf
            <h1>Գաղտնաբառի վերականգնում</h1>
            <input type="password" name="password" value="{{ old('password') }}" id="password" placeholder="Նոր Գաղտնաբառ">
            <input type="checkbox" id="showPassword">
            <p class="errorText">{{ $errors->first('password') }}</p>
            <input type="password" name="comfPassword" value="{{ old('comfPassword') }}" id="comfPassword" placeholder="Կրկնեք գաղտնաբառը">
            <input type="checkbox" id="showComfPassword">
            <p class="errorText">{{ $errors->first('comfPassword') }}</p>
            <button>Պահպանել</button>
        </form>
    </div>

    @vite([
        'resources/js/jquery-3.6.1.min.js',
        'resources/js/login.js',
    ])
</body>
</html>
