<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://kit.fontawesome.com/2aaba15afe.js" crossorigin="anonymous"></script> --}}
    <title>Kadr.am Admin Panel</title>
    @vite([
        'resources/scss/admin/admin_app.scss'
    ])
</head>
<body>
    <header class="adminNavbar">
        <div class="brand">
            <a href="{{ url('/') }}">Kadr.am</a>
        </div>
        <div class="links">
            <div>
                <a href="{{ url('/admin-home') }}">Օգտատերներ</a>
            </div>
            <div>
                <a href="#">Link2</a>
            </div>
            <div>
                <a href="#">Link3</a>
            </div>
            <div>
                <a href="#">Link4</a>
            </div>
            <div>
                <a href="#">Link5</a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            @yield('adminContent')
        </div>
    </main>
</body>
</html>