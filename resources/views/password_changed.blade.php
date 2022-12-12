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
        <h1>Ձեր գաղտնաբառը փոփոխված է </h1>
        <p>Այժմ կարող եք մուտք գործել կայք` օգտագործելով նոր գաղտնաբառը:</p>
        <a href="{{ url('/login') }}">Մուտք</a>
    </div>
</body>
</html>