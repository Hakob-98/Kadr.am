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
    <div class="social__networks">
        <div>
            <h3>Մուտք սոց. ցանցերի միջոցով</h3>
        </div>
        <div>
            <a href="{{ url('/registration') }}">Ստեղծել նոր էջ</a>
        </div>
        
        <div class="networks">
            <div class="network__google">
                <a href="#">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0006 41C9.95379 41 1 32.0462 1 21.0006C1 9.95379 9.95379 1 21.0006 1C32.0462 1 41 9.95379 41 21.0006C41 32.0462 32.0462 41 21.0006 41Z" stroke="black" stroke-width="2" stroke-miterlimit="10" />
                        <path d="M22.9871 20.9899H15.2121L15.2212 23.2538H20.4639C19.8441 26.0099 17.9307 27.7012 15.3617 27.7012C11.9923 27.7012 9.26162 24.9245 9.26162 21.5001C9.26162 18.0747 11.9923 15.2988 15.3617 15.2988C16.9637 15.2988 18.4201 15.9272 19.5081 16.9541L21.2294 15.446C19.7196 13.9335 17.6483 13 15.3614 13C10.7429 13 7 16.8048 7 21.5001C7 26.1943 10.7429 30 15.3614 30C19.7963 30 23 26.5611 23 21.867L22.9868 20.9902L22.9871 20.9899Z" fill="black" />
                        <path d="M35 20.4115H31.5882V17H29.4115V20.4115H26V22.5885H29.4115V26H31.5882V22.5885H35V20.4115Z" fill="black" />
                    </svg>
                </a>
            </div>
            <div class="network__facebook">
                <a href="#">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0005 41C9.95402 41 1 32.0462 1 21.0006C1 9.95379 9.95402 1 21.0005 1C32.046 1 41 9.95379 41 21.0006C41 32.0462 32.046 41 21.0005 41V41Z" stroke="black" stroke-width="2" stroke-miterlimit="10" />
                        <path d="M18.8159 30H22.3054V21.4277H24.741L25 18.5576H22.3054C22.3054 18.5576 22.3054 17.4862 22.3054 16.9231C22.3054 16.246 22.444 15.9786 23.1114 15.9786C23.6478 15.9786 25 15.9786 25 15.9786V13C25 13 23.0091 13 22.5832 13C19.9864 13 18.8156 14.1216 18.8156 16.269C18.8156 18.1392 18.8156 18.5574 18.8156 18.5574H17V21.4636H18.8156V29.9998L18.8159 30Z" fill="black" />
                    </svg>
                </a>
            </div>
            <div class="network__instagram">
                <a href="#">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.9995 41C9.95401 41 1 32.0462 1 21.0006C1 9.95379 9.95401 1 20.9995 1C32.0451 1 41 9.95379 41 21.0006C41 32.0462 32.0451 41 20.9995 41V41Z" stroke="black" stroke-width="2" stroke-miterlimit="10" />
                        <rect x="12.4287" y="12.4286" width="17.1429" height="17.1429" rx="4" fill="black" />
                        <circle cx="21" cy="21" r="3.5" stroke="white" />
                        <path d="M27.2857 15.8571C27.2857 16.4878 26.7748 16.9999 26.1427 16.9999C25.5122 16.9999 25 16.4881 25 15.8571C25 15.2256 25.512 14.7142 26.1427 14.7142C26.7745 14.7142 27.2857 15.2254 27.2857 15.8571Z" fill="white" />
                    </svg>
                </a>
            </div>
            <div class="network__twitter">
                <a href="#">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0005 41C9.95491 41 1 32.0462 1 21.0006C1 9.95379 9.95491 1 21.0005 1C32.046 1 41 9.95379 41 21.0006C41 32.0462 32.046 41 21.0005 41Z" stroke="black" stroke-width="2" stroke-miterlimit="10" />
                        <path d="M11.0003 28.0711C12.9068 29.2892 15.1718 30 17.6043 30C25.6029 30 30.1222 23.2699 29.8511 17.2334C30.6922 16.6289 31.423 15.8729 32 15.0115C31.2275 15.353 30.3968 15.5839 29.5259 15.6872C30.4155 15.1571 31.098 14.3162 31.4201 13.3126C30.5872 13.8048 29.6647 14.1626 28.6851 14.3544C27.898 13.5208 26.7786 13 25.5387 13C22.7581 13 20.7141 15.5839 21.3426 18.2691C17.7617 18.0907 14.5866 16.3814 12.4623 13.7849C11.3335 15.7138 11.8762 18.2382 13.7951 19.5149C13.0888 19.4925 12.4242 19.2986 11.8431 18.9775C11.7965 20.9666 13.2265 22.8254 15.2989 23.2399C14.6918 23.4051 14.028 23.4422 13.354 23.3131C13.9005 25.0193 15.4923 26.2593 17.3784 26.2943C15.5668 27.7086 13.2857 28.34 11 28.0708L11.0003 28.0711Z" fill="black" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    @vite([
        'resources/js/jquery-3.6.1.min.js',
        'resources/js/login.js',
    ])
</body>
</html>