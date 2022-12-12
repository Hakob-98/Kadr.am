<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite([
        'resources/scss/registration.scss',
    ])
</head>
<body>
    <div>
        <a href="{{ url('/') }}">Kadr</a>
    </div>
    <div>
        <h1>Ստեղծել անձնական էջ</h1>
        <form action="{{ '/add-user' }}" method="post">
            @csrf
            <h3>Ընտրեք ձեր հաշվի տեսակը</h3>
            <input type="radio" name="catUser" value="individual" checked id="individualUser">
            <label for="individualUser">Անհատ</label>
            <input type="radio" name="catUser" value="organization" id="organizationUser">
            <label for="organizationUser">Կազմակերպություն</label> <br><br>
            <input type="text" class="firstName" name="firstName" value="{{ old('firstName') }}" placeholder="Անուն *"> <br><br>
            <p class="errorText">{{ $errors->first('firstName') }}</p>
            <input type="text" class="lastName" name="lastName" value="{{ old('lastName') }}" placeholder="Ազգանուն"> <br><br>
            <p class="errorText">{{ $errors->first('lastName') }}</p>
            <input type="text" name="email" value="{{ old('email') }}" placeholder="Email *"> <br><br>
            <p class="errorText">{{ $errors->first('email') }}</p>
            <input type="password" name="password" id="passInput" placeholder="Գաղտնաբառ *"> 
            <input type="checkbox" id="showPass"><br><br>
            <p class="errorText">{{ $errors->first('password') }}</p>
            <input type="password" name="comfPassword" placeholder="Կրկնեք գաղտնաբառը*"> <br><br>
            <p class="errorText">{{ $errors->first('comfPassword') }}</p>
            <input type="text" name="phoneNumber" value="{{ old('phoneNumber') }}" placeholder="Հեռախոսահամար *"> <br><br>
            <p class="errorText">{{ $errors->first('phoneNumber') }}</p>
            <p>Քանի տարի շուկայում</p>
            <input type="radio" name="workExp" value="Մինչև 1տ." checked id="upToOneYearExp">
            <label for="upToOneYearExp">Մինչև 1տ.</label>
            <input type="radio" name="workExp" value="1-3տ." id="oneToThreeYearsExp">
            <label for="oneToThreeYearsExp">1-3տ.</label>
            <input type="radio" name="workExp" value="3-5տ." id="threeToFiveYearsExp">
            <label for="threeToFiveYearsExp">3-5տ.</label>
            <input type="radio" name="workExp" value="5 և ավել տ." id="fiveYearsOrMoreExp">
            <label for="fiveYearsOrMoreExp">5 և ավել տ.</label> <br><br>
            <div class="genderBox">
                <p>Սեռը</p>
                <input type="radio" name="gender" value="Արական" checked id="maleGender">
                <label for="maleGender">Արական</label>
                <input type="radio" name="gender" value="Իգական" id="femaleGender">
                <label for="femaleGender">Իգական</label> <br><br>
            </div>
            <select name="countries" id="country">
                <option value="">Երկիր</option>
                <option value="Հայաստան">Հայաստան</option>
                <option value="Վրաստան">Վրաստան</option>
                <option value="Ռուսաստան">Ռուսաստան</option>
                <option value="ԱՄՆ">ԱՄՆ</option>
            </select> <br><br>
            <p class="errorText">{{ $errors->first('countries') }}</p>
            <select name="cities" id="city">
                <option value="">Քաղաք</option>
                <option value="Երևան">Երևան</option>
                <option value="Սևան">Սևան</option>
                <option value="Գորիս">Գորիս</option>
                <option value="Կապան">Կապան</option>
            </select> <br><br>
            <p class="errorText">{{ $errors->first('cities') }}</p>
            <input type="checkbox" name="rules" id="agreeToTherules" onclick="enable()">
            <label for="agreeToTherules">
                <a href="{{ url('/show-rules') }}">Համաձայն եմ հայտարարությունների հրապարակման կանոններին, նաև Kadr.am կայքի օգտագործման համաձայնագրին:</a>
            </label> <br><br>
            <button disabled="true" id="btn">Գրանցվել</button>
        </form>
    
        
    
        <script>
            function enable(){
                var check = document.getElementById("agreeToTherules");
                var btn = document.getElementById("btn");
                if (check.checked) {
                    btn.removeAttribute("disabled");
                } else {
                    btn.disabled = "true";
                }
            }
        </script>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @vite([
        'resources/js/jquery-3.6.1.min.js',
        'resources/js/registration.js',
    ])
</body>
</html>