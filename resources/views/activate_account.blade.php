<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Գրանցում Kadr.am-ում</title>
</head>
<body>
    <div>
        <h1>Ողջույն {{ $name }}:</h1>
        <p>Շնորհակալություն որ ցանկանում եք գրանցվել Kadr.am կայքում։ </p>
        <p>Գրանցումը ավարտելու համար սեղմել ակտիվացման կոճակը։</p>
        <a href="http://127.0.0.1:8000/activate/{{ $id }}/{{ $hash }}">Ակտիվացնել գրանցումը</a>
        <p>Խնդրում ենք չպատասխանել նամակին։</p>
        <p>Եթե նամակը սխալ է հասցեագրված ուղղակի անտեսեք այն։</p>
    </div>
</body>
</html>