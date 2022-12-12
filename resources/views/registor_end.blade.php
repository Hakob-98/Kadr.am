<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="logoBox">
        <h1>
            <a href="{{ url('/') }}">Kadr</a>
        </h1>
    </div>
    <div class="message">
        <h1>Ստուգեք Ձեր էլ. փոստը</h1>
        <p>Նշված էլ. փոստի հասցեին ուղարկվել է հղում որով կարող եք ակտիվացնել Ձեր անձնական էջը:</p>
    </div>
    <style>
        body{
            background: #1D1D1D;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logoBox>h1>a{
            color: white;
        }

        .message{
            font-family: 'Montserrat arm';
            text-align: center;
            background-color: white;
            box-shadow: 0px 4px 4px rgba(5, 129, 135, 0.15);
            border-radius: 7px;
        }

        .message>h1{
            color: #058187;
            font-size: 29px;
            font-weight: 900;
            font-style: normal;
            letter-spacing: 0.02em;
            line-height: 129%;
            /* line-height: 37px; */
        }

        p{
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 15px;
            color: rgba(0, 0, 0, 0.65);
        }
    </style>
</body>
</html>