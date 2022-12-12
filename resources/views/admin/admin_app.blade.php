<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2aaba15afe.js" crossorigin="anonymous"></script>
    <title>Kadr.am Admin Panel</title>
    @vite([
        'resources/scss/admin/admin_app.scss'
    ])
</head>
<body>
    <header class="header">
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <div class="brand">
                <a href="{{ url('/') }}">Kadr.am</a>
            </div>
            <ul>
                <li><a href="#">Link1</a></li>
                <li><a href="#">Link2</a></li>
                <li><a href="#">Link3</a></li>
                <li><a href="#">Link4</a></li>
                <li><a href="#">Link5</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="">
            @yield('adminContent')
        </div>
    </main>
</body>
</html>