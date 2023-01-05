<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fonts/montserrat-arm/Montserratarm-Black.otf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/montserrat-arm/Montserratarm-Bold.otf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/montserrat-arm/Montserratarm-ExtraBold.otf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/montserrat-arm/Montserratarm-ExtraLight.otf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/montserrat-arm/Montserratarm-Light.otf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/montserrat-arm/Montserratarm-Medium.otf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/montserrat-arm/Montserratarm-Regular.otf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/montserrat-arm/Montserratarm-SemiBold.otf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/montserrat-arm/Montserratarm-Thin.otf') }}">
    <title>Document</title>
    @vite(['resources/scss/registration.scss'])
</head>

<body>
    <div class="content">
        <div class="content__left">
            <a href="{{ url('/') }}">
                <svg width="130" height="29" viewBox="0 0 130 29" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M122.192 14.0758H116.288C116.288 12.0792 115.653 10.3322 114.384 8.73494C112.92 6.88813 110.968 5.98966 108.577 5.98966H102.477V0H108.382C112.188 0 115.409 1.34771 118.142 4.09298C120.875 6.83825 122.192 10.1326 122.192 14.0758ZM108.431 15.3236V29H102.526V15.3236H108.431ZM130 29L116.288 15.3735H108.821L122.534 29H130ZM61.9745 21.0637L51.1411 0.798642L36.2575 29H42.7966L46.9933 21.0637H61.9745ZM28.2545 29L13.7125 15.3236H6.24624L20.7883 29H28.2545ZM28.6937 0L13.7125 14.0758H6.24624L21.2275 0H28.6937ZM94.5233 15.1239C94.5233 23.0602 88.8138 29 83.2507 29H69.8799V23.0103H79.054C84.1291 23.0103 88.277 21.3133 88.277 15.1239C88.277 8.98451 84.1291 7.23751 79.054 7.23751H69.8799V1.24785H83.2507C89.1554 1.24785 94.5233 7.1876 94.5233 15.1239ZM5.95346 15.3735V29H0V15.3735H5.95346Z"
                        fill="white" />
                </svg>
                <svg width="130" height="29" viewBox="0 0 130 29" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M122.192 14.0758H116.288C116.288 12.0792 115.653 10.3322 114.384 8.73494C112.92 6.88813 110.968 5.98966 108.577 5.98966H102.477V0H108.382C112.188 0 115.409 1.34771 118.142 4.09298C120.875 6.83825 122.192 10.1326 122.192 14.0758ZM108.431 15.3236V29H102.526V15.3236H108.431ZM130 29L116.288 15.3735H108.821L122.534 29H130ZM61.9745 21.0637L51.1411 0.798642L36.2575 29H42.7966L46.9933 21.0637H61.9745ZM28.2545 29L13.7125 15.3236H6.24624L20.7883 29H28.2545ZM28.6937 0L13.7125 14.0758H6.24624L21.2275 0H28.6937ZM94.5233 15.1239C94.5233 23.0602 88.8138 29 83.2507 29H69.8799V23.0103H79.054C84.1291 23.0103 88.277 21.3133 88.277 15.1239C88.277 8.98451 84.1291 7.23751 79.054 7.23751H69.8799V1.24785H83.2507C89.1554 1.24785 94.5233 7.1876 94.5233 15.1239ZM5.95346 15.3735V29H0V15.3735H5.95346Z"
                        fill="black" />
                </svg>
            </a>
        </div>
        <div class="content__right">
            <div class="section">
                <h1>Ստեղծել անձնական էջ</h1>
                <form action="{{ '/add-user' }}" method="post">
                    @csrf
                    <h3>Ընտրեք ձեր հաշվի տեսակը</h3>
                    <div class="radio__buttons">
                        <div class="radio__one">
                            <input class="radio__input" type="radio" name="catUser" value="individual" checked
                                id="individualUser">
                            <label class="radio__label-one" for="individualUser">Անհատ</label>
                        </div>
                        <div class="radio__two">
                            <input class="radio__input" type="radio" name="catUser" value="organization"
                                id="organizationUser">
                            <label class="radio__label-two" for="organizationUser">Կազմակերպություն</label>
                        </div>
                    </div>
                    <div class="input__office-section">
                        <div class="input__name">
                            <input type="text" class="firstName" name="firstName" value="{{ old('firstName') }}"
                                placeholder="Անուն *">
                            <p class="errorText">{{ $errors->first('firstName') }}</p>
                        </div>
                        <div class="input__lastname">
                            <input type="text" class="lastName" name="lastName" value="{{ old('lastName') }}"
                                placeholder="Ազգանուն">
                            <p class="errorText">{{ $errors->first('lastName') }}</p>
                        </div>
                    </div>
                    <div class="email">
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="Էլ. փոստ *">
                        <p class="errorText">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="password">
                        <div class="input__password">
                            <input type="password" name="password" id="passInput" placeholder="Գաղտնաբառ *">
                            <svg id="showPass" xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                viewBox="0 0 21 21" fill="none">
                                <path
                                    d="M20.1094 9.75781C18.2109 6.03125 14.4141 3.5 10.125 3.5C5.80078 3.5 2.00391 6.03125 0.105469 9.75781C0.0351562 9.89844 0 10.0742 0 10.25C0 10.4609 0.0351562 10.6367 0.105469 10.7773C2.00391 14.5039 5.80078 17 10.125 17C14.4141 17 18.2109 14.5039 20.1094 10.7773C20.1797 10.6367 20.2148 10.4609 20.2148 10.2852C20.2148 10.0742 20.1797 9.89844 20.1094 9.75781ZM10.125 15.3125C7.3125 15.3125 5.0625 13.0625 5.0625 10.25C5.0625 7.47266 7.3125 5.1875 10.125 5.1875C12.9023 5.1875 15.1875 7.47266 15.1875 10.25V10.2852C15.1875 13.0625 12.9023 15.3477 10.125 15.3477V15.3125ZM10.125 6.875C9.80859 6.91016 9.49219 6.94531 9.21094 7.01562C9.42188 7.29688 9.52734 7.64844 9.52734 8.03516C9.52734 8.94922 8.78906 9.6875 7.875 9.6875C7.48828 9.6875 7.13672 9.58203 6.85547 9.37109C6.78516 9.65234 6.75 9.96875 6.75 10.25C6.75 12.1133 8.26172 13.625 10.125 13.625C11.9883 13.625 13.5 12.1133 13.5 10.25C13.5 8.38672 11.9883 6.91016 10.125 6.91016V6.875Z"
                                    fill="#626262" />
                                <path d="M19 2L2 19" stroke="white" />
                                <path d="M18 2L1 19" stroke="#626262" />
                            </svg>
                            <svg id="hidePass" width="21" height="14" viewBox="0 0 21 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.1094 6.75781C18.2109 3.03125 14.4141 0.5 10.125 0.5C5.80078 0.5 2.00391 3.03125 0.105469 6.75781C0.0351562 6.89844 0 7.07422 0 7.25C0 7.46094 0.0351562 7.63672 0.105469 7.77734C2.00391 11.5039 5.80078 14 10.125 14C14.4141 14 18.2109 11.5039 20.1094 7.77734C20.1797 7.63672 20.2148 7.46094 20.2148 7.28516C20.2148 7.07422 20.1797 6.89844 20.1094 6.75781ZM10.125 12.3125C7.3125 12.3125 5.0625 10.0625 5.0625 7.25C5.0625 4.47266 7.3125 2.1875 10.125 2.1875C12.9023 2.1875 15.1875 4.47266 15.1875 7.25V7.28516C15.1875 10.0625 12.9023 12.3477 10.125 12.3477V12.3125ZM10.125 3.875C9.80859 3.91016 9.49219 3.94531 9.21094 4.01562C9.42188 4.29688 9.52734 4.64844 9.52734 5.03516C9.52734 5.94922 8.78906 6.6875 7.875 6.6875C7.48828 6.6875 7.13672 6.58203 6.85547 6.37109C6.78516 6.65234 6.75 6.96875 6.75 7.25C6.75 9.11328 8.26172 10.625 10.125 10.625C11.9883 10.625 13.5 9.11328 13.5 7.25C13.5 5.38672 11.9883 3.91016 10.125 3.91016V3.875Z"
                                    fill="#626262" />
                            </svg>
                        </div>
                        <div class="info__password">
                            <p>Գաղնաբառը գրել միայն լատինատառ, այն պետք է պարունակի 8-20 նիշ լինի մեծատառ և փոքրատառ
                                ունենա թվանշան ու սիմվոլ:</p>
                            <p>Օրինակ` <span class="example">Kadr.am001</span> </p>
                        </div>
                        <p class="errorText">{{ $errors->first('password') }}</p>
                    </div>
                    <div class="comfPassword">
                        <input type="password" name="comfPassword" placeholder="Կրկնեք գաղտնաբառը*">
                        <p class="errorText">{{ $errors->first('comfPassword') }}</p>
                    </div>
                    <div class="phone__number">
                        <div class="phone__input">
                            <input type="tel" name="phoneNumber" value="{{ old('phoneNumber') }}"
                                placeholder="077123456 *">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M0 16.12H16V0.12H0V16.12Z" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_1552_1673" transform="scale(0.00625)" />
                                    </pattern>
                                    <image id="image0_1552_1673" width="160" height="160"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </div>
                        <p class="errorText">{{ $errors->first('phoneNumber') }}</p>
                    </div>
                    <div class="radio__years">
                        <p>Գործունեության ժամանակահատվածը</p>
                        <div class="radio__age">
                            <div>
                                <input type="radio" name="workExp" value="Մինչև 1տ." checked id="upToOneYearExp">
                                <label for="upToOneYearExp">Մինչև 1տ.</label>
                            </div>
                            <div>
                                <input type="radio" name="workExp" value="1-3տ." id="oneToThreeYearsExp">
                                <label for="oneToThreeYearsExp">1-3տ.</label>
                            </div>
                            <div>
                                <input type="radio" name="workExp" value="3-5տ." id="threeToFiveYearsExp">
                                <label for="threeToFiveYearsExp">3-5տ.</label>
                            </div>
                            <div>
                                <input type="radio" name="workExp" value="5 և ավել տ." id="fiveYearsOrMoreExp">
                                <label for="fiveYearsOrMoreExp">5 և ավել տ.</label>
                            </div>
                        </div>
                    </div>
                    <div class="genderBox">
                        <p>Սեռը</p>
                        <div class="gender">
                            <div>
                                <input type="radio" name="gender" value="Արական" checked id="maleGender">
                                <label for="maleGender">Արական</label>
                            </div>
                            <div>
                                <input type="radio" name="gender" value="Իգական" id="femaleGender">
                                <label for="femaleGender">Իգական</label>
                            </div>
                        </div>
                    </div>
                    <select name="countries" id="country">
                        <option value="">Երկիր</option>
                        <option value="Հայաստան">Հայաստան</option>
                        <option value="Վրաստան">Վրաստան</option>
                        <option value="Ռուսաստան">Ռուսաստան</option>
                        <option value="ԱՄՆ">ԱՄՆ</option>
                        <div>Ճապոնիա</div>
                    </select>
                    <p class="errorText">{{ $errors->first('countries') }}</p>
                    <select name="cities" id="city">
                        <option value="">Քաղաք</option>
                        <option value="Երևան">Երևան</option>
                        <option value="Սևան">Սևան</option>
                        <option value="Գորիս">Գորիս</option>
                        <option value="Կապան">Կապան</option>
                    </select>
                    <p class="errorText">{{ $errors->first('cities') }}</p>
                    <div class="rule">
                        <div class="rule__checkbox">
                            <input type="checkbox" name="rules" id="agreeToTherules">
                        </div>
                        <div class="rule__label">
                            <label for="agreeToTherules">
                                <a href="{{ url('/show-rules') }}">Համաձայն եմ հայտարարությունների հրապարակման
                                    կանոններին, նաև Kadr.am կայքի օգտագործման համաձայնագրին:</a>
                            </label>
                        </div>
                    </div>
                    <div class="form__button">
                        <button disabled="true" class="btn">Գրանցվել</button>
                    </div>
                </form>
                <div class="social__networks">
                    <h3>Մուտք սոց. ցանցերի միջոցով</h3>
                    <div class="networks">
                        <div class="network__google">
                            <a href="#">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.0006 41C9.95379 41 1 32.0462 1 21.0006C1 9.95379 9.95379 1 21.0006 1C32.0462 1 41 9.95379 41 21.0006C41 32.0462 32.0462 41 21.0006 41Z"
                                        stroke="black" stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M22.9871 20.9899H15.2121L15.2212 23.2538H20.4639C19.8441 26.0099 17.9307 27.7012 15.3617 27.7012C11.9923 27.7012 9.26162 24.9245 9.26162 21.5001C9.26162 18.0747 11.9923 15.2988 15.3617 15.2988C16.9637 15.2988 18.4201 15.9272 19.5081 16.9541L21.2294 15.446C19.7196 13.9335 17.6483 13 15.3614 13C10.7429 13 7 16.8048 7 21.5001C7 26.1943 10.7429 30 15.3614 30C19.7963 30 23 26.5611 23 21.867L22.9868 20.9902L22.9871 20.9899Z"
                                        fill="black" />
                                    <path
                                        d="M35 20.4115H31.5882V17H29.4115V20.4115H26V22.5885H29.4115V26H31.5882V22.5885H35V20.4115Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="network__facebook">
                            <a href="#">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.0005 41C9.95402 41 1 32.0462 1 21.0006C1 9.95379 9.95402 1 21.0005 1C32.046 1 41 9.95379 41 21.0006C41 32.0462 32.046 41 21.0005 41V41Z"
                                        stroke="black" stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M18.8159 30H22.3054V21.4277H24.741L25 18.5576H22.3054C22.3054 18.5576 22.3054 17.4862 22.3054 16.9231C22.3054 16.246 22.444 15.9786 23.1114 15.9786C23.6478 15.9786 25 15.9786 25 15.9786V13C25 13 23.0091 13 22.5832 13C19.9864 13 18.8156 14.1216 18.8156 16.269C18.8156 18.1392 18.8156 18.5574 18.8156 18.5574H17V21.4636H18.8156V29.9998L18.8159 30Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="network__instagram">
                            <a href="#">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.9995 41C9.95401 41 1 32.0462 1 21.0006C1 9.95379 9.95401 1 20.9995 1C32.0451 1 41 9.95379 41 21.0006C41 32.0462 32.0451 41 20.9995 41V41Z"
                                        stroke="black" stroke-width="2" stroke-miterlimit="10" />
                                    <rect x="12.4287" y="12.4286" width="17.1429" height="17.1429"
                                        rx="4" fill="black" />
                                    <circle cx="21" cy="21" r="3.5" stroke="white" />
                                    <path
                                        d="M27.2857 15.8571C27.2857 16.4878 26.7748 16.9999 26.1427 16.9999C25.5122 16.9999 25 16.4881 25 15.8571C25 15.2256 25.512 14.7142 26.1427 14.7142C26.7745 14.7142 27.2857 15.2254 27.2857 15.8571Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="network__twitter">
                            <a href="#">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.0005 41C9.95491 41 1 32.0462 1 21.0006C1 9.95379 9.95491 1 21.0005 1C32.046 1 41 9.95379 41 21.0006C41 32.0462 32.046 41 21.0005 41Z"
                                        stroke="black" stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M11.0003 28.0711C12.9068 29.2892 15.1718 30 17.6043 30C25.6029 30 30.1222 23.2699 29.8511 17.2334C30.6922 16.6289 31.423 15.8729 32 15.0115C31.2275 15.353 30.3968 15.5839 29.5259 15.6872C30.4155 15.1571 31.098 14.3162 31.4201 13.3126C30.5872 13.8048 29.6647 14.1626 28.6851 14.3544C27.898 13.5208 26.7786 13 25.5387 13C22.7581 13 20.7141 15.5839 21.3426 18.2691C17.7617 18.0907 14.5866 16.3814 12.4623 13.7849C11.3335 15.7138 11.8762 18.2382 13.7951 19.5149C13.0888 19.4925 12.4242 19.2986 11.8431 18.9775C11.7965 20.9666 13.2265 22.8254 15.2989 23.2399C14.6918 23.4051 14.028 23.4422 13.354 23.3131C13.9005 25.0193 15.4923 26.2593 17.3784 26.2943C15.5668 27.7086 13.2857 28.34 11 28.0708L11.0003 28.0711Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="user__page">
                        <p>ՈՒնե՞ք անձնական էջ</p>
                        <span></span>
                        <a href="{{ url('/login') }}">Մուտք</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @vite(['resources/js/jquery-3.6.1.min.js', 'resources/js/registration.js'])
</body>

</html>
