<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Kadr.am - Admin Panel</title>
    @vite([
        'resources/scss/admin/admin.scss',
    ])
</head>
<body>
    <div>
        <form action="{{ url('/check-artak') }}" method="post" class="adminLoginForm">
            @csrf
            <h1>Admin panel</h1>
            <input type="text" name="username" value="{{ old('username') }}" id="userName" placeholder="Username">
            <p class="errorText">{{ $errors->first('username') }}</p>
            <input type="password" name="password" value="{{ old('password') }}" id="password" placeholder="Password">
            <p class="errorText">{{ $errors->first('password') }}</p>
            <button>Մուտք</button>
        </form>
    </div>
</body>
</html>