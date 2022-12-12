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
        <form action="{{ '/check-the-client' }}" method="post">
            @csrf
            <p class="errorText">{{ $errors->first('code') }}</p>
            <h1>Ստուգեք Ձեր էլ. փոստը</h1>
            <p>Մուտքագրեք նշված էլ. փոստի հասցեին ուղարկված մեկանգամյա գաղտանաբառը:</p>
            <input type="text" name="code" value="{{ old('code') }}" id="code" placeholder="65875">
            <button>Հաստատել</button>
        </form>
        <div>
            <p>Նշված էլ. փոստի հասցեին ուղարկվել է մեկանգամյա գաղտանաբառ անձնական հաշիվ մուտք գործելու համար:</p>
        </div>
    </div>
</body>
</html>